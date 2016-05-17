@extends('frontend.templates.app')

@section('content')


        <div class="container">
            <header class="page-header">
                <h1 class="page-title">Checkout Order</h1>
            </header>
            <p class="checkout-login-text">Sign in or Register to your Gshop profile to faster order checkout.</p>
            <div class="row row-col-gap" data-gutter="60">
                <div class="col-md-4">
                    <h3 class="widget-title">Order Info</h3>
                    <div class="box">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>QTY</th>
                                    <th>PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $totalCheckOut=0;?>
                                @foreach($checkOutProducts as $productCheckOut)
                                <tr>
                                    <td>{!! $productCheckOut->product->name !!}</td>
                                    <td class="text-center">{!! $productCheckOut->quantity !!}</td>
                                    <td class="text-right">${!! number_format(number_format($productCheckOut->product->data->price,2)*$productCheckOut->quantity,2) !!}</td>
                                </tr>
                                    <?php $totalCheckOut += number_format(number_format($productCheckOut->product->data->price,2)*$productCheckOut->quantity,2);?>
                                @endforeach
                                <tr>
                                    <td>Subtotal</td>
                                    <td></td>
                                    <td class="text-right">${!! $totalCheckOut !!}</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td></td>
                                    <td class="text-right">$0</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td class="text-right">${!! $totalCheckOut !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="widget-title">Billng Details</h3>
                    <form>
                        <div class="form-group">
                            <label>First &amp; Last Name</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" id="create-account-checkbox" />Create Gshop Profile</label>
                        </div>
                        <div id="create-account" class="hide">
                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input class="form-control" type="text" />
                            </div>
                            <hr />
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Zip/Postal</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" id="shipping-address-checkbox" />Ship to a Different Address</label>
                        </div>
                        <div id="shipping-address" class="hide">
                            <div class="form-group">
                                <label>Shipping Country</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Shipping City</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Zip/Postal</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Shipping Address</label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3 class="widget-title">Payment</h3>
                    <div>
                    <div class="cc-form">
                        <div class="clearfix">
                            <div class="form-group form-group-cc-number">
                                <label>Card Number</label>
                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text" /><span class="cc-card-icon"></span>
                            </div>
                            <div class="form-group form-group-cc-cvc">
                                <label>CVC</label>
                                <input class="form-control" placeholder="xxxx" type="text" />
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="form-group form-group-cc-name">
                                <label>Cardholder Name</label>
                                <input class="form-control" type="text" />
                            </div>
                            <div class="form-group form-group-cc-date">
                                <label>Valid Thru</label>
                                <input class="form-control" placeholder="mm/yy" type="text" />
                            </div>
                        </div>
                    </div><a class="btn btn-primary">Proceed Payment</a>
                    <div class="gap gap-small"></div>
                    <img src="img/paypal.png" alt="Image Alternative text" title="Image Title" />
                    <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p><a class="btn btn-primary">Pay With ePoints</a>
                    </div>
                </div>
            </div>
        </div>

       

@stop