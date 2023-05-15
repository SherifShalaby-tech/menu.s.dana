@extends('layouts.app')
@php
$locale_direction = LaravelLocalization::getCurrentLocaleDirection();
@endphp
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
                        <div style="height: 500px;" class="@if ($locale_direction == 'rtl') flex-row-reverse @else flex-row @endif xs:w-full lg:w-1/2  text-dark pt-10">
                            <div class="flex bg11 pt-5 " >
                                <div class="flex-1  @if ($locale_direction == 'rtl') text-right pr-3 @else text-left pl-3 cl5 @endif" >
                                    <h4 style="text-shadow: 1px 1px #bdb9b9;" class="text-dark">
                                        {!! $content !!}
                                    </h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.cart-row')
    </section>

@endsection

@section('javascript')
@endsection
