@extends('backend.templates.app')
@section('title')
    Attribute Groups
@endsection
@section('link_css')

@endsection
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Attribute Groups&nbsp;&nbsp;<small style="font-size: 50%;">Catalog / </small><small style="font-size: 50%;color:#1e91cf;"> Attribute Groups</small></h3>
        </div>
        <div class="title_right">
            <a href="/shopping-frpi/backend/attr-group/create" class="btn btn-primary" style="float: right;"><i class="fa fa-plus"></i> Add New </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <!-- categories table -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list"></i> Attribute Groups List<small>Attribute Groups table list</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">ID #</th>
                            <th class="col-md-9">Name</th>
                            <th class="col-md-1 text-center">Sort Order</th>
                            <th class="text-center col-md-1">&nbsp;</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($attrGroups as $attr)
                            <tr>
                                <td class="text-center">{!! $attr->id !!}</td>
                                <td>{!! $attr->label !!}</td>
                                <td class="text-center">{!! $attr->sort_order !!}</td>
                                <td class="text-center"><a href="/shopping-frpi/backend/attr-group/edit/{{$attr->id}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
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

