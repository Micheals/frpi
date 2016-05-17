<!-- Image-->
<div class="x_content"><br/>
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Image </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="form-group">
                <input accept="image/*" type="file" onchange="readURL(this)" name="image" id="fileInput" class="uploadIMG">
            </div>
            <div class="BrowseForFile">

                <img src="{{asset('assets/images/no_image-100x100.png') }}"
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
            <input name="model" type="text" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
</div>
<!-- end model -->
<!-- price-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Price </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <input name="price" type="text" required="required" class="price-input form-control col-md-7 col-xs-12">
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
                <option value="NONE">--- None ---</option>
                <option value="TAXABLE GOODS">Taxable Goods</option>
                <option value="NON-TAXABLE GOODS">Non-taxable Goods</option>
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
            <input name="minimum_quantity" type="number" min="1" required="required" class="number form-control col-md-7 col-xs-12">
        </div>
    </div>
</div>
<!-- end quantity -->

<!-- quantity-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> SEO Keyword </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            <input name="seo_keyword" type="text" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
</div>
<!-- end quantity -->

<!-- Date Available -->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Date Available </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
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
            <input name="length" type="text" required="required" class="form-control col-md-7 col-xs-12">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <input name="width" type="text" required="required" class="form-control col-md-7 col-xs-12">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <input name="height" type="text" required="required" class="form-control col-md-7 col-xs-12">
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
                <option value="Centimeter">Centimeter</option>
                <option value="Millimeter">Millimeter</option>
                <option value="Inches">Inches</option>
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
            <input name="weight" type="text" required="required" class="form-control col-md-7 col-xs-12">
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
                <option value="Kilogram">Kilogram</option>
                <option value="Gram">Gram</option>
                <option value="Pound">Pound</option>
                <option value="Ounce">Ounce</option>
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