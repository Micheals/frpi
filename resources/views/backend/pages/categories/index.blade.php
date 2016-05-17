@extends('backend.templates.app')

@section('title')
    Categories
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
        input[type="search"] {
            margin-left: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Categories&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;color:#1e91cf;"> Categories</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/category/create" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add New </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- categories table -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list"></i> Category List<small>categories table list</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th style="width:3%;"><div class="checkbox"><input type="checkbox" value="" class="flat"></div></th>
                            <th>Category</th>
                            <th><b>Description</b></th>
                            <th class="tblAction"><b>Action</b></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $category)
                                @if($category->id !=4)
                                <tr>
                                    <td><div class="checkbox"><input type="checkbox" value="" class="flat"></div></td>
                                    <td>
                                        @foreach($category->parentCategory as $parent)
                                            @if($parent->id != 4)
                                                {!! $parent->name.">" !!}
                                            @endif
                                        @endforeach
                                            {!! $category->name !!}
                                    <td>{!! $category->description !!}</td>
                                    <td class="text-center"><a href="/shopping-frpi/backend/category/edit/{{$category->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end product table -->
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/knob/jquery.knob.min.js')}}"></script>

    <!-- Datatables-->
    <script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{asset('assets/js/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- pace -->
    <script src="{{asset('assets/js/pace/pace.min.js')}}"></script>
    <script>
        var handleDataTableButtons = function() {
                    "use strict";
                    0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [{
                            extend: "copy",
                            className: "btn-sm"
                        }, {
                            extend: "csv",
                            className: "btn-sm"
                        }, {
                            extend: "excel",
                            className: "btn-sm"
                        }, {
                            extend: "pdf",
                            className: "btn-sm"
                        }, {
                            extend: "print",
                            className: "btn-sm"
                        }],
                        responsive: !0
                    })
                },
                TableManageButtons = function() {
                    "use strict";
                    return {
                        init: function() {
                            handleDataTableButtons()
                        }
                    }
                }();
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
                keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
        });
        TableManageButtons.init();
    </script>
@endsection