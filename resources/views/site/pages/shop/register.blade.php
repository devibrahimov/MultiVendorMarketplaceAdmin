@extends('site.index')

@section('css')

@endsection


@section('content')

    <div class="row min-vh-100">
        <div class="col-xl-12 min-vh-100 align-items-center  bg-dark-black rounded-3 overflow-hidden py-5">
            <div class="card shadow-lg border-0 ms-auto me-auto login-card mt-auto mb-auto zindex-100 rounded-10
            theme-dark-bg" style="max-width: 860px;">
                <div class="select-user">
                    <button class="market bg-current" id="market-btn">Mağaza</button>
                </div>
                <div class="card-body rounded-0 text-start p-4">
                    <h2 class="fw-700 display1-size display2-md-size mb-4 mt-0 white-text text-grey-900">Hesabını Yarat
                    </h2>
                    <form action="{{route('shop.register')}}" method="post">
                        <div class="row">
                            <div class="form-group icon-input mb-3 w-50">
                                <i class="font-sm ti-user text-grey-500 pe-0 ms-3"></i>
                                <input type="text"  name="name"  class="style2-input ps-5 form-control text-grey-900 white-text
                                font-xsss fw-600" placeholder="Ad" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group icon-input mb-3 w-50">
                                <i class="font-sm ti-user text-grey-500 pe-0 ms-3  "></i>
                                <input type="text" name="surname" class="style2-input ps-5 form-control text-grey-900
                                white-text
                                font-xsss fw-600" placeholder="Soyad" required>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        @csrf
                       <div class="row">
                           <div class="form-group icon-input mb-3 w-50">
                               <i class="font-sm ti-user text-grey-500 pe-0 ms-3"></i>
                               <input type="text" name="shopname" class="style2-input ps-5 form-control text-grey-900 white-text
                               font-xsss fw-600" placeholder="Mağaza Adı" required>
                           </div>
                           <div class="form-group select-location icon-input mb-3 w-50">
                               <i class="font-sm ti-location-pin text-grey-500 pe-0 ms-3"></i>
                               <select name="shopcategory" class="style2-input ps-5 form-control text-grey-900 white-text font-xsss
                               fw-600" required>
                                   <option value="" selected>Mağaza Kateqoriyası</option>
                                   @foreach($categories as $category)
                                   <option value="{{$category->id}}">{{$category->name}}</option>
                                   @endforeach
                               </select>
                               @if ($errors->has('shopcategory'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('shopcategory') }}</strong>
                                </span>
                               @endif
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group icon-input mb-3 w-50">
                               <i class="font-sm ti-mobile text-grey-500 pe-0 ms-3"></i>
                               <input type="number" name="number" class="style2-input ps-5 form-control text-grey-900 white-text
                            font-xsss fw-600" placeholder="Telefon nömrəsi" required>
                               @if ($errors->has('number'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                               @endif
                           </div>
                           <div class="form-group icon-input mb-3 w-50">
                               <i class="font-sm ti-email text-grey-500 pe-0 ms-3"></i>
                               <input type="email" name="email" class="style2-input ps-5 form-control text-grey-900
                            white-text font-xsss fw-600" placeholder="E-poçt ünvanı" required>
                               @if ($errors->has('email'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                               @endif
                           </div>
                       </div>
                        <div class="form-group icon-input mb-3">
                            <input type="text"  name="adress" class="style2-input ps-5 form-control text-grey-900
                            white-text
                            font-xss ls-3" placeholder="Adres" required>
                            <i class="font-sm ti-location-pin text-grey-500 pe-0"></i>
                            @if ($errors->has('adress'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('adress') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">

                            <div class="form-group icon-input mb-3 w-50">
                                <input type="Password"  name="password" class="style2-input ps-5 form-control text-grey-900
                            white-text
                            font-xss ls-3" placeholder="Şifrə" required>
                                <i class="font-sm ti-lock text-grey-500 pe-0 ms-3"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group icon-input mb-1 w-50">
                                <input type="Password" name="password_confirmation"  class="style2-input ps-5 form-control
                            text-grey-900
                            white-text
                            font-xss ls-3" placeholder="Şifrə Təkrarı" required>
                                <i class="font-sm ti-lock text-grey-500 pe-0 ms-3"></i>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
{{--                        <div class="form-check text-start mb-3">--}}
{{--                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck3">--}}
{{--                            <label class="form-check-label font-xsss text-grey-500 white-text" --}}
{{--                                   for="exampleCheck3">Təhlüsizlik Şərtlərini </label>--}}
{{--                        </div>--}}

                        <div class="col-sm-12 p-0 text-start">
                            <div class="form-group mb-1"><button type="submit" class="text-center style2-input
                            text-white
                            fw-600 bg-current border-0 p-0 ">Qeydiyyatdan keç</button>
                            </div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32 white-text">Daha Əvvəlcədən
                                Mağazan varsa
                                <a href="{{route('shop.login')}}" class="fw-700 ms-1">Hesabına Giriş Et</a>
                            </h6>
                        </div>
                    </form>


                </div>
            </div>


        </div>
    </div>
@endsection

@section('js')

@endsection
