{{--<div class="flex flex-row items-center w-full text-center bg-center bg-no-repeat bg-cover"
    style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ asset('uploads/' . session('breadcrumb_background_image')) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif')">
    <div class="w-full">
        <div class="flex flex-row">
            <div class="text-4xl font-bold text-left text-white flex-3">
                @include('layouts.partials.language_dropdown')
            </div>
            <div class="flex-1 mt-8 text-center">
                <p class="text-4xl font-bold text-white">@lang('lang.about_us')</p>
            </div>
            <div class="items-end w-48 flex-3">
                @include('layouts.partials.social_icons')
            </div>
        </div>

        <div class="container mx-auto mt-16">
            <div class="flex justify-end w-full">
                <a class="px-2 text-xl font-semibold text-white"
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                    class="px-1 text-xl font-semibold text-white">-</span>
                @if (request()->segment(2) == 'about-us')
                    <a class="px-2 text-xl font-semibold text-white"
                        href="{{ action('AboutUsController@index') }}">@lang('lang.about_us')</a>
                @endif

            </div>
        </div>
    </div>
</div> --}}

<header class="header-area header-area2">
    @include('layouts.partials.navbar')
</header>



<section class="text-center banner-area banner-area2 menu-bg" style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif');" >

        <h2 class="container text-white text-start"> {{ App\Models\System::getProperty('site_title') }}</h2>

            <!-- <div class="col-lg-12">

                <p class="pt-2"><i>
                    <a class="px-2 text-xl font-semibold text-white"
                        href="{{ action('HomeController@index') }}">@lang('lang.home')</a> <span
                        class="px-1 text-xl font-semibold text-white">-</span>
                    @if (request()->segment(2) == 'about-us')
                        <a class="px-2 text-xl font-semibold text-white"
                            href="{{ action('AboutUsController@index') }}">@lang('lang.about_us')</a>
                    @endif
                </i></p>
            </div> -->
</section>
