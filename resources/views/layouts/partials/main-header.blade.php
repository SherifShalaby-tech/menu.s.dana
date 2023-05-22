{{--<div class="w-full flex flex-row bg-center bg-no-repeat bg-cover text-center items-center"
    style="height: 542px; background-image: url('@if (!empty(session('home_background_image'))) {{ asset('uploads/' . session('home_background_image')) }}@else{{ asset('images/default-home-bg.png') }} @endif')">
    <div class="w-full">
        <div class="flex flex-row">
            <div class="flex-3 text-white text-4xl font-bold text-left w-48">
                @include('layouts.partials.language_dropdown')
            </div>
            <div class="flex-1">
            </div>
            <div class="flex-3 w-48 items-end">
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


<section class="banner-area text-center"  style="background-image: url('@if(!empty(session('home_background_image'))){{ images_asset(asset('uploads/' . session('home_background_image'))) }}@else{{ asset('images/default-page-bg.png') }}@endif')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-black opacity-70 p-4 animated fadeInDown" data-appear="fadeInDown" data-delay="800">
                
                <h1> @lang('lang.Discover_the')<span class="prime-color"> @lang('lang.flavors')</span>  
                <span class="style-change">@lang('lang.of') <br><span class="prime-color">  {{ App\Models\System::getProperty('site_title') }}</span> </span></h1>
            </div>
        </div>
    </div>
</section>