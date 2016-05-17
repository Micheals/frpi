@extends('backend.templates.app')
@section('title')
    Edit {!! $manufacture->name !!}
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
    </style>
@endsection
@section('content')
    {!! Form::model($manufacture,array('id'=>'form','url'=>'/shopping-frpi/backend/manufacture/update','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    {!! Form::hidden('id',$manufacture->id) !!}
    <div class="page-title">
        <div class="title_left">
            <h3>Manufacturers&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;"> Manufacturers / </small><small style="font-size: 50%;color:#1e91cf;">Edit {!! $manufacture->name !!}</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/manufacture/" class="btn btn-default" style="float: right;"><i class="fa fa-reply"></i></a>
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-floppy-o"></i> Save </button>
        </div>
    </div>
    <div class="clearfix"></div>
    @include('backend.pages.manufactures.forms.form')
    {!! Form::close() !!}
@endsection
@section('script')
    <script type="text/javascript">
        function readURL(input){

            if(input.files && input.files[0]){
                var reader  = new FileReader();

                reader.onload = function(e){
                    $('.image-replace')
                            .attr('src', e.target.result);
                };
                $('#inputFile').val('1');
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            var popupElement = '<a class="btn-sm btn-info" data-toggle="modal" data-target="#modal-image"><i class="fa fa-pencil"></i></a>';

            $('.popbutton').popover({
                animation: true,
                content: popupElement,
                html: true
            });

            $('body').on('click','.btn-toggle',function () {
                $(this).find('.btn').toggleClass('active');

                if ($(this).find('.btn-primary').length > 0) {
                    $(this).find('.btn').toggleClass('btn-primary');
                }
                if ($(this).find('.btn-danger').length > 0) {
                    $(this).find('.btn').toggleClass('btn-danger');
                }
                if ($(this).find('.btn-success').length > 0) {
                    $(this).find('.btn').toggleClass('btn-success');
                }
                if ($(this).find('.btn-info').length > 0) {
                    $(this).find('.btn').toggleClass('btn-info');
                }

                $(this).find('.btn').toggleClass('btn-default');
            });
        });
    </script>
@endsection