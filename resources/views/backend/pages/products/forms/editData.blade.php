<!-- Image-->
<div class="x_content"><br/>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Image </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="form-group">
                <input accept="image/*" type="file" onchange="readURL(this)" name="image" id="fileInput" class="uploadIMG">
            </div>
            <div class="BrowseForFile">

                <img src="{!! url($product->data->image) !!}"
                     class="image-replace img-responsive img-thumbnail addImg"
                     height="120" width="120">
            </div>
        </div>
    </div>
</div>
<!-- end Image -->
<!-- model-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"><span class="required">*</span> Model </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::text('model',$product->data->model,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
    </div>
</div>
<!-- end model -->
<!-- price-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Price </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <input name="price" type="text" value="{!! $product->data->price !!}" class="price-input form-control col-md-7 col-xs-12">
        </div>
    </div>
</div>
<!-- end price -->
<!-- tax class-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Tax Class </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <select name="tax_price" class="form-control col-md-7 col-xs-12">
                <option value="NONE" selected="<?php if($product->data->tax_price=='NONE'){echo "selected";}?>">--- None ---</option>
                <option value="TAXABLE GOODS" selected="<?php if($product->data->tax_price=='TAXABLE GOODS'){echo "selected";}?>">Taxable Goods</option>
                <option value="NON-TAXABLE GOODS" selected="<?php if($product->data->tax_price=='NON-TAXABLE GOODS'){echo "selected";}?>">Non-taxable Goods</option>
            </select>
        </div>
    </div>
</div>
<!-- end tax class -->

<!-- quantity-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Minimum Quantity </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::text('minimum_quantity',$product->data->minimum_quantity,array('class'=>'number form-control col-md-7 col-xs-12','min'=>1)) !!}
        </div>
    </div>
</div>
<!-- end quantity -->

<!-- quantity-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> SEO Keyword </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::text('seo_keyword',$product->data->keyword,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
    </div>
</div>
<!-- end quantity -->

<!-- Date Available -->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Date Available </label>
        <div class="col-md-3 col-sm-3 col-xs-12 form-group">
            {!! Form::input('date','date_available',date('Y-m-d'),['class'=>'form-control datepicker','id'=>'date_available']) !!}
        </div>
    </div>
</div>
<!-- end Date Available -->
<!-- Dimensions (L x W x H)-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Dimensions (L x W x H) </label>
        <div class="col-md-3 col-sm-3 col-xs-12">
            {!! Form::text('length',$product->data->dimension->length,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            {!! Form::text('width',$product->data->dimension->width,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            {!! Form::text('height',$product->data->dimension->height,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
    </div>
</div>
<!-- end Dimensions (L x W x H) -->
<!-- Length Class-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Length Class </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="length_class_label">
                <option value="Centimeter" selected="<?php if($product->data->length_class->label=='Centimeter'){echo "select";}?>">Centimeter</option>
                <option value="Millimeter" selected="<?php if($product->data->length_class->label=='Millimeter'){echo "select";}?>">Millimeter</option>
                <option value="Inches" selected="<?php if($product->data->length_class->label=='Inches'){echo "select";}?>">Inches</option>
            </select>
        </div>
    </div>
</div>
<!-- end Length Class -->
<!-- Weight-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Weight </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::text('weight',$product->data->weight,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
    </div>
</div>
<!-- end Weight -->
<!-- Weight Class-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Weight Class </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="weight_class_label">
                <option value="Kilogram" selected="<?php if($product->data->weight_class->label=='Kilogram'){echo "select";}?>">Kilogram</option>
                <option value="Gram" selected="<?php if($product->data->weight_class->label=='Gram'){echo "select";}?>">Gram</option>
                <option value="Pound" selected="<?php if($product->data->weight_class->label=='Pound'){echo "select";}?>">Pound</option>
                <option value="Ounce" selected="<?php if($product->data->weight_class->label=='Ounce'){echo "select";}?>">Ounce</option>
            </select>
        </div>
    </div>
</div>
<!-- end Weight Class -->
<!-- Status-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Status </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <select name="status" class="form-control col-md-7 col-xs-12">
                <option value="enabled">Enabled</option>
                <option value="disabled">Disabled</option>
            </select>
        </div>
    </div>
</div>
<!-- Status -->