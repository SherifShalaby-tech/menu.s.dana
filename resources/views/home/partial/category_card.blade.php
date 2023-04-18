

<div class="single-food">
    <div class="food-img">
        <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
            <img src="{{ !empty($category->getFirstMediaUrl('product_class')) ? $category->getFirstMediaUrl('product_class') : asset('uploads/' . session('logo')) }}" 
            class="img-fluid" alt="">
        </a>
    </div>
    <div class="food-content">
        <div class="txt-center">
            <a href="{{ action('ProductController@getProductListByCategory', $category->id) }}">
                <h5>{{ $category->name }}</h5>
            </a>
        </div> 
    </div>
</div>

