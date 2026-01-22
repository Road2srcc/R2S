<?php
/**
 * File name: web.php
 * Last modified: 20/07/21, 2:28 PM
 * Author: NearCraft - https://codecanyon.net/user/nearcraft
 * Copyright (c) 2021
 */

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AppInstallController;
use App\Http\Controllers\WebHookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('welcome');

// Overriding default Fortify verify route to allow access for unverified (blocked) users
Route::get('/email/verify/{id}/{hash}', function (Request $request) {
    $user = User::findOrFail($request->route('id'));

    if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
        throw new \Illuminate\Auth\Access\AuthorizationException;
    }

    if ($user->markEmailAsVerified()) {
        event(new Verified($user));
    }

    return redirect()->route('login')->with('status', 'Your email has been verified! You can now log in.');
})->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

Route::get('/explore/{category}', [SiteController::class, 'explore'])->name('explore');
Route::get('/pricing', [SiteController::class, 'pricing'])->name('pricing');

Route::get('set-locale/{locale}', [HomeController::class, 'setLocale'])->name('locale');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('home');

Route::get('install-success', [AppInstallController::class, 'onSuccessfulInstall'])->name('install_success');
Route::get('migrate', [AppInstallController::class, 'migrate'])->name('migrate');
Route::get('run-migrations', [AppInstallController::class, 'runMigrations'])->name('run_migrations');

/*
|--------------------------------------------------------------------------
| Webhook Routes
|--------------------------------------------------------------------------
*/
Route::post('webhooks/razorpay', [WebHookController::class, 'razorpay'])->name('webhooks.razorpay');
Route::post('webhooks/stripe', [WebHookController::class, 'stripe'])->name('webhooks.stripe');

