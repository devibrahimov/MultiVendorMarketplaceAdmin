@extends('site.index')

@section('css')

@endsection


@section('content')
    <!-- BANNER WRAPPER -->
    <div class="banner-wrapper pt-3 pb-3">
        <div class="container">

            <div class="mobile-login row d-flex d-md-none">
                <div class="col-6">
                    <button class="market btn w-100">
                        <i class="fas fa-store"></i>
                        <span>
                                <span>Mağaza</span>
                                <a href="register-market.html">Qeydiyyat</a>
                                /
                                <a href="login-one.html">Giriş</a>
                            </span>
                    </button>
                </div>
                <div class="col-6">
                    <button class="user btn w-100">
                        <i class="fas fa-user"></i>
                        <span>
                                <span>İstifadəçi</span>
                                <a href="register-user.html">Qeydiyyat</a> /
                                <a href="login-one.html">Giriş</a>
                            </span>
                    </button>
                </div>
            </div>

            <div class="row mt-3 mb-3 my-search">
                <div class="form-group mb-0 icon-input me-2">
                    <i class="feather-search font-sm text-grey-400"></i>
                    <input type="text" placeholder="Start typing to search.."
                           class="lh-38 ps-5 pe-3 font-xssss fw-500 rounded-xl posr w-100">
                </div>
            </div>

            <div class="row">
                <div class="my-menu col-lg-3 pe-0 lower-header d-none d-lg-block">
                    <ul class="dropdown-menu show w-100 posr h-100 py-2 shadow-none border rounded-6">
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-dog"></i>İtlər <span
                                    class="alert-warning text-warning">NEW</span></a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-cat"></i>Pişiklər </a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-dove"></i>Quşlar
                                <span class="alert-success text-success">Offer</span></a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fab fa-wolf-pack-battalion"></i>Canavarlar</a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-horse-head"></i>Atlar</a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-fish"></i>Balıqlar</a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-dove"></i>Household Needs </a></li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-dove"></i>Meats &amp; Seafood </a>
                        </li>
                        <li class="px-3"><a class="dropdown-item dropdown-toggle" href="#"><i
                                    class="fas fa-dove"></i>Fruits &amp; Vegetables
                            </a></li>
                    </ul>
                    <div class="overlay border">
                        <a href="" class="sub-menu-name"></a>
                        <ul class="sub-menu">

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="owl-carousel slider-banner banner-wrap owl-theme ovh nav-none owl-arrow-center arrow-container">
                        <div class="item rounded-6 bg-image-cover ovh style3 d-flex justify-content-start"
                             style="background-image: url(https://via.placeholder.com/738x450.jpg);">
                            <div class="slide-content text-left w-75">
                                <span class="text-grey-700">All natural products</span>
                                <h2 class="text-grey-900"><b>Healty Food Pure</b> Orgomart Market</h2>
                                <p class="text-grey-600">Orgomart food is food produced by methods that comply with
                                    the standard of farming.</p>
                                <div class="clearfix"></div>
                                <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="item rounded-6 bg-image-cover ovh style3 d-flex justify-content-start"
                             style="background-image: url(https://via.placeholder.com/738x450.jpg);">
                            <div class="slide-content text-left w-75">
                                <span class="text-grey-700">All natural products</span>
                                <h2 class="text-grey-900"><b class="d-block">Special offer </b>of the week</h2>
                                <p class="text-grey-600">Orgomart food is food produced by methods that comply with
                                    the standard of farming.</p>
                                <div class="clearfix"></div>
                                <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3 ps-lg-0 d-none d-lg-block d-xs-block sm-mt-3">
                    <div class="card w-100 border-0 shadow-none mb-0 ovh rounded-6 hover-zoom-image">
                        <img src="https://via.placeholder.com/260x397.jpg" alt="" class="w-100">
                        <div class="p-4 posa top-0 w-100">
                                <span
                                    class="fw-700 ls-3 text-white bg-current ps-2 pe-2 lh-24 rounded-6 d-inline-block font-xsssss">30%
                                    OFF</span>
                            <h4 class="font-md fw-700 lh-28 text-grey-900 mb-1 mt-3 ls-0">High Quality <br> Products
                            </h4>
                            <a href="#"
                               class="fw-700 ls-1 border-bottom border-dark lh-20 d-inline-block text-grey-900 font-xsssss">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 pe-2">
                    <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4"
                         style="background-image: url(https://via.placeholder.com/400x250.jpg);">
                        <div class="p-0 pe-3 mt-auto w-100">
                            <span class="fw-700 ls-3 text-current font-xsssss">30% OFF</span>
                            <h4 class="font-sm fw-700 lh-2 text-grey-900 mb-3">Fresh <br> vegitable</h4>
                            <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 pe-2 ps-2">
                    <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4"
                         style="background-image: url(https://via.placeholder.com/400x250.jpg);">
                        <div class="p-0 pe-3 mt-auto w-100">
                            <span class="fw-700 ls-3 text-current font-xsssss">30% OFF</span>
                            <h4 class="font-sm fw-700 lh-2 text-grey-900 mb-3">Healty <br> vegitable</h4>
                            <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss">SHOP NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 ps-2">
                    <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4"
                         style="background-image: url(https://via.placeholder.com/400x250.jpg);">
                        <div class="p-0 pe-3 mt-auto w-100">
                            <span class="fw-700 ls-3 text-current font-xsssss">30% OFF</span>
                            <h4 class="font-sm fw-700 lh-2 text-grey-900 mb-3">Bread <br> 50% OFF</h4>
                            <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss">SHOP NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BANNER WRAPPER -->
    <!-- DEAL OF THE DAY -->
    <div class="product-wrapper pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="fw-700 font-sm mb-4 mt-2 d-flex lh-18">Best Products <a href="#" class="ms-auto text-grey-500 fw-600 text-uppercase font-xsssss border-bottom ls-3">view all</a></h4>
                </div>
            </div>
            <div class="border rounded-6 ovh bg-white">
                <div class="row">
                    <div class="col-lg-4 pe-md-0 ps-xs-0">
                        <div class="card w-100 border-0 rounded-0 shadow-none h-md-250">
                            <div class="owl-carousel owl-theme product-banner owl-dot-nav owl-arrow-center owl-arrow-none overflow-visible">
                                <div class="item"><img src="https://via.placeholder.com/351x430.png" alt="banner" class="w-100"></div>
                                <div class="item"><img src="https://via.placeholder.com/351x430.png" alt="banner" class="w-100"></div>
                            </div>
                            <div class="p-4 posa bottom-0 w-100 z-index-5">
                                <span class="fw-700 ls-3 text-white bg-current ps-2 pe-2 lh-24 rounded-6 d-inline-block font-xsssss">30% OFF</span>
                                <h4 class="font-xs fw-700 lh-28 text-grey-900 mb-2 mt-2 ls-0">Daily <br>Meal Discount</h4>
                                <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss border-bottom border-dark lh-22 d-inline-block">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="card w-100 p-4 border-0 rounded-0 bg-white pb-3 border-bottom-sm">
                            <ul class="list-group border-0 mt-1">
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Biscuits &amp; Snacks</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Breads &amp; Bakery</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Breakfast &amp; Dairy</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Frozen Foods</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Fruits &amp; Vegetables</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Grocery &amp; Staples</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Household Needs</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Meats &amp; Seafood</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Eggs Substitutes</a></li>
                                <li class="list-group-item border-0 p-0 lh-30"><a href="#" class="font-xssss text-grey-600 fw-500">Honey Vegetables</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-start border-bottom rounded-0 posr">
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-start border-bottom rounded-0 posr">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-danger fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">DEAL</span>
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted Donuts Each Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-start border-bottom rounded-0 posr">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-4"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Natures Own 100% Wheat</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-start rounded-0 posr border-bottom-xs">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">15% off</span>
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-4 pt-1 pb-3"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Tailgater Ham Sandwich Orgomart</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6  border-start rounded-0 posr">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">20% off</span>
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-4 pt-1 pb-3"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Kobita Almonds Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-6 p-4 border-start rounded-0 posr">
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30% off</span>
                                <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-4"><i class="feather-heart font-md text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 mt-3 mb-3 d-inline-block p-4 pt-1 pb-3"></a>
                                <div class="star d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product.html" class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Apple Juice Orgomart <br> Food</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span class="font-xsssss text-grey-500">$</span>29 <span class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEAL OF THE DAY -->


    <div class="main-wrap pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="card border-0 banner-wrap bg-image-cover bg-image-center"
                         style="background-image: url(https://via.placeholder.com/795x220.png);">
                        <div class="slide-content style4 text-center w-100">
                            <span class="text-current">All natural products</span>
                            <h2 class="text-grey-900"><b class="d-block">SUMMER DISCOUNT </b>of the week</h2>
                            <div class="clearfix"></div>
                            <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrap pt-4">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <h4 class="fw-700 font-xs mb-4 mt-2">Deal of the day</h4>
                </div>

                <div class="col-lg-12 mt-4">
                    <div class="product-wrap border rounded-6 ">
                        <div class="row m-0">
                            <div class="col col-xs-6 border-end p-0">
                                <div class="p-3 rounded-0 posr border-bottom">
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond
                                            Almonds Lightly Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                                <div class="p-3 rounded-0 posr">
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond
                                            Almonds Lightly Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                            </div>
                            <div class="col col-xs-6 border-end p-0">
                                <div class="p-3 rounded-0 posr border-bottom">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-danger fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">DEAL</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted
                                            Donuts Each Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                                <div class="p-3 rounded-0 posr">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30%
                                            off</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-4"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Natures Own
                                            100% Wheat</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                            </div>
                            <div class="col-3 border-end p-0 d-none d-lg-block">
                                <div class="p-4 p-xl-5 rounded-0 posr">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-warning fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">Trend</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-5 mb-5 d-inline-block p-4"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-3 mb-4"><a href="single-product.html"
                                                             class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond
                                            Almonds Lightly Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                    <div class="clearfix mt-5"></div>
                                    <a href="#"
                                       class="btn-lg mt-5 rounded-25 btn bg-current text-uppercase  text-white font-xsssss fw-700 ls-3 p-3 w-100 d-block">Add
                                        to Cart</a>
                                    <a href="#"
                                       class="btn-lg mt-2 rounded-25 btn border-success text-uppercase text-success font-xsssss fw-700 ls-3 p-3 w-100 d-block">Add
                                        to wishlist</a>

                                </div>
                            </div>
                            <div class="col col-xs-6 border-end p-0">
                                <div class="p-3 rounded-0 posr border-bottom">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30%
                                            off</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond
                                            Almonds Lightly Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                                <div class="p-3 rounded-0 posr">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-warning fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">TREND</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted
                                            Donuts Each Salted</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                            </div>
                            <div class="col col-xs-6 p-0">
                                <div class="p-3 rounded-0 posr border-bottom">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-success fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">NEW</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-4"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Natures Own
                                            100% Wheat</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                                <div class="p-3 rounded-0 posr">
                                        <span
                                            class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">22%
                                            off</span>
                                    <a href="#" class="wishlist-btn posa right-0 top-0 mt-3 me-3"><i
                                            class="feather-heart font-md text-grey-500"></i></a>
                                    <div class="clearfix"></div>
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 mt-3 mb-3 d-inline-block p-4 pt-1 pb-3"></a>
                                    <div class="star d-inline text-left">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                        <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="mt-2"><a href="single-product.html"
                                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Tailgater Ham
                                            Sandwich Orgomart</a></h2>
                                    <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                            class="font-xsssss text-grey-500">$</span>29 <span
                                            class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-4 ">
                    <h4 class="fw-700 font-xss mb-3 mt-2">Best Seller</h4>
                    <div class="card border rounded-6 border-light border-size-md">
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted
                                        Donuts Each Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own
                                        Wheat Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 ">
                    <h4 class="fw-700 font-xss mb-3 mt-2">Trend Products</h4>
                    <div class="card border rounded-6 border-light border-size-md">
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds
                                        Sweet & Salty Kettle Corn</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted
                                        Donuts Each Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own
                                        Wheat Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mt-4 ">
                    <h4 class="fw-700 font-xss mb-3 mt-2">Featured Products</h4>
                    <div class="card border rounded-6 border-light border-size-md">
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds
                                        Sweet & Salty Kettle Corn</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds
                                        Sweet & Salty Kettle Corn</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-content p-3 border-bottom border-light border-size-md">
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <a href="#" class="d-block text-center"><img
                                            src="https://via.placeholder.com/171x148.png" alt="product-image"
                                            class="w-100 d-inline-block pt-2 rounded-6"></a>
                                </div>
                                <div class="col-sm-8 col-xs-8 ps-0">
                                        <span
                                            class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product.html"
                                       class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted
                                        Donuts Each Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
