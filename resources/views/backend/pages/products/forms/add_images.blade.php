<!-- Attribute -->
<div class="x_content"><br/>
    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-4">
                    {!! Form::open(array('id'=>'formImages','url'=>'/shopping-frpi/backend/images/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload Image</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img src="{{asset('assets/images/no_image-100x100.png') }}"
                                             class="image-replace img-responsive img-thumbnail center-block"
                                             height="180" width="180">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="center-block" accept="image/*" type="file" onchange="readURL(this)" name="image" id="fileInput">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="sort_order" class="number form-control text-center">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <hr>
                                        <input class="hidden" name="product_id" value="{{$product->id}}">
                                        <button id="create" class="btn btn-primary form-control" type="button" onclick="StoreImage()">
                                            <i class="fa fa-image"></i>&nbsp;Add Images</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-offset-2 col-md-6">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-md-4">Image</th>
                            <th>Sort Order</th>
                            <th>&nbsp;</th>
                        </tr>


                        </thead>
                        <tbody class="update-table text-uppercase" id="tableImage">
                        @foreach($product->images as $image)
                            <tr>
                                <td class="col-md-4">
                                    @if(empty($image->path))
                                        <img src="{{asset('assets/images/no_image-100x100.png') }}"
                                             class="center-block image-replace img-responsive img-thumbnail"
                                             height="160" width="160">
                                    @else
                                        <img src="{{asset($image->path)}}" class="img-responsive" width="80" height="80">
                                    @endif

                                </td>
                                <td class="col-md-1">{!! $image->sort_order !!}</td>
                                <td class="col-md-1"><button class="btn btn-danger" onclick="removeImage(this)" value="{{$image->id}}" type="button"><i class="fa fa-trash"></i>Remove</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Attribute -->