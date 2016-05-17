{!! Form::text('label',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
<div class="col-md-10 col-sm-10 col-xs-12">
    {!! Form::select('product_list[]',
        $products,
        null,
        ['id'=>'product_id',
        'class'=>'form-control products col-md-7 col-xs-12','multiple']) !!}
</div>

<div class="col-md-10 col-sm-10 col-xs-12">
    {!! Form::select('type',
        $types,
        null,
        ['id'=>'type',
        'class'=>'form-control types col-md-7 col-xs-12']) !!}
</div>
<button type="submit">Submit</button>