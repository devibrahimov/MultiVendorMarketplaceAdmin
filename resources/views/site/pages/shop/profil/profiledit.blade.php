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
                    <div class="card border-0">
{{--                        <div class="card-body mb-3 bg-lightblue p-4 rounded-10">--}}
{{--                            <h4 class="fw-700 mt-2 font-xss text-grey-900 d-flex mb-0">Hurin Seary <span class="bg-primary text-white font-xsssss fw-600 ls-3 p-2 rounded-6 ms-auto">HOME</span></h4>--}}
{{--                            <h6 class="fw-500 font-xssss text-grey-600 lh-22 mb-0">Manikpur, Thakurpara PO Ital Gacha 2 no Airport Gate <br> Thakur Para United Club, Kolkata <br> West Bengal - 700079</h6>--}}
{{--                        </div>--}}
{{--                        <div class="card-body mb-3 bg-lightgreen p-4 rounded-10">--}}
{{--                            <h4 class="fw-700 mt-2 font-xss text-grey-900 d-flex mb-0">Surfiya Zakir <span class="bg-success text-white font-xsssss fw-600 ls-3 p-2 rounded-6 ms-auto">OFFICE</span></h4>--}}
{{--                            <h6 class="fw-500 font-xssss text-grey-600 lh-22 mb-0">Manikpur, Thakurpara PO Ital Gacha 2 no Airport Gate <br> Thakur Para United Club, Kolkata <br> West Bengal - 700079</h6>--}}
{{--                        </div>--}}
                        <form action="{{route('shop.profiledit')}}" method="post" >
                            <div class="row">  @csrf
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Ad</label>
                                        <input type="text" required class="form-control theme-black-bg rounded-10"
                                            name="name"   value="{{$shop->name}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Soyad</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                           name="surname"  required  value="{{$shop->surname}}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">E-poçt ünvanı</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                            name="email"   required  value="{{$shop->email}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Telefon nömrəsi</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                            name="number"   required  value="{{$shop->number}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Mağaza Kateqoriyası</label>
                                        <select name="category" required class="form-control theme-black-bg rounded-10"
                                                id="">
                                            @foreach($categories as $category)
                                                <option {{$shop->shopcategory== $category->id? 'selected' : ''}}
                                                        value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Adres</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                              name="address" required  value="{{$shop->adress}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">
                                            Mağaza İş saatları </label>
                                        <input type="text" name="work_time" class="form-control theme-black-bg
                                        rounded-10" placeholder="09:30-21:00 / B.e - B"
                                               value="{{$shop->work_time}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text   ">Mağaza İş saatları (Nümunə)</label>
                                        <span  class="  white-text   form-control  rounded-10 "> 09:30-21:00 / B.e - B </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input font-xs" type="checkbox" value="check"
                                           required    name="check"   id="flexCheckStock">
                                        <label class="form-check-label fw-600 font-xsss text-grey-600"
                                               for="flexCheckStock">Dəyişiklik Etdiyim məlumatların doğruluğunu
                                            təsdiq edirəm</label>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="w-100 p-3 bg-current font-xsss ls-1 fw-600 text-white
                                    rounded-10 d-block text-center">Dəyişiklik et</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
