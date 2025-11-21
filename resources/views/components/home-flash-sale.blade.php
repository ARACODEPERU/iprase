<div>
    <div class="module deals-layout1">
        <div class="head-title">
            <div class="modtitle">
                <span>Flash Sale</span>
                <div class="cslider-item-timer">
                    <div class="product_time_maxprice">

                        <div class="item-time">
                            <div class="item-timer">
                                <div class="defaultCountdown-30"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="viewall" href="?route=product/special">Ver Todos</a>
            </div>
        </div>
        <div class="modcontent">
            <div id="so_deal_1" class="so-deal style1">
                <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no"
                    data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6"
                    data-items_column0="5" data-items_column1="3" data-items_column2="2" data-items_column3="2"
                    data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes"
                    data-hoverpause="yes">


                    @foreach ($products_recommended as $product)
                        <div class="item">
                            <div class="item-inner product-layout transition product-grid">
                                <div class="product-item-container">
                                    <div class="left-block left-b">
                                        {{-- <div class="box-label">
                                            <span class="label-product label-sale">-11%</span>
                                        </div> --}}
                                        <div class="product-image-container second_img">
                                            <a href="{{ route('web_pro_description', $product->id) }}" target="_self"
                                                title="Pastrami bacon">
                                                <img src="{{ $product->image }}"
                                                    class="img-1 img-responsive" alt="{{ $product->name }}">
                                                <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/h2.jpg') }}"
                                                    class="img-2 img-responsive" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="button-group so-quickview cartinfo--left">
                                            <a href="{{ route('web_pro_description', $product->id) }}">
                                                <button type="button" class="addToCart" title="Ver Producto"
                                                    onclick="cart.add('60 ');">
                                                    <span>Ver Producto</span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="caption hide-cont">
                                            <div class="ratings">
                                                <div class="rating-box"> <span class="fa fa-stack"><i
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
                                                <span class="rating-num">( 2 )</span>
                                            </div>
                                            <h4>
                                                <a href="{{ route('web_pro_description', $product->id) }}"
                                                    title="Pastrami bacon" target="_self">
                                                    {{ $product->name }}
                                                </a>
                                            </h4>

                                        </div>
                                        @if ($product->discount > 0)
                                            @php
                                                $new_price = $product->price - $product->discount;
                                            @endphp
                                            <p class="price">
                                                <span class="price-new">S/ {{ number_format($new_price, 2) }}</span>
                                                <span class="price-old">S/ {{ number_format($product->price, 2) }}</span>
                                            </p>
                                        @else
                                            <p class="price">
                                                <span class="price-new">S/ {{ number_format($product->price, 2) }}</span>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block left-b">
                                    <div class="box-label">
                                        <span class="label-product label-sale">-11%</span>
                                    </div>
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Pastrami bacon">
                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/h1.jpg') }}"
                                                class="img-1 img-responsive" alt="image1">
                                            <img src="{{ asset('themes/webpage/image/catalog/demo/product/270/h2.jpg') }}"
                                                class="img-2 img-responsive" alt="image2">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart" title="Más información"
                                            onclick="cart.add('60 ');">
                                            <span>Ver Producto</span>
                                        </button>
                                    </div>
                                    <div class="caption hide-cont">
                                        <div class="ratings">
                                            <div class="rating-box"> <span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <span class="rating-num">( 2 )</span>
                                        </div>
                                        <h4>
                                            <a href="product.html" title="Pastrami bacon" target="_self">
                                                Pastrami bacon
                                            </a>
                                        </h4>

                                    </div>
                                    <p class="price">
                                        <span class="price-new">$85.00</span>
                                        <span class="price-old">$96.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
