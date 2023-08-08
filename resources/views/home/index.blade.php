@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@section('content')


<div class="pt-5 bg-for-home">
<section class="welcome-area section-padding2 ">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-12 align-self-center justify-content-center " style="    display: flex;justify-content: flex-end;">
                <div class="p-4 mt-5 mt-md-0 txt-center border-radius" style="background-color: #dbdbdb91;">
                    <h5 ><span class="style-change"></span>@lang('lang.about_us')</h5>
                    <h4 class="pt-4 pb-4" style="color:#131230; padding:10px 10px;">  {{ App\Models\System::getProperty('about_us_footer') }} </h4>
                    <a href="{{ action('AboutUsController@index') }}" class="mt-3 template-btn border-radius ">@lang('lang.show_more')</a>
                </div>
            </div>
        </div>
    </div>
</section>



    <div class="mx-auto mt-14 food-area section-padding food-area-home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top">
                    <h3 style="text-align: center;  "><span class="style-change" >@lang('lang.categories')</span> <br>  </h3>
                </div>
            </div>
        </div>
        @if (!empty($homepage_category_carousel))

            <div class="flex flex-row items-center">
                <div class="w-48 flex-3 md:block xs:hidden ">
                    <div class="owl-nav">

                    </div>
                </div>
                <div class="flex-1">
                    <div class="category-slider">
                        @foreach ($categories as $category)
                            <div class="text-center md:w-1/4 xs:w-1/2 xl:p-8 lg:p-2 md:p-2 xs:p-1">


                                <div class="single-food col-md-3">
                                    <div class="food-img" style="    aspect-ratio: 1/1;">
                                        <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
                                            <img src="{{images_asset($category->getFirstMediaUrl('product_class')) }}"
                                            class="img-fluid "
                                            alt="category-1"
                                            >
                                        </a>
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
                                                <h6>{{ $category->name }}  </h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-48 flex-3 md:block xs:hidden ">
                    <div class="owl-nav">

                    </div>
                </div>
            </div>
        @else
            <div class="container w-full mx-auto mt-5">
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
</div>
    @if(count($offers_array) > 0)
        <div class="container mx-auto">
            <div class="flex">
                <div class="flex-1">
                    <div class="w-1/2 h-10 mx-auto text-center text-white bg-red mt-14 rounded-xl">
                        <h3 class="py-1 text-2xl font-semibold text-white">@lang('lang.promotions')</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-14">
            <div class="w-full p-4 mx-auto">
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
                        class="py-1 font-semibold text-white rounded-md bg-red md:px-4 xs:px-8 md:mr-16 md:mt-8">@lang('lang.show_more')</a>
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
