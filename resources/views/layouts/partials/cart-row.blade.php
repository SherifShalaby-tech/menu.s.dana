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
<div class="flex pb-8 mt-12">
    <div class="flex-1">
    </div>
    <div class="flex-1 text-center mt-6 cart_items">
        <a href="{{ action('CartController@view') }}" class=" text-center">
            <button class="bg-red text-white font-semibold relative  rounded-full text-2xl"
                style="height: 70px; width: 70px;">
                <span class="item_count text-sm text-dark absolute left-8 top-5" style="padding-left: 25px;"
                    style="margin-top: 2px;">{{ $cart_count }}</span><i
                    class="fa fa-lg fa-shopping-cart "></i></button>
        </a>
    </div>
    <div class="flex-1 text-right">
        <button class=" " id="goToTop" onclick="topFunction()">
            </button>
    </div>
</div>
