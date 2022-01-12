@extends('administrator.welcome')

@section('css')
    <link href="/administrator/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <style>
        .bootstrap-select.btn-group .dropdown-menu li {

            left: 21px!important;

        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard /  Korporativ Sehifeler </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Korporativ Sehifeler
                            <small>Sayt  Korporativ Sehifeler Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-12 col-md-12  col-sm-12">
                                <form action="{{route('corporativeupdate',$corporative->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Image</label>
                                                    <span> File type: image|jpg,png</span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="file" class="form-control" name="image"
                                                                    />
                                                        </div>
                                                        @error('image')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Basliq</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="title"
                                                                   maxlength="25" required
                                                                   value="{{$corporative->title}}" />
                                                        </div>
                                                        @error('title')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title"></label>
                                                    <span>Metn</span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="content"
                                                                   maxlength="25"
                                                                   value="{{$corporative->content}}" />
                                                        </div>
                                                        @error('content')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <button type="submit"  class="btn btn-success waves-effect">
                                                <i class="material-icons " style="color: white">save</i>
                                                <span>Update</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
    </div>


@endsection

@section('js-libs')

    <!-- Custom Js -->
    <script src="/administrator/js/admin.js"></script>
    <script src="/administrator/js/pages/forms/advanced-form-elements.js"></script>
@endsection

@section('js-script')

@endsection

