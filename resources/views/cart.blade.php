@extends('layout')
@section('title', 'Cart')

@section('content')
<div class="container">
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        @if(session('cart'))
        @foreach(session('cart') as $id=>$details)
        <?php $total += $details['price'] * $details['quantity'] ?>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{$details['photo']}}" width="100" height="100" alt="..." class="img-responsive" /></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{$details['name']}}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">${{$details['price']}}</td>
            <td data-th="Quantity" id="qty">
                <input data-id={{$id}} type="number" min="1" class="form-control text-center quantity" value="{{$details['quantity']}}">
            </td>
            <td data-th="Subtotal" class="text-center">${{$details['price']*$details['quantity']}}</td>
            <td class="actions" data-th="">
                <!-- <button class="btn btn-info btn-sm update-cart" data-id={{$id}}><i class="fa fa-refresh"></i></button> -->
                <button class="btn btn-danger btn-sm remove-from-cart" data-id={{$id}}><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        @endforeach
        @endif

    </tbody>
    <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total ${{$total}}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/emshop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td><a href="{{ url('/pay') }}" class="btn btn-success" style="padding-left:20px;padding-right:20px"> Pay</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{$total}}</strong></td>
        </tr>
    </tfoot>
</table>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#qty input').change(function() {
            qty = $(this).val();
            id = $(this).attr('data-id');
            $.ajax({
                url: '{{url("update-cart")}}',
                method: "patch",
                data: {
                    _token: '{{csrf_token()}}',
                    id: id,
                    quantity: qty
                },
                success: function() {
                    location.reload();
                }
            });
        });

    // $('.update-cart').click(function(e) {
    //     e.preventDefault();
    //     var ele = $(this);
    //     $.ajax({
    //         url: '{{url("update-cart")}}',
    //         method: "patch",
    //         data: {
    //             _token: '{{csrf_token()}}',
    //             id:ele.attr("data-id"),
    //             quantity:parseInt(ele.parents("tr").find(".quantity").val())
    //         },
    //         success:function(response){
    //             window.location.reload();
    //         }
            
    //     });
    // });

    $('.remove-from-cart').click(function(e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure")){

        $.ajax({
            url: "{{url('remove-from-cart')}}",
            method: "delete",
            data: {
                _token: '{{csrf_token()}}',
                id:ele.attr("data-id")
            },
            success:function(response){
                window.location.reload();
            }
            
        });
    }
    });
    })

    
    // $(document).ready(function() {
    //     // update product quantity
    //     $('#qty input').change(function() {
    //         qty = $(this).val();
    //         id = $(this).attr('data-id');
    //         $.ajax({
    //             url: "/update",
    //             method: "patch",
    //             data: {
    //                 id: id,
    //                 quantity: qty
    //             },
    //             success: function() {
    //                 location.reload();
    //             }
    //         });
    //     });
    //     // delete product from cart
    //     $('.remove-from-cart').click(function() {
    //         id = $(this).attr('data-id');
    //         $.ajax({
    //             url: "/delete",
    //             type: "get",
    //             data: {
    //                 id: id
    //             },
    //             success: function() {
    //                 location.reload();
    //             }
    //         });
    //     });
    // });
</script>
@endsection