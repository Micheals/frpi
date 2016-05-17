<!-- Attribute -->
<div class="x_content"><br/>
    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-bordered">
                {!! Form::open(array('id'=>'formAttribute','method'=>'POST','enctype'=>"multipart/form-data")) !!}
                <tr>
                    <th class="col-md-5">
                        {!! Form::select('attrGroup_list',
                                $attrGroups,
                                null,
                                ['id'=>'attrGroup_id',
                                'class'=>'form-control attrGroups col-md-7 col-xs-12']) !!}
                    </th>
                    <th class="col-md-5">
                        <input id="label" class="form-control col-md-7 col-xs-12" name="label" required placeholder="">
                    </th>
                    <th class="col-md-1">
                        <input id="sort_order" class="form-control col-md-7 col-xs-12 number" name="sort_order" required>
                    </th>
                    <th class="text-center col-md-1">
                        <input id="product_id" class="hidden" name="product_id" value="{{$product->id}}">
                        <button id="create" class="btn btn-primary" type="button" onclick="StoreAttr()"><i class="fa fa-plus"></i>&nbsp;Add</button>
                    </th>
                </tr>
                {!! Form::close() !!}
            </table>

            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="tableAttr">
                <thead>
                    <tr>
                        <th class="col-md-5">Group Attribute</th>
                        <th class="col-md-5">Name</th>
                        <th class="col-md-1">Sort Order</th>
                        <th class="col-md-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="update-table-attribute text-uppercase" id="tableAttrib">
                    @foreach($product->attributes as $attribute)
                        <tr>
                            <td>
                                @foreach($attribute->attr_groups as $group)
                                    {!! $group->label !!}
                                @endforeach
                            </td>
                            <td>{!! $attribute->label !!}</td>
                            <td>{!! $attribute->sort_order !!}</td>
                            <td class="col-md-2 text-center">
                                <button id="delete" class="btn btn-danger" type="button" onclick="removeAttr(this)" value="{{$attribute->id}}"><i class="fa fa-trash"></i>&nbsp;Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end Attribute -->