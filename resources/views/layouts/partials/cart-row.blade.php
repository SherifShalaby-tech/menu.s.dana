@php
$user_id = request()
    ->session()
    ->get('user_id');
$cart_count = 0;
if (!empty($user_id)) {
    $cart_collection = Cart::session($user_id)->getContent();
    $cart_count = $cart_collection->count();
}
@endphp

<div class="p-5 container-fluid food-area section-padding food-area-home">
        <div class="row">
            <div class="col-md-12">
                <div class="section-top">
                    <h3 style="text-align: center;  "><span class="style-change" >العربة</span> <br>  </h3>
                </div>
            </div>
        </div>
<div class="flex pb-8 mt-12">
    <div class="flex-1">
    </div>
    <div class="flex-1 mt-6 text-center cart_items">
        <a href="{{ action('CartController@view') }}">
            <button class="relative text-2xl font-semibold text-white rounded-full bg-red"style="height: 70px; width: 70px;">
                <span class="absolute text-sm item_count left-8 top-5" style="padding-left: 25px; margin-top: 2px;">
                {{ $cart_count }}</span>
                    <i class="fa fa-lg fa-shopping-cart "></i></button>
        </a>
    </div>
    <div class="flex-1 text-right">
        <button class="" id="goToTop" onclick="topFunction()">
            </button>
    </div>
</div>
