<!-- Parent -->
<div class="x_content"><br />
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name">Parent </label>

            <div class="col-md-10 col-sm-10 col-xs-12">
                {!! Form::select('category_id',
                $categories,
                null,
                ['id'=>'category_id',
                'class'=>'form-control category-select col-md-7 col-xs-12']) !!}
                {!! Form::hidden('parent',null,array('class'=>'form-control col-md-7 col-xs-12')) !!}
            </div>
        </div>
</div>
<!-- end Parent -->
<!-- Sort Order -->
<div class="x_content">
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name">Sort Order </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('sort_order',null,array('class'=>'form-control number col-md-7 col-md-12')) !!}
            </div>
        </div>
</div>
<!-- end Sort Order -->
<!-- Status-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Status </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <select name="status" class="form-control col-md-7 col-xs-12">
                <option value="0">Enabled</option>
                <option value="1">Disabled</option>
            </select>
        </div>
    </div>
</div>
<!-- Status -->