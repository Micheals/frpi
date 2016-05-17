@extends('frontend.templates.app')

@section('content')
<div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true,"autoplay":true}'>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#373636;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Save up to $150 on Your Next Laptop</h4>
                                <p class="slider-item-caption-desc">I'm Not Gonna Pay A Lot For This Laptop.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="{{asset('frontend/img/test_slider/1.png')}}" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 56%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-image:url(img/concert_2_1200x500.jpg);">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-right slider-item-caption-white">
                                <h4 class="slider-item-caption-title">World Top Guitars from $350</h4>
                                <p class="slider-item-caption-desc">Fill It To The Rim With Guitar.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-left" src="{{asset('frontend/img/test_slider/2.png')}}" alt="Image Alternative text" title="Image Title" style="transform:translateY(-50%) rotate(14deg); width: 55%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#93282B;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Run! Run! Run!</h4>
                                <p class="slider-item-caption-desc">Your Running Shoes, Right Away.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="{{asset('frontend/img/test_slider/3.png')}}" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="container">
            <div class="row" data-gutter="15">
                <div class="col-md-4">
                    <div class="banner" style="background-color:#72121C;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Outstanding Sound</h5>
                            <p class="banner-desc">It's A Bit Of A Headphones.</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{asset('frontend/img/test_banner/7.png')}}" alt="Image Alternative text" title="Image Title" style="bottom: 0px; right: -20px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner" style="background-color:#4172FF;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Top Gaming Equipment</h5>
                            <p class="banner-desc">That Cybersport Feeling.</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{asset('frontend/img/test_banner/8.png')}}" alt="Image Alternative text" title="Image Title" style="bottom: 0px; right: -5px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner" style="background-color:#444C50;">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Pro Cameras 50% Off</h5>
                            <p class="banner-desc">Capture Briliant Moments.</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{asset('frontend/img/test_banner/9.png')}}" alt="Image Alternative text" title="Image Title" style="bottom: 0px; right: -10px; width: 180px;" />
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>
        <div class="container">
            <h3 class="widget-title-lg">Featured Products</h3>
            <br>
            <div class="row" data-gutter="15">
                @foreach($productReviews as $productReview)
                    <div class="col-md-4">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="{!! url($productReview->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                @if(count($productReview->images)==0)
                                    <img class="product-img-alt" src="{!! url($productReview->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                @else
                                    @foreach($productReview->images as $imageAlt)
                                    @if($imageAlt->sort_order == 1)
                                        <img class="product-img-alt" src="{!! url($imageAlt->path) !!}" alt="Image Alternative text" title="Image Title" />
                                    @endif
                                @endforeach
                                    @endif
                            </div>
                            <a class="product-link" href="/shopping/product/{{$productReview ->id}}"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <?php $totalRatings = 0;?>
                                    @foreach($productReview->reviews as $reviewList)
                                        <?php
                                        $maxStar = 5;
                                        $totalRatings += $reviewList->rate->score;

                                        ?>
                                    @endforeach
                                    <?php
                                    $totalAuthor = count($productReview->reviews);
                                    if(empty($totalAuthor))
                                    {
                                        $average = 0;
                                    }else{
                                        $average = ($totalRatings/$totalAuthor);
                                    }
                                    ?>
                                    @if((int)$average == 0)
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    @elseif((int)$average==1)
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    @elseif((int)$average==2)
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    @elseif((int)$average==3)
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    @elseif((int)$average==4)
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    @else
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                        <li class="rated"><i class="fa fa-star"></i></li>
                                    @endif

                                </ul>
                                <h5 class="product-caption-title">{!! $productReview->name." - ".$productReview->data->model !!}</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$&nbsp;{!! number_format($productReview->data->price,2) !!}</span></div>

                                <ul class="product-caption-feature-list">
                                    <li>Free Shipping</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>















































            <div class="row" data-gutter="15">
                @foreach($products as $productList)
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="{!! url($productList->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                            @if(count($productList->images)==0)
                                <img class="product-img-alt" src="{!! url($productList->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                            @else
                                @foreach($productList->images as $image)
                                    @if($image->sort_order == 1)
                                        <img class="product-img-alt" src="{!! url($image->path) !!}" alt="Image Alternative text" title="Image Title" />
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <a class="product-link" href="/shopping/product/{{$productList->id}}"></a>
                        <div class="product-caption">
                            <ul class="product-caption-rating">
                                <?php $totalRatings = 0;?>
                                @foreach($productList->reviews as $reviewList)
                                    <?php
                                    $maxStar = 5;
                                        $totalRatings += $reviewList->rate->score;

                                    ?>
                                @endforeach
                                    <?php
                                    $totalAuthor = count($productList->reviews);
                                        if(empty($totalAuthor))
                                            {
                                                $average = 0;
                                            }else{
                                            $average = ($totalRatings/$totalAuthor);
                                        }
                                     ?>
                                @if((int)$average == 0)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif((int)$average==1)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif((int)$average==2)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif((int)$average==3)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif((int)$average==4)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @else
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                @endif

                            </ul>
                            <h5 class="product-caption-title">{!! $productList->name !!}</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">${!! number_format($productList->data->price,2) !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="gap"></div>
        <div class="slider-item-sm" style="background-image:url(img/196_365_1200x500.jpg);">
            <div class="slider-item-mask"></div>
            <div class="container">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-right slider-item-caption-white">
                        <h4 class="slider-item-caption-title">Become Part of FRPI World</h4>
                        <p class="slider-item-caption-desc">Travel with your family in Paris.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
     
    
              
            </div>
        
              
           
           
           
        <div class="gap"></div>
        <div class="container">
            <h3 class="widget-title-lg">Shop by Category</h3>
            <div class="row row-sm-gap" data-gutter="15">
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/exterior.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Home & Garden</h5>
                        <p class="banner-category-desc">173 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/jewelry.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Jewelry</h5>
                        <p class="banner-category-desc">439 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/baby-room.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Toy & Kids</h5>
                        <p class="banner-category-desc">437 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/tech.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Electronics</h5>
                        <p class="banner-category-desc">599 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/clothes.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Clothes & Shoes</h5>
                        <p class="banner-category-desc">534 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/ball.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Sports</h5>
                        <p class="banner-category-desc">665 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/gamepad.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Entertaiment</h5>
                        <p class="banner-category-desc">341 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/signpost.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Travel</h5>
                        <p class="banner-category-desc">645 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/art.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Art & Design</h5>
                        <p class="banner-category-desc">453 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/garage.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Motors</h5>
                        <p class="banner-category-desc">251 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/tools.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Tools</h5>
                        <p class="banner-category-desc">458 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img" src="{{asset('frontend/img/test_icon/metamorphose.png')}}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Hobbies & DIY</h5>
                        <p class="banner-category-desc">167 products</p>
                    </a>
                </div>
            </div>
        </div>

@stop