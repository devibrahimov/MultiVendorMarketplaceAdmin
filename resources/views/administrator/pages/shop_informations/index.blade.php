@extends('administrator.welcome')

@section('css')

@endsection


@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Shop İnformation </h2>
        </div>
        <!-- Input -->
        @include('administrator.partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Magaza Mehsullari
                            <small>Sayt  Magaza Mehsullari Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">

                            <div class=" col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body table-responsive">
                                        @if(count($shop_informations) )
                                            <table class="table table-striped" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Magaza Adı</th>
                                                    <th>Ad</th>
                                                    <th>Soyad</th>
                                                    <th>Nömrə</th>
                                                    <th>Unvan</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($shop_informations as $shop_information)

                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$shop_information->shop->shopname}}</td>
                                                        <td>{{$shop_information->name}}</td>
                                                        <td>{{$shop_information->surname}}</td>
                                                        <td>{{$shop_information->number}}</td>
                                                        <td>{{$shop_information->adress}}</td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        @else
                                            <div style="text-align: center;">
                                                <img src="https://i.pinimg.com/236x/cf/b6/43/cfb643ba7408b8bd35c8b45ca1c13704.jpg"  >
                                            </div>
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
