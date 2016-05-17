<div class="row">
    <!-- add products -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-pencil"></i> Form <small>of Attribute Groups</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">
                    <!-- Customer name -->
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Attribute Name </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('label',null,array('class'=>'form-control col-md-7 col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                    <!-- end Customer name -->
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="product-name"><span class="required">*</span> Sort Order </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('sort_order',null,array('class'=>'form-control col-md-7 number col-xs-12','required')) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end add products -->

</div>

