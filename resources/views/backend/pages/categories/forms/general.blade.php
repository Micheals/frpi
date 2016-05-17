 <!-- first name -->
<div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Category Name </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                {!! Form::text('name',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
            </div>
        </div>
    </form>
</div>
<!-- end first name -->
<!-- text Editor -->
<div class="x_content">
    <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align: right;margin-top: 15px;">Description </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
        {!! Form::textarea('description',null,array('class'=>'form-control ckeditor')) !!}
        <br />
    </div>
</div>
<!-- end text editor-->