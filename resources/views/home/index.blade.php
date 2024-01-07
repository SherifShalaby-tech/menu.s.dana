@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@section('content')

<section class="welcome-area section-padding2  ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-12 align-self-center" style="    display: flex;justify-content: flex-end;">
                <div class="  mt-5 mt-md-0  txt-center">
                    <h3 style="background-color: #dbdbdb91;"><span class="style-change"></span>@lang('lang.about_us')</h3>
                    <h5 class="pt-4 bg-black opacity-70  " style="color:#fff; padding:10px 10px;">  {{ App\Models\System::getProperty('about_us_footer') }} </h5>
                    <a href="{{ action('AboutUsController@index') }}" class="template-btn mt-3">@lang('lang.show_more')</a>
                </div>
            </div>
        </div>
    </div>
</section>



    <div class=" mx-auto mt-14 food-area section-padding food-area-home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top">
                    <h3 style="text-align: center; "><span class="style-change bg-black opacity-70">@lang('lang.categories')</span> <br>  </h3>

                </div>
            </div>
        </div>
        @if (!empty($homepage_category_carousel))

            <div class="flex flex-row items-center">
                <div class="flex-3 w-48 md:block xs:hidden ">
                    <div class="owl-nav">
                        <!-- <div class="prev-nav">
                            <img src="{{ asset('images/slider-arrow-left.png') }}" alt="" class="m-auto">
                        </div> -->
                    </div>
                </div>
                <div class="flex-1 w-80">
                    <div class="category-slider">
                        @foreach ($categories as $category)
                            <div class="text-center md:w-1/4 xs:w-1/3 xl:p-8 lg:p-2 md:p-2 xs:p-1">


                                <div class="single-food">
                                    <div class="food-img">
                                        <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
                                            <img src="{{images_asset($category->getFirstMediaUrl('product_class')) }}"
                                            class="img-fluid"
                                            alt="category-1">
                                        </a>
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
                                                <h5>{{ $category->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex-3 w-48 md:block xs:hidden ">
                    <div class="owl-nav">
                        <!-- <div class="next-nav">
                            <img src="{{ asset('images/slider-arrow-right.png') }}" alt="" class="m-auto">
                        </div> -->
                    </div>
                </div>
            </div>
        @else
            <div class="w-full mx-auto p-4">
                <div class="row">
                    @foreach ($categories as $category)
                        @include('home.partial.category_card', [
                            'category' => $category,
                        ])
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    </div>
    @if(count($offers_array) > 0)
        <div class="container mx-auto">
            <div class="flex">
                <div class="flex-1">
                    <div class="w-1/2 h-10 bg-red text-white mx-auto text-center mt-14 rounded-xl">
                        <h3 class="text-2xl text-white font-semibold py-1">@lang('lang.promotions')</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-14">
            <div class="w-full mx-auto p-4">
                <div class="grid xs:grid-cols-3 md:grid-cols-4 xs:gap-2 md:gap-16 md:mt-12 xs:mt-6">
                    @foreach ($offers_array as $offer)
                        @if ($loop->index == 4)
                        @break
                    @endif
                    @include('home.partial.promotion_card', [
                        'offer' => $offer,
                    ])
                @endforeach
            </div>
        </div>

        @if (count($offers_array) != 0 && $offers_count > 4)
            <div class="container mx-auto">
                <div class="flex md:justify-end xs:justify-center">
                    <a href="{{ action('ProductController@getPromotionProducts') }}"
                        class="bg-red text-white font-semibold py-1 md:px-4 xs:px-8 rounded-md md:mr-16 md:mt-8">@lang('lang.show_more')</a>
                </div>
            </div>
        @endif
    @endif

    @include('layouts.partials.cart-row')
</div>
@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
@if (!empty($homepage_category_carousel))
    <script>
        $(document).ready(function() {
            var slider = tns({
                container: ".category-slider",
                items: 4,
                slideBy: "page",
                autoplay: false,
                mouseDrag: true,
                controls: false,
                nav: false,
                loop: true,
                swipeAngle: false,
            });

            document.querySelector(".next-nav").onclick = function() {
                slider.goTo("next");
            };
            document.querySelector(".prev-nav").onclick = function() {
                slider.goTo("prev");
            };
        });
    </script>
@endif
@endsection
