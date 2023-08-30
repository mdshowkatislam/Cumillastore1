<main id="main">

    <div class="container ">
        <div class="custom-product">

            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    @foreach ($banner as $slide)
                    <div class="item-slide">
                        <img src="{{ asset('images/MainSliders') }}/{{$slide->image}}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"><b>{{$slide->title}}</b></h2>
                            <span class="subtitle" style="color:white !important;">{{$slide->subtitle}}</span>
                            <p class="sale-info" style="color:white !important;">Only price: <span class="price"
                                    style="color:white !important;">${{$slide->price}}</span></p>
                            <a href="{{$slide->link}}" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!--BANNER-->
            <div class="wrap-banner style-twin-default">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('images/tinybanner/tinybanner-1.png') }}" alt="" width="580"
                                height="190">
                        </figure>
                    </a>
                </div>
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('images/tinybanner/tinybanner-2.png') }}" alt="" width="580"
                                height="190">
                        </figure>
                    </a>
                </div>
            </div>




            <div class="text-center text-white bg-info" style=" display:inline-block; height:35px;width:100%;margin:0;">
                <strong>MAIN PRODUCTS</strong>
            </div>
            <div class="tab-content isotope-grid" id="myTabContent" style="background:red !important;">
                @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
                @endphp
                @if($products)
                @foreach($products as $key=>$product)

                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="detail/{{ $product->id }}">
                                @php
                                $photo=explode(',',$product->gallery);

                                @endphp
                                <img class="default-img" src="{{ $photo[0] }}" alt="{{ $photo[0] }}">
                                <img class="hover-img" src="{{ $photo[0] }}" alt="{{ $photo[0] }}">

                                @if($product->stock<=0) <span class="out-of-stock">Sale out</span>
                                    @elseif($product->condition=='new')
                                    <span class="new">New</span>
                                    @elseif($product->condition=='hot')
                                    <span class="hot">Hot</span>
                                    @else
                                    <span class="price-dec">{{ $product->discount }}% Off</span>
                                    @endif


                            </a>
                            <div class="button-head" style="background:#F6931D;">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#{{ $product->id }}" title="Quick View"
                                        href="#"><i class=" ti-eye"></i><span>Quick view</span></a>

                                    <div class="product-wish">

                                        @if($witems->contains($product->id))
                                        <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i
                                                class="fa fa-heart fill-heart"></i></a>
                                        @else
                                        <a href="#"
                                            wire:click.prevent="addWishlist({{$product->id}}, '{{$product->name}}', {{$product->price}})"><i
                                                class="fa fa-heart"></i></a>
                                        @endif
                                    </div>


                                </div>

                                <div class="product-action-2">
                                    <a href="#" class="btn add-to-cart"
                                        wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->price}})"
                                        style="color:red !important;">Add
                                        to Cart</a>
                                </div>

                            </div>
                        </div>
                        <div class="product-content">
                            <h3>

                                <a href="detail/{{ $product->id }}">{{ $product->name}}</a>
                            </h3>
                            <div class="wrap-price">
                                @php
                                $after_discount=($product->price-($product->price*$product->discount)/100);
                                @endphp
                                <span class="product-price">${{ number_format($after_discount,2) }}</span>
                                <del style="padding-left:4%;">${{ number_format($product->price,2) }}</del>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!--/ End Single Tab -->
                @endif

                <!--/ End Single Tab -->

            </div>
        </div>
    </div>



    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Latest Products</h3>
        <div class="wrap-top-banner" style="display: flex;justify-content: center;">
            <a href="#" class="link-banner banner-effect-2">
                <figure><img src="{{ asset('images/tinybanner/subbanner-1.png') }}" width="100%" height="240" alt="">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-contents">
                    <div class="tab-content-item active" id="digital_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            @foreach ($products as $lproduct)

                            <div class="product product-style-2 equal-elem ">


                                <div class="product-thumnail">
                                    <a href="detail/{{ $lproduct->id }}" title="{{$lproduct->name}}">

                                        <figure>

                                            <img class="hover-img"
                                                src="{{ asset('images/products/') }}/{{$lproduct->image}}" width="800"
                                                height="800" alt="{{$lproduct->name}}">
                                        </figure>
                                    </a>
                                </div>



                                <div class="product-info">
                                    <a href="detail/{{ $lproduct->id }}"
                                        class="product-name"><span>{{$lproduct->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$lproduct->price}}</span>
                                    </div>
                                </div>
                            </div>


                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>featured Items</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(6)->get();
                        @endphp
                        @foreach($product_lists as $product)
                        <div class="col-md-4">
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="list-image overlay">
                                            @php
                                            $photo=explode(',',$product->gallery);

                                            @endphp
                                            <img src="{{$photo[0]}}" alt="{{$photo[0]}}">


                                            <a href="#" class="buy"
                                                wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->price}})">
                                                <i class="fa fa-shopping-bag"></i></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-padding">
                                        <div class="content">
                                            <h4 class="title"><a href="#">{{$product->name}}</a></h4>
                                            <p class="price with-discount">${{number_format($product->discount,2)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Product Categories</h3>
        <div class="wrap-top-banner">
            <a href="#" class="link-banner banner-effect-2">
                <figure><img src="{{ asset('images/tinybanner/subbanner-2.png') }}" width="100%" height="240" alt="">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    @foreach($totalcategories as $key=>$category)

                    <a href="#category_{{$category->id}}"
                        class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->title}}</a>
                    @endforeach
                </div>

                <div class="tab-contents">
                    @foreach ($totalcategories as $key=>$category)
                    <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                            @php
                            $c_products
                            =DB::table('products')->where('categories_id',$category->id)->get()->take($no_of_products);
                            @endphp
                            @foreach ($c_products as $c_product)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail/{{ $product->id }}" title="{{$c_product->name}}">

                                        <figure>
                                            <img src="{{ asset('images/products') }}/{{$c_product->image}}" width="800"
                                                height="800" alt="{{$c_product->name}}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="detail/{{ $product->id }}"
                                        class="product-name"><span>{{$c_product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$c_product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>




    @include('livewire.newsletter-component')

    @if($products)
    @foreach($products as $key=>$product)
    <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="single-slider">


                                    <img src="{{ asset('images/products/') }}/{{$product->image}}">
                                </div>

                            </div>
                            <!-- End Product slider -->
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2>{{$product->name}}</h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">

                                            @php
                                            $rate=DB::table('reviews')->where('product_id',$product->id)->avg('rate');
                                            $rate_count=DB::table('reviews')->where('product_id',$product->id)->count();
                                            @endphp
                                            @for($i=1; $i<=5; $i++) @if($rate>=$i)
                                                <i class="yellow fa fa-star"></i>
                                                @else
                                                <i class="fa fa-star"></i>
                                                @endif
                                                @endfor
                                        </div>
                                        <a href="#"> ({{$rate_count}} customer review)</a>
                                    </div>
                                    <div class="quickview-stock">
                                        @if($product->stock >0)
                                        <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                        @else
                                        <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out
                                            stock</span>
                                        @endif
                                    </div>
                                </div>
                                @php
                                $after_discount=($product->price-($product->price*$product->discount)/100);
                                @endphp
                                <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>
                                    ${{number_format($after_discount,2)}} </h3>
                                <div class="quickview-peragraph">
                                    <p>{!! html_entity_decode($product->short_desc) !!}</p>
                                </div>



                                <div class="wrap-butons">


                                </div>
                                <div class="default-social">
                                    <!-- ShareThis BEGIN -->
                                    <div class="sharethis-inline-share-buttons">
                                        <div class="wrap-social">
                                            <a class="link-socail" href="#"><img
                                                    src="{{ asset('images/other/social-list.png') }}" alt=""></a>
                                        </div>
                                    </div><!-- ShareThis END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif


    @push('styles')






    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-02.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">









    @endpush



    <script>
        var owl = $('.owl2');
	owl.owlCarousel({
		items: 4,
		loop: true,
		margin: 5,
		nave: true,
		autoplay: true,
		autoplayTimeout: 1000,
		autoplayHoverPause: true


	});
	$('.play').on('click', function() {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function() {
		owl.trigger('stop.owl.autoplay')
	})
	owl.on('mousewheel', '.owl-stage', function(e) {
		if (e.deltaY > 0) {
			owl.trigger('next.owl');
		} else {
			owl.trigger('prev.owl');
		}
		e.preventDefault();
	});
    </script>
    </div>
</main>
