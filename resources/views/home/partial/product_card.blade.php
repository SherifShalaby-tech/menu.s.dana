

    

        <div class="col-md-3 col-sm-6 col-6 productCard" style="margin-bottom: 10px;" >
            @foreach($product->variations as $size)
                <input type="hidden" value="{{$size->size_id}}" name="size"/>
                <input type="hidden" value="{{$size->id}}" name="variation"/>
                @break
            @endforeach
            <div class="single-food">
                <div class="food-img  product-img">
                    <a href="{{ action('ProductController@show', $product->id) }}">
                    <img src="{{ !empty($product->getFirstMediaUrl('product'))? $product->getFirstMediaUrl('product'): asset('uploads/' . session('logo')) }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <div>
                    <a href="{{ action('ProductController@show', $product->id) }}">
                         <!-- class d-flex justify-content-between -->
                        <h5>{{ Str::limit($product->name, 15) }}</h5>
                        </a>
                            <span class="style-change" style="display: flex; justify-content: space-between; align-items: center;">
                                @foreach($product->variations as $s)
                                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{$product->id}}" class="size-btn inline-flex items-center text-center  bg-gray-900 rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                    @if($s->size_id!==null)
                                    <span>
                                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                    </span>
                                    @endif 
                                    &nbsp;
                                    <span class="size-menu">{{$s->size->name}}</span>
                                    
                                        
                                        
                                </button>
                                
                                <!-- Dropdown menu -->
                                <div id="dropdownDotsHorizontal{{$product->id}}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                        @foreach($product->variations as $size)
                                            <li>
                                                <a data-size_id="{{$size->size_id}}" data-variation_id="{{$size->id}}"  data-size_name="{{$size->size->name}}" data-price="{{ @num_format($size->default_sell_price - $product->discount_value) }}"
                                                      class="changeSize block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$size->size->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <span>
                                    {{ session('currency')['code'] }}
                                    <span class="sell-price"> 
                                        {{ @num_format($s->default_sell_price - $product->discount_value) }}
                                    </span>
                                    
                                </span>
                              
                            @break
                            @endforeach 
                                <p style="text-align: center; margin-top: 0;margin-bottom: 0rem;">
                                    <button data-product_id="{{ $product->id }}" type="button" style="font-size: 30px;"
                                        class="text-red hover:bg-red hover:text-white transition-all  cart_button">
                                        <i class="fa md:text-xl xs:text-sm fa-cart-plus cart_icon"></i>
                                    </button>
                                </p>
                            </span>
                        </div>
                    

                </div>
            </div>
        </div>

