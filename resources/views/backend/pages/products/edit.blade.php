@extends('backend.templates.app')
@section('title')
    Update {!! $product->name !!}
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
        .select2{
            width: 100% !important;
            color: #000;
        }
    </style>
    <!-- editor -->
    <link href="{{asset('assets/css/editor/external/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/editor/index.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/select/select2.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
    {!! Form::model($product,array('id'=>'form','url'=>'/shopping-frpi/backend/products/update','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    {!! Form::hidden('id',$product->id) !!}
    {!! Form::hidden('image_old',$product->data->image) !!}
    <div class="page-title">
        <div class="title_left">
            <h3>Products&nbsp;&nbsp;<small style="font-size: 50%;"> Catalog / </small><small style="font-size: 50%;"> Product / </small><small style="font-size: 50%;color:#1e91cf;">Edit {!! $product->name !!}</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/products" class="btn btn-default" style="float: right;"><i class="fa fa-reply"></i></a>
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-floppy-o"></i> Save </button>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- add products -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-pencil"></i> Add Product<small>add a new product </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="row">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Data</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Links</a></li>
                                <li><a href="#tab_4" data-toggle="tab">Attribute</a></li>
                                <li><a href="#tab_5" data-toggle="tab">Discount</a></li>
                                <li><a href="#tab_6" data-toggle="tab">Additional Image</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    @include('backend.pages.products.forms.general')
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    @include('backend.pages.products.forms.editData')
                                </div>
                                <div class="tab-pane" id="tab_3">
                                    @include('backend.pages.products.forms.links')
                                    {!! Form::close() !!}
                                </div>
                                <div class="tab-pane" id="tab_4">
                                    @include('backend.pages.products.forms.attribute')
                                </div>
                                <div class="tab-pane" id="tab_5">
                                    @include('backend.pages.products.forms.discount')
                                </div>
                                <div class="tab-pane" id="tab_6">
                                    @include('backend.pages.products.forms.add_images')
                                </div>
                            </div>
                        </div>
                        <!-- end Custom Tabs -->
                    </div>
                </div>
            </div>
        </div>
                <!-- end add products -->
    </div>
    <!-- end modal -->

@endsection
@section('script')
    <script src="{{asset('assets/js/textarea/autosize.min.js')}}"></script>

    <!-- richtext editor -->
    <script src="{{asset('assets/js/editor/bootstrap-wysiwyg.js')}}"></script>
    <script src="{{asset('assets/js/editor/external/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('assets/js/editor/external/google-code-prettify/prettify.js')}}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{asset('assets/js/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/datepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('assets/js/select/select2.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".tag-select").select2();
            $(".manufacture-select").select2();
            $(".categories-select").select2();
            $(".related-products-select").select2();
        });
    </script>
    <!-- editor -->

    <script>
        $('input.nospace').keydown(function(e) {
            if (e.keyCode == 32) {
                return false;
            }
        });
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
            $('.xcxc').click(function() {
                $('#descr').val($('#editor').html());
            });
        });
        autosize($('.resizable_textarea'));
        $(function() {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                            'Times New Roman', 'Verdana'
                        ],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                $.each(fonts, function(idx, fontName) {
                    fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                });
                $('a[title]').tooltip({
                    container: 'body'
                });
                $('.dropdown-menu input').click(function() {
                    return false;
                })
                        .change(function() {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function() {
                            this.value = '';
                            $(this).change();
                        });

                $('[data-role=magic-overlay]').each(function() {
                    var overlay = $(this),
                            target = $(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });
                if ("onwebkitspeechchange" in document.createElement("input")) {
                    var editorOffset = $('#editor').offset();
                    $('#voiceBtn').css('position', 'absolute').offset({
                        top: editorOffset.top,
                        left: editorOffset.left + $('#editor').innerWidth() - 35
                    });
                } else {
                    $('#voiceBtn').hide();
                }
            };

            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') {
                    msg = "Unsupported format " + detail;
                } else {
                    console.log("error uploading file", reason, detail);
                }
                $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            };
            initToolbarBootstrapBindings();
            $('#editor').wysiwyg({
                fileUploadError: showErrorAlert
            });
            window.prettyPrint && prettyPrint();
        });
        <!-- /editor -->
        <!-- datepicker -->
        $(document).ready(function() {
            $('.datePickDrop').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_2"
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
        <!-- /datepicker -->
        <!-- popover -->
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
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('code/custom/attributes.js')}}"></script>
    <script src="{{asset('code/custom/discounts.js')}}"></script>
    <script src="{{asset('code/custom/images.js')}}"></script>
@endsection