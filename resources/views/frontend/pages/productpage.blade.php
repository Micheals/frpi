@extends('frontend.templates.app')

@section('content')




        <div class="container">
            <header class="page-header">
                <h1 class="page-title">{!! $product->name !!}</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    @foreach($product->categories as $category)
                        @if($category->id != 4)
                            @foreach($category->parentCategory as $parent)
                                @if($parent->id != 4)
                                <li><a href="/shopping/category/{{$parent->id}}">{!! $parent->name !!}</a></li>
                                @endif

                            @endforeach
                        @endif
                    @endforeach
                    <li><a href="/shopping/category/{{$category->id}}">{!! $category->name !!}</a></li>
                    <li class="active">{!! $product->name !!}</li>
                </ol>
            </header>
            <div class="row">
                <div class="col-md-5">
                    <div class="product-page-product-wrap jqzoom-stage">
                        <div class="clearfix">
                            <a href="{!! url($product->data->image) !!}" id="jqzoom" data-rel="gal-1">
                                <img src="{!! url($product->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                    </div>
                    <ul class="jqzoom-list">
                        @foreach($product->images as $imageAlt)
                            <a class="" href="{!! url($imageAlt->path) !!}" data-rel="{gallery:'gal-1', smallimage: '{!! url($imageAlt->path) !!}', largeimage: '{!! url($imageAlt->path) !!}'}">
                                <img src="{!! url($imageAlt->path) !!}" alt="Image Alternative text" title="Image Title" height="80" width="80"/>
                            </a>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="row" data-gutter="10">
                        <div class="col-md-8">
                            <div class="box">
                               
                               
                                
                                <p class="product-page-desc">{!! $product->description !!}</p>
                                <table
                                class="table table-striped product-page-features-table">
                                    <tbody>
                                        @foreach($product->attributes as $attribute)
                                            <tr>
                                                <td>
                                                    @foreach($attribute->attr_groups as $attr_group)
                                                    {!! $attr_group->label !!}
                                                    @endforeach
                                                </td>
                                                <td>{!! $attribute->label !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-highlight">
                                <p class="product-page-price-list"></p>
                                <p class="product-page-price">${!! number_format($product->data->price,2) !!}</p>
                                <p class="text-muted text-sm text-uppercase">Free Shipping</p>
                                {!! Form::open(array('id'=>'form','url'=>'/shopping/addcart/store','method'=>'POST','enctype'=>"multipart/form-data")) !!}
                                    <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                                    {!! Form::hidden('product_id',$product->id) !!}
                                {!! Form::close() !!}
                               
                                <div class="product-page-side-section">
                                    <h5 class="product-page-side-title">Share This Item</h5>
                                    <ul class="product-page-share-item">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable product-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Additional Information</a></li>
                    <li><a href="#tab-3" data-toggle="tab">Rating and Reviews</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade in active" id="tab-1">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Model :</td>
                                    <td class="text-left">{!! $product->data->model !!}</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Weight ( {!! $product->data->weight_class->label !!} : </td>
                                    <td class="text-left">{!! $product->data->weight !!}</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Dimensions L x W x H ( {!! $product->data->length_class->label !!} ) :</td>
                                    <td class="text-left">{!! $product->data->dimension->length." x ".$product->data->dimension->width." x ".$product->data->dimension->height !!}</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="row">
                            <div class="col-md-8" style="overflow-y: auto;height: 300px;">
                                <?php $totalRatings = 0;?>
                                @foreach($product->reviews as $review)
                                <article class="product-review">
                                    <div class="product-review-author">
                                        <img class="product-review-author-img" src="{!! url($review->image) !!}" alt="{!! $review->author !!}" title="{!! $review->author !!}" height="80" width="80"/>
                                    </div>
                                    <div class="product-review-content-full">
                                        <h5 class="product-review-title">{!! $review->title !!}</h5>
                                        <ul class="product-page-product-rating">
                                            @if($review->rate->score == 0)
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @elseif($review->rate->score==1)
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @elseif($review->rate->score==2)
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @elseif($review->rate->score==3)
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li class="rated"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @elseif($review->rate->score==4)
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
                                        <p class="product-review-meta">by {!! $review->author." ".date_format($review->updated_at,"Y/m/d H:i:s") !!} </p>
                                        <p class="product-review-body">{!! $review->text !!}</p>
                                    </div>
                                </article>
                                    <?php $totalRatings += $review->rate->score ;?>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                                <?php
                                    $maxStar = 5;
                                    $totalAuthor = count($product->reviews);
                                    $average = ($totalRatings/$totalAuthor);
                                ?>
                                <ul class="product-page-product-rating product-rating-big">
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
                                    <li class="count">{{$average}}</li>
                                </ul><h3><?php echo count($product->reviews)?><small> customer reviews</small></h3>
                                <!-- <a class="btn btn-primary" href="#">Write a Review</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                      
            <div class="gap"></div>
            <h3 class="widget-title">You Might Also Like</h3>
            <div class="row" data-gutter="15">
                @foreach($product->relatedProducts as $related)
                <div class="col-md-3">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>hot</li>
                        </ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="{!! url($related->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                @if(count($related->images)==0)
                                <img class="product-img-alt" src="{!! url($related->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                @else
                                    @foreach($related->images as $imageAlt)
                                        @if($imageAlt->sort_order == 1)
                                            <img class="product-img-alt" src="{!! url($imageAlt->path) !!}" alt="Image Alternative text" title="Image Title" />
                                        @endif
                                    @endforeach
                                @endif
                        </div>
                        <a class="product-link" href="/shopping/product/{{$related->id}}"></a>
                        <div class="product-caption">
                            <ul class="product-caption-rating">
                                @foreach($related->reviews as $reviewRelated)
                                @if(!$reviewRelated||$reviewRelated->ratings == 0)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif($reviewRelated->ratings==1)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif($reviewRelated->ratings==2)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif($reviewRelated->ratings==3)
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li class="rated"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                @elseif($reviewRelated->ratings==4)
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
                                @endforeach
                            </ul>
                            <h5 class="product-caption-title">{!! $related->name !!}</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$ {!! number_format($related->data->price,2) !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
			
@stop