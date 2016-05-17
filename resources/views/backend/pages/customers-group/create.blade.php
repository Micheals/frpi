@extends('backend.templates.app')
@section('title')
    New Customer Group
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
    {!! Form::open(array('id'=>'form','url'=>'/shopping-frpi/backend/customers-group/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    <div class="page-title">
        <div class="title_left">
            <h3>Customers&nbsp;&nbsp;<small style="font-size: 50%;">Sales / Customers /</small><small style="font-size: 50%;"> Customer Groups / </small><small style="font-size: 50%;color:#1e91cf;">Add New</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/customers-group/" class="btn btn-default" style="float: right;"><i class="fa fa-reply"></i></a>
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-floppy-o"></i> Save </button>
        </div>
    </div>
    <div class="clearfix"></div>
    @include('backend.pages.customers-group.forms.form')
    {!! Form::close() !!}
@endsection
@section('script')

@endsection