@extends('site.index')

@section('css')

@endsection


@section('content')
    <!-- SINGLE PRODUCT WRAPPER -->
    <div class="product-wrapper product-card pb-5 pt-lg-5 pt-3 md-mt-6">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-6 col-sm-6 sm-mb-3">
                    <div class="card text-center border-0 w-100 ovh">
                        <div class="owl-carousel product-banner owl-theme overflow-hidden overflow-visible-xl nav-none owl-dots-none owl-arrow-center">
                            @foreach(json_decode($product->images) as $image)
                            <div class="item  text-center d-block me-0" style="background-color: rgb(193 193 193/8%)
                            !important">
                                <img  style="height: 400px;object-fit: contain" src="/uploads/{{$image}}"
                                      alt="{{$product->name}}"
                                     title="{{$product->name}}"
                            class="   d-inline-block">   </div>
                          @endforeach
                        </div>
                    </div>
                    <div class="card text-center border-0 w-100 mt-3 justify-content-center flex-row">
                          @foreach(json_decode($product->images) as $image)
                        <a href="#" class="d-inline-block m-1">
                            <img src="/uploads/{{$image}}" alt="product"  style="width:60px;height:60px;object-fit:
                            cover"
                                 class="  border">
                        </a>
                     @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card border-0">

                        <ul class="breadcrumb-link list-inline">
                            <li class="list-inline-item"><a href="https://klbtheme.com/bacola">Home</a></li>
                            <li class="list-inline-item"><a href="https://klbtheme.com/bacola/product-category/meats-seafood/">Meats &amp; Seafood</a></li>
                            <li class="list-inline-item">Wheat Maida</li>
                        </ul>
                        <h2 class="fw-700 text-grey-800 font-sm ls-0 mt-0 mb-2 tag-name lh-3">Orgomart Wheat Maida</h2>
                        <div class="star d-inline text-left">
                            <i class="fas fa-star w-10 me-2  float-start text-yellow"></i>
                            <i class="fas fa-star w-10 me-2  float-start text-yellow"></i>
                            <i class="fas fa-star w-10 me-2  float-start text-yellow"></i>
                            <i class="fas fa-star w-10 me-2  float-start text-yellow"></i>
                            <i class="fas fa-star w-10 me-2  float-start"></i>
                        </div>
                        <div class="clearfix"></div>

                        <h6 class="font-lg ls-3 fw-700 text-current float-start mt-3 mb-3">

                            <span class="font-xssss text-grey-500"></span>{{$product->sale_price}}<span style="font-size: small;">azn</span>

                            <span class="tag-weight">500 gm</span>

                        </h6>
                        <div class="clearfix"></div>
                         <div class="alert-warning text-danger p-2 text-center w-100 font-xssss fw-600 rounded-6 mb-4">Out of Stock</div>

                        <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3">
                            <b class="text-grey-700">Ölçü:</b>
                        </h5>
                        <style>

                            .tag-stock .check{

                                bottom: -35px!important;
                                color: #121212;
                            }
                        </style>
                        <span class="tag-stock  mb-4"><b class="text-current">41</b>
                            <i class="check d-none fas fa-check"></i></span>
                        <span class="tag-stock  mb-4"><b class="text-current">42</b>
                            <i class="check fas fa-check"></i></span>
                        <span class="tag-stock  mb-4"><b class="text-current">43</b>
                            <i class="check d-none fas fa-check"></i></span>
                        <span class="tag-stock  mb-4"><b class="text-current">44</b>
                            <i class="check d-none fas fa-check"></i></span>
                        <span class="tag-stock  mb-4"><b class="text-current">45</b>
                            <i class="check d-none fas fa-check"></i></span>


                        <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3">
                            <b class="text-grey-700">Rəng:</b>
                        </h5>
                        <style>
                            .productcolor{
                                width: 35px;
                                height: 35px;
                                border-radius: 5px;
                                font-size: 12px;
                                font-weight: 500;
                                display: inline-block;
                                text-align: center;
                            }

                            .productcolor .check{
                                position: relative;
                                bottom: -35px!important;
                                color: #121212;
                                margin-top: 10px;
                            }
                            .selectedcolor{
                                border: 1px solid black;
                                border-radius: inherit;
                                padding: 3px;
                            }
                        </style>

                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#a30101;">
                            <i class="check  fas fa-check"></i></span>
                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#24a301;">
                            <i class="check  fas fa-check"></i></span>
                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#0160a3;">
                            <i class="check selectedcolor fas fa-check"></i></span>
                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#ffffff;">
                            <i class="check fas fa-check"></i></span>
                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#2f01a3;">
                            <i class="check  fas fa-check"></i></span>


                        <h5 class="font-xssss fw-500 text-grey-500 mt-4 d-flex"><i class="feather-bookmark font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">2 Month</b> Brand Warranty </h5>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex"><i class="feather-help-circle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">100% </b> Orgomart Product</h5>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex mb-4"><i class="feather-alert-triangle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">30 Days </b> Money back Return</h5>
                        <div class="cart-card d-flex border-0">
                            <div class="cart-count float-end me-2">
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" class="open-font cart-input" value="1">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <a href="#" class="bg-current text-white rounded-6 btn-cart">ADD to Cart</a>
                        </div>
                        <div class="share-card d-flex mt-lg-5 mt-3">
                            <h5 class="fw-600 text-grey-700 me-3 mt-2 lh-26 font-xssss">Share :</h5>
                            <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-facebook"><i class="ti-facebook text-white"></i></a>
                            <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-twiiter"><i class="ti-twitter-alt text-white"></i></a>
                            <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-linkedin"><i class="ti-linkedin text-white"></i></a>
                            <a href="#" class="btn-round btn-round-md ms-1 z-index-1 bg-instagram"><i class="ti-instagram text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-5 d-none d-lg-block">
                    <a href="#" class="d-inline-block"><img src="https://via.placeholder.com/225x500.jpg" alt="add-banner" class="rounded-6 ovh w-100"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- SINGLE PRODUCT WRAPPER -->

       <!-- RELATED PRODUCT -->
    <div class="related-product pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Məhsul Hakkında</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Xüsusiyyətləri</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Alıcı Şərhləri</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane p-3 fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            {!! $product->description !!}
        </div>
        <style>
            .detail-attr-container {
                display: flex;
                flex-wrap: wrap;
            }
             .detail-attr-container .detail-attr-item {
                width: 46.6%;
                margin: 10px 10px 10px 0;
                padding: 0 14px 1px 15px;
                border-radius: 6px;
                box-shadow: 0 1px 4px #0000000d;
                background-color: #fafafa;
                min-height: 42px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .detail-attr-container .detail-attr-item span {
                font-size: 14px;
                line-height: 2.5;
                color: #333;
            }  .detail-attr-container .detail-attr-item span {
                 font-size: 14px;
                 line-height: 2.5;
                 color: #333;
             }
        </style>
        <div class="tab-pane p-3  fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <ul class="detail-attr-container">
                <li class="detail-attr-item"><span>Materyal</span> <span><b>Ahşap</b></span></li>
                <li class="detail-attr-item"><span>Model</span> <span><b>Sehpalı Lambaderler</b></span></li>
                <li class="detail-attr-item"><span>Renk</span> <span><b>Kahverengi</b></span></li>
                <li class="detail-attr-item"><span>Avize Başlık Sayısı</span> <span><b>2</b></span></li>
                <li class="detail-attr-item"><span>Duy Tipi</span> <span><b>E27</b></span></li>
            </ul>
        </div>
        <div class="tab-pane p-3 fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>
      </div>
            </div>
        </div>
    </div>
    <!-- RELATED PRODUCT -->
    <!-- RELATED PRODUCT -->
    <div class="related-product pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="fw-700 font-xss mb-4 mt-2">Related Products</h4>
                </div>
                <div class="col-lg-12">
                    <div class="related-product-slider border">
                        <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top">
                            <div class="owl-items card rounded-0 border-0 p-3">

                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-items card rounded-0 border-0 p-3">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-items card rounded-0 border-0 p-3">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-items card rounded-0 border-0 p-3">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-items card rounded-0 border-0 p-3">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-items card rounded-0 border-0 p-3">

                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RELATED PRODUCT -->

@endsection

@section('js')

@endsection
