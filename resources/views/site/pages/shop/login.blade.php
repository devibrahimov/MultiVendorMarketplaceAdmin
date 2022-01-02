@extends('site.index')

@section('css')

@endsection


@section('content')

    <div class="row min-vh-70">
        <div class="col-xl-12 min-vh-70 align-items-center  bg-dark-black rounded-3 overflow-hidden py-5">
            <div class="card shadow-lg border-0 ms-auto me-auto login-card mt-auto mb-auto zindex-100 rounded-10
            theme-dark-bg" style="max-width: 860px;">
                <div class="select-user">
                    <button class="market bg-current" id="market-btn">Mağaza</button>
                </div>
                <div class="card-body rounded-0 text-start p-4">
                    <h2 class="fw-700 display1-size display2-md-size mb-4 mt-0 white-text text-grey-900">Hesabına Giriş Et
                    </h2>
                    <form action="{{route('shop.login')}}" method="post">

                        @csrf
                        <div class="row">

                            <div class="form-group icon-input mb-3 w-100">
                                <i class="font-sm ti-email text-grey-500 pe-0 ms-3"></i>
                                <input type="email" name="email" class="style2-input ps-5 form-control text-grey-900
                            white-text font-xsss fw-600" placeholder="E-poçt ünvanı" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group icon-input mb-3 w-100">
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

                        </div>

                        <div class="col-sm-12 p-10 text-start ">
                            <div class="form-group mb-1"><button type="submit" class="text-center style2-input
                            text-white
                            fw-600 bg-current border-0 p-0 w-100 "> Giriş Et </button>
                            </div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32 white-text">Daha Əvvəlcədən
                                Mağaza hesabınız yoxdursa
                                <a href="{{route('shop.register')}}" class="fw-700 ms-1">Qeydiyyatdan keçin</a>
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
