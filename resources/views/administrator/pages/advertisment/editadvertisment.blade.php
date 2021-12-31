@extends('administrator.welcome')

@section('css')
    <link href="/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <style>
        .bootstrap-select.btn-group .dropdown-menu li {

            left: 21px!important;

        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Reklam </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Reklamlar
                            <small>Sayt Reklam Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-12 col-md-12  col-sm-12">
                                <form action="{{route('advertismentupdate',$advertisment->id)}}" method="post" enctype="multipart/form-data">
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
                                                    <label class="card-inside-title">Company</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="company"
                                                                   maxlength="25" required
                                                                   value="{{$advertisment->company}}" />
                                                        </div>
                                                        @error('company')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Url</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="url"
                                                                   maxlength="25"
                                                                   value="{{$advertisment->url}}" />
                                                        </div>
                                                        @error('url')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Page</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="page"
                                                                   maxlength="25" required
                                                                   value="{{$advertisment->page}}" />
                                                        </div>
                                                        @error('page')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Line</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="line"
                                                                   maxlength="25"
                                                                   value="{{$advertisment->line}}" />
                                                        </div>
                                                        @error('line')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Start Time</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control" name="start_time"
                                                                   maxlength="25"
                                                                   value="{{$advertisment->start_time->format('Y-m-d')}}" />
                                                        </div>
                                                        @error('page')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="card-inside-title">Stop Time</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control" name="stop_time"
                                                                   maxlength="25"
                                                                   value="{{$advertisment->stop_time->format('Y-m-d')}}" />
                                                        </div>
                                                        @error('stop_time')
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
    <script src="/js/admin.js"></script>
    <script src="/js/pages/forms/advanced-form-elements.js"></script>
@endsection

@section('js-script')

@endsection

