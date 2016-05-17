<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.templates.partials.head')
</head>

<body>
   
        <div class="navbar-before mobile-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="navbar-before-sign">Everything You Need is Gshop:<span style="font-family: arial; font-size: 13px; font-weight: bold; color:#efedec"> Welcome Susan Barlin</span></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">Contact Us</a>
                            </li>
                            <li><a href="#">Wishlist</a>
                            </li>
                            <li><a href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email or Username</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Remeber Me</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
                </li>
                <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
            <h3 class="widget-title">Create Gshop Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Create Account" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
                </li>
            </ul>
        </div>
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
            <h3 class="widget-title">Password Recovery</h3>
            <p>Enter Your Email and We Will Send the Instructions</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <nav class="navbar navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/shopping">
                        <img src="{{asset('frontend/img/logo-w.png')}}" alt="Image Alternative text" title="Image Title" / align="center">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">
                                <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Home & Garden</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home & Garden</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home</a>
                                                                <p>Ipsum massa parturient erat erat</p>
                                                            </li>
                                                            <li><a href="#">Kitchen</a>
                                                                <p>Laoreet fermentum sodales etiam proin</p>
                                                            </li>
                                                            <li><a href="#">Furniture & Decor</a>
                                                                <p>Pellentesque nisi sit tempor purus</p>
                                                            </li>
                                                            <li><a href="#">Bedding & Bath</a>
                                                                <p>Purus proin sociis dictumst vulputate</p>
                                                            </li>
                                                            <li><a href="#">Appilances</a>
                                                                <p>Habitasse at auctor nec metus</p>
                                                            </li>
                                                            <li><a href="#">Patio, Lawn & Garden</a>
                                                                <p>Montes volutpat dolor nibh pulvinar</p>
                                                            </li>
                                                            <li><a href="#">Wedding Registry</a>
                                                                <p>Amet blandit inceptos nullam semper</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home Improvement</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home Improvement</a>
                                                                <p>Velit euismod pellentesque ipsum aenean</p>
                                                            </li>
                                                            <li><a href="#">Lamps & Light Fixtures</a>
                                                                <p>Congue senectus justo ad dolor</p>
                                                            </li>
                                                            <li><a href="#">Kitchen & Bath Fixtures</a>
                                                                <p>Natoque urna cum interdum tincidunt</p>
                                                            </li>
                                                            <li><a href="#">Home Automation</a>
                                                                <p>Mollis cras auctor eget habitant</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/2.png')}}" alt="Image Alternative text" title="Image Title" style="right: -10px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-diamond dropdown-menu-category-icon"></i>Jewelry</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Jewelry</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Necklances & Pendants</a>
                                                                <p>Dolor amet nascetur varius arcu</p>
                                                            </li>
                                                            <li><a href="#">Bracelets</a>
                                                                <p>Pellentesque himenaeos ipsum urna quisque</p>
                                                            </li>
                                                            <li><a href="#">Rings</a>
                                                                <p>Nostra hac molestie porttitor quisque</p>
                                                            </li>
                                                            <li><a href="#">Errings</a>
                                                                <p>Tempor blandit felis rutrum mus</p>
                                                            </li>
                                                            <li><a href="#">Wedding & Engagement</a>
                                                                <p>Felis velit cubilia magna lacus</p>
                                                            </li>
                                                            <li><a href="#">Charms</a>
                                                                <p>Ligula semper et curabitur dapibus</p>
                                                            </li>
                                                            <li><a href="#">Booches</a>
                                                                <p>Est vulputate porta ut litora</p>
                                                            </li>
                                                            <li><a href="#">Men's Jewelry</a>
                                                                <p>Eros sagittis commodo tempus curae</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Jewelry Shops</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Contemporary & Designer</a>
                                                                <p>Ornare malesuada luctus etiam viverra</p>
                                                            </li>
                                                            <li><a href="#">Juniors</a>
                                                                <p>Maecenas proin potenti aenean tortor</p>
                                                            </li>
                                                            <li><a href="#">Meternity</a>
                                                                <p>Nostra at maecenas bibendum netus</p>
                                                            </li>
                                                            <li><a href="#">Pettite</a>
                                                                <p>Justo neque tempus nostra iaculis</p>
                                                            </li>
                                                            <li><a href="#">Uniforms, Works & Safety</a>
                                                                <p>Aliquet orci dictum adipiscing auctor</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/3.png')}}" alt="Image Alternative text" title="Image Title" style="right: -10px; bottom: -10px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-child dropdown-menu-category-icon"></i>Toy & Kids</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Kids Clothing</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Accessories</a>
                                                                <p>Dolor eleifend venenatis inceptos ullamcorper</p>
                                                            </li>
                                                            <li><a href="#">Active Wear</a>
                                                                <p>Eros etiam elementum non egestas</p>
                                                            </li>
                                                            <li><a href="#">Coats & Jackets</a>
                                                                <p>Nascetur felis orci netus urna</p>
                                                            </li>
                                                            <li><a href="#">Jeans</a>
                                                                <p>Sociosqu suscipit feugiat vel molestie</p>
                                                            </li>
                                                            <li><a href="#">Sets</a>
                                                                <p>Netus turpis primis nostra placerat</p>
                                                            </li>
                                                            <li><a href="#">Indoors</a>
                                                                <p>Facilisi suscipit sed magna vestibulum</p>
                                                            </li>
                                                            <li><a href="#">Swimwear</a>
                                                                <p>Lacinia fermentum sollicitudin tempus aliquam</p>
                                                            </li>
                                                            <li><a href="#">Special Occasion</a>
                                                                <p>Tempus condimentum mauris ridiculus posuere</p>
                                                            </li>
                                                            <li><a href="#">Shoes</a>
                                                                <p>Commodo sociosqu eleifend mauris dictum</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">More For Kids</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Kids Furniture</a>
                                                                <p>Faucibus mauris metus dictumst turpis</p>
                                                            </li>
                                                            <li><a href="#">Kids Jewelry & Watches</a>
                                                                <p>Dui libero litora commodo interdum</p>
                                                            </li>
                                                            <li><a href="#">Toys & Games</a>
                                                                <p>Metus suspendisse sollicitudin posuere leo</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/4.png')}}" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-plug dropdown-menu-category-icon"></i>Electronics</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Electronics</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">TV & Video</a>
                                                                <p>Potenti nunc dolor leo taciti</p>
                                                            </li>
                                                            <li><a href="#">Home Audio & Theater</a>
                                                                <p>Interdum luctus elementum per parturient</p>
                                                            </li>
                                                            <li><a href="#">Camera, Photo & Video</a>
                                                                <p>Orci ante venenatis fringilla etiam</p>
                                                            </li>
                                                            <li><a href="#">Cell Phones & Accessories</a>
                                                                <p>Nibh blandit ullamcorper luctus blandit</p>
                                                            </li>
                                                            <li><a href="#">Headphones</a>
                                                                <p>Torquent himenaeos sollicitudin enim praesent</p>
                                                            </li>
                                                            <li><a href="#">Video Games</a>
                                                                <p>Dapibus lobortis facilisis interdum etiam</p>
                                                            </li>
                                                            <li><a href="#">Gar Electronics</a>
                                                                <p>Varius velit fames dapibus habitasse</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Computers</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Laptops & Tablets</a>
                                                                <p>Leo eros sed fames lorem</p>
                                                            </li>
                                                            <li><a href="#">Desktops & Monitors</a>
                                                                <p>Non pellentesque tincidunt est dis</p>
                                                            </li>
                                                            <li><a href="#">Computer Accessories</a>
                                                                <p>Porta porta montes himenaeos imperdiet</p>
                                                            </li>
                                                            <li><a href="#">Software</a>
                                                                <p>Senectus metus vitae posuere suspendisse</p>
                                                            </li>
                                                            <li><a href="#">Printers & Ink</a>
                                                                <p>Ultrices gravida consectetur tristique velit</p>
                                                            </li>
                                                            <li><a href="#">Networking</a>
                                                                <p>Fringilla neque montes habitant etiam</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/5.png')}}" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-tags dropdown-menu-category-icon"></i>Clothes & Shoes</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Gshop Fashion</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Woman</a>
                                                                <p>Neque tempus felis aenean augue</p>
                                                            </li>
                                                            <li><a href="#">Men</a>
                                                                <p>Malesuada neque ultricies mollis massa</p>
                                                            </li>
                                                            <li><a href="#">Girls</a>
                                                                <p>Hac sem ut maecenas himenaeos</p>
                                                            </li>
                                                            <li><a href="#">Boys</a>
                                                                <p>Aenean pulvinar molestie sociis lacus</p>
                                                            </li>
                                                            <li><a href="#">Baby</a>
                                                                <p>Ullamcorper elit lobortis habitant ut</p>
                                                            </li>
                                                            <li><a href="#">Luggage</a>
                                                                <p>Posuere maecenas nunc quisque metus</p>
                                                            </li>
                                                            <li><a href="#">Accessories</a>
                                                                <p>Nostra nullam tellus rutrum at</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/6.png')}}" alt="Image Alternative text" title="Image Title" style="right: -20px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-futbol-o dropdown-menu-category-icon"></i>Sports</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Sports</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Athletic Clothing</a>
                                                                <p>Diam egestas augue nascetur nostra</p>
                                                            </li>
                                                            <li><a href="#">Exorcise & Fitness</a>
                                                                <p>Facilisi malesuada feugiat scelerisque aptent</p>
                                                            </li>
                                                            <li><a href="#">Hunting & Fishing</a>
                                                                <p>Parturient augue at vestibulum nulla</p>
                                                            </li>
                                                            <li><a href="#">Team Sports</a>
                                                                <p>Adipiscing eros a ac tincidunt</p>
                                                            </li>
                                                            <li><a href="#">Fan Sports</a>
                                                                <p>Pretium nullam torquent torquent fames</p>
                                                            </li>
                                                            <li><a href="#">Golf</a>
                                                                <p>Semper tempor quam habitant aliquam</p>
                                                            </li>
                                                            <li><a href="#">Sports Collections</a>
                                                                <p>Aptent platea platea elit adipiscing</p>
                                                            </li>
                                                            <li><a href="#">Camping & Hiking</a>
                                                                <p>Lacinia phasellus urna tellus diam</p>
                                                            </li>
                                                            <li><a href="#">Cycling</a>
                                                                <p>Curae amet dis parturient lorem</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/7.png')}}" alt="Image Alternative text" title="Image Title" style="right: -39px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-music dropdown-menu-category-icon"></i>Entertaiment</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Entertaiment</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Video Games & Consoles</a>
                                                                <p>At blandit bibendum lobortis venenatis</p>
                                                            </li>
                                                            <li><a href="#">Music</a>
                                                                <p>Cras dictum luctus dis leo</p>
                                                            </li>
                                                            <li><a href="#">DVD & Movies</a>
                                                                <p>Dapibus hac purus non rhoncus</p>
                                                            </li>
                                                            <li><a href="#">Tickets</a>
                                                                <p>Leo auctor posuere dignissim neque</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Memorabilia</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Autographs</a>
                                                            </li>
                                                            <li><a href="#">Movie</a>
                                                            </li>
                                                            <li><a href="#">Music</a>
                                                            </li>
                                                            <li><a href="#">Television</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/9.png')}}" alt="Image Alternative text" title="Image Title" style="right: -27px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-location-arrow dropdown-menu-category-icon"></i>Travel</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Travel Equepment</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Luggage</a>
                                                                <p>Cubilia habitant curae consequat laoreet</p>
                                                            </li>
                                                            <li><a href="#">Travel Accessories</a>
                                                                <p>Nulla torquent tortor turpis consectetur</p>
                                                            </li>
                                                            <li><a href="#">Luggage Accessories</a>
                                                                <p>Condimentum erat amet ultricies ad</p>
                                                            </li>
                                                            <li><a href="#">Lodging</a>
                                                                <p>Amet sapien ornare habitasse nisl</p>
                                                            </li>
                                                            <li><a href="#">Maps</a>
                                                                <p>Orci id feugiat rutrum morbi</p>
                                                            </li>
                                                            <li><a href="#">Other Travel</a>
                                                                <p>Potenti pellentesque ullamcorper viverra proin</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Booking</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Vacation Packages</a>
                                                                <p>Nascetur suscipit ullamcorper amet rhoncus</p>
                                                            </li>
                                                            <li><a href="#">Campground & RV</a>
                                                                <p>Ut semper pulvinar maecenas accumsan</p>
                                                            </li>
                                                            <li><a href="#">Rail</a>
                                                                <p>Parturient integer lacus justo torquent</p>
                                                            </li>
                                                            <li><a href="#">Car Rental</a>
                                                                <p>Cras sociis a massa molestie</p>
                                                            </li>
                                                            <li><a href="#">Cruises</a>
                                                                <p>Inceptos congue venenatis platea hac</p>
                                                            </li>
                                                            <li><a href="#">Airline</a>
                                                                <p>Neque egestas dignissim lacinia quisque</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/11.png')}}" alt="Image Alternative text" title="Image Title" style="right: -100px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-picture-o dropdown-menu-category-icon"></i>Art & Design</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Art</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Paintings from Dealers & Resellers</a>
                                                                <p>Ridiculus cras semper magnis nascetur</p>
                                                            </li>
                                                            <li><a href="#">Paintings Direct from Artist</a>
                                                                <p>Consequat enim conubia auctor eleifend</p>
                                                            </li>
                                                            <li><a href="#">Art Prints</a>
                                                                <p>Vel magnis est auctor nunc</p>
                                                            </li>
                                                            <li><a href="#">Art Photographs from Resellers</a>
                                                                <p>Vel nulla primis mauris fringilla</p>
                                                            </li>
                                                            <li><a href="#">Art Photographs from the Artist</a>
                                                                <p>Blandit sapien fermentum volutpat curabitur</p>
                                                            </li>
                                                            <li><a href="#">Art Posters</a>
                                                                <p>Himenaeos eros quis risus amet</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Design</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home Decor Decals</a>
                                                                <p>Arcu viverra laoreet ullamcorper ut</p>
                                                            </li>
                                                            <li><a href="#">Furniture</a>
                                                                <p>Mauris blandit nascetur non platea</p>
                                                            </li>
                                                            <li><a href="#">Wallpapers</a>
                                                                <p>Donec condimentum facilisi hac quisque</p>
                                                            </li>
                                                            <li><a href="#">Bar Flasks</a>
                                                                <p>Consectetur posuere suspendisse duis platea</p>
                                                            </li>
                                                            <li><a href="#">Posters & Prints</a>
                                                                <p>Augue aliquet morbi lacus consectetur</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/12.png')}}" alt="Image Alternative text" title="Image Title" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-motorcycle dropdown-menu-category-icon"></i>Motors</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Motors</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Parts & Accessories</a>
                                                                <p>Elementum egestas lacus amet fames</p>
                                                            </li>
                                                            <li><a href="#">Cars & Trucks</a>
                                                                <p>Donec et nec neque vitae</p>
                                                            </li>
                                                            <li><a href="#">Motorcycles</a>
                                                                <p>At ut turpis maecenas in</p>
                                                            </li>
                                                            <li><a href="#">Passenger Vehicles</a>
                                                                <p>Sodales nunc dui habitant mattis</p>
                                                            </li>
                                                            <li><a href="#">Industry Vehicles</a>
                                                                <p>Nisi conubia mi penatibus cum</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Brands</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">BMW</a>
                                                            </li>
                                                            <li><a href="#">Land Rover</a>
                                                            </li>
                                                            <li><a href="#">Nissan</a>
                                                            </li>
                                                            <li><a href="#">Honda</a>
                                                            </li>
                                                            <li><a href="#">Ford</a>
                                                            </li>
                                                            <li><a href="#">Porsche</a>
                                                            </li>
                                                            <li><a href="#">Audi</a>
                                                            </li>
                                                            <li><a href="#">Mercedes-Benz</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/13.png')}}" alt="Image Alternative text" title="Image Title" style="right: -15px; bottom: -15px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-paw dropdown-menu-category-icon"></i>Pets</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <h5 class="dropdown-menu-category-title">Pet Supplies</h5>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Backyard Poultry Supplies</a>
                                                                <p>Dignissim eros id dignissim consectetur</p>
                                                            </li>
                                                            <li><a href="#">Bird Supplies</a>
                                                                <p>Massa nam mattis habitant nisl</p>
                                                            </li>
                                                            <li><a href="#">Cat Supplies</a>
                                                                <p>Gravida aliquam hendrerit orci vel</p>
                                                            </li>
                                                            <li><a href="#">Dog Supplies</a>
                                                                <p>Non conubia duis congue netus</p>
                                                            </li>
                                                            <li><a href="#">Pet Memorials & Urns</a>
                                                                <p>Condimentum lacinia aenean scelerisque est</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Fish & Aquariums</a>
                                                                <p>Suspendisse lacus nisi bibendum non</p>
                                                            </li>
                                                            <li><a href="#">Horse Supplies</a>
                                                                <p>Mi senectus mi et aptent</p>
                                                            </li>
                                                            <li><a href="#">Reptile Supplies</a>
                                                                <p>Senectus arcu varius dui laoreet</p>
                                                            </li>
                                                            <li><a href="#">Small Animal Supplies</a>
                                                                <p>Parturient donec proin ac risus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Wholesale Lots</a>
                                                                <p>Dapibus sit id inceptos justo</p>
                                                            </li>
                                                            <li><a href="#">Other Pet Supplies</a>
                                                                <p>Duis tristique viverra amet consequat</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/14.png')}}" alt="Image Alternative text" title="Image Title" style="right: -15px;" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Hobbies & DIY</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Model & Kit Tools</a>
                                                                <p>Porta aenean mauris consequat tincidunt</p>
                                                            </li>
                                                            <li><a href="#">Supplies & Engines</a>
                                                                <p>Lectus sagittis tellus dapibus suspendisse</p>
                                                            </li>
                                                            <li><a href="#">RC Airline & Helicopter</a>
                                                                <p>Porta eget mattis tempus vestibulum</p>
                                                            </li>
                                                            <li><a href="#">RC Car, Truck & motorcycle</a>
                                                                <p>Mus imperdiet nibh sem pharetra</p>
                                                            </li>
                                                            <li><a href="#">Military Airline Models & Kits</a>
                                                                <p>Quis netus vel vehicula class</p>
                                                            </li>
                                                            <li><a href="#">Craft Airbrushing Supplies</a>
                                                                <p>Vestibulum nisl donec hendrerit fermentum</p>
                                                            </li>
                                                            <li><a href="#">Card Making Supplies</a>
                                                                <p>Magna sed amet purus sit</p>
                                                            </li>
                                                            <li><a href="#">Craft Sewing</a>
                                                                <p>Nec class sit fringilla tellus</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="{{asset('frontend/img/test_cat/15.png')}}" alt="Image Alternative text" title="Image Title" style="height: 100%;" />
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="/shopping">Home<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left navbar-main-search" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                        </div>
                        <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Packages</a>
                        </li>
                        <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">SB Collections</a>
                        </li>
                        <li class="dropdown">
                            <a class="fa fa-shopping-cart" href="/shopping/cart"></a>
                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                <?php $totalTransactionCost = 0;?>
                                @if(count($productStores)==0)
                                    <li>No Item</li>
                                @endif
                                @foreach($productStores as $productTran)
                                    <?php $totalTransactionCost += number_format($productTran->product->data->price,2);?>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="{!! url($productTran->product->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$ {!! number_format($productTran->product->data->price,2) !!}</p>
                                        <p class="dropdown-menu-shipping-cart-item">{!! $productTran->product->name !!}</p>
                                    </div>
                                </li>
                                @endforeach
                                <li>
                                    <p class="dropdown-menu-shipping-cart-total">Total: $ {!! $totalTransactionCost !!}</p>
                                    @if(count($productStores)!=0)
                                    <a href="/frontend/checkout" class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
                
         <div class="gap"></div>

        <footer class="main-footer">
            <div class="container">
                <div class="row row-col-gap" data-gutter="60">
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Gshop 24/7</h4>
                        <p style="font-family: arial; font-size: 12px;">We offer a wide range of products and it is our goal to make G5 Platform</p>
                        <ul class="main-footer-social-list">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Popular Tags</h4>
                        <ul class="main-footer-tag-list">
                            @foreach($tags as $tag)
                                <li><a href="#">{!! $tag->label !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Newsletter</h4>
                        <form>
                            <div class="form-group">
                                <label>Sign up to the newsletter</label>
                                <input class="newsletter-input form-control" placeholder="Your e-mail address" type="text" />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Sign up" />
                        </form>
                    </div>
                </div>
                <ul class="main-footer-links-list">
                    <li><a href="#">About Us</a>
                    </li>
                    <li><a href="#">Customer Service</a>
                    </li>
                    <li><a href="#">Privacy</a>
                    </li>
                    <li><a href="#">Terms</a>
                    </li>
                    <li><a href="#">Shipping</a>
                    </li>
                    <li><a href="#">Payments & Refunds</a>
                    </li>
                </ul>
                <img class="main-footer-img" src="{{asset('frontend/img/test_footer2.png')}}" alt="Image Alternative text" title="Image Title" />
            </div>
        </footer>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright-text" style="font-family: arial; font-size: 12px; color: #999">©2016 Forever Rich Philippines International® All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="payment-icons-list">
                            <li>
                                <img src="{{asset('frontend/img/payment/visa-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Visa" />
                            </li>
                            <li>
                                <img src="{{asset('frontend/img/payment/mastercard-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Mastercard" />
                            </li>
                            <li>
                                <img src="{{asset('frontend/img/payment/paypal-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Paypal" />
                            </li>
                            <li>
                                <img src="{{asset('frontend/img/payment/visa-electron-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Visa-electron" />
                            </li>
                            <li>
                                <img src="{{asset('frontend/img/payment/maestro-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Maestro" />
                            </li>
                            <li>
                                <img src="{{asset('frontend/img/payment/discover-straight-32px.png')}}" alt="Image Alternative text" title="Pay with Discover" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('frontend.templates.partials.footer')
    @yield('script')

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function pad (str, max) {
                str = str.toString();
                return str.length < max ? pad("0" + str, max) : str;
            }
            function addCommas(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }

            $(".price").on("keypress keyup blur",function (event) {
                //this.value = this.value.replace(/[^0-9\.]/g,'');
                $(this).val($(this).val().replace(/[^0-9\.]/g,''));
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });

            $(".number").on("keypress keyup blur",function (event) {
                $(this).val($(this).val().replace(/[^\d].+/, ""));
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });

            function UpdateQuantity()
            {
                var route   = '/frontend/product/update';
                var data = new FormData($('#formUpdateQty')[0]);
                $.ajax({
                    url:route,
                    type:'POST',
                    dataType:'json',
                    processData:false,
                    contentType:false,
                    data:data,
                    success:function(data){
                    },
                    error:function(data){
                        errorsHtml = '<ul>';
                        $.each( data.responseJSON, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul>';
                    }
                });
            }
        </script>
</body>
</html>