@extends('backend.templates.app')
@section('title')
    Item Out
@endsection
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info!</strong>&nbsp;&nbsp;{!! Session::get('message') !!}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>Item Code</th>
            <th><b>Item Name</b></th>
            <th class="text-center"><b>Qty</b></th>
            <th class="text-center">Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{!! $product->code !!}</td>
                <td>{!! $product->name !!}</td>
                <td class="text-center">{!! $product->qty !!}</td>
                <td class="text-center">{!!  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created))->diffForHumans() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('script')
@endsection