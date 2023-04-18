@extends('layouts.app')

@section('content')
@include('layouts.partials.category-header')

<section class="food-area section-padding" style="background-position: top right;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    
                </div>
            </div>
        </div>

<div class="row">
            @foreach ($products as $product)
                @include('home.partial.product_card', ['product' => $product])
            @endforeach
</div>
    </div>
    


    @include('layouts.partials.cart-row')
</section>



@endsection

@section('javascript')
<script>
    // $(document).on('click', '.product_card', function(e){
    //     if(!$(e.target).is('i.cart_icon') && !$(e.target).is('button.cart_button *')){
    //         window.location.href = $(this).data('href');
    //     }
    // })
    $(document).on('click', '.cart_button, .cart_icon', function(){
        window.location.href = base_path + '/cart/add-to-cart/' + $(this).data('product_id');
    })
</script>

@endsection
