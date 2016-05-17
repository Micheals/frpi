@extends('frontend.templates.app')

@section('content')

<div class="container">
            <header class="page-header">
                <h1 class="page-title">Shopping Cart</h1>
            </header>
            <div class="row">
                <div class="col-md-10">
                    <table class="table table table-shopping-cart">
                        <thead>
                            <tr>
                                <th class="col-md-1">PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-right">PRICE</th>
                                <th class="col-md-1 text-center">QUANTITY</th>
                                <th class="text-right">TOTAL</th>
                                <th class="col-md-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $totalCart = 0;?>
                            @foreach($productCarts as $cart)
                                <tr>
                                    <td class="table-shopping-cart-img col-md-1">
                                        <a href="/shopping/product/{{$cart->product->id}}">
                                            <img src="{!! url($cart->product->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </td>
                                    <td class="table-shopping-cart-title"><a href="/shopping/product/{{$cart->product->id}}">{!! $cart->product->name !!}</a></td>
                                    <td id="price" class="text-right col-md-2">${!! number_format($cart->product->data->price,2) !!}</td>
                                    <td class="col-md-2">
                                        {!! Form::open(array('id'=>'form','url'=>'/shopping/product/update','method'=>'POST')) !!}
                                        {!! Form::hidden('id',$cart->id) !!}
                                            <input min="1" maxlength="3" id="quantity" name="quantity" class="number pull-left form-control text-center" type="number" value="{!! $cart->quantity !!}" />
                                            <button class="btn btn-default btn-xs form-control pull-right" type="submit"><small>Save</small></button>
                                        {!! Form::close() !!}
                                    </td>
                                    <td id="total" class="text-right col-md-2">$ <?php echo number_format(number_format($cart->product->data->price,2)*$cart->quantity,2); ?></td>
                                    <td class="col-md-1">
                                        {{--{!! Form::open(array('id'=>'form','url'=>'/shopping/product/delete','method'=>'POST')) !!}--}}
                                        {{--<button type="submit" class="close table-shopping-remove" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                                        {{--{!! Form::hidden('id',$cart->id) !!}--}}
                                        {{--{!! Form::close() !!}--}}
                                    </td>
                                </tr>
                                <?php $totalCart += number_format($cart->product->data->price,2)*$cart->quantity;?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="gap gap-small"></div>
                </div>
                <div class="col-md-2">
                    <ul class="shopping-cart-total-list">
                        <li><span>Subtotal</span><span class="text-right">${!! number_format($totalCart,2) !!}</span>
                        </li>
                        <li><span>Shopping</span><span class="text-right">Free</span>
                        </li>
                        <li ><span>Taxes</span><span class="text-right">$0</span>
                        </li>
                        <li><span>Total</span><span class="text-right">${!! number_format($totalCart,2) !!}</span>
                        </li>
                    </ul><a class="btn btn-primary" href="/shopping/checkout">Checkout</a>
                </div>
            </div>
            <ul class="list-inline">
                <li><a class="btn btn-default" href="/shopping/">Continue Shopping</a>
                </li>

            </ul>
        </div>
@stop