

    <div class="container">
        <div class="row ">
            <div class="col-lg-2 col-4">
                <div class="logo-area">
                    <img src="{{ images_asset(asset('uploads/' . session('logo'))) }}" alt="logo" style="height: 57px; border-radius: 10px;">
                </div>
            </div>
            <div class="col-lg-10 col-8">

                <div class="main-menu main-menu2">
                    <ul class="n-flex">
                        <li><a href="{{ action('HomeController@index') }}">@lang('lang.home')</a></li>
                        <li><a href="{{ action('AboutUsController@index') }}">@lang('lang.about_us')</a></li>
                        <li><a href="#" class="n-flex">
                                <img class="h-5 w-5 text-gray-800 @if(app()->getLocale() == 'ar')invisible @endif" src="{{ asset('images/' . app()->getLocale() . '-flag.png') }}" alt="" >
                                <p class="ps-5">
                                    @lang('lang.'.app()->getLocale())
                                </p>
                                <i class="text-base fa fa-chevron-down "></i>
                            </a>
                            @include('layouts.partials.language_dropdown')
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
