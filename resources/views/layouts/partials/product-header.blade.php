
<header class="header-area header-area2">
    @include('layouts.partials.navbar')
</header>


<section class="text-center banner-area banner-area2 menu-bg"
 style="height: 200px; background-image: url('@if(!empty(session('breadcrumb_background_image'))){{ images_asset(asset('uploads/' . session('breadcrumb_background_image'))) }}@else{{ asset('images/default-breadcrumb-bg.png') }}@endif');" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4><i>{{ $product->name }}</i></h4>
                <p class="pt-2"><i>
                    <a class="px-2 font-semibold text-white md:text-xl xs:text-sm"
                    href="{{ action('HomeController@index') }}">@lang('lang.home')</a>
                    <span class="px-1 font-semibold text-white md:text-xl xs:text-sm">-</span>
                    <a class="px-2 font-semibold text-white md:text-xl xs:text-sm"
                        href="{{ action('ProductController@getProductListByCategory', $product->category->id) }}">{{ $product->category->name }}</a>
                    <span class="px-1 font-semibold text-white md:text-xl xs:text-sm">-</span>
                    <a class="px-2 font-semibold text-white md:text-xl xs:text-sm"
                        href="{{ action('ProductController@show', $product->id) }}">{{ $product->name }}</a>
                </i></p>
            </div>
        </div>
    </div>
</section>
