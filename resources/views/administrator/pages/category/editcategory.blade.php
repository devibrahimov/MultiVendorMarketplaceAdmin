@extends('administrator.welcome')

@section('css')
    <!-- Bootstrap Select Css -->
    <link href="/administrator/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <style>
        .bootstrap-select.btn-group .dropdown-menu li {

            left: 21px!important;
        ;
        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Kategoriya </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Kateqoriyalar
                            <small>Sayt Kateqoriyalarının Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-12 col-md-12  col-sm-12">
                                <form action="{{route('categoryupdate',$category->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Kateqoriya adı</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name"
                                                                   maxlength="25" required
                                                                   value="{{$category->name}}" />
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Kateqoriya Açıqlama Mətni</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                   name="description" maxlength="50" value="{{$category->description}}" />
                                                        </div>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Üst Kateqoriyası </label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">

                                                            <select class="form-control select"
                                                                    data-live-search="true" name="parentid">

                                                                <option value=""> Ana Kategoriya</option>
                                                                @foreach($categories as $cat)
                                                                    <option {{$cat->id==$category->parent_id?'selected':''}}
                                                                        value="{{$cat->id}}">{{$cat->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                @if(!isset($category->parent_id))
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Icon</label>
                                                        <span> File type: image| width:100px ,height:100px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="icon" />
                                                            </div>
                                                            @error('icon')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Fon Şəkili</label>
                                                        <span> File type: image| width:470px ,height:501px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="image" />
                                                            </div>
                                                            @error('image')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <button type="submit"  class="btn btn-success waves-effect">
                                                <i class="material-icons " style="color: white">save</i>
                                                <span>Yadda Saxla</span>
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
