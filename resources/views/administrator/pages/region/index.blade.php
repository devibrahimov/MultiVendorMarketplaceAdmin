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
                        <div class="row clearfix">
                            <div class=" col-lg-4 col-md-4  col-sm-12">
                                <form action="{{ route('region.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">

                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Rayon ve ya Şəhər adı</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name"   maxlength="25"/>
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
                                                    <label class="card-inside-title">Posta Kodu</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="post_code" maxlength="50" placeholder="Poct Kodu" />
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
                                        @if(isset($regions) )

                                            <table class="table table-striped" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Region</th>
                                                    <th>Poct Kodu</th>
                                                    <th>Əməliyyatlar</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($regions as $region)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$region->name}}</td>
                                                        <td>{{$region->post_code}}</td>
                                                        <td>
                                                            <form action="{{ route('region.destroy',$region->id) }}" method="POST">

                                                            <a href="{{route('region.edit', $region->id) }}" class="btn btn-primary">Edit</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger">DELETE</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        @else
                                            <center>
                                                <img src="https://i.pinimg.com/236x/cf/b6/43/cfb643ba7408b8bd35c8b45ca1c13704.jpg"  >
                                            </center>
                                        @endif
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
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection

@section('js-script')

@endsection
