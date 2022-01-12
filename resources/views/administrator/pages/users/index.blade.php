@extends('administrator.welcome')

@section('css')

@endsection


@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Users </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Istifadeciler
                            <small>Sayt Istifadeciler Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">

                            <div class=" col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body table-responsive">
                                        @if(isset($users) )

                                            <table class="table table-striped" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Ad</th>
                                                    <th>Soyad</th>
                                                    <th>Email</th>
                                                    <th>Nömrə</th>
                                                    <th>Şəhər</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($users as $user)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->surname}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->number}}</td>
                                                        <td>{{$user->region->name}}</td>

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
