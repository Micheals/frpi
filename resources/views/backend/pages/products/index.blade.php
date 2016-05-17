@extends('backend.templates.app')

@section('title')
    Products
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid {
            margin-top: -15px !important;
        }
        input[type="search"] {
            height: 18px;
        }
    </style>
    <!-- ion_range -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.skinFlat.css')}}" />
@endsection

@section('content')
        <div class="page-title">
            <div class="title_left">
                <h3>Products&nbsp;&nbsp;<small style="font-size: 50%;"> Catalog / </small><small style="font-size: 50%;color:#1e91cf;"> Product</small></h3>
            </div>
            <div class="title_right">
                <a href="/shopping-frpi/backend/products/create/" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add New </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-list"></i> Product List<small>product table list</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th>Product Name</th>
                                <th>Model</th>
                                <th class="text-right"><b>Price</b></th>
                                <th class="text-center"><b>Min Quantity</b></th>
                                <th class="text-center">Status</th>
                                <th class="text-center"><b>Action</b></th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-center">
                                            @if(empty($product->data->image))
                                                <img src="{{asset('assets/images/no_image-100x100.png') }}"
                                                     class="image-replace img-responsive img-thumbnail center-block"
                                                     height="120" width="120">
                                            @else
                                            <img src="{!! url($product->data->image) !!}" width="120" height="120" class="center-block img-responsive">
                                            @endif
                                        </td>
                                        <td>{!! $product->name !!}</td>
                                        <td>{!! $product->data->model !!}</td>
                                        <td class="text-right"><b>${!! $product->data->price !!}</b></td>
                                        <td class="text-center"><b>{!! $product->data->minimum_quantity !!}</b></td>
                                        <td class="text-center">
                                            @if($product->data->status==0)
                                                Active
                                            @else
                                                InActive
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="/shopping-frpi/backend/products/edit/{{$product->id}}" class="btn btn-large btn-warning"><i class="fa fa-pencil"></i></a></td>
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
        <!-- range slider -->
        <script src="{{asset('assets/js/ion_range/ion.rangeSlider.min.js')}}"></script>
        <!-- knob -->
        <script src="{{asset('assets/js/knob/jquery.knob.min.js')}}"></script>

        <!-- Datatables-->
        <script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/jszip.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/pdfmake.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/vfs_fonts.js') }}"></script>
        <script src="{{asset('assets/js/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/buttons.print.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/responsive.bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/js/datatables/dataTables.scroller.min.js') }}"></script>

        <!-- pace -->
        <script src="{{asset('assets/js/pace/pace.min.js') }}"></script>
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

    <!-- ion_range -->
        $(function() {
            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 0,
                max: 5000,
                from: 0,
                to: 5000,
                type: 'double',
                step: 1,
                prefix: "$",
                grid: true
            });
        });
    </script>
    <!-- /ion_range -->
@endsection