@extends('backend.templates.app')
@section('title')
	Item In
@endsection
@section('content')
		@if(Session::has('message'))
			<div class="alert alert-warning alert-dismissible" role="alert">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<strong>Info!</strong>&nbsp;&nbsp;{!! Session::get('message') !!}
			</div>
		@endif
		<table class="table">
			<thead>
			    <tr>
			        <th>Code</th>
			        <th><b>Name</b></th>
			        <th class="text-center"><b>Qty</b></th>
			        <th class="text-center">Created At</th>
			        <th class="text-center"><a href="/backend/in-stock/create" class="btn btn-small btn-primary"><i class="fa fa-plus"></i></a></th>
			    </tr>
		    </thead>
		    <tbody>
		        @foreach($products as $product)
		        <tr>
		            <td>{!! $product->code !!}</td>
		            <td>{!! $product->name !!}</td>
		            <td class="text-center">{!! $product->qty !!}</td>
		            <td class="text-center">{!!  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created))->diffForHumans() !!}</td>
					<td class="text-center col-md-1"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#remove-{!! $product->id !!}"><span class="fa fa-trash"></span></a>
		                <div class="modal" 
		                    id="remove-{!! $product->id !!}" tabindex="-1" 
		                    role="dialog">
		                    <div class="modal-dialog modal-sm">
		                        <div class="modal-content">
		                            <div class="modal-body">
		                                {!! Form::open(array('id'=>'form','url'=>'/backend/in-stock/delete','method'=>'POST','enctype'=>"multipart/form-data")) !!}
		                                {!! Form::hidden('id',$product->id) !!}
		                                <div class="alert alert-danger" role="alert">Are You Sure To Delete This ??</div>
		                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Yes</button>
		                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		                                {!! Form::close() !!}
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
@endsection
@section('script')
@endsection