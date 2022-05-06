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
                    @include('site.pages.user.partials.navbar')
                </div>
                <div class="col-lg-8 pt-5 ps-4">
                    <div class="card border-0">

                        <form action="{{route('user.profiledit')}}" method="post" >
                            <div class="row">  @csrf
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Ad</label>
                                        <input type="text" required class="form-control theme-black-bg rounded-10"
                                               name="name"   value="{{$user->name}}">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Soyad</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                               name="surname"    value="{{$user->surname}}">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">E-poçt ünvanı</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                               name="email"     value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label class="mont-font fw-600 font-xssss mb-2 white-text">Nömrə</label>
                                        <input type="text" class="form-control theme-black-bg rounded-10"
                                               name="number"     value="{{$user->number}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-0 text-start" >
                                <div class="form-group mb-1" >
                                    <button type="submit" class="text-center style2-input
                                     text-white
                                   fw-600 bg-current border-0 p-0 " style="width:200px!important;">Məlumatları Yenilə</button>
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
