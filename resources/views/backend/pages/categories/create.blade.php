@extends('backend.templates.app')

@section('title')
    New Category
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
    <link href="{{asset('assets/css/editor/external/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/editor/index.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link href="{{asset('assets/js/select/select2.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    {!! Form::open(array('id'=>'form','url'=>'/shopping-frpi/backend/category/store','method'=>'POST')) !!}
    <div class="page-title">
        <div class="title_left">
            <h3>Categories&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;"> Categories / </small><small style="font-size: 50%;color:#1e91cf;">Add New</small></h3>
        </div>
        <div class="title_right">
            <a href="#" class="btn btn-default" style="float: right;"><i class="fa fa-reply"></i></a>
            <button type="submit" class="btn btn-primary" style="float: right;"><i class="fa fa-floppy-o"></i> Save </button>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-pencil"></i> Add Category<small>add a new category </small></h2>
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
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    @include('backend.pages.categories.forms.general')
                                    <!-- end meta tag keywords -->
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    @include('backend.pages.categories.forms.data')
                                </div>
                            </div>
                        </div>
                        <!-- end Custom Tabs -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section('script')
    <script src="{{asset('assets/js/textarea/autosize.min.js')}}"></script>
    <script>
        autosize($('.resizable_textarea'));
    </script>
    <!-- richtext editor -->
    <script src="{{asset('assets/js/editor/bootstrap-wysiwyg.js')}}"></script>
    <script src="{{asset('assets/js/editor/external/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('assets/js/editor/external/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('assets/js/select/select2.min.js')}}"></script>
    <!-- editor -->
    <script>
        $(document).ready(function() {
            $('.xcxc').click(function() {
                $('#descr').val($('#editor').html());
            });
        });
        $(".category-select").select2({
            placeholder: "SELECT Parent Category",
            allowClear: true,
            maximumSelectionLength: 1
        });
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
    </script>
    <!-- /editor -->
    <!-- popover -->
    <script type="text/javascript">
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