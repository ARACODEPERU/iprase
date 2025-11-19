@extends('layouts.webpage')

@section('content')


    <div id="wrapper" class="wrapper-fluid banners-effect-3">


        <!-- Header Container  -->
        <x-header />
        <!-- //Header Container  -->


        <!-- Main Container  -->
        <div class="main-container container">
            <div id="content">

                <x-home-slider />

                <div class="row content-main-w">

                    {{-- Columna Izquierda --}}
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 main-left">
                        <x-home-banner-one />

                        <div class="module product-simple extra-layout1">
                            <h3 class="modtitle">
                                <span>Últimos productos</span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider">
                                    <!-- Begin extraslider-inner -->
                                    <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes"
                                        data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0"
                                        data-items_column00="1" data-items_column0="1" data-items_column1="1"
                                        data-items_column2="1" data-items_column3="1" data-items_column4="1"
                                        data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                        <div class="item ">
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="product.html" target="_self" title="Mandouille short "><img
                                                                src="{{ asset('themes/webpage/image/catalog/demo/product/80/5.jpg') }}"
                                                                alt="Mandouille short"></a>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="product.html" target="_self"
                                                            title="Mandouille short">Mandouille short </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                        <span class="price-old">$76.00 </span>&nbsp;

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="product.html" target="_self" title="Xancetta bresao "><img
                                                                src="{{ asset('themes/webpage/image/catalog/demo/product/80/3.jpg') }}"
                                                                alt="Xancetta bresao"></a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="product.html" target="_self"
                                                            title="Xancetta bresao">Xancetta bresao</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                        <span class="price-old">$89.00 </span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="product.html" target="_self" title="Sausage cowbee "><img
                                                                src="{{ asset('themes/webpage/image/catalog/demo/product/80/4.jpg') }}"
                                                                alt="Sausage cowbee"></a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="product.html" target="_self" title="Sausage cowbee">Sausage
                                                            cowbee</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>

                                                    <div class="content_price price">
                                                        <span class="price product-price">$66.00</span>
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="product.html" target="_self"
                                                            title="Chicken swinesha "><img
                                                                src="{{ asset('themes/webpage/image/catalog/demo/product/80/7.jpg') }}"
                                                                alt="Chicken swinesha"></a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                                            Chicken swinesha
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                        <span class="price-old">$56.00 </span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                        </div>
                                        <div class="item ">
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Qeserunt shortloin ">
                                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/80/1.jpg') }}"
                                                                alt="Qeserunt shortloin">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Qeserunt shortloin">
                                                            Qeserunt shortloin
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price product-price">
                                                            $88.00
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Consecte quichuck ">
                                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/80/3.jpg') }}"
                                                                alt="Consecte quichuck">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Consecte quichuck">
                                                            Consecte quichuck
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                        <span class="price-old">$61.00 </span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Neatball bresaola ">
                                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/80/6.jpg') }}"
                                                                alt="Neatball bresaola">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Neatball bresaola">
                                                            Neatball bresaola
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$65.00 </span>&nbsp;&nbsp;

                                                        <span class="price-old">$71.00 </span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Yutculpa ullamco ">
                                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/80/8.jpg') }}"
                                                                alt="Yutculpa ullamco">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Yutculpa ullamco">
                                                            Yutculpa ullamco
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price">$60.00 </span>&nbsp;&nbsp;
                                                        <span class="price-old">$77.00 </span>&nbsp;
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                        </div>
                                    </div>
                                    <!--End extraslider-inner -->
                                </div>
                            </div>
                        </div>

                        <div class="module">
                            <div class="policy-w">
                                <a href="#">
                                    <img src="{{ asset('themes/webpage/image/catalog/banners/call-us.jpg') }}"
                                        alt="image">
                                </a>
                                <ul class="block-infos">
                                    <li class="info1">
                                        <div class="inner">
                                            <i class="fa fa-file-text-o"></i>
                                            <div class="info-cont">
                                                <a href="#">free delivery</a>
                                                <p>On order over $49.86</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="info2">
                                        <div class="inner">
                                            <i class="fa fa-shield"></i>
                                            <div class="info-cont">
                                                <a href="#">order protection</a>
                                                <p>secured information</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="info3">
                                        <div class="inner">
                                            <i class="fa fa-gift"></i>
                                            <div class="info-cont">
                                                <a href="#">promotion gift</a>
                                                <p>special offers!</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="info4">
                                        <div class="inner">
                                            <i class="fa fa-money"></i>
                                            <div class="info-cont">
                                                <a href="#">money back</a>
                                                <p>return over 30 days</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="module extra">
                            <h3 class="modtitle">
                                <span>Recomendada</span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider">
                                    <!-- Begin extraslider-inner -->
                                    <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes"
                                        data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6"
                                        data-margin="0" data-items_column00="1" data-items_column0="1"
                                        data-items_column1="1" data-items_column2="1" data-items_column3="1"
                                        data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no"
                                        data-buttonpage="top">
                                        <div class="item">
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">

                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self"
                                                                title="Duis aute irure ">
                                                                <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e10.jpg') }}"
                                                                    class="img-1 img-responsive" alt="image1">
                                                                <img src="image/catalog/demo/product/270/e7.jpg"
                                                                    class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                href="quickview.html" title="Quick view"
                                                                data-fancybox-type="iframe"><i
                                                                    class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>
                                                        <!--end quickview-->


                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart"
                                                                onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>
                                                            </button>
                                                            <button type="button" class="wishlist btn-button"
                                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                                    class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button"
                                                                title="Compare this Product "
                                                                onclick="compare.add('60');"><i
                                                                    class="fa fa-retweet"></i><span>Compare this
                                                                    Product</span>
                                                            </button>

                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon"
                                                                    target="_self">Duis aute irure </a></h4>

                                                        </div>
                                                        <p class="price">
                                                            <span class="price-new">$48.00</span>

                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">

                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self"
                                                                title="Excepteur sint occ">
                                                                <img src="image/catalog/demo/product/270/f5.jpg"
                                                                    class="img-1 img-responsive" alt="image1">
                                                                <img src="image/catalog/demo/product/270/f6.jpg"
                                                                    class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                href="quickview.html" title="Quick view"
                                                                data-fancybox-type="iframe"><i
                                                                    class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>
                                                        <!--end quickview-->


                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart"
                                                                onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>
                                                            </button>
                                                            <button type="button" class="wishlist btn-button"
                                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                                    class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button"
                                                                title="Compare this Product "
                                                                onclick="compare.add('60');"><i
                                                                    class="fa fa-retweet"></i><span>Compare this
                                                                    Product</span>
                                                            </button>

                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon"
                                                                    target="_self">Excepteur sint occ</a></h4>

                                                        </div>
                                                        <p class="price">
                                                            <span class="price-new">$90.00</span>

                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">

                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self"
                                                                title="Cenison meatloa">
                                                                <img src="image/catalog/demo/product/270/e3.jpg"
                                                                    class="img-1 img-responsive" alt="image1">
                                                                <img src="image/catalog/demo/product/270/e4.jpg"
                                                                    class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                href="quickview.html" title="Quick view"
                                                                data-fancybox-type="iframe"><i
                                                                    class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>
                                                        <!--end quickview-->


                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart"
                                                                onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>
                                                            </button>
                                                            <button type="button" class="wishlist btn-button"
                                                                title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                                    class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button"
                                                                title="Compare this Product "
                                                                onclick="compare.add('60');"><i
                                                                    class="fa fa-retweet"></i><span>Compare this
                                                                    Product</span>
                                                            </button>

                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon"
                                                                    target="_self">Cenison meatloa</a></h4>

                                                        </div>
                                                        <p class="price">$42.00</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End extraslider-inner -->
                                </div>
                            </div>
                        </div>

                        <div class="module so-latest-blog blog-sidebar">

                            <h3 class="modtitle"><span>Últimas publicaciones</span></h3>
                            <div class="modcontent clearfix">

                                <div class="so-blog-external buttom-type1 button-type1">
                                    <div class="blog-external-simple">
                                        <div class="cat-wrap">
                                            <div class="media">

                                                <div class="item item-1">
                                                    <div class="media-left">
                                                        <a href="#" target="_self">
                                                            <img src="{{ asset('themes/webpage/image/catalog/blog/1.jpg') }}"
                                                                alt="Biten demons lector in henderit in vulp"
                                                                class="media-object">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#"
                                                                title="Biten demons lector in henderit in vulp"
                                                                target="_self">Biten demons lector in henderit in vulp
                                                                nemusa tumps</a>
                                                        </h4>
                                                        <div class="media-content">
                                                            <div class="media-date-added"><i class="fa fa-calendar"></i>
                                                                December 4th, 2017</div>
                                                            <div class="media-subcontent">
                                                                <span class="media-comment"><i
                                                                        class="fa fa-comments"></i>0 Comment</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="cat-wrap">
                                            <div class="media">

                                                <div class="item item-2">
                                                    <div class="media-left">
                                                        <a href="#" target="_self">
                                                            <img src="{{ asset('themes/webpage/image/catalog/blog/2.jpg') }}"
                                                                alt="Commodo laoreet semper tincidun sit"
                                                                class="media-object">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#" title="Commodo laoreet semper tincidun sit"
                                                                target="_self">Commodo laoreet semper tincidun sit dolor
                                                                spums</a>
                                                        </h4>
                                                        <div class="media-content">
                                                            <div class="media-date-added"><i class="fa fa-calendar"></i>
                                                                November 15th, 2017</div>
                                                            <div class="media-subcontent">
                                                                <span class="media-comment"><i
                                                                        class="fa fa-comments"></i>0 Comment</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="module testimonials">
                            <h3 class="modtitle"><span>Testimonios</span></h3>
                            <div class="slider-testimonials">
                                <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes"
                                    data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4"
                                    data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1"
                                    data-items_column1="1" data-items_column2="1" data-items_column3="1"
                                    data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes"
                                    data-hoverpause="yes">
                                    <div class="item">
                                        <div class="img">
                                            <img src="{{ asset('themes/webpage/image/catalog/demo/client/user-1.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <div class="name">Johny Walker</div>
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore”</p>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="{{ asset('themes/webpage/image/catalog/demo/client/user-2.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <div class="name">Jen Nguyen</div>
                                        <p>“Ut enim ad minim veniam, lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sed do eiusmod tempor incidi”</p>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="{{ asset('themes/webpage/image/catalog/demo/client/user-3.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <div class="name">Vin Jame</div>
                                        <p>“sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum
                                            dolor sit amet, consectetur adip”</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-home-banner-two />

                    </div>

                    {{-- Columna Derecha --}}
                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 main-right">
                        <x-home-promo-categories />

                        <!-- Deals -->
                        <x-home-flash-sale />
                        <!-- End Deals -->

                        <!-- Banners -->
                        <x-home-banner-group-one />
                        <!-- end Banners -->

                        <!-- Category Slider 1 -->
                        <x-home-products-technology />
                        <!-- end Category Slider 1 -->

                        <!-- Category Slider 2 -->
                        <x-home-products-perfumery />
                        <!-- end Category Slider 2 -->

                        <!-- Category Slider 3 -->
                        <x-home-products-sneakers />
                        <!-- end Category Slider 3 -->

                        <!-- Banners -->
                        <x-home-banner-group-two />
                        <!-- end Banners -->

                        <!-- Listing tabs -->
                        <div class="module listingtab-layout1">
                            <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                <div class="loadeding"></div>
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                        data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5"
                                        data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                        <!--Begin Tabs-->
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected">Bathroom</span> <span
                                                class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="20"
                                                        data-active-content=".items-category-20"> <span
                                                            class="ltabs-tab-label">Más Vendidos</span> </li>
                                                    <li class="ltabs-tab " data-category-id="18"
                                                        data-active-content=".items-category-18"> <span
                                                            class="ltabs-tab-label">Novedades</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->
                                    </div>

                                    <div class="ltabs-items-container products-list grid">
                                        <!--Begin Items-->
                                        <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                            <div class="ltabs-items-inner ltabs-slider">

                                                <div class="item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block left-b">

                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self"
                                                                        title="Ullamco occaeca">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/h1.jpg') }}"
                                                                            class="img-1 img-responsive" alt="image1">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/h7.jpg') }}"
                                                                            class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>
                                                                <!--quickview-->
                                                                <div class="so-quickview">
                                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                        href="quickview.html" title="Quick view"
                                                                        data-fancybox-type="iframe"><i
                                                                            class="fa fa-eye"></i><span>Quick
                                                                            view</span></a>
                                                                </div>
                                                                <!--end quickview-->


                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group so-quickview cartinfo--left">
                                                                    <button type="button" class="addToCart"
                                                                        title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>Add to cart </span>
                                                                    </button>
                                                                    <button type="button" class="wishlist btn-button"
                                                                        title="Add to Wish List"
                                                                        onclick="wishlist.add('60');"><i
                                                                            class="fa fa-heart-o"></i><span>Add to Wish
                                                                            List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button"
                                                                        title="Compare this Product "
                                                                        onclick="compare.add('60');"><i
                                                                            class="fa fa-retweet"></i><span>Compare this
                                                                            Product</span>
                                                                    </button>

                                                                </div>
                                                                <div class="caption hide-cont">
                                                                    <div class="rating"> <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                                            target="_self">Ullamco occaeca </a></h4>

                                                                </div>
                                                                <p class="price">
                                                                    <span class="price-new">$45.00</span>

                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block left-b">

                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self"
                                                                        title="Eiusmod tempor incid">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e3.jpg') }}"
                                                                            class="img-1 img-responsive" alt="image1">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e8.jpg') }}"
                                                                            class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>
                                                                <!--quickview-->
                                                                <div class="so-quickview">
                                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                        href="quickview.html" title="Quick view"
                                                                        data-fancybox-type="iframe"><i
                                                                            class="fa fa-eye"></i><span>Quick
                                                                            view</span></a>
                                                                </div>
                                                                <!--end quickview-->


                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group so-quickview cartinfo--left">
                                                                    <button type="button" class="addToCart"
                                                                        title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>Add to cart </span>
                                                                    </button>
                                                                    <button type="button" class="wishlist btn-button"
                                                                        title="Add to Wish List"
                                                                        onclick="wishlist.add('60');"><i
                                                                            class="fa fa-heart-o"></i><span>Add to Wish
                                                                            List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button"
                                                                        title="Compare this Product "
                                                                        onclick="compare.add('60');"><i
                                                                            class="fa fa-retweet"></i><span>Compare this
                                                                            Product</span>
                                                                    </button>

                                                                </div>
                                                                <div class="caption hide-cont">
                                                                    <div class="rating"> <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                                            target="_self">Eiusmod tempor incid</a></h4>

                                                                </div>
                                                                <p class="price">
                                                                    <span class="price-new">$76.00</span>

                                                                </p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block left-b">

                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self"
                                                                        title="Duis aute irure ">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e4.jpg') }}"
                                                                            class="img-1 img-responsive" alt="image1">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e7.jpg') }}"
                                                                            class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>
                                                                <!--quickview-->
                                                                <div class="so-quickview">
                                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                        href="quickview.html" title="Quick view"
                                                                        data-fancybox-type="iframe"><i
                                                                            class="fa fa-eye"></i><span>Quick
                                                                            view</span></a>
                                                                </div>
                                                                <!--end quickview-->


                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group so-quickview cartinfo--left">
                                                                    <button type="button" class="addToCart"
                                                                        title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>Add to cart </span>
                                                                    </button>
                                                                    <button type="button" class="wishlist btn-button"
                                                                        title="Add to Wish List"
                                                                        onclick="wishlist.add('60');"><i
                                                                            class="fa fa-heart-o"></i><span>Add to Wish
                                                                            List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button"
                                                                        title="Compare this Product "
                                                                        onclick="compare.add('60');"><i
                                                                            class="fa fa-retweet"></i><span>Compare this
                                                                            Product</span>
                                                                    </button>

                                                                </div>
                                                                <div class="caption hide-cont">
                                                                    <div class="rating"> <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                                            target="_self">Duis aute irure </a></h4>

                                                                </div>
                                                                <p class="price">
                                                                    <span class="price-new">$85.00</span>

                                                                </p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block left-b">

                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self"
                                                                        title="Duis aute irure ">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e4.jpg') }}"
                                                                            class="img-1 img-responsive" alt="image1">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e7.jpg') }}"
                                                                            class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>
                                                                <!--quickview-->
                                                                <div class="so-quickview">
                                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                        href="quickview.html" title="Quick view"
                                                                        data-fancybox-type="iframe"><i
                                                                            class="fa fa-eye"></i><span>Quick
                                                                            view</span></a>
                                                                </div>
                                                                <!--end quickview-->


                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group so-quickview cartinfo--left">
                                                                    <button type="button" class="addToCart"
                                                                        title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>Add to cart </span>
                                                                    </button>
                                                                    <button type="button" class="wishlist btn-button"
                                                                        title="Add to Wish List"
                                                                        onclick="wishlist.add('60');"><i
                                                                            class="fa fa-heart-o"></i><span>Add to Wish
                                                                            List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button"
                                                                        title="Compare this Product "
                                                                        onclick="compare.add('60');"><i
                                                                            class="fa fa-retweet"></i><span>Compare this
                                                                            Product</span>
                                                                    </button>

                                                                </div>
                                                                <div class="caption hide-cont">
                                                                    <div class="rating"> <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                                            target="_self">Duis aute irure </a></h4>

                                                                </div>
                                                                <p class="price">
                                                                    <span class="price-new">$85.00</span>

                                                                </p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block left-b">

                                                                <div class="product-image-container second_img">
                                                                    <a href="product.html" target="_self"
                                                                        title="Duis aute irure ">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e4.jpg') }}"
                                                                            class="img-1 img-responsive" alt="image1">
                                                                        <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/e7.jpg') }}"
                                                                            class="img-2 img-responsive" alt="image2">
                                                                    </a>
                                                                </div>
                                                                <!--quickview-->
                                                                <div class="so-quickview">
                                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                        href="quickview.html" title="Quick view"
                                                                        data-fancybox-type="iframe"><i
                                                                            class="fa fa-eye"></i><span>Quick
                                                                            view</span></a>
                                                                </div>
                                                                <!--end quickview-->


                                                            </div>
                                                            <div class="right-block">
                                                                <div class="button-group so-quickview cartinfo--left">
                                                                    <button type="button" class="addToCart"
                                                                        title="Add to cart" onclick="cart.add('60 ');">
                                                                        <span>Add to cart </span>
                                                                    </button>
                                                                    <button type="button" class="wishlist btn-button"
                                                                        title="Add to Wish List"
                                                                        onclick="wishlist.add('60');"><i
                                                                            class="fa fa-heart-o"></i><span>Add to Wish
                                                                            List</span>
                                                                    </button>
                                                                    <button type="button" class="compare btn-button"
                                                                        title="Compare this Product "
                                                                        onclick="compare.add('60');"><i
                                                                            class="fa fa-retweet"></i><span>Compare this
                                                                            Product</span>
                                                                    </button>

                                                                </div>
                                                                <div class="caption hide-cont">
                                                                    <div class="rating"> <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i
                                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                                            target="_self">Duis aute irure </a></h4>

                                                                </div>
                                                                <p class="price">
                                                                    <span class="price-new">$85.00</span>

                                                                </p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="ltabs-items items-category-18 grid" data-total="16">
                                            <div class="ltabs-loading"></div>

                                        </div>
                                        <!--End Items-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end Listing tabs -->

                        <!-- Slider Brands -->
                        <x-home-brands />
                        <!-- Slider Brands -->

                    </div>

                </div>
            </div>
        </div>
        <!-- //Main Container -->



        <!-- Footer Container -->
        <x-footer />
        <!-- //end Footer Container -->

    </div>

@stop
