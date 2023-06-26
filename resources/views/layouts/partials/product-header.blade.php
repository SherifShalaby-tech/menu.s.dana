
<header class="header-area header-area2">
    @include('layouts.partials.navbar')
</header>


<section class="banner-area banner-area2 menu-bg text-center"
 style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif');" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>{{ $product->name }}</i></h1>
                <p class="pt-2"><i>
                    <a class="md:text-xl xs:text-sm text-white font-semibold px-2"
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a>
                    <span class="md:text-xl xs:text-sm text-white font-semibold px-1">-</span>
                    <a class="md:text-xl xs:text-sm text-white font-semibold px-2"
                        href="{{ action('ProductController@getProductListByCategory', $product->category->id) }}">{{ $product->category->name }}</a>
                    <span class="md:text-xl xs:text-sm text-white font-semibold px-1">-</span>
                    <a class="md:text-xl xs:text-sm text-white font-semibold px-2"
                        href="{{ action('ProductController@show', $product->id) }}">{{ $product->name }}</a>
                </i></p>
            </div>
        </div>
    </div>
</section>