<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting()->title}}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{setting()->favicon}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/site/css/__style.css?v={{rand(0,9999999)}}">
    <link rel="stylesheet" href="/site/toastr-notification/toastr.min.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')

    <style>
        body {
            background-attachment: fixed !important;
            background-position: center 10px !important;
        }

        @media (max-width: 768px) {
            .form-group .style2-input[type="submit"] {
                padding-left: 0 !important;
            }
        }

        .main-wrapper {
            max-width: 1150px !important;
        }

        .form-group .style2-input {
            height: 55px !important;
            line-height: normal;

        }

        .login-card .form-group.icon-input i {
            top: 18px !important;
        }

        .select-location .form-control {
            line-height: 50px !important;
        }

        @media (max-width:768px) {
            .card .row {
                --bs-gutter-x: 6px;
            }

            .form-group .style2-input {
                padding-left: 42px !important;

            }

            .card .row .form-group.icon-input i {
                left: 0px !important;
            }
        }


        .suggestions {
            display: flex;
            flex-direction: column;
            visibility: hidden;
            opacity: 0;
            padding-left: 20px;
            position: absolute;
            left: 0;
            top: 48px;
            width: 540px;
            height: 320px;
            background-color: white;
            border-radius: 2px 2px 5px 5px;
            border: 2px solid #1ca3012a;
            transition: 0.3s ease;
        }

        .suggestions-box {
            display: flex;
            flex-direction: column;
        }

        #clear_suggestions_box {
            cursor: pointer;
            position: absolute;
            top: 6px;
            right: 15px;
        }

        .suggestions.active {
            visibility: visible;
            opacity: 1;
        }

        .header-wrapper {
            z-index: 9999;
        }

        .header-wrapper .form-group input {
            width: 540px !important;
        }

        .upper-header {
            z-index: 9999999;
        }

        .anothernav {
            font-size: 11px;
            font-weight: 600;
            margin-top: 5px;
        }

        .anothernav li a {
            color: #6d6d6d;
        }

        .anothernav li {
            margin-left: 10px;
        }

        @media (max-width: 430px){
            .price {
                transform: scale(1) !important;
                font-size: 14px;
                bottom: 0 !important;
                margin-top: 15px;
            }
            .buy{
                bottom: 17px !important;
                transform: scale(0.9) !important;
            }
        }
        /* .card-text{
            height: 50px !important;
        } */

        .shadow-custom {
            box-shadow: 0.02rem 0.05rem 0.55rem rgb(0 0 0 / 12%) !important;
        }

        .buy{
            bottom: 16px !important;
            padding: 3px 8px !important;
            border-radius: 5px !important;
        }
        .main-div li h4{
            width: 100px;
        }
        .note_list{
            position: absolute;
            top: 30px;
            right: 50px;
            width: 250px;
            height: auto;
            background-color: #fffbbe;
            border-radius: 4px;
        }

        textarea::-webkit-scrollbar {
            width: 5px;
        }

        textarea::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        textarea::-webkit-scrollbar-thumb {
            background-color: #ddd;
            outline: 1px solid transparent;
        }
        .ad-info .categoriya.getsubcat{
            cursor: pointer;
        }
        .ad-info .form-control{
            line-height: normal;
        }

    </style>
</head>

{{--<body class="color-theme-green mont-font" style="background-image: url(https://via.placeholder.com/1960x3000.jpg);">--}}

<body class="color-theme-green mont-font" style="background-image: url('/photos/site/advertisment/allpagesads');">

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
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-4 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body vw100 text-start p-0 h-100">
                    <div class="card p-4 border-0 text-start h-100 ">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 d-block ls-0"> Menu</h4>

                        <ul class="navbar-nav">
                            <li class="nav-item"><a class=" ps-0" href="{{route('trend')}}">Trend Məhsullar</a></li>
                            <li class="nav-item"><a href="{{route('trend')}}">Ən Çox Satanlar</a></li>
                            <li class="nav-item"><a href="{{route('site.shops')}}"  >Mağazalar</a></li>
                            <li class="nav-item"><a href="{{route('site.products')}}">Bütün Məhsullar</a></li>
                            <li class="nav-item"><a href="#">Xəritələr</a></li>
                            <li class="nav-item">
                                <a href="{{route('selectedProducts')}}">Seçilmiş Məhsullar</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('searchedProducts')}}">Axtarılan Məhsullar</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU MODAL-->

    @auth('user')
    <!-- SAVED MODAL -->
    <div class="modal fade right modal-scrollable" id="cartmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Səbətim</h4>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="#" class="d-block text-center" data-bs-toggle="modal" data-bs-target="#productmodal"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>49 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">100gm</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>99 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5">
                                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a>
                                </div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html" class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#" class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
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
    @endauth


    <!-- Category Menu for mobile and tablet  -->





    <div class="mobile-overlay">
        <div class="mobile-menu">
            <div class="logo">
                <a href="index.html" class="nav-link">FARM</a>
            </div>
            <button class="close-btn"><i class="ti ti-close"></i></button>

            <ul class="categories posr h-100 mt-3" id="mobilcategories">

            </ul>


            <div class="subcategories" id="mobilesubCategoriesMenuList">



            </div>
        </div>
    </div>

    <!-- Category Menu for mobile and tablet  -->


    <!-- SINGLE PRODUCT MODAL -->
    <div class=" modal fade right modal-scrollable" id="productmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg border-0 rounded-0">
                <button type="button" class="btn-close z-index-5 font-xsss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-0 me-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column p-4">
                        <div class="card border-0 w-100 text-center d-inline-block mb-3">
                            <span class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block rounded-3 posa left-15 top-15 z-index-5">30%
                                off</span>
                            <div class="owl-carousel product-banner owl-theme overflow-hidden nav-none owl-dots-none owl-arrow-center">
                                <div class="item me-0 bg-greylight text-center"><img src="https://via.placeholder.com/200x400.png" alt="product-image" class="shadow-none w-150 d-inline-block rounded-6 p-4"></div>
                                <div class="item me-0 bg-greylight text-center"><img src="https://via.placeholder.com/200x400.png" alt="product-image" class="shadow-none w-150 d-inline-block rounded-6 p-4"></div>
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

                            <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex"><i class="feather-bookmark font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">2 Month</b> Brand Warranty </h5>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex"><i class="feather-help-circle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">100% </b> Orgomart Product</h5>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex mb-4"><i class="feather-alert-triangle font-xs text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">30 Days </b> Money back Return</h5>

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
    {{-- .feedbackModal{--}}

    {{-- position: absolute;--}}
    {{-- bottom: 0px;--}}
    {{-- width: 50%;--}}
    {{-- height: 75px;--}}
    {{-- text-align: center;--}}
    {{-- left:10%;--}}
    {{-- z-index: 99999999999999;--}}
    {{-- }--}}

    {{--</style>--}}
    {{--<div class="feedbackModal card-body mb-3 bg-lightblue p-4 rounded-10">--}}
    {{-- <h4 class="fw-700 mt-2 font-xss text-grey-900 d-flex mb-0">Hurin Seary <span class="bg-primary text-white font-xsssss fw-600 ls-3 p-2 rounded-6 ms-auto">HOME</span></h4>--}}
    {{-- <h6 >Manikpur, Thakurpara PO Ital Gacha 2 no Airport Gate <br> Thakur Para United Club, Kolkata <br> West--}}
    {{-- Bengal - 700079</h6>--}}
    {{--</div>--}}

    @yield('shop-create-product-page')

    <script src="/site/js/plugin.js"></script>
    <script src="/site/toastr-notification/toastr.min.js"></script>

    <script src="/site/js/_scripts.js"></script>




    <script>

        $(document).ready(function(){

            let allcategories = {!!json_encode(\App\Models\Category::all(), JSON_UNESCAPED_UNICODE)!!}

            parentCategoriesJson = allcategories.filter(c => c.parent_id == null)

            for (var i = 0; i < parentCategoriesJson.length; i++) {
                let category = parentCategoriesJson[i];
                let li = `<li class="px-3 categoruItem" data-id="${category.id}">
                        <a class="dropdown-item dropdown-toggle" href="#"> <img style="width: 18px;height: 18px"
                        src="${category
                    .icon}" alt="">
                          ${category.name}</a> </li>`;
                $('#categories').append(li)
            }

            $(".categoruItem").mouseenter(function () {
                dataId = $(this).attr('data-id')

                subCategoriesJson = allcategories.filter(sc => sc.parent_id == dataId)

                subCartegoriesHTML = '';
                if(subCategoriesJson.length != 0 ){

                    for (var i = 0; i < subCategoriesJson.length; i++) {
                        let category = subCategoriesJson[i];

                        //console.log( category.name)
                        subCartegoriesHTML +=' <div class="sub_menu_list mb-2" style="grid-row-end: span 4;">' +
                            '<a href="" class="sub-menu-name font-xsss fw-600 text-current">'+category.name+'</a>' ;
                        subCartegoriesHTML += '<ul class="sub-menu">';

                        secondSubCategoriesJson = allcategories.filter(secondSC => secondSC.parent_id ==  category.id)
                        for (var a = 0; a < secondSubCategoriesJson.length; a++) {
                            let subcategory = secondSubCategoriesJson[a];

                            //   console.log('---'+subcategory.name)
                            url = '{{route('categoryProducts',':slug')}}';
                            url = url.replace(':slug', subcategory.slug);
                            subCartegoriesHTML +='<li class="lh-20">'+
                                '<a href="'+url+'" ' +
                                'class="font-xsssss fw-500 text-grey-700">'+subcategory.name+'</a></li>';

                        }//end for (var a = 0; a < secondSubCategoriesJson.length; a++)
                        subCartegoriesHTML += '</ul> </div>';
                    }//end for (var i = 0; i < subCategoriesJson.length; i++)
                }//end if

                $('#subCategoriesMenuList').html(subCartegoriesHTML)
                // console.log(subCartegoriesHTML)
            });




            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

                for (var i = 0; i < parentCategoriesJson.length; i++) {
                    let category = parentCategoriesJson[i];

                    subCategoriesJson = allcategories.filter(sc => sc.parent_id == category.id)
                    subcategoryNames = '';
                    for (var a = 0; a < subCategoriesJson.length; a++) {
                        var subcategory = subCategoriesJson[a];
                        if(a != subCategoriesJson.length-1){
                            subcategoryNames+=subcategory.name+', ' ;
                        }else{
                            subcategoryNames+=subcategory.name  ;
                        }

                    }

                    let li =`<li class="mobilCategoryItem" data-id="${category.id}"><img src="${category.icon}">
                    <div class="category-name"><a class="" href="#">${category.name}</a>
                    <span>${subcategoryNames}</span>
                    </div></li>`;

                    $('#mobilcategories').append(li)
                }


                $(".mobilCategoryItem").mouseenter(function () {
                    dataId = $(this).attr('data-id')

                    subCategoriesJson = allcategories.filter(sc => sc.parent_id == dataId)

                    subCartegoriesHTML = ' <div class="back"><i class="bx bx-left-arrow-alt"> </i> Geri</div>';

                    if(subCategoriesJson.length != 0 ){

                        for (var b = 0; b < subCategoriesJson.length; b++) {
                            let category = subCategoriesJson[b];

                            subCartegoriesHTML+='<div class="sub-header">'+
                                                '<div class="parent-name">'+category.name+'</div> </div>';
                            subCartegoriesHTML += '<ul class="categories posr   mt-3">';

                            secondSubCategoriesJson = allcategories.filter(secondSC => secondSC.parent_id ==  category.id)
                            for (var c = 0; c < secondSubCategoriesJson.length; c++) {
                                let subcategory = secondSubCategoriesJson[c];

                                //   console.log('---'+subcategory.name)
                                url = '{{route('categoryProducts',':slug')}}';
                                url = url.replace(':slug', subcategory.slug);
                                subCartegoriesHTML +='<li >'+
                                    '<a href="'+url+'">'+subcategory.name+'</a></li>';

                            }//end for (var a = 0; a < secondSubCategoriesJson.length; a++)
                            subCartegoriesHTML += '</ul> </div>';
                        }//end for (var i = 0; i < subCategoriesJson.length; i++)
                    }//end if

                    $('#mobilesubCategoriesMenuList').html(subCartegoriesHTML)
                    $("#mobilesubCategoriesMenuList").addClass("active");
                      console.log(subCartegoriesHTML)
                });
                $(document).on("click",'.back', function(){
                    $("#mobilesubCategoriesMenuList").removeClass("active");
                });
            }//endmobiledevice







            //     <div class="sub_menu_list mb-2" style="grid-row-end: span 3;">
            //         <a href="" class="sub-menu-name font-xsss fw-600 text-current">Planşetlər</a>
            //     <ul class="sub-menu">
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Huawei</a>
            //         </li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Samsung</a>
            //         </li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Apple</a></li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Xiaomi</a>
            //         </li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Xiaomi</a>
            //         </li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Xiaomi</a>
            //         </li>
            //         <li class="lh-20"><a href="" class="font-xsssss fw-500 text-grey-700">Xiaomi</a>
            //         </li>
            //     </ul>
            // </div>






            $(".my-menu").mouseenter(function () {
                $(".overlay").addClass("active")
            })

            $(".my-menu").mouseleave(function () {
                $(".overlay").removeClass("active")
            })

        })
    </script>







    {{--<script type="text/javascript">--}}
    {{-- @if( session()->has('message') )--}}

    {{-- var type = "{{session()->get('alert-type','info')}}";--}}

    {{-- switch (type) {--}}
    {{-- case "success":--}}
    {{-- toastr.success("{{session()->get('message')}}");--}}
    {{-- break;--}}
    {{-- case "info":--}}
    {{-- toastr.info("{{session()->get('message')}}");--}}
    {{-- break;--}}
    {{-- case "warning":--}}
    {{-- toastr.warning("{{session()->get('message')}}");--}}
    {{-- break;--}}
    {{-- case "error":--}}
    {{-- toastr.error("{{session()->get('message')}}");--}}
    {{-- break;--}}
    {{-- }--}}

    {{-- @endif--}}

    {{-- @if ($errors->any())--}}

    {{-- @foreach ($errors->all() as $error)--}}
    {{-- console.log( '{{$error}}' );--}}
    {{-- toastr.error("HATA MESAJI ! {{$error}}");--}}
    {{-- @endforeach--}}
    {{-- @endif--}}
    {{--</script>--}}


    @yield('js')

    {{-- <script>--}}
    {{-- var myJson = $.getJSON("/site/data/db.json", function(data) {--}}
    {{-- $(".my-menu>ul>li:nth-child(1)").mouseenter(data, function() {--}}
    {{-- $(".overlay>ul>li").remove();--}}
    {{-- $.each(data[0].Children, function(i) {--}}
    {{-- $(".overlay>ul").append(`<li><a href="">${data[0].Children[i].name}</a></li>`)--}}
    {{-- })--}}
    {{-- $(".sub-menu-name").text(data[0].name);--}}
    {{-- $(".overlay").css("background", data[0].background)--}}

    {{-- })--}}

    {{-- $(".my-menu>ul>li:nth-child(2)").mouseenter(data, function() {--}}
    {{-- $(".overlay>ul>li").remove();--}}
    {{-- $.each(data[1].Children, function(i) {--}}
    {{-- $(".overlay>ul").append(`<li><a href="">${data[1].Children[i].name}</a></li>`)--}}
    {{-- })--}}
    {{-- console.log(data[1].name)--}}
    {{-- $(".overlay").css("background", data[1].background)--}}
    {{-- $(".sub-menu-name").text(data[1].name);--}}

    {{-- })--}}
    {{-- })--}}
    {{-- </script>--}}




{{--    AXtarilan sozler arasindan axtarilanlar siyahisi --}}
{{--    <script>--}}
{{--        var search = document.getElementById("search-input");--}}
{{--        var suggestions = document.getElementById("suggestions");--}}

{{--        search.addEventListener("focus", () => {--}}
{{--            suggestions.classList.add("active");--}}
{{--        });--}}

{{--        search.addEventListener("blur", () => {--}}
{{--            suggestions.classList.remove("active");--}}
{{--        });--}}
{{--        document.getElementById("clear_suggestions_box").addEventListener("click", () => {--}}
{{--            document.getElementById("suggestions-box").innerHTML = "asasasa";--}}
{{--        })--}}

{{--        $(search).keyup((e) => {--}}
{{--            let searchInput = e.currentTarget.value;--}}
{{--            if(searchInput.length > 2){--}}
{{--                console.log(searchInput);--}}
{{--                $.getJSON( {{route('search')}},{'ajax':'query',page:mypage}, function( data ) {--}}
{{--                    --}}

{{--                });--}}
{{--            }--}}

{{--        });--}}
{{--    </script>--}}

</body>

</html>
