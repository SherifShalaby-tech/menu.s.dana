@extends('layouts.app')

@section('content')
    @include('layouts.partials.aboutus-header')

    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="{{asset('images/welcome-bg.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">@lang('lang.Welcome_To')</span> <br> {{ App\Models\System::getProperty('site_title') }}</h3>
                        <h5 class="pt-3"> {!! $content !!}</h5>
                       
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.cart-row')
    </section>

@endsection

@section('javascript')
@endsection
