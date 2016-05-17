@extends('backend.templates.app')
@section('title')
    Manufacture
@endsection
@section('link_css')
    <style type="text/css">
        .irs.js-irs-0.irs-with-grid{
            margin-top: -15px !important;
        }
        input[type="search"]{
            margin-left: 5px;
        }
    </style>
@endsection
@section('content')

    <div class="page-title">
        <div class="title_left">
            <h3>Manufacturers&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;color:#1e91cf;"> Manufacturers</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/manufacture/create" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add New </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- categories table -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list"></i> Manufacturer List<small>manufacturer table list</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="col-md-1"></th>
                            <th class="col-md-9">Manufacturer Name</th>
                            <th class="text-center col-md-1"><b>Sort Order</b></th>
                            <th class="text-center col-md-1">&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($manufactures as $manufacture)
                                <tr>
                                    <td>
                                        @if(!empty($manufacture->image))
                                        <img src="{{url($manufacture->image)}}" class="img-responsive center-block" width="120" height="120"></td>
                                        @else
                                        <img src="{{asset('assets/images/no_image-100x100.png') }}"
                                             class="image-replace img-responsive img-thumbnail center-block"
                                             height="120" width="120">
                                        @endif
                                    <td>{!! $manufacture->name !!}</td>
                                    <td class="text-center">{!! $manufacture->sort_order !!}</td>
                                    <td class="text-center"><a href="/shopping-frpi/backend/manufacture/edit/{{$manufacture->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                </tr>
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

@endsection