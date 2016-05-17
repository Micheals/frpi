<!-- Attribute -->
<div class="x_content"><br/>
    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-bordered">
                {!! Form::open(array('id'=>'formDiscount','url'=>'/shopping-frpi/backend/discounts/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
                <tr>
                    <th class="col-md-3">
                        {!! Form::select('customerGroups_list',
                                $customerGroups,
                                null,
                                ['id'=>'customerGroup_id',
                                'class'=>'form-control customerGroup col-md-7 col-xs-12']) !!}
                    </th>
                    <th class="col-md-1">
                        <input class="form-control col-md-7 col-xs-12 number" name="quantity" required id="quantity">
                    </th>
                    <th class="col-md-1">
                        <input class="form-control col-md-7 col-xs-12 number" name="priority" required id="priority">
                    </th>
                    <th class="col-md-2">
                        <input class="form-control col-md-7 col-xs-12 price" name="price" required id="price">
                    </th>
                    <th class="col-md-2">
                        {!! Form::input('date','start_at',date('Y-m-d'),['class'=>'form-control datepicker','id'=>'start_at']) !!}
                    </th>
                    <th>
                        {!! Form::input('date','end_at',date('Y-m-d'),['class'=>'form-control datepicker','id'=>'end_at']) !!}
                    </th>
                    <th class="text-center col-md-1">
                        <input class="hidden" name="product_id" value="{{$product->id}}">
                        <button id="create" class="btn btn-primary" type="button" onclick="StoreDiscount()"><i class="fa fa-plus"></i>&nbsp;Add</button>
                    </th>
                </tr>
                {!! Form::close() !!}
            </table>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center col-md-3">Customer Group</th>
                    <th class="text-center col-md-1">Qty</th>
                    <th class="text-center col-md-1">Priority</th>
                    <th class="text-right col-md-2">Price</th>
                    <th class="text-center col-md-2">Date Start</th>
                    <th class="text-center">Date End</th>
                    <th class="text-center col-md-1">Action</th>
                </tr>


                <tbody class="update-table text-uppercase" id="tableDiscount">

                @foreach($product->discounts as $discount)
                    <tr>
                        <td class="text-center">
                            @foreach($discount->customer_groups as $cusGroup)
                                {!! $cusGroup->label !!}
                            @endforeach
                        </td>
                        <td class="text-center">{!! $discount->quantity !!}</td>
                        <td class="text-center">{!! $discount->priority !!}</td>
                        <td class="text-right">{!! number_format($discount->price,2) !!}</td>
                        <td class="text-center">{!! $discount->start_at !!}</td>
                        <td class="text-center">{!! $discount->end_at !!}</td>
                        <td class="col-md-2 text-center">
                            <button class="btn btn-danger" onclick="removeDiscount(this)" value="{{$discount->id}}"><i class="fa fa-trash"></i>&nbsp;Remove</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end Attribute -->

<!-- end Discount -->