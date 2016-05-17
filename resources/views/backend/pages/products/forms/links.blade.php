<!-- Manufacturer -->
<div class="x_content"><br/>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Manufacturer </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::select('manufacture_list[]',
            $manufactures,
            null,
            ['id'=>'manufacture_id',
            'class'=>'form-control manufactures manufacture-select col-md-7 col-xs-12']) !!}
        </div>
    </div>
</div>
<!-- end Manufacturer -->
<!-- Categories -->
<div class="x_content"><br/>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Categories </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::select('category_list[]',
            $categories,
            null,
            ['id'=>'category_id',
            'class'=>'form-control categories categories-select col-md-7 col-xs-12','multiple']) !!}
        </div>
    </div>
    </div>
    <!-- end Categories -->
<!-- Related Products -->
<div class="x_content"><br/>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Related Products </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::select('product_list[]',
            $products,
            null,
            ['id'=>'product_id1',
            'class'=>'form-control products related-products-select col-md-7 col-xs-12','multiple']) !!}
        </div>
    </div>
</div>
<!-- end Related Products -->