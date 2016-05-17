<div class="row">
    <!-- add products -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-pencil"></i> Form <small>of Products</small></h2>
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
                    <!-- Customer name -->
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Products </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::select('product_list',
                                    $products,
                                    null,
                                    ['id'=>'product_id1',
                                    'class'=>'form-control products col-md-7 col-xs-12']) !!}
                            </div>
                        </div>
                    </div>
                    <!-- end Customer name -->
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Title </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('title',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Ratings </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('rating',null,array('class'=>'form-control number col-md-7 col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Author </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('author',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Text </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::textarea('text',null,array('class'=>'form-control ckeditor')) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end add products -->

</div>

