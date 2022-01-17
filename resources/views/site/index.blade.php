<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orgomart - Grocery Store HTML Template</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/site/images/favicon.ico">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/site/css/style.css">
    <link rel="stylesheet" href="/site/toastr-notification/toastr.min.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')
</head>

{{--<body class="color-theme-green mont-font" style="background-image: url(https://via.placeholder.com/1960x3000.jpg);">--}}
<body class="color-theme-green mont-font" style="background-image: url(https://img5.lalafo.com/i/banners/70/4d/ab/67fd6d2e307e3c14cfb14d2fd1.jpg);">

<div class="preloader"></div>
<!-- main wrapper  -->
<div class="main-wrapper home center-wrap overflow-hidden">
@include('site.layouts.header')
  @yield('content')
@include('site.layouts.footer')
</div>



{{--MOBIL MENU --}}
<!-- MENU MODAL -->
<div class="modal fade left modal-scrollable" id="menumodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
            <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-4 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body vw100 text-start p-0 h-100">
                <div class="card p-4 border-0 text-start h-100 ">
                    <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 d-block ls-0"> Menu</h4>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Əsas Səhifə</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="shop-list-1.html">Shop </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html">Dashboard</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="single-product-1.html">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Pages</a>
                        </li>
                    </ul>
                    <div class="card h-auto mt-auto p-4 w-100 rounded-10 theme-bg border-0 text-center bg-image-cover"
                         style="background-image: url(https://via.placeholder.com/1071x319.png);">
                        <div class="card-body text-center p-2 mb-2">
                            <h4 class="text-grey-900 white-text mb-3 font-xs fw-500">Hesabında<b
                                    class="text-grey-900 white-text"> Deyilsən ?</b></h4>
                            <a href="login-one.html"
                               class="btn rounded-25 bg-current white-text text-white w-150">Daxil Ol</a>
                            <a href="register-one.html"
                               class="btn rounded-25 bg-current white-text text-white w-200 mt-1">Qeydiyyatdan
                                Keç</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MENU MODAL-->


<!-- SAVED MODAL -->
<div class="modal fade right modal-scrollable" id="savedmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
        <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
            <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="cart-box vh-100">
                <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                    <div class="card w-100 p-4 pb-0 border-0 text-start">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Saved</h4>
                        <div class="row mb-3">
                            <div class="col-md-5 col-xs-5">
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                   data-bs-target="#productmodal"><img
                                        src="https://via.placeholder.com/171x148.png" alt="product-image"
                                        class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                            </div>
                            <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                <a href="single-product-1.html"
                                   class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                    Almonds Lightly Salted</a>
                                <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                        class="font-xsssss text-grey-500">$</span>29 </h6>
                                <a href="#"
                                   class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                    to cart</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5 col-xs-5">
                                <a href="#" class="d-block text-center"><img
                                        src="https://via.placeholder.com/171x148.png" alt="product-image"
                                        class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                            </div>
                            <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                <a href="single-product-1.html"
                                   class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                    Almonds Lightly Salted</a>
                                <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                        class="font-xsssss text-grey-500">$</span>49 </h6>
                                <a href="#"
                                   class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                    to cart</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5 col-xs-5">
                                <a href="#" class="d-block text-center"><img
                                        src="https://via.placeholder.com/171x148.png" alt="product-image"
                                        class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                            </div>
                            <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">100gm</span>
                                <a href="single-product-1.html"
                                   class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                    Almonds Lightly Salted</a>
                                <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                        class="font-xsssss text-grey-500">$</span>99 </h6>
                                <a href="#"
                                   class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                    to cart</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5 col-xs-5">
                                <a href="#" class="d-block text-center"><img
                                        src="https://via.placeholder.com/171x148.png" alt="product-image"
                                        class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                            </div>
                            <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                <a href="single-product-1.html"
                                   class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                    Almonds Lightly Salted</a>
                                <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                        class="font-xsssss text-grey-500">$</span>39 </h6>
                                <a href="#"
                                   class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                    to cart</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5 col-xs-5">
                                <a href="#" class="d-block text-center"><img
                                        src="https://via.placeholder.com/171x148.png" alt="product-image"
                                        class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                            </div>
                            <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                <a href="single-product-1.html"
                                   class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                    Almonds Lightly Salted</a>
                                <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                        class="font-xsssss text-grey-500">$</span>39 </h6>
                                <a href="#"
                                   class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                        <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn">Cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Category Menu for mobile and tablet  -->

<div class="mobile-overlay">
    <div class="mobile-menu">
        <div class="logo">
            <a href="index.html" class="nav-link">FARM</a>
        </div>
        <button class="close-btn"><i class="ti ti-close"></i></button>

        <ul class="categories posr h-100 mt-3">
            <li><img src="https://yaaz.az/wp-content/uploads/2016/11/92618716_7fb38fd1-387d-48bf-b24d-7dd91bb8e8f6.jpg" alt="">
                <div class="category-name"><a class="" href="#">Pişiklər</a><span>Pişik mamaları, pişik yuvaları,
                            pişik oyuncağı</span> </div>
            </li>
            <li><i class="fas fa-dog"></i>
                <div class="category-name"><a class="" href="#">İtlər</a><span>İt mamaları, İt yuvaları, İt
                            oyuncağları</span> </div>
            </li>
            <li><i class="fas fa-fish"></i>
                <div class="category-name"><a class="" href="#">Balıqlar</a><span>Lorem ipsum dolor sit amet
                            consectetur.</span> </div>
            </li>
            <li><i class="fas fa-dove"></i>
                <div class="category-name"><a class="" href="#">Quşlar</a><span>Lorem ipsum dolor sit amet
                            consectetur.</span> </div>
            </li>
            <li><i class="fas fa-horse"></i>
                <div class="category-name"><a class="" href="#">Atlar</a><span>Lorem ipsum dolor sit amet
                            consectetur.</span> </div>
            </li>
            <li><i class="fas fa-prescription-bottle-alt"></i>
                <div class="category-name"><a class="" href="#">Biscuits &amp; Snacks</a><span>Lorem ipsum dolor sit
                            amet consectetur.</span> </div>
            </li>
            <li><i class="fas fa-prescription-bottle-alt"></i>
                <div class="category-name"><a class="" href="#">Biscuits &amp; Snacks</a><span>Lorem ipsum dolor sit
                            amet consectetur.</span> </div>
            </li>
            <li><i class="fas fa-prescription-bottle-alt"></i>
                <div class="category-name"><a class="" href="#">Biscuits &amp; Snacks</a><span>ipsum dolor sit amet
                            consectetur.</span> </div>
            </li>
            <li><i class="fas fa-prescription-bottle-alt"></i>
                <div class="category-name"><a class="" href="#">Biscuits &amp; Snacks</a><span>Lorem sit amet
                            consectetur.</span> </div>
            </li>
            <li><i class="fas fa-prescription-bottle-alt"></i>
                <div class="category-name"><a class="" href="#">Biscuits &amp; Snacks</a><span>Lorem ipsum dolor sit
                            amet consectetur.</span> </div>
            </li>
        </ul>


        <div class="subcategories">
            <div class="sub-header">
                <div class="back"><i class='bx bx-left-arrow-alt'></i></div>
                <div class="parent-name">Parent Name</div>
            </div>
            <ul class="categories posr h-100 mt-3">
                <li><a class="" href="#">Pişiklər</a></li>
                <li><a class="" href="#">İtlər</a></li>
                <li><a class="" href="#">Balıqlar</a></li>
                <li><a class="" href="#">Quşlar</a></li>
                <li><a class="" href="#">Atlar</a></li>
                <li><a class="" href="#">Biscuits &amp; Snacks</a></li>
                <li><a class="" href="#">Biscuits &amp; Snacks</a></li>
                <li><a class="" href="#">Biscuits &amp; Snacks</a></li>
                <li><a class="" href="#">Biscuits &amp; Snacks</a></li>
                <li><a class="" href="#">Biscuits &amp; Snacks</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Category Menu for mobile and tablet  -->


<!-- SINGLE PRODUCT MODAL -->
<div   class=" modal fade right modal-scrollable" id="productmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
        <div class="modal-content theme-dark-bg border-0 rounded-0">
            <button type="button"
                    class="btn-close z-index-5 font-xsss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-0 me-0"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="cart-box vh-100">
                <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column p-4">
                    <div class="card border-0 w-100 text-center d-inline-block mb-3">
                            <span
                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block rounded-3 posa left-15 top-15 z-index-5">30%
                                off</span>
                        <div
                            class="owl-carousel product-banner owl-theme overflow-hidden nav-none owl-dots-none owl-arrow-center">
                            <div class="item me-0 bg-greylight text-center"><img
                                    src="https://via.placeholder.com/200x400.png" alt="product-image"
                                    class="shadow-none w-150 d-inline-block rounded-6 p-4"></div>
                            <div class="item me-0 bg-greylight text-center"><img
                                    src="https://via.placeholder.com/200x400.png" alt="product-image"
                                    class="shadow-none w-150 d-inline-block rounded-6 p-4"></div>
                        </div>
                    </div>
                    <div class="card border-0 w-100 mt-2">
                        <div class="star d-inline text-left">
                            <img src="/site/images/star.png" alt="star" class="w-12 me-1 float-start">
                            <img src="/site/images/star.png" alt="star" class="w-12 me-1 float-start">
                            <img src="/site/images/star.png" alt="star" class="w-12 me-1 float-start">
                            <img src="/site/images/star.png" alt="star" class="w-12 me-1 float-start">
                            <img src="/site/images/star-disable.png" alt="star" class="w-12 me-2 float-start">
                        </div>
                        <h2 class="fw-700 text-grey-700 font-xss ls-0 lh-26 mt-2 mb-0 pe-lg-5">Blue Diamond Almonds
                            Rice Orgomart Salted</h2>

                        <p class="font-xssss fw-500 mt-3 text-grey-500">Vivamus adipiscing nisl ut dolor dignissim
                            semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora
                            torquent
                        </p>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-1"><b class="text-grey-700">Category:</b>
                            Meats & Seafood </h5>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-1"><b class="text-grey-700">Tags:</b> chicken,
                            natural, Orgomart</h5>

                        <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex"><i
                                class="feather-bookmark font-xs text-current me-2 mt-n1"></i> <b
                                class="text-grey-700 me-1">2 Month</b> Brand Warranty </h5>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex"><i
                                class="feather-help-circle font-xs text-current me-2 mt-n1"></i> <b
                                class="text-grey-700 me-1">100% </b> Orgomart Product</h5>
                        <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex mb-4"><i
                                class="feather-alert-triangle font-xs text-current me-2 mt-n1"></i> <b
                                class="text-grey-700 me-1">30 Days </b> Money back Return</h5>

                        <div class="alert-warning text-danger p-2 text-center w-100 font-xsssss fw-500 rounded-6">
                            Covid-19 Info: We keep delivering.</div>
                        <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn mt-2">ADD to
                            Cart</a>
                        <a href="#" class="w-100 bg-black-08 text-white rounded-6 text-center btn mt-2 mb-3">ADD
                            wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SINGLE PRODUCT MODAL -->



{{--<style>--}}
{{--    .feedbackModal{--}}

{{--        position: absolute;--}}
{{--        bottom: 0px;--}}
{{--        width: 50%;--}}
{{--        height: 75px;--}}
{{--        text-align: center;--}}
{{--        left:10%;--}}
{{--        z-index: 99999999999999;--}}
{{--    }--}}

{{--</style>--}}
{{--<div class="feedbackModal card-body mb-3 bg-lightblue p-4 rounded-10">--}}
{{--    <h4 class="fw-700 mt-2 font-xss text-grey-900 d-flex mb-0">Hurin Seary <span class="bg-primary text-white font-xsssss fw-600 ls-3 p-2 rounded-6 ms-auto">HOME</span></h4>--}}
{{--    <h6 >Manikpur, Thakurpara PO Ital Gacha 2 no Airport Gate <br> Thakur Para United Club, Kolkata <br> West--}}
{{--        Bengal - 700079</h6>--}}
{{--</div>--}}

@yield('shop-create-product-page')

<script src="/site/js/plugin.js"></script>
<script src="/site/toastr-notification/toastr.min.js"></script>

<script src="/site/js/scripts.js"></script>


{{--<script type="text/javascript">--}}
{{--    @if( session()->has('message') )--}}

{{--    var type = "{{session()->get('alert-type','info')}}";--}}

{{--    switch (type) {--}}
{{--        case "success":--}}
{{--            toastr.success("{{session()->get('message')}}");--}}
{{--            break;--}}
{{--        case "info":--}}
{{--            toastr.info("{{session()->get('message')}}");--}}
{{--            break;--}}
{{--        case "warning":--}}
{{--            toastr.warning("{{session()->get('message')}}");--}}
{{--            break;--}}
{{--        case "error":--}}
{{--            toastr.error("{{session()->get('message')}}");--}}
{{--            break;--}}
{{--    }--}}

{{--    @endif--}}

{{--    @if ($errors->any())--}}

{{--    @foreach ($errors->all() as $error)--}}
{{--    console.log( '{{$error}}' );--}}
{{--    toastr.error("HATA MESAJI ! {{$error}}");--}}
{{--    @endforeach--}}
{{--    @endif--}}
{{--</script>--}}
@yield('js')

<script>


    var myJson = $.getJSON("/site/data/db.json", function (data) {
        $(".my-menu>ul>li:nth-child(1)").mouseenter(data, function () {
            $(".overlay>ul>li").remove();
            $.each(data[0].Children, function (i) {
                $(".overlay>ul").append(`<li><a href="">${data[0].Children[i].name}</a></li>`)
            })
            $(".sub-menu-name").text(data[0].name);
            $(".overlay").css("background", data[0].background)

        })

        $(".my-menu>ul>li:nth-child(2)").mouseenter(data, function () {
            $(".overlay>ul>li").remove();
            $.each(data[1].Children, function (i) {
                $(".overlay>ul").append(`<li><a href="">${data[1].Children[i].name}</a></li>`)
            })
            console.log(data[1].name)
            $(".overlay").css("background", data[1].background)
            $(".sub-menu-name").text(data[1].name);

        })
    })



</script>

</body>

</html>
