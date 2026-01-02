<div class="w-full sm:w-80 relative bg-white border rounded-lg shadow-sm divide-y divide-gray-200 {{ $plan['popular'] ? 'border-secondary' : 'border-gray-200' }}">
    <div class="p-6">
        @if($plan['popular'])
            <p class="absolute top-0 ltr:right-6 rtl:left-6 py-1.5 px-4 bg-secondary rounded-full text-sm font-semibold uppercase tracking-wide text-white transform -translate-y-1/2">{{ __('Most Popular') }}</p>
        @endif
        <div class="flex gap-2 items-center justify-start">
            <h2 class="text-lg leading-6 font-semibold text-primary">{{ $plan['name'] }}</h2>
            @if($plan['has_discount'])
                <div class="flex items-center justify-center bg-green-100 rounded">
                    <p class="font-mono text-sm leading-loose text-center text-green-700 px-2 uppercase">{{ __('Save') }} {{ $plan['discount_percentage'] }}</p>
                </div>
            @endif
        </div>
        <p class="mt-4 text-gray-500">{{ $plan['description'] }}</p>
        <p class="mt-6">
            @if($plan['has_discount'])
                <span class="text-3xl font-bold text-gray-800"><span class="line-through">{{ $plan['price'] }}</span> {{ $plan['discounted_price'] }}</span>
            @else
                <span class="text-3xl font-bold text-gray-800">{{ $plan['price'] }}</span>
            @endif
           
        </p>
           
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScs9gtMg5V3w24zkQ6LnsBJbEN-gX5kqN-0PqET2ALjrcZywg/viewform?usp=sharing" class="mt-4 block w-full bg-gray-800 border bg-primary rounded-md py-2 font-semibold text-white text-center hover:opacity-90">
            {{ __('Buy Plan') }}
        </a>
    </div>
   
</div>
