<footer class="footer-area">
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="single-widget single-widget1" style="display: flex;align-items: center;">
                        <img src="{{ images_asset(asset('uploads/' . session('logo'))) }}" alt="logo" style="width: 110px; height:110px; margin: auto 30px; border-radius: 10px;"> 
                                    
                                        <div class="d-flex">
                                            <div class="into-icon"> 
                                            </div> 
                                            <div class="info-text">
                                                 <h5 class="mb-4"> @lang('lang.about_us')</h5> 
                                                    <h6>
                                                         <span class="prime-color">  
                                                            {{ App\Models\System::getProperty('about_us_footer') }} 
                                                         </span>
                                                    </h6>
                                                    <br>
                                                    <p class="text-white text-center">
                                                        <a href="{{ action('AboutUsController@index') }}"
                                                            class="bg-red text-white md:text-base xs:text-sm font-bold px-4 py-2 border-2 border-white rounded-lg">@lang('lang.show_more')
                                                        </a>
                                                    </p>
                                            </div>
                                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-widget single-widget2 my-5 my-md-0">
                        <h5 class="mb-4">@lang('lang.contact_us')</h5>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-text">
                                <p>
                                    <a class="cl7" style="color: #777;"  href="https://maps.google.com/maps?q={{ App\Models\System::getProperty('address') }}" target="_blank"> {{ App\Models\System::getProperty('address') }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <p>{{ App\Models\System::getProperty('phone_number_1') }}</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="info-text">
                                <p>{{ App\Models\System::getProperty('whatsapp') }}</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="info-text">
                                <p> {{ App\Models\System::getProperty('system_email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
     <div class="footer-copyright" style="padding: 0;background: #131230;">
            <div class="row">
                    <div class="col-lg-8 col-md-8"> </div>
                <div class="col-lg-4 col-md-4" style="display: inline-flex;padding-left: 0;">
                    <div class="social-icons" style="font-size: large;">
                        <ul>
                            <li class="no-margin">@lang('lang.Follow_Us')</li>
                            @include('layouts.partials.social_icons')
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    
    
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <span> 
                        <a href="https://sherifshalaby.tech/">
                            <p class="text-white text-center">@lang('lang.footer_copyright')</p>
                        </a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</footer>
