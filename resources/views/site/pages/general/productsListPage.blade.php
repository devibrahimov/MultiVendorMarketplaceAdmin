@extends('site.index')

@section('css')

@endsection


@section('content')
    <!-- LISTING WRAPPER -->
    <div class="listing-wrapper pt-3 pb-3 md-mt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card d-flex flex-wrap flex-row w-100 p-lg-5 p-4 border-0 bg-image-cover bg-image-center mb-3"
                         style="background-image: url(https://via.placeholder.com/1070x260.jpg);">
                        <div class="col-lg-5 col-md-12">
                            <h2 class="fw-700 display1-size display1-sm-size ls-0 text-grey-900 mb-0">Choose the
                                best <span class="text-current">healthier way</span> of life</h2>
                            <span class="text-grey-700 fw-500 font-xssss mt-1 d-block">All Natural Italian-Style
                                    Chicken Meatballs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pe-lg-3">
                    <div class="side-wrap mb-4">
                        <div class="form-group mb-3">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Product Categoires</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Drinks" id="flexCheckDrinks1">
                            <label class="form-check-label" for="flexCheckDrinks1">Drinks</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Snacks" id="flexCheckSnacks2">
                            <label class="form-check-label" for="flexCheckSnacks2">Snacks & Biscuits</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Breads" id="flexCheckBreads3">
                            <label class="form-check-label" for="flexCheckBreads3">Breads & Bakery</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Breakfast"
                                   id="flexCheckBreakfast4">
                            <label class="form-check-label" for="flexCheckBreakfast4">Breakfast & Dairy</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Frozen" id="flexCheckFrozen5">
                            <label class="form-check-label" for="flexCheckFrozen5">Frozen Foods</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fruits" id="flexCheckFruits6">
                            <label class="form-check-label" for="flexCheckFruits6">Fruits & Vegetables</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Grocery" id="flexCheckGrocery7">
                            <label class="form-check-label" for="flexCheckGrocery7">Grocery & Staples</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Household"
                                   id="flexCheckHousehold8">
                            <label class="form-check-label" for="flexCheckHousehold8">Household Needs</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Meats" id="flexCheckMeats9">
                            <label class="form-check-label" for="flexCheckMeats9">Meats & Seafood</label>
                            <i class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                        </div>

                        <div class="form-group mb-3 mt-5">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Product Status</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Drinks" id="flexCheckStock10">
                            <label class="form-check-label" for="flexCheckStock10">In Stock</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Snacks" id="flexCheckSlae11">
                            <label class="form-check-label" for="flexCheckSlae11">On Slae</label>
                        </div>

                        <div class="form-group mb-3 mt-5">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Product Brand</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Drinks" id="flexCheckDrinks">
                            <label class="form-check-label" for="flexCheckDrinks">Vegetarian</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(1233)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Snacks" id="flexCheckSnacks">
                            <label class="form-check-label" for="flexCheckSnacks">Vegan</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(2231)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Breads" id="flexCheckBreads">
                            <label class="form-check-label" for="flexCheckBreads">Green Food</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(754)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Breakfast"
                                   id="flexCheckBreakfast">
                            <label class="form-check-label" for="flexCheckBreakfast">Milk Fess</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(27)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Frozen" id="flexCheckFrozen">
                            <label class="form-check-label" for="flexCheckFrozen">Frozen Foods</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(61)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fruits" id="flexCheckFruits">
                            <label class="form-check-label" for="flexCheckFruits">Fruits & Vegetables</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(76)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Grocery" id="flexCheckGrocery">
                            <label class="form-check-label" for="flexCheckGrocery">Grocery & Staples</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(45)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Household"
                                   id="flexCheckHousehold">
                            <label class="form-check-label" for="flexCheckHousehold">Household Needs</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(23)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Meats" id="flexCheckMeats">
                            <label class="form-check-label" for="flexCheckMeats">Meats & Seafood</label>
                            <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(23)</span>
                        </div>
                        <div class="form-group mb-3 mt-5">
                            <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Popular Tag</h6>
                        </div>
                        <a href="#" class="tag-name">Grocery</a>
                        <a href="#" class="tag-name">Fruits</a>
                        <a href="#" class="tag-name">Vegetables</a>
                        <a href="#" class="tag-name">Milk</a>
                        <a href="#" class="tag-name">Drinks</a>
                        <a href="#" class="tag-name">Food</a>
                        <a href="#" class="tag-name">Grocery</a>
                        <a href="#" class="tag-name">Drinks</a>
                        <a href="#" class="tag-name">Chiness</a>
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
                                    <img src="/uploads/{{\GuzzleHttp\json_decode($product->images)[0]}}"
                                         class="card-img-top"
                                         alt="">
                                </div>
                                <div class="cardBody px-2">
                                    <h5 class="card-text py-2">
                                        <a href="{{route('site.productdetail',['key'=>md5(md5($product->slug
                                        .$product->sku.$product->barkode)),'m'=>$product->slug])}}">
                                            {{$product->name}}</a>
                                    </h5>
                                    <div class="price">
                                        <span class="fw-bold colorSuccess"> {{$product->sale_price}}₼ </span>
                                        @if($product->sale_price < $product->price)
                                        <span class="text-decoration-line-through text-muted
                                        fw-bold">{{$product->price}}</span>
                                        @endif
                                    </div>
                                    <button class="buy"><i class='bx bx-cart me-1'></i> Səbətə at</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-5 mb-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i
                                                class="feather-chevron-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="feather-chevron-right"></i></a></li>
                                </ul>
                            </nav>
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
               $.ajax({
                   url: "{{route('user.wishproduct')}}",
                   method:'GET',
                   data: {
                       id:$(this).attr('data-key'),
                   },
                   success: function (data){
                       console.log(data)
                   },
               });
        });


    </script>
@endsection
