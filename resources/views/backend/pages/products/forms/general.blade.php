<!--  name -->
<div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Product Name </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('name',null,array('class'=>'form-control col-md-7 col-xs-12')) !!}
            </div>
        </div>
    </form>
</div>
<!-- end  name -->
<!-- code-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> PRODUCT CODE </label>
        <div class="col-md-5 col-sm-5 col-xs-6">
            @if($product==null||$product == '')
                {!! Form::text('code',null,array('class'=>'form-control nospace col-md-7 col-xs-12')) !!}
            @else
                {!! Form::text('code',$product->code->name,array('class'=>'form-control nospace col-md-7 col-xs-12')) !!}
            @endif
        </div>
        <div class="col-md-5 col-sm-5 col-xs-6">
            <i>Note:</i>&nbsp;Generate this product code view "FRPI-(input)(random generate code).
        </div>
    </div>
</div>
<!-- end code -->
<!-- text Editor -->
<div class="x_content">
    <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align: right;margin-top: 15px;">Description </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
        {!! Form::textarea('description',null,array('class'=>'form-control ckeditor')) !!}
        <br />
    </div>
</div>
<!-- end text editor-->
<!-- meta tag title-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"><span class="required">*</span> Meta Tag Title </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::text('meta_tag_title',null,array('class'=>'form-control col-md-7 col-xs-12')) !!}
        </div>
    </div>
</div>
<!-- end meta tag title -->
<!-- meta tag Description-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;">Meta Tag Description </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::textarea('meta_tag_description',null,array('class'=>'form-control ckeditor')) !!}
        </div>
    </div>
</div>
<!-- end meta tag description -->
<!-- meta tag Keywords-->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;">Meta Tag Keywords </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::textarea('meta_tag_keywords',null,array('class'=>'form-control ckeditor')) !!}

        </div>
    </div>
</div>
<!-- end meta tag keywords -->
<!-- product tags -->
<div class="x_content">
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;">Product Tag </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            {!! Form::select('tag_list[]',
            $tags,
            null,
            ['id'=>'tag_id',
            'class'=>'form-control tags tag-select','multiple']) !!}
        </div>
    </div>
</div>
<!-- end product tags -->