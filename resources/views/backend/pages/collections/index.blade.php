@extends('backend.templates.app')

@section('title')
    Collections
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
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th class="text-center">TYPES</th>
                <th class="text-center">Items</th>
                <th class="text-center"><a href="/shopping-frpi/backend/collections/create" class="btn btn-primary">CREATE NEW</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($collections as $collection)
                <tr>
                    <td>{!! $collection->id !!}</td>
                    <td>{!! $collection->label !!}</td>
                    <td class="text-center">
                        @if($collection->type==0)
                            COLLECTION
                        @else
                            PACKAGE
                        @endif
                    </td>
                    <td class="text-center">{!! count($collection->products) !!}</td>
                    <td class="text-center"><a href="/shopping-frpi/backend/collections/edit/{!! $collection->id !!}" class="btn btn-warning">UPDATE</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
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