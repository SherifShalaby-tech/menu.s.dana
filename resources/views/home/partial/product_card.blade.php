

    

        <div class="col-md-3 col-sm-6 col-6" style="margin-bottom: 10px;">
            <div class="single-food">
                <div class="food-img  product-img">
                    <a href="{{ action('ProductController@show', $product->id) }}">
                    <img src="{{ !empty($product->getFirstMediaUrl('product'))? $product->getFirstMediaUrl('product'): asset('uploads/' . session('logo')) }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <a href="{{ action('ProductController@show', $product->id) }}">
                        <div> <!-- class d-flex justify-content-between -->
                            <h5>{{ Str::limit($product->name, 15) }}</h5>
                            <span class="style-change" style="display: flex; justify-content: space-between; align-items: center;">
                                {{ session('currency')['code'] }} {{ @num_format($product->sell_price - $product->discount_value) }} 
                                <p style="text-align: center; margin-top: 0;margin-bottom: 0rem;">
                                    <button data-product_id="{{ $product->id }}" type="button" style="font-size: 30px;"
                                        class="text-red hover:bg-red hover:text-white transition-all  cart_button">
                                        <i class="fa md:text-xl xs:text-sm fa-cart-plus cart_icon"></i>
                                    </button>
                                </p>
                            </span>
                        </div>
                    </a>

                </div>
            </div>
        </div>

