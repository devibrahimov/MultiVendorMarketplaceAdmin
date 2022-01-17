@extends('site.index')

@section('css')

@endsection


@section('content')



    <div class="main-div pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @include('site.pages.user.partials.navbar')
                </div>
                <div class="col-lg-8 pt-5 ps-4">
                    <div class="row">

                        <div class="col-lg-3 ps-2 pe-2 mb-3">
                            <div class="card border-0 pt-4 pb-4 text-center alert-warning align-items-center rounded-10">
                                <i class="psor mt-n5 feather-hard-drive text-white btn-round-md bg-warning font-xs"></i>
                                <h3 class="fw-700 font-xl text-grey-900 mt-2 ls-3 mb-0">3252</h3>
                                <span class="font-xssss ls-0 text-grey-700 fw-600 mt-0">Order complete</span>
                                <span class="mt-2 text-success font-xsssss fw-700 ls-6">+ 20% </span>
                            </div>
                        </div>
                        <div class="col-lg-3 ps-2 pe-2 mb-3">
                            <div class="card border-0 pt-4 pb-4 text-center alert-success align-items-center rounded-10">
                                <i class="psor mt-n5 feather-box text-white btn-round-md bg-success font-xs"></i>
                                <h3 class="fw-700 font-xl text-grey-900 mt-2 ls-3 mb-0">43K</h3>
                                <span class="font-xssss ls-0 text-grey-700 fw-600 mt-0">Fat burn</span>
                                <span class="mt-2 text-warning font-xsssss fw-700 ls-6">+ 40% </span>
                            </div>
                        </div>
                        <div class="col-lg-3 ps-2 pe-2 mb-3">
                            <div class="card border-0 pt-4 pb-4 text-center alert-info align-items-center rounded-10">
                                <i class="psor mt-n5 feather-award text-white btn-round-md bg-info font-xs"></i>
                                <h3 class="fw-700 font-xl text-grey-900 mt-2 ls-3 mb-0">54M</h3>
                                <span class="font-xssss ls-0 text-grey-700 fw-600 mt-0">Calories gain</span>
                                <span class="mt-2 text-danger font-xsssss fw-700 ls-6">+ 44% </span>
                            </div>
                        </div>
                        <div class="col-lg-3 ps-2 pe-2 mb-3">
                            <div class="card border-0 pt-4 pb-4 text-center alert-secondary align-items-center rounded-10">
                                <i class="psor mt-n5 feather-flag text-white btn-round-md bg-secondary font-xs"></i>
                                <h3 class="fw-700 font-xl text-grey-900 mt-2 ls-3 mb-0">354</h3>
                                <span class="font-xssss ls-0 text-grey-700 fw-600 mt-0">Calories gain</span>
                                <span class="mt-2 text-danger font-xsssss fw-700 ls-6">+ 44% </span>
                            </div>
                        </div>
                        <div class="col-lg-12 ps-2 pe-2">
                            <div class="card border-0  bg-lightblue rounded-10">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 p-5">
                                        <h2 class="text-grey-900 fw-700 ls-0 font-xl lh-3 m-0">Orgomart  Store<br>Green Salad</h2>
                                        <p class="text-grey-500 font-xssss mt-2 fw-500">Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                        <a href="#" class="bg-current text-white rounded-25 btn-cart w-125 d-inline-block text-center font-xsssss p-3 fw-600 ls-6">ANALYTICS</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 p-4"><img src="https://via.placeholder.com/305x305.jpg" alt="flame" class="w-100 pe-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 ps-2 pe-2">
                            <div class="card border-0 mt-3">
                                <div class="table-content table-responsive">
                                    <table class="table text-center mb-0">
                                        <thead class="bg-greylight rounded-10 ovh">
                                        <tr>
                                            <th class="border-0 p-3">&nbsp;</th>
                                            <th class="border-0 p-3">&nbsp;</th>
                                            <th class="border-0 p-3 fw-600 font-xsss mb-2 white-text">Price</th>
                                            <th class="border-0 p-3 fw-600 font-xsss mb-2 white-text">Date</th>
                                            <th class="border-0 p-3 fw-600 font-xsss mb-2 white-text">Status</th>
                                            <th class="border-0 p-3 fw-600 font-xsss mb-2 white-text">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" value="option1" aria-label="">
                                                    <label class="text-grey-500 font-xssss"></label>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">$</span>39 </h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700">23 OCT 2021</span>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-success d-inline-block text-success mb-1">DONE</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" value="option1" aria-label="">
                                                    <label class="text-grey-500 font-xssss"></label>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">$</span>24 </h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700">23 AUG 2021</span>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-success d-inline-block text-success mb-1">DONE</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" value="option1" aria-label="">
                                                    <label class="text-grey-500 font-xssss"></label>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">$</span>34 </h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700">21 AUG 2021</span>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-danger d-inline-block text-danger mb-1">PENDING</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" value="option1" aria-label="">
                                                    <label class="text-grey-500 font-xssss"></label>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">$</span>67 </h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700">23 AUG 2021</span>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-success d-inline-block text-success mb-1">DONE</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input" type="checkbox" value="option1" aria-label="">
                                                    <label class="text-grey-500 font-xssss"></label>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">$</span>89 </h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700">23 AUG 2021</span>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-success d-inline-block text-success mb-1">DONE</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mt-4">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#"><i class="feather-chevrons-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="feather-chevrons-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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
