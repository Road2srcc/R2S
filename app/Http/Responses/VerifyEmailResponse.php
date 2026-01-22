<?php

namespace App\Http\Responses;

class VerifyEmailResponse
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return redirect()->route('login')->with('status', 'Your email has been verified! You can now log in.');
    }
}
