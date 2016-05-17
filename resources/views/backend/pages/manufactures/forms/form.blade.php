<div class="row">
    <!-- add products -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-pencil"></i> Form <small>of manufacturer </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">
                    <!-- Image-->
                    <div class="x_content"><br/>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="meta-tag-title" style="margin-top: 6px;text-align: right;"> Image </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <img src="{{asset('assets/images/no_image-100x100.png') }}"
                                                 class="image-replace img-responsive img-thumbnail"
                                                 height="120" width="120"
                                </div>

                                <div class="form-group">
                                    <input accept="image/*" type="file" onchange="readURL(this)" name="image" id="fileInput">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Image -->
                    <!-- Manufacturer name -->
                    <div class="x_content">
                        <br />
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Manufacturer Name </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    {!! Form::text('name',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
                                </div>
                            </div>
                    </div>
                    <!-- end Manufacturer name -->
                    <!-- Sort Order -->
                    <div class="x_content">
                        <br />
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name">Sort Order </label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    {!! Form::text('sort_order',null,array('class'=>'number form-control col-md-7 col-xs-12','required')) !!}
                                </div>
                            </div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name">SEO Keywords </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('seo_keyword',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                    <!-- end Sort Order -->
                </div>

            </div>
        </div>
    </div>

    <!-- end add products -->

</div>