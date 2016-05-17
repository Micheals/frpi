@extends('backend.templates.app')
@section('title')
    New Tag
@endsection

@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
    </style>
@endsection

@section('content')
    {!! Form::open(array('id'=>'form','url'=>'/shopping-frpi/backend/tags/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    <div class="page-title">
        <div class="title_left">
            <h3>Tags&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;"> Tags / </small><small style="font-size: 50%;color:#1e91cf;">Add New</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/tags/" class="btn btn-default" style="float: right;"><i class="fa fa-reply"></i></a>
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-floppy-o"></i> Save </button>
        </div>
    </div>
    <div class="clearfix"></div>
    @include('backend.pages.tags.forms.form')
    {!! Form::close() !!}
@endsection
@section('script')

@endsection