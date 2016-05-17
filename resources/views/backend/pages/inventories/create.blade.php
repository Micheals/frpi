@extends('backend.templates.app')
@section('title')
    Insert new Product Inventory
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
    </style>
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
	<a href="/backend/in-stock/">Return inventory</a>
    @if(Session::has('message'))
            {!! Session::get('message') !!}
        @endif
    {!! Form::open(array('id'=>'form','url'=>'/backend/in-stock/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    	@include('backend.pages.inventories.forms._form')
    	<button class="btn btn-default btn-sm"><i class="fa fa-save"></i>&nbsp;Submit</button>
    {!! Form::close() !!}
@endsection
@section('script')

@endsection