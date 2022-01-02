@extends('administrator.welcome')

@section('css')

@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Tənzimləmələr</h2>
        </div>
        <!-- Input -->
       @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <form action="{{route('setting')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="header">
                        <h2>
                            Tənzimləmələr
                            <small>Sayt Məlumatlarının Tənzimləmələri</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <button type="submit"  class="btn btn-success waves-effect">
                                <i class="material-icons " style="color: white">save</i>
                                <span>Yadda Saxla</span>
                            </button>
                        </ul>
                    </div>
                    <div class="body">

                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <label class="card-inside-title">Logo (Rengli)</label>
                                <span> File type: .png | width:300px ,height:100px</span>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="logo_color"   accept="image/png" required placeholder="col-sm-3" />
                                    </div>
                                    @error('logo_color')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                  <label class="card-inside-title">Logo (Qara)</label>
                                <span> File type: .png | width:300px ,height:100px</span>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="logo_black" accept="image/png" required placeholder="col-sm-3" />
                                    </div>
                                    @error('logo_black')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                  <label class="card-inside-title">Logo (Ağ)</label>
                                <span> File type: .png | width:300px ,height:100px</span>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="logo_white" accept="image/png" required placeholder="col-sm-3" />
                                    </div>
                                    @error('logo_white')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                  <label class="card-inside-title">Favicon</label>
                                <span> File type: image| width:100px ,height:100px</span>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="favicon"  required placeholder="col-sm-3" />
                                    </div>
                                    @error('favicon')
                                    <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <label class="card-inside-title">Başlıq</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" placeholder="Başlıq" required />
                                    </div>
                                    @error('title')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="card-inside-title">Meta Açıqlama Mətini</label>
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize"name="meta_description" required placeholder="Meta Açıqlama Mətini"></textarea>
                                    </div>
                                    @error('meta_description')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="card-inside-title">Sosial Mediyalar Meta Tagları</label>
                                    @error('meta_tags')
                                    <div class="alert   alert-dismissible" role="alert" style="color: red!important">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: red!important">&times;</span></button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-line">
                                        <textarea rows="9" class="form-control no-resize" name="meta_tags" style="background-color: #00183e;color: #6ee0f6;padding: 15px" placeholder="Sosial Mediyalar Meta Tagları"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>
@endsection

@section('js-script')


@endsection
