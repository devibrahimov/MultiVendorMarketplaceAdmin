@extends('administrator.welcome')

@section('css')

@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Region </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Regionlar
                            <small>Sayt Kateqoriyalarının Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('region.update',$region->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">

                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-6">
                                                    <label class="card-inside-title">Rayon ve ya Şəhər adı</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name" value="{{$region->name}}"  maxlength="25" required placeholder=" " />
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="card-inside-title">Posta Kodu</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" value="{{$region->post_code}}" name="post_code" maxlength="50" placeholder="Poct Kodu" />
                                                        </div>
                                                        @error('description')
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

@endsection

@section('js-script')

@endsection
