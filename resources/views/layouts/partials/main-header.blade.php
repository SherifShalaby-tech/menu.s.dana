@php
$locale_direction = LaravelLocalization::getCurrentLocaleDirection();
@endphp
{{--<div class="flex flex-row items-center w-full text-center bg-center bg-no-repeat bg-cover"
    style="height: 542px; background-image: url('@if (!empty(session('home_background_image'))) {{ asset('uploads/' . session('home_background_image')) }}@else{{ asset('images/default-home-bg.png') }} @endif')">
    <div class="w-full">
        <div class="flex flex-row">
            <div class="w-48 text-4xl font-bold text-left text-white flex-3">
                @include('layouts.partials.language_dropdown')
            </div>
            <div class="flex-1">
            </div>
            <div class="items-end w-48 flex-3">
                @include('layouts.partials.social_icons')
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <img src="{{ asset('uploads/' . session('logo')) }}" alt="logo"
                class="mx-auto md:w-56 md:h-56 xs:w-40 xs:h-40">

        </div>

    </div>
</div> --}}

<style>
    .fadeInDown {
  animation-name: fadeInDown;

}
.animated {
  animation-duration: 1s;
  animation-fill-mode: both;
   opacity: 0.7 !important;
}
</style>

<header class="header-area">
    @include('layouts.partials.navbar')
</header>


<section class="text-center banner-area"  style="background-image: url('@if(!empty(session('home_background_image'))){{ images_asset(asset('uploads/' . session('home_background_image'))) }}@else{{ asset('images/default-page-bg.png') }}@endif')">
    <div class="container">
        <div class="row">
            <div class="p-4 col-lg-12  animated fadeInDown @if ($locale_direction == 'rtl') @endif text-end" data-appear="fadeInDown" data-delay="800">

                <p class="header-text" style="text-shadow: 3px 3px #000;"><span class="text-white"> @lang('lang.welcome')</span>
                <span class="text-white style-change">@lang('lang.of') <br><span class="prime-color">  {{ App\Models\System::getProperty('site_title') }}</span> </span></p>
            </div>
        </div>
    </div>
</section>
