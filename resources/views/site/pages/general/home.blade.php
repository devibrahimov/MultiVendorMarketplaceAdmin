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
                        <a href="{{route('shop.register')}}">Qeydiyyat</a>
                        /
                        <a href="{{route('shop.login')}}">Giriş</a>
                    </span>
                </button>
            </div>
            <div class="col-6">
                <button class="user btn w-100">
                    <i class="fas fa-user"></i>
                    <span>
                        <span>İstifadəçi</span>
                        <a href="{{route('user.register')}}">Qeydiyyat</a> /
                        <a href="{{route('user.login')}}">Giriş</a>
                    </span>
                </button>
            </div>
        </div>

        <div class="row mt-3 mb-3 my-search">
            <div class="form-group mb-0 icon-input me-2">
                <i class="feather-search font-sm text-grey-400"></i>
                <input type="text" placeholder="Axtaradığınız məhsulun adını yazın..." class="lh-38 ps-5 pe-3 font-xssss fw-500 rounded-xl posr w-100">
            </div>
        </div>

        <div class="row">
           @include('site.partials.categories')
            <div class="col-lg-6">
                <div class="owl-carousel slider-banner banner-wrap owl-theme ovh nav-none owl-arrow-center arrow-container" style="height: 400px;">
                    <div class="item rounded-6 bg-image-cover ovh style3 d-flex justify-content-start" style="background-image: url('/photos/site/advertisment/56955552319916953170.jpg');  height: 400px;object-fit: cover;">

                    </div>
                    <div class="item rounded-6 bg-image-cover ovh style3 d-flex justify-content-start" style="background-image: url('/photos/site/advertisment/7490921857081625191.webp');
                             height: 400px;object-fit: cover;">

                    </div>
                </div>
            </div>
            <div class="col-lg-3 ps-lg-0 d-none d-lg-block d-xs-block sm-mt-3">
                <div class="card w-100 border-0 shadow-none mb-0 ovh rounded-6 hover-zoom-image">
                    <img src="/photos/site/advertisment/67263602817816347316.jpg" style="height: 400px;object-fit: cover;" alt="" class="w-100">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 pe-2">
                <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4" style="background-image: url('/photos/site/advertisment/25526083225695925704.jpg'); height: 250px;object-fit: cover;">

                </div>
            </div>
            <div class="col-lg-4 col-md-4 ps-2 pe-2">
                <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4" style="background-image: url('/photos/site/advertisment/88491380093258218572.webp');">

                </div>
            </div>
            <div class="col-lg-4 col-md-4 pe-2 ps-2">
                <div class="card d-flex align-items-end flex-column border-0 h-200 w-100 rounded-6 mt-3 bg-image-cover p-4" style="background-image: url('/photos/site/advertisment/14570210466170451914.webp');">

                </div>
            </div>

        </div>
    </div>
</div>
<!-- BANNER WRAPPER -->
<!-- DEAL OF THE DAY -->
<div class="product-wrapper categoryofweek pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="fw-700 font-sm mb-4 mt-2 d-flex lh-18">Həftənin Kateqoriyası
                    <a href="{{route('trend')}}" class="ms-auto text-grey-500
                fw-600 text-uppercase font-xsssss border-bottom ls-3">Hamısını gör</a></h4>
            </div>
        </div>
        <div class="border rounded-6 ovh bg-white">
            <div class="row">
                <div class="col-lg-4 pe-md-0 ps-xs-0">
                    <img src="{{$athomeCategory->image}}" style="height: 100%;object-fit: cover"
                         alt="banner"
                         class="w-100">
                    <div class="card w-100 border-0 rounded-0 shadow-none h-md-250">
                        <div class="p-4 posa bottom-0 w-100 z-index-5" style="background-color: #eeeeeebd; backdrop-filter: blur(5px);">

                            <h4 class="font-xs fw-700 lh-28 text-grey-900 mb-2 mt-2 ls-0">{{$athomeCategory->name}}</h4>
                            <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss border-bottom border-dark lh-22 d-inline-block">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 px-4 px-md-4">
                    <div class="row">
                        @foreach($atHomeCatProducts as $product)
                        <div class="col-lg-4 col-md-4 col-xs-6 px-1 border-start border-bottom rounded-0 posr">
                            <span class="wish-list">
                                <i data-key="{{md5(md5($product->slug.$product->sku.$product->barkode))}}" class="addtowish
                        @auth('user'){{!$product->hasWish->isEmpty()? 'active': ''}} @endauth colorSuccess bx bx-heart"></i>
                            </span>
                            <div class="clearfix"></div>

                            <a href="{{route('site.productdetail',['key'=>md5(md5($product->slug.$product->sku.$product->barkode)),'m'=>$product->slug])}}" height="200px"
                               class="d-block
                                        text-center">
                                <img src="{{\GuzzleHttp\json_decode($product->images)[0]}}" alt="{{$product->name}}"
                                     style="object-fit: cover; width: 97% !important; height: 275px !important;"
                                     class="shadow-sm my-2 d-inline-block pt-0"></a>
{{--                            <div class="star d-inline text-left">--}}
{{--                                <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">--}}
{{--                                <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">--}}
{{--                                <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">--}}
{{--                                <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">--}}
{{--                                <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">--}}
{{--                            </div>--}}
                            <div class="clearfix"></div>
                            <h2 class="mt-2 ms-3">
                                <a href="{{route('site.productdetail',['key'=>md5(md5($product->slug
                                        .$product->sku.$product->barkode)),'m'=>$product->slug])}}"
                                   class="text-grey-700 fw-600 font-xss lh-22 d-block ls-0">
                                    {{$product->name}}
                                </a></h2>
                            <div class="price posr mt-3 ms-3">
                                <span class="fw-bold colorSuccess"> {{$product->sale_price}}₼ </span>
                                @if($product->sale_price < $product->price)
                                    <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$product->price}}</span>
                                @endif
                            </div>

                        </div>
                        @endforeach
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
                <div class="card border-0 banner-wrap bg-image-cover bg-image-center" style="background-image: url('/photos/site/advertisment/reklambanner.jpg');">
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

<div class="main-wrap pt-4 mb-3">
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <h4 class="fw-700 font-xs mb-2 mt-3">Önə çıxan məhsullarımız</h4>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="product-wrap border rounded-6 ">

               @if(isset($atHomeRandProducts) && count($atHomeRandProducts) > 0)
                    <div class="row m-0">

                        <div class="col col-xs-6 border-end p-0">


                            <div class="px-1 rounded-0 posr border-bottom">
                            <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[4]->slug.$atHomeRandProducts[4]->sku.$atHomeRandProducts[4]->barkode))}}"
                                       class="addtowish  @auth('user'){{!$atHomeRandProducts[4]->hasWish->isEmpty()? 'active': ''}} @endauth colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[4]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[4]->slug
                                        .$atHomeRandProducts[4]->sku.$atHomeRandProducts[4]->barkode)),
                                        'm'=>$atHomeRandProducts[4]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[4]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[4]->images)[0]:''}}"
                                         alt="-{{$atHomeRandProducts[4]->name}}"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;"></a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[4]->slug
                                        .$atHomeRandProducts[4]->sku.$atHomeRandProducts[4]->barkode)),
                                        'm'=>$atHomeRandProducts[4]->slug])}}" class="text-grey-700 fw-600 font-xsss
                                        lh-22 d-block
                                     ls-0">{{$atHomeRandProducts[4]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[4]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[4]->sale_price < $atHomeRandProducts[4]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[4]->price}}</span>
                                    @endif
                                </div>
                                    @endif
                            </div>
                            <div class="px-1 rounded-0 posr">
                            <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[1]->slug.$atHomeRandProducts[1]->sku.$atHomeRandProducts[1]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[1]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[1]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[1]->slug
                                        .$atHomeRandProducts[1]->sku.$atHomeRandProducts[1]->barkode)),
                                        'm'=>$atHomeRandProducts[1]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[1]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[1]->images)[0]:''}}"
                                         alt="-{{$atHomeRandProducts[1]->name}}"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;"></a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[1]->slug
                                        .$atHomeRandProducts[1]->sku.$atHomeRandProducts[1]->barkode)),
                                        'm'=>$atHomeRandProducts[1]->slug])}}" class="text-grey-700 fw-600 font-xsss
                                        lh-22 d-block
                                     ls-0">{{$atHomeRandProducts[1]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[1]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[1]->sale_price < $atHomeRandProducts[1]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[1]->price}}</span>
                                    @endif
                                </div>
                                    @endif
                            </div>
                        </div>
                        <div class="col col-xs-6 border-end p-0">
                            <div class="px-1 rounded-0 posr border-bottom">
                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[2]->slug.$atHomeRandProducts[2]->sku.$atHomeRandProducts[2]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[2]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>

                                <span class="ls-3 font-xsssss text-white text-uppercase bg-danger fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">DEAL</span>
                                <div class="clearfix"></div>
                              @if(@isset($atHomeRandProducts[2]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[2]->slug
                                        .$atHomeRandProducts[2]->sku.$atHomeRandProducts[2]->barkode)),
                                        'm'=>$atHomeRandProducts[2]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[2]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[2]->images)[0]:''}}"
                                         alt="-{{$atHomeRandProducts[2]->name}}"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>

                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[2]->slug
                                        .$atHomeRandProducts[2]->sku.$atHomeRandProducts[2]->barkode)),
                                        'm'=>$atHomeRandProducts[2]->slug])}}" class="text-grey-700 fw-600 font-xsss
                                        lh-22 d-block
                                     ls-0">{{$atHomeRandProducts[2]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[2]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[2]->sale_price < $atHomeRandProducts[2]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[2]->price}}</span>
                                    @endif
                                </div>
                            @endif
                            </div>

                            <div class="px-1 rounded-0 posr">

                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[3]->slug.$atHomeRandProducts[3]->sku.$atHomeRandProducts[3]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[3]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[3]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[3]->slug
                                        .$atHomeRandProducts[3]->sku.$atHomeRandProducts[3]->barkode)),
                                        'm'=>$atHomeRandProducts[3]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[3]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[3]->images)[0]:''}}"
                                         alt="product-image"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[3]->slug
                                        .$atHomeRandProducts[3]->sku.$atHomeRandProducts[3]->barkode)),
                                        'm'=>$atHomeRandProducts[3]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block
                                       ls-0">{{$atHomeRandProducts[3]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[3]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[3]->sale_price < $atHomeRandProducts[3]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[3]->price}}</span>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>


                        <div class="col-3 border-end p-0 d-none d-lg-block">
                            <div class="px-2 rounded-0 posr">
                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[0]->slug.$atHomeRandProducts[0]->sku.$atHomeRandProducts[0]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[0]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <span class="ls-3 font-xsssss text-white text-uppercase bg-warning fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">Trend</span>

                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[0]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[0]->slug
                                        .$atHomeRandProducts[0]->sku.$atHomeRandProducts[0]->barkode)),'m'=>$atHomeRandProducts[0]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[0]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[0]->images)[0]:''}}"
                                         alt="product-image" class="w-100 mt-2 mb-3 d-inline-block" style="height: 250px !important; object-fit: cover;"></a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1
                                        float-start">
                                </div>
                                <div class="clearfix"></div>


                                <h2 class="mt-3 ms-2 mb-4">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[0]->slug
                                        .$atHomeRandProducts[0]->sku.$atHomeRandProducts[0]->barkode)),'m'=>$atHomeRandProducts[0]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">{{$atHomeRandProducts[0]->name}}</a></h2>

                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[0]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[0]->sale_price < $atHomeRandProducts[0]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[0]->price}}</span>
                                    @endif
                                </div>
                                    <p class="font-xssss fw-500 mt-3 text-grey-500 lh-24">
                                        {!! substr($atHomeRandProducts[0]->description,0,150) !!}
                                    </p>
                                <div class="clearfix mt-5"></div>
                                <a href="#" class="btn-lg mt-5 rounded-25 btn bg-current text-uppercase  text-white
                                font-xsssss fw-700 ls-3 p-3 w-100 d-block">
                                    Səbətə At</a>
                                <a href="#" class="btn-lg mt-2 rounded-25 btn border-success text-uppercase
                                text-success font-xsssss fw-700 ls-3 p-3 w-100 d-block">
                                  Favorilərə əlavə et</a>
                                @endif
                            </div>
                        </div>


                        <div class="col col-xs-6 border-end p-0">
                            <div class="px-1 rounded-0 posr border-bottom">

                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[5]->slug.$atHomeRandProducts[5]->sku.$atHomeRandProducts[5]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[5]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[5]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[5]->slug
                                        .$atHomeRandProducts[5]->sku.$atHomeRandProducts[5]->barkode)),
                                        'm'=>$atHomeRandProducts[5]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[5]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[5]->images)[0]:''}}"
                                         alt="product-image"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[5]->slug
                                        .$atHomeRandProducts[5]->sku.$atHomeRandProducts[5]->barkode)),
                                        'm'=>$atHomeRandProducts[5]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block
                                       ls-0">{{$atHomeRandProducts[5]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[5]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[5]->sale_price < $atHomeRandProducts[5]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[5]->price}}</span>
                                    @endif
                                </div>
                            @endif
                            </div>

                            <div class="px-1 rounded-0 posr">

                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[6]->slug.$atHomeRandProducts[6]->sku.$atHomeRandProducts[6]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[6]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[6]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[6]->slug
                                        .$atHomeRandProducts[6]->sku.$atHomeRandProducts[6]->barkode)),
                                        'm'=>$atHomeRandProducts[6]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[6]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[6]->images)[0]:''}}"
                                         alt="product-image"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[6]->slug
                                        .$atHomeRandProducts[6]->sku.$atHomeRandProducts[6]->barkode)),
                                        'm'=>$atHomeRandProducts[6]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block
                                       ls-0">{{$atHomeRandProducts[6]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[6]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[6]->sale_price < $atHomeRandProducts[6]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[6]->price}}</span>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col col-xs-6 p-0">
                            <div class="px-1 rounded-0 posr border-bottom">
                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[7]->slug.$atHomeRandProducts[7]->sku.$atHomeRandProducts[7]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[7]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[7]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[7]->slug
                                        .$atHomeRandProducts[7]->sku.$atHomeRandProducts[7]->barkode)),
                                        'm'=>$atHomeRandProducts[7]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[7]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[7]->images)[0]:''}}"
                                         alt="product-image"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[7]->slug
                                        .$atHomeRandProducts[7]->sku.$atHomeRandProducts[7]->barkode)),
                                        'm'=>$atHomeRandProducts[7]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block
                                       ls-0">{{$atHomeRandProducts[7]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[7]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[7]->sale_price < $atHomeRandProducts[7]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[7]->price}}</span>
                                    @endif
                                </div>
                                @endif
                            </div>
                            <div class="px-1 rounded-0 posr">

                                <span class="wish-list">
                                    <i data-key="{{md5(md5($atHomeRandProducts[8]->slug.$atHomeRandProducts[8]->sku.$atHomeRandProducts[8]->barkode))}}"
                                       class="addtowish   @auth('user'){{!$atHomeRandProducts[8]->hasWish->isEmpty()? 'active': ''}} @endauth  colorSuccess bx bx-heart"></i>
                                </span>
                                <div class="clearfix"></div>
                                @if(@isset($atHomeRandProducts[8]))
                                <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[8]->slug
                                        .$atHomeRandProducts[8]->sku.$atHomeRandProducts[8]->barkode)),
                                        'm'=>$atHomeRandProducts[8]->slug])}}" class="d-block text-center">
                                    <img src="{{isset(\GuzzleHttp\json_decode($atHomeRandProducts[8]->images)[0])
                                    ?\GuzzleHttp\json_decode($atHomeRandProducts[8]->images)[0]:''}}"
                                         alt="product-image"
                                         class="w-100 mt-2 mb-3 d-inline-block pt-0" style="object-fit: cover; width: 97% !important; height: 230px !important;">
                                </a>
                                <div class="star ms-2 d-inline text-left">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="/site/images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2 ms-2 card-text">
                                    <a href="{{route('site.productdetail',['key'=>md5(md5($atHomeRandProducts[8]->slug
                                        .$atHomeRandProducts[8]->sku.$atHomeRandProducts[8]->barkode)),
                                        'm'=>$atHomeRandProducts[8]->slug])}}"
                                       class="text-grey-700 fw-600 font-xsss lh-22 d-block
                                       ls-0">{{$atHomeRandProducts[8]->name}}</a></h2>
                                <div class="price posr mt-3 ms-2">
                                    <span class="fw-bold colorSuccess"> {{$atHomeRandProducts[8]->sale_price}}₼ </span>
                                    @if($atHomeRandProducts[8]->sale_price < $atHomeRandProducts[8]->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$atHomeRandProducts[8]->price}}</span>
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
               @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="col-lg-4 col-md-4 mt-4 ">--}}
{{--    <h4 class="fw-700 font-xss mb-3 mt-2">Best Seller</h4>--}}
{{--    <div class="card border rounded-6 border-light border-size-md">--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond--}}
{{--                        Almonds Lightly Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted--}}
{{--                        Donuts Each Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own--}}
{{--                        Wheat Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita--}}
{{--                        Almonds Lightly Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
{{--<div class="col-lg-4 col-md-4 mt-4 ">--}}
{{--    <h4 class="fw-700 font-xss mb-3 mt-2">Trend Products</h4>--}}
{{--    <div class="card border rounded-6 border-light border-size-md">--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds--}}
{{--                        Sweet & Salty Kettle Corn</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond--}}
{{--                        Almonds Lightly Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted--}}
{{--                        Donuts Each Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own--}}
{{--                        Wheat Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="col-lg-4 col-md-4 mt-4 ">--}}
{{--    <h4 class="fw-700 font-xss mb-3 mt-2">Featured Products</h4>--}}
{{--    <div class="card border rounded-6 border-light border-size-md">--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita--}}
{{--                        Almonds Lightly Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds--}}
{{--                        Sweet & Salty Kettle Corn</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds--}}
{{--                        Sweet & Salty Kettle Corn</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-content p-3 border-bottom border-light border-size-md">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4 col-xs-4">--}}
{{--                    <a href="#" class="d-block text-center"><img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-100 d-inline-block pt-2 rounded-6"></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8 col-xs-8 ps-0">--}}
{{--                    <span class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>--}}
{{--                    <a href="single-product.html" class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted--}}
{{--                        Donuts Each Salted</a>--}}
{{--                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span class="font-xsssss text-grey-500">$</span>29 </h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection

@section('js')

@endsection
