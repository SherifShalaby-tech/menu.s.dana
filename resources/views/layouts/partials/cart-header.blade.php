{{--<div class="w-full flex flex-row bg-no-repeat bg-center bg-cover text-center items-center"
    style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ asset('uploads/' . session('breadcrumb_background_image')) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif')">
    <div class="w-full">
        <div class="flex flex-row">
            <div class="flex-3 text-white text-4xl font-bold text-left">
                @include('layouts.partials.language_dropdown')
            </div>
            <div class="flex-1 mt-8 text-center">
                <p class="font-bold text-4xl text-white">@lang('lang.cart')</p>
            </div>
            <div class="flex-3 w-48 items-end">
                @include('layouts.partials.social_icons')
            </div>
        </div>

        <div class="container mx-auto mt-16">
            <div class="flex justify-end w-full">
                <a class="text-xl text-white font-semibold px-2"
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                    class="text-xl text-white font-semibold px-1">-</span>
                @if (request()->segment(2) == 'cart')
                    <a class="text-xl text-white font-semibold px-2"
                        href="{{ action('CartController@view') }}">@lang('lang.cart')</a>
                @endif

            </div>
        </div>
    </div>
</div> --}}


<header class="header-area header-area2">
    @include('layouts.partials.navbar')
</header>


<section class="banner-area banner-area2 menu-bg text-center"
 style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif');" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               
                <p class="pt-2"><i>
                    <a class="text-xl text-white font-semibold px-2"
                        href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                        class="text-xl text-white font-semibold px-1">-</span>
                    @if (request()->segment(2) == 'cart')
                        <a class="text-xl text-white font-semibold px-2"
                            href="{{ action('CartController@view') }}">@lang('lang.cart')</a>
                    @endif
                </i></p>
            </div>
        </div>
    </div>
</section>