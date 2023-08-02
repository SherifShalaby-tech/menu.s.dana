@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
@section('content')
    @include('layouts.partials.product-header')

    <div class="container mx-auto mt-14 mb-14">
        <div class="flex flex-row flex-wrap">
            <div class="flex-1 xs:w-full lg:w-1/2 px-16 @if ($product->getMedia('product')->count() == 0) md:block xs:hidden @endif">

                <div class="flex flex-row items-center @if ($product->getMedia('product')->count() == 0) xs:hidden @endif">
                    <div class="block w-20 flex-3 md:block xs:hidden ">
                        <div class="owl-nav">


                        </div>
                    </div>
                    <div class="flex-1 ">
                        <div class="product-slider">
                            @foreach ($product->getMedia('product') as $image)
                                <img src="@if (!empty($image->getUrl())) {{ $image->getUrl() }}@else{{ asset('uploads/' . session('logo')) }} @endif"
                                    class="aspect-square" alt="" style="">
                            @endforeach
                        </div>
                    </div>
                    <div class="justify-center block w-20 flex-3 md:block xs:hidden">
                        <div class="owl-nav">
                          
                        </div>
                    </div>
                </div>


            </div>
            <div class="flex-1 xs:w-full lg:w-1/2">
                <div class="flex flex-col px-16 py-8 bg-white opacity-70">
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold">{{ $product->name }}</h3>
                        <h5 class="py-2 text-gray-600">{!! $product->product_details !!}</h5>
                    </div>
                    <div class="flex-1 pt-4">
                        <div class="flex flex-col">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold">
                                    @if (!empty($product->discount_value) && $product->discount_value > 0)
                                        <span
                                            class="mr-4 text-gray-600 strikethrough">{{ @num_format($product->sell_price) }}
                                            {{ session('currency')['code'] }} </span>
                                    @endif

                                    @foreach($product->variations->where('name','!=','Default') as $size)
                                    <span class="sell_price">{{ @num_format($size->default_sell_price - $product->discount_value) }}</span>
                                    @break
                                    @endforeach
                                    {{ session('currency')['code'] }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 pt-4">
                        <div class="flex flex-col">
                            <div class="flex-1">
                                @if($product->variations->where('name','!=','Default')->count()>=1)
                                    @foreach($product->variations->where('name','!=','Default') as $size)
                                        <input type="hidden" value="{{$size->id}}" name="variatioId" class="variatioId"/>
                                        @break
                                    @endforeach
                                @else
                                    @foreach($product->variations->where('name','Default') as $size)
                                        <input type="hidden" value="{{$size->id}}" name="variatioId" class="variatioId"/>
                                        @break
                                    @endforeach
                                @endif
                                @if($product->variations->where('name','!=','Default')->whereNotNull('size_id')->count()>0)
                                    <select class="custom-select" id="size_id" required style="background-color: rgb(204, 191, 156);">
                                        {{-- <option value=""><small>choose size</small></option> --}}
                                        @foreach($product->variations->where('name','!=','Default') as $size)
                                            <option value="{{$size->id}}" data-price="{{ @num_format($size->default_sell_price - $product->discount_value) }}">{{$size->size->name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 pt-4">
                        <div class="flex flex-col">
                            <div class="flex-1">
                                <div class="flex flex-row">
                                    <button
                                        class="w-8 h-8 text-lg text-center border-2 rounded-full minus border-dark text-dark">-</button>
                                    <input type="quantity" value="1"
                                        class="w-16 text-center bg-transparent quantity focus:outline-none text-dark">
                                    <button
                                        class="w-8 h-8 text-lg text-center border-2 rounded-full plus border-dark text-dark">+</button>
                                </div>
                                <div class="flex">
                                    <span id="addToCart" style="cursor:pointer"
                                        class="px-4 py-2 mt-4 font-semibold text-white rounded-lg add_to_cart_btn bg-red ">@lang('lang.add_to_cart')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.cart-row')
    </div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script>
        $(document).on('click', '.plus', function() {
            let quantity = __read_number($('.quantity'));
            $('.quantity').val(quantity + 1);
            $('.quantity').change();
        })
        $(document).on('click', '.minus', function() {
            let quantity = __read_number($('.quantity'));
            if (quantity > 1) {
                $('.quantity').val(quantity - 1);
                $('.quantity').change();
            }
        })
        $(document).on('change', '.quantity', function() {
            $.ajax({
                type: "GET",
                url: "/cart/update-product-quantity/" + "{{$product->id}}" + "/" +$(this).val(),
                success: function (response) {
                }
            });
        })

        $(document).ready(function() {
            var slider = tns({
                container: ".product-slider",
                items: 1,
                // slideBy: "page",
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
        $(document).on('change','#size_id',function(){
            let variatioId=$(this).val();
            let price = $(this).find("option:selected").attr("data-price");
            $('.variatioId').val(variatioId);
            $('.sell_price').text(price)
        });
        $(document).on('click','#addToCart',function(){
            var sizeId=$('#size_id').val();
            var variationId=$('.variatioId').val();
            var quantity=$('.quantity').val();
            $.ajax({
                type: "GET",
                url: '/cart/add-to-cart/' + variationId+"?quantity="+quantity,
                // data: "data",
                dataType: "json",
                success: function (response) {
                    if (response.status.success) {
                        swal.fire("", response.status.msg, "success");
                    }else{
                        swal.fire("@lang('lang.error')!", response.status.msg, "error");
                    }

                    $('.cart_items_page').load(document.URL +  ' .cart_items_page');
                    $('.cart_items').load(document.URL +  ' .cart_items');
                    $('.total').load(document.URL +  ' .total');
                }
            });
        });
    </script>
@endsection
