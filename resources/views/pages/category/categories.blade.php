@extends('welcome')

@section('css')

@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Kategoriya </h2>
        </div>
        <!-- Input -->
    @include('partials.alerts')



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


                                <div class=" col-lg-4 col-md-4  col-sm-12">
                                    <form action="{{route('setting')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                       <div class="card">

                                        <div class="body table-responsive">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <label class="card-inside-title">Kateqoriya adı</label>
                                            <span>  </span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name"  required placeholder=" " />
                                                </div>
                                                @error('name')
                                                <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="card-inside-title">Kateqoriya Açıqlama Mətni</label>
                                            <span>  </span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="description" maxlength="30" placeholder=" " />
                                                </div>
                                                @error('description')
                                                <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="card-inside-title">Icon</label>
                                            <span> File type: image| width:100px ,height:100px</span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" class="form-control" name="icon"  required placeholder="col-sm-3" />
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
                                            <span> File type: image| width:100px ,height:100px</span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" class="form-control" name="image"  required placeholder="col-sm-3" />
                                                </div>
                                                @error('image')
                                                <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                            <button type="submit"  class="btn btn-success waves-effect">
                                                <i class="material-icons " style="color: white">save</i>
                                                <span>Yadda Saxla</span>
                                            </button>
                                </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">

                                        </div>
                                        <div class="body table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>İcon</th>
                                                    <th>Şəkil</th>
                                                    <th>Kateqoriya adı</th>
                                                    <th>Açıqlama Mətni</th>
                                                    <th>--</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Otto</td>
                                                    <td>

                                                        <button type="button" class="btn btn-success waves-effect" style="padding: 2px 3px!important;">
                                                            <i class="material-icons" style="font-size:16px; top:2px;">check_circle</i>
                                                        </button>
                                                        <a href="{{route('category.show',1)}}" type="button" class="btn bg-orange waves-effect" style="padding: 2px 3px!important;">
                                                            <i class="material-icons" style="font-size:16px; top:2px;">play_for_work</i>
                                                            <span>Alt Kateqoriyalar</span>
                                                        </a>
                                                        <button type="button" class="btn bg-purple waves-effect" style="padding: 2px 3px!important;">
                                                            <i class="material-icons" style="font-size:16px; top:2px;">mode_edit</i>
                                                        </button>
                                                        <button type="button" class="btn bg-black waves-effect waves-light" style="padding: 2px 3px!important;">
                                                            <i class="material-icons" style="font-size:16px; top:2px;">delete</i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

@endsection

@section('js-script')

@endsection
