@extends('backend.templates.app')
@section('title')
    Customer Group
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
            <h3>Customer Groups&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;color:#1e91cf;"> Customer Groups</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/customers-group/create" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add New </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- categories table -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list"></i> Customer Groups List<small>customer groups table list</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Customer Groups Name</th>
                            <th><b>Description</b></th>
                            <th class="text-center">Sort Order</th>
                            <th class="text-center"><b>Action</b></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($customerGroups as $customerGroup)
                                <tr>
                                    <td>{!! $customerGroup->label !!}</td>
                                    <td>{!! $customerGroup->description !!}</td>
                                    <td class="text-center">{!! $customerGroup->sort_order !!}</td>
                                    <td class="text-center"><a href="/shopping-frpi/backend/customers-group/edit/{{$customerGroup->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
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