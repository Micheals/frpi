<label>Products</label>
{!! Form::select('product_id',
            $products,
            null,
            ['id'=>'product_id',
            'class'=>'form-control products related-products-select col-md-7 col-xs-12']) !!}
{!! Form::text('quantity',null,array('class'=>'form-control number col-md-7 col-md-12','placeholder'=>'Quantity')) !!}