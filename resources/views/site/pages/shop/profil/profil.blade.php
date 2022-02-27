@extends('site.index')

@section('css')

@endsection


@section('content')


    <div class="das-nav md-mt-6 p-0 bg-current-shade bg-image-bottomcenter bg-image-cover" style="background-image: url(https://via.placeholder.com/1900x250.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ps-4 offset-lg-4 d-flex align-items-start flex-column h-250">
                    <h1 class="mt-lg-auto mb-4 mt-5 display3-size display1-sm-size text-grey-900 fw-700">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="main-div pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   @include('site.pages.shop.partials.navbar')
                </div>
                <div class="col-lg-8 pt-5 ps-4">
                    <div class="row">

                        <div class="col-lg-3 ps-2 pe-2 mb-3">
                            <div class="card border-0 pt-4 pb-4 text-center alert-warning align-items-center rounded-10">
                                <i class="psor mt-n5 feather-hard-drive text-white btn-round-md bg-warning font-xs"></i>
                                <h3 class="fw-700 font-xl text-grey-900 mt-2 ls-3 mb-0">3252</h3>
                                <span class="font-xssss ls-0 text-grey-700 fw-600 mt-0">Məhsullar</span>
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
                                        <h2 class="text-grey-900 fw-700 ls-0 font-xl lh-3 m-0">Mağaza
                                            Profilinizə<br>Xoş Gəldiniz</h2>
                                        <p class="text-grey-500 font-xssss mt-2 fw-500">Mağaza Profilinzdən
                                            məhsulları əlavə edə,Stok sayılarını ,məhsullarınızın baxış
                                            statistikası izləyə və yaxın gələcəkdə online satış reallaşdıra
                                            bilərsiniz.Platformamızda online satışlar başladığı zaman sizə sms
                                            vasitəsi ilə məlumatlandırma gələcəkdir.</p>
{{--                                        <a href="#" class="bg-current text-white rounded-25 btn-cart w-125 d-inline-block text-center font-xsssss p-3 fw-600 ls-6">ANALYTICS</a>--}}
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 p-4"><img src="https://via.placeholder.com/305x305.jpg" alt="flame" class="w-100 pe-3"></div>
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
