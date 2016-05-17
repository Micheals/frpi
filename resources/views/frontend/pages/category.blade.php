@extends('frontend.templates.app')
@section('content')
        <div class="container">
            <header class="page-header">
                    <h1 class="page-title">{!! $category->name !!}</h1>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a class="#">{!! $category->name !!}</a></li>
                    </ol>
                    <ul class="category-selections clearfix">
                        {{--<li>--}}
                            {{--<a class="fa fa-th-large category-selections-icon active" href="#"></a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="fa fa-th-list category-selections-icon" href="#"></a>--}}
                        {{--</li>--}}
                        {{--<li><span class="category-selections-sign">Sort by :</span>--}}
                            {{--<select class="category-selections-select">--}}
                                {{--<option selected>Newest First</option>--}}
                                {{--<option>Best Sellers</option>--}}
                                {{--<option>Trending Now</option>--}}
                                {{--<option>Best Raited</option>--}}
                                {{--<option>Price : Lowest First</option>--}}
                                {{--<option>Price : Highest First</option>--}}
                                {{--<option>Title : A - Z</option>--}}
                                {{--<option>Title : Z - A</option>--}}
                            {{--</select>--}}
                        {{--</li>--}}
                        {{--<li><span class="category-selections-sign">Items :</span>--}}
                            {{--<select class="category-selections-select">--}}
                                {{--<option>9 / page</option>--}}
                                {{--<option selected>12 / page</option>--}}
                                {{--<option>18 / page</option>--}}
                                {{--<option>All</option>--}}
                            {{--</select>--}}
                        {{--</li>--}}
                    </ul>

            </header>
            <div class="row">
                <div class="col-md-3">
                    <aside class="category-filters">
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Category</h3>
                            <ul class="cateogry-filters-list">
                                @foreach($categories as $categoryLine)
                                    <li>
                                        @foreach($categoryLine->parentCategory as $parent)
                                            @if($parent->id!=4)
                                            <a href="/shopping/category/{{$parent->id}}">{!! $parent->name.">" !!}</a>
                                            @endif
                                        @endforeach
                                        @if($categoryLine->id !=4)
                                            <a href="/shopping/category/{{$categoryLine->id}}">{!! $categoryLine->name !!}</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="category-filters-section">
                            <h3 class="widget-title-sm">Price</h3>
                            <input type="text" id="price-slider" />
                        </div>
                       
                        
                        

                        
                        {{--<div class="category-filters-section">--}}
                            {{--<h3 class="widget-title-sm">Discount</h3>--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(36)</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(96)</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(54)</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(32)</span>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        
                        
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="row" data-gutter="15">
                        @foreach($category->products as $product)
                        <div class="col-md-4">
                            <div class="product ">
                                <ul class="product-labels"></ul>
                                <div class="product-img-wrap">
                                    <img class="product-img-primary" src="{!! url($product->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                    <img class="product-img-alt" src="{!! url($product->data->image) !!}" alt="Image Alternative text" title="Image Title" />
                                </div>
                                <a class="product-link" href="#"></a>
                                <div class="product-caption">
                                    <ul class="product-caption-rating">
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                        <li class="rated"><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-caption-title">{!! $product->name !!}</h5>
                                    <div class="product-caption-price"><span class="product-caption-price-new">${!! number_format($product->data->price,2) !!}</span>
                                    </div>
                                    {{--<ul class="product-caption-feature-list">--}}
                                        {{--<li>2 left</li>--}}
                                        {{--<li>Free Shipping</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>

</div>
        @endsection