@extends('site.index')

@section('css')

@endsection


@section('content')
    <head>
        <style>
            .buy{
            bottom: 19px !important;
            padding: 3px 8px !important;
            border-radius: 5px !important;
        }
        .my-card{
            height: 310px !important;
        }

        .filter__listing{
            height: 28px;
            transition: 0.35s ease-out;
            overflow: hidden;
        }
        .filter__listing.active{
            height: auto;
        }
        .filter__listing .row{
            --bs-gutter-x: 0.7rem;
        }
        .filter__header{
            padding: 3px 0;
            cursor: pointer;
        }
        .filter__listing .filter__header{
            font-size: 13px   !important;
            font-weight: 500  !important;
            line-height: 24px !important;
            cursor: pointer;
        }
        .filter__listing li{
            line-height: 26px;
        }
        .filter__listing .feather-chevron-right{
            transform: rotate(0);
        }
        .filter__listing.active > .filter__header > .feather-chevron-right{
            transform: rotate(90deg);
        }
        </style>
    </head>
    <!-- LISTING WRAPPER -->
    <div class="listing-wrapper pt-3 pb-3 md-mt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card d-flex flex-wrap flex-row w-100 p-lg-5 p-4 border-0 bg-image-cover bg-image-center mb-3"
                         style="background-image: url(https://via.placeholder.com/1070x260.jpg);">
                        <div class="col-lg-5 col-md-12">
                            <h2 class="fw-700 display1-size display1-sm-size ls-0 text-grey-800 mb-0">Choose the
                                best <span class="text-current">healthier way</span> of life</h2>
                            <span class="text-grey-700 fw-500 font-xssss mt-1 d-block">All Natural Italian-Style
                                    Chicken Meatballs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pe-lg-3">

                    <div class="side-wrap mb-4">
                        <form action="{{route('site.filter')}}">
                        <div class="form-group mb-3">
                            <h6 class="fw-600 text-grey-800 font-xsss mb-0 text-capitalize">Məhsul Kategoriyası</h6>
                        </div>
                        <div class="form-group">
                        @foreach(\App\Models\Category::getcategories() as $category)
                        <div class="filter__listing posr px-1 border-1">
                            <div class="filter__header mb= d-flex align-items-start justify-content-between">
                                <span class="text-grey-800 font-xsss">{{$category->name}}</span>
                                <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                            </div>
                            <div class="filter__elements pb-2 d-flex flex-column">
                                <ul class="ps-2 mb-0">
                                    @foreach($category->subCategories as $cat)
                                    <li class="d-flex align-items-start justify-content-between">
                                        <div class="filter__listing posr w-100 border-1">
                                            <div class="filter__header mb= d-flex align-items-start justify-content-between">
                                                <span class="text-grey-800 font-xsss">{{$cat->name}}</span>
                                                <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="filter__elements pb-2 d-flex flex-column">
                                                <ul class="ps-2 mb-0">
                                                    @foreach($cat->subCategories as $c)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="category[]"
                                                               value="{{$c->id}}" id="{{\Illuminate\Support\Str::slug($c->name)}}">
                                                        <label class="form-check-label text-grey-800"
                                                               for="{{\Illuminate\Support\Str::slug($c->name)}}">{{$c->name}}</label>
                                                    </div>
                                                   @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        </div>

                        <div class="form-group mb-3 mt-5">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Qiymət Aralığı</h6>
                        </div>
                        <div class="filter_price form-group w-100 mb-3 row">
                            <div class="form-group w-50 mb-3">
                                <input class="form-control text-grey-700" type="text" placeholder="0" name="minprice">
                            </div>
                            <div class="form-group w-50 mb-3">
                                <input class="form-control text-grey-700" type="text" placeholder="9999"
                                       name="maxprice">
                            </div>
                        </div>

                        <div class="form-group mb-3 mt-5">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">İstehsalatçı Ölkə</h6>
                        </div>

                        <div class="form-group mb-3">

                            <select class="form-control text-grey-700" name="country">
                                <option disabled selected>Seçin</option>
                                @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $country)
                                <option value="{{$country->countries_iso_code}}">{{$country->countries_name}}</option>
                                @endforeach
                            </select>

                        </div>

                          <div class="form-group mb-3 mt-5 ">
                          <h6 class="fw-600 text-grey-800 font-xsss mb-0 text-capitalize">Məhsul Qarantiyası </h6>
                          </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="warranty" value="warranty"
                                   id="flexCheckStock10">
                            <label class="form-check-label text-grey-800" for="flexCheckStock10">Qarantiyalı</label>
                        </div>

                        <button class="mt-5 btn shadow-custom btn-success" type="submit"  > Axtar </button>
                        </form>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="row m-0">
                        <div class="card d-flex flex-row justify-content-start p-3 bg-greylight border-0 mb-3">
                            <a href="#" class="mt-1"><span class="feather-grid text-grey-600 font-xs"></span></a>
                            <select class="form-select ms-auto float-end" aria-label="Default select example">
                                <option selected>Sort by latest</option>
                                <option value="1">Sort by popularity</option>
                                <option value="2">Sort by price : low to high</option>
                                <option value="3">Sort by price : high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="row border rounded-6 m-0">
                        <div class="productList">
                                @foreach($products as $product)
                            <div class="my-card pb-4">
                              <span class="wish-list">
                                  <i data-key="{{$product->key}}" class='mywishproduct colorSuccess bx bx-heart'></i>
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
                                    <button class="buy shadow-custom"><i class='bx bx-cart me-1'></i> Səbətə at</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-5 mb-4">

                            {{$products->links('vendor.pagination.mypagination')}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LISTING WRAPPER -->
@endsection

@section('js')
    <script>
           $('.mywishproduct').on('click',function () {

               @guest('user')
               toastr.warning(" Bu məhsulu Bəyəndiklərinizə əlavə edə bilmək üçün əvvəlcə istifadəçi " +
                   "olaraq Giriş etməlisiniz. Giriş ucun  <a href='{{route('user.login')}}'> <b>GIRIŞ ET</b></a> ")
               @endguest

                @auth('user')
                   $.ajax({
                       url: "{{route('user.wishproduct')}}",
                       method:'GET',
                       data: {
                           id:$(this).attr('data-key'),
                       },
                       success: function (data){
                           if(data != false){
                               toastr.warning(data)
                           }
                       },
                   });
               @endauth
        });



    </script>



<script>
$(".filter__header").on("click", function () {
    $(this).parent().toggleClass("active");
    var h1 = $(this).parent().find(".filter__elements").height();

    // if ($(this).parent().hasClass("active"))
    // {
    //     $(this).parent().css("height", `${(42 + h1 + 26)}`);
    //     //26 is padding and margin, 42 is old filter__lsiting height
    // }
    // else
    // {
    //     $(this).parent().css("height", "42");
    // }
});
</script>
@endsection
