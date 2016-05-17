<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <nav class="" role="navigation">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
            </nav>
            <a href="#" class="site_title"></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{asset('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="/shopping-frpi/backend"><i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li><a><i class="fa fa-tags"></i> Catalog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="/shopping-frpi/backend/products/">Products</a></li>
                            <li><a href="/shopping-frpi/backend/category">Categories</a></li>
                            <li><a href="/shopping-frpi/backend/attr-group">Attribute Groups</a></li>
                            <li><a href="/shopping-frpi/backend/manufacture">Manufacturers</a></li>
                            <li><a href="/shopping-frpi/backend/tags">Tags</a></li>
                            <li><a href="/shopping-frpi/backend/reviews">Reviews</a></li>
                            <li><a href="/shopping-frpi/backend/collections">Collection</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-archive"></i> Inventories<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="/backend/inventory/">Monitoring</a></li>
                            <li><a href="/backend/in-stock/">In Stock</a></li>
                            <li><a href="/backend/sold-out">Sold Out</a></li>                            
                        </ul>
                    </li>
                    <li><a><i class="fa fa-shopping-cart"></i> Sales<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="/shopping-frpi/backend/attr-group">Customers</a></li>
                            <li><a href="/shopping-frpi/backend/customers-group">Customer Group</a> </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    <!-- /menu footer buttons -->
    </div>
</div>