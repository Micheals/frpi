@extends('backend.templates.app')

@section('title')
    Create New Collection
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
    {!! Form::model($collection,array('id'=>'form','url'=>'/shopping-frpi/backend/collections/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
    {!! Form::hidden('id',$collection->id) !!}
    @include('backend.pages.collections.forms._form')
    {!! Form::close() !!}
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