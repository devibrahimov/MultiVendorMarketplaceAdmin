@extends('administrator.welcome')

@section('css')
    <style>

        .switch {
            position: relative;
            display: inline-block;
            width: 48px;
            height: 22px;
            top: 15px;
        }

        .switch input {display:none;}

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Sozlesmeler </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Sozlesmeler
                            <small>Sayt Sozlesme Tənzimləmələri</small>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-4 col-md-4  col-sm-12">
                                <form action="{{route('contractsstore')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">

                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Basliq</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="title"
                                                                   maxlength="25" required  />
                                                        </div>
                                                        @error('title')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Metn</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="content"
                                                                   maxlength="25" required  />
                                                        </div>
                                                        @error('content')
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
                                        @if(isset($contracts) )

                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Basliq</th>
                                                    <th>Metn</th>
                                                    <th>--</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($contracts as $contract)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$contract->title}}</td>
                                                        <td>{{$contract->content}}</td>
                                                        <td>

                                                            <a href="{{route('contractsedit',$contract->id)}}" class="btn bg-purple
                                                        waves-effect"
                                                               style="padding: 2px 3px!important;">
                                                                <i class="material-icons" style="font-size:16px; top:2px;">mode_edit</i>
                                                            </a>
                                                            <button type="button" onclick="document.getElementById('deletecontract{{$contract->id}}').submit()"  class="btn bg-black waves-effect waves-light" style="padding: 2px 3px!important;">
                                                                <i class="material-icons" style="font-size:16px; top:2px;">delete</i>
                                                            </button>

                                                            <form action="{{route('contractdelete',$contract->id)}}" id="deletecontract{{$contract->id}}" method="post" style="display: none">
                                                                @csrf
                                                                @method('DELETE')
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

@endsection

@section('js-script')
    <script>

    </script>
@endsection
