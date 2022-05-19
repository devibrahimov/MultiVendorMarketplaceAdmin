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
                                <img  style="height: 400px;object-fit: contain" src="{{$image}}"
                                      alt="{{$product->name}}"
                                     title="{{$product->name}}"
                            class="   d-inline-block">   </div>
                          @endforeach
                        </div>
                    </div>

                    <div class="card text-center border-0 w-100 mt-3 justify-content-center flex-row">
                          @foreach(json_decode($product->images) as $image)
                        <a href="#" class="d-inline-block m-1">
                            <img src="{{$image}}" alt="product"  style="width:60px;height:60px;object-fit:
                            cover"
                                 class="  border">
                        </a>
                     @endforeach
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card border-0">

                        <h2 class="fw-700 text-grey-800 font-sm ls-0 mt-0 mb-2 tag-name lh-3">{{$product->name}}</h2>

                        <ul class="breadcrumb-link list-inline">
                            {{thisproductcategorylist($product->category_id)}}

                        </ul>

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
                        <p class="font-xssss fw-500 mt-3 text-grey-500 lh-24">
                            {!! $product->description !!}
                        </p>

                        <div class="clearfix"></div>
                        @if($product->stock > 0)
                         <div class="alert-success text-success p-2 text-center w-100 font-xssss fw-600 rounded-6
                         mb-4">Stokda Var</div>
                       @else
                            <div class="alert-warning text-danger p-2 text-center w-100 font-xssss fw-600 rounded-6
                            mb-4">Stokda Bitib</div>
                        @endif
{{--                        <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3">--}}
{{--                            <b class="text-grey-700">Ölçü:</b>--}}
{{--                        </h5>--}}
{{--                        <style>--}}

{{--                            .tag-stock .check{--}}

{{--                                bottom: -35px!important;--}}
{{--                                color: #121212;--}}
{{--                            }--}}
{{--                        </style>--}}
{{--                        <span class="tag-stock  mb-4"><b class="text-current">41</b>--}}
{{--                            <i class="check d-none fas fa-check"></i></span>--}}
{{--                        <span class="tag-stock  mb-4"><b class="text-current">42</b>--}}
{{--                            <i class="check fas fa-check"></i></span>--}}
{{--                        <span class="tag-stock  mb-4"><b class="text-current">43</b>--}}
{{--                            <i class="check d-none fas fa-check"></i></span>--}}
{{--                        <span class="tag-stock  mb-4"><b class="text-current">44</b>--}}
{{--                            <i class="check d-none fas fa-check"></i></span>--}}
{{--                        <span class="tag-stock  mb-4"><b class="text-current">45</b>--}}
{{--                            <i class="check d-none fas fa-check"></i></span>--}}


{{--                        <h5 class="font-xssss fw-500 text-grey-500 mb-2 mt-2 lh-3">--}}
{{--                            <b class="text-grey-700">Rəng:</b>--}}
{{--                        </h5>--}}
{{--                        <style>--}}
{{--                            .productcolor{--}}
{{--                                width: 35px;--}}
{{--                                height: 35px;--}}
{{--                                border-radius: 5px;--}}
{{--                                font-size: 12px;--}}
{{--                                font-weight: 500;--}}
{{--                                display: inline-block;--}}
{{--                                text-align: center;--}}
{{--                            }--}}

{{--                            .productcolor .check{--}}
{{--                                position: relative;--}}
{{--                                bottom: -35px!important;--}}
{{--                                color: #121212;--}}
{{--                                margin-top: 10px;--}}
{{--                            }--}}
{{--                            .selectedcolor{--}}
{{--                                border: 1px solid black;--}}
{{--                                border-radius: inherit;--}}
{{--                                padding: 3px;--}}
{{--                            }--}}
{{--                        </style>--}}

{{--                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#a30101;">--}}
{{--                            <i class="check  fas fa-check"></i></span>--}}
{{--                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#24a301;">--}}
{{--                            <i class="check  fas fa-check"></i></span>--}}
{{--                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#0160a3;">--}}
{{--                            <i class="check selectedcolor fas fa-check"></i></span>--}}
{{--                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#ffffff;">--}}
{{--                            <i class="check fas fa-check"></i></span>--}}
{{--                        <span class="productcolor mb-4" style="border:1px solid #8a8a8a;background:#2f01a3;">--}}
{{--                            <i class="check  fas fa-check"></i></span>--}}

                        @if(isset($product->warranty))
                            <h5 class="font-xssss fw-500 text-grey-500 mt-4 d-flex"><i class="feather-bookmark font-xs
                            text-current me-2 mt-n1"></i> <b class="text-grey-700 me-1">{{$product->warranty}} Ay</b>
                                Qarantiya verilir </h5>
                        @endif
                        <div class="cart-card d-flex border-0">
                            <div class="cart-count float-end me-2">
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" id="quantity" class="open-font cart-input" value="1">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <button  data-key="{{$product->key}}"  class="thisproductaddtocart bg-current text-white rounded-6 btn-cart">Səbətə At</button>
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
                @foreach(json_decode($product->informations,true)  as   $item)
                    <li class="detail-attr-item"><span>{{$item['key']}} </span> <span><b>
                                {{$item['value']}}</b></span></li>
                @endforeach
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
                    <h4 class="fw-700 font-xss mb-4 mt-2">Oxşar Məhsullar</h4>
                </div>
                <div class="col-lg-12">
                    <div class="related-product-slider border">
                        <div class="banner-slider-5 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top">

                            @foreach($similarProducts as $product)

                                <div class="owl-items my-card  ">
                                    <span class="wish-list">

{{--                                  <i data-key="{{$product->key}}" class='addtowish   colorSuccess bx bx-heart @auth('user'){{\App\Models\Wish::hasWish($product->key,auth('user')->id())  !=null? 'active': ''}} @endauth'></i>--}}
                                  <i data-key="{{$product->key}}" class='addtowish   colorSuccess bx bx-heart @auth('user'){{!$product->hasWish->isEmpty() ? 'active': ''}} @endauth'></i>
                              </span>
                                    <div class="cardImg">
                                        <img src="{{\GuzzleHttp\json_decode($product->images)[0]}}"
                                             class="card-img-top" alt="{{$product->name}}" title="{{$product->name}}" >
                                    </div>
                                    <div class="cardBody px-2 pt-2">
                                        <h5 class="card-text">
                                            <a href="{{route('site.productdetail',['key'=>md5(md5($product->slug
                                        .$product->sku.$product->barkode)),'m'=>$product->slug])}}" class="text-grey-700 fw-600 font-xss lh-22 d-block ls-0">
                                                {{$product->name}}</a>
                                        </h5>

                                        <div class="price mt-3 bottom-0 posr">
                                            <span class="fw-bold colorSuccess"> {{$product->sale_price}}₼ </span>
                                            @if($product->sale_price < $product->price)
                                                <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$product->price}}</span>
                                            @endif
                                        </div>
                                        <button data-key="{{$product->key}}"   class="addtocart buy shadow-custom"><i class='bx bx-cart me-1'></i> Səbətə at</button>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RELATED PRODUCT -->

@endsection

@section('js')
    <script>

        $(document).on('click','.thisproductaddtocart',function () {
            let quantity = $('#quantity').val()
            let productkey = $(this).attr('data-key') ;
            @guest('user')
            toastr.warning(" Bu məhsulu Səbətə əlavə edə bilmək üçün əvvəlcə istifadəçi " +
                "olaraq Giriş etməlisiniz. Giriş üçün  <a href='{{route('user.login')}}'> <b> GİRİŞ ET </b></a> ")
            @endguest

            @auth('user')

            // let productkey = $(this).attr('data-key') ;
            // console.log(productkey)
            formData = {
                'productkey' : productkey ,
                'quantity' : quantity,
                '_token' : '{{csrf_token()}}'
            }
            $.ajax({
                type:'POST',
                url: '{{route('user.addtocart')}}',
                data:formData,
                success:function(data){
                    let quantity = $('#quantity').val(1)
                    toastr.success(data.message)
                },
                error: function(data){
                    toastr.warning(data.message)
                }
            })
            @endauth
        })



    </script>
@endsection
