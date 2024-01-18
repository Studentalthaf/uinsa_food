@extends('frontend.customer.layouts.menu')
@include('frontend.include.header')
@section('menu')

 <!--Page header & Title-->
<section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Shopping  Cart</h2>
                        <p>UINSA FOOD</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @php $total = 0 @endphp
        @if(session('order'))
            @foreach(session('order') as $id => $order_detail)
                
                <tr rowId="{{ $id }}">
                    <td data-th="Menu">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $order_detail['menu_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">Rp. {{ $order_detail['menu_price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" class="edit-cart-info" value="{{ $order_detail['quantity'] }}" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $order_detail['subtotal'] }} </td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="icon-trash"></i></a>
                    </td>
                    @php
                    $total += $order_detail['subtotal'];
                    @endphp
                </tr>    
            @endforeach
        @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </tbody>
    
    <tfoot>
        <tr>
            <td colspan="5" class="">
                <strong>Total: Rp. {{ $total }}</strong>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/menu') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
  

@section('scripts')
<script type="text/javascript">
  
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        var quantity = ele.val();

        $.ajax({
            url: '{{ route('update.sopping.order') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
                quantity: quantity,
            },
            success: function (response) {
               window.location.reload(true);
            }
        });
    });
  
    $(".delete-product").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.menu') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection