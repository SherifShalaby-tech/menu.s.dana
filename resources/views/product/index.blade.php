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
    // $(document).on('click', '.cart_button, .cart_icon', function(){
    //     window.location.href = base_path + '/cart/add-to-cart/' + $(this).data('product_id');
    // })
    $(document).on('click', '.cart_button', function(){
        var sizeId=$(this).closest('.productCard').find('input[name=size]').val();
        var product_id=$(this).data('product_id');
        $.ajax({
            type: "GET",
            url: '/cart/add-to-cart/' + $(this).data('product_id')+'/'+sizeId,
            // data: "data",
            dataType: "json",
            success: function (response) {
                if (response.status.success) {
                    swal.fire("", response.status.msg, "success");
                }else{
                    swal.fire("@lang('lang.error')!", response.status.msg, "error");
                }
            }
        });


        // window.location.href = base_path + '/cart/add-to-cart/' + $(this).data('product_id')+'/'+sizeId;
    })
    // })
    $(document).on('click', '.changeSize', function(e){
        e.preventDefault();
        var price=$(this).data('price');
        var size_id=$(this).data('size_id');
        $(this).parent().parent().parent().siblings().find('.sell-price').text(price);
        $(this).closest('.productCard').children('input[name=size]').val(size_id);
        var size=$(this).data('size_name');
        var s=$(this).parent().parent().parent().siblings().find('.size-menu').text(size);
        // __write_number(size,)
        console.log($('input[name=size]').val())
        // var size_id=$(this).data('size_id');
    });
</script>

@endsection
