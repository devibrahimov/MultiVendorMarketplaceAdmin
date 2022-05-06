@extends('site.index')

@section('css')

@endsection


@section('content')


    <div class="main-div pb-5 pt-5">
        <div class="container">
            <div class="row">
                <main class="login-form">
                    <div class="cotainer">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                @include('site.pages.user.partials.navbar')
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Şifərnizi Dəyişdirin </div>
                                    <div class="card-body">

                                        <form action="{{ route('user.password') }}" method="POST">
                                            @csrf
                                            {{-- <input type="hidden" name="token" value="{{ $token }}">--}}

                                            <div class="form-group row">
                                                <label for="email_address" class="col-md-4 col-form-label
                                                text-md-right">Hazırki Şifrəniz</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="oldpassword" class="form-control"
                                                           name="oldpassword" required autofocus>

                                                </div>
                                            </div>

                                            <div class="form-group row mt-1">
                                                <label for="password" class="col-md-4 col-form-label
                                                text-md-right">Yeni Şifrə</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password" required autofocus>
                                                    @if ($errors->has('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row  mt-1">
                                                <label for="password-confirm" class="col-md-4 col-form-label
                                                text-md-right">Yeni Şifrə Təkrar</label>
                                                <div class="col-md-6">
                                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-4 mt-5">
                                                <button type="submit" class="btn btn-primary">
                                                    Yenilə
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </div>




@endsection

@section('js')

@endsection
