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
                                        @if(count($shops) )
                                            <table class="table table-striped" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Magaza Adı</th>
                                                    <th>Magaza Seriya Nomresi</th>
                                                    <th>Kategoriyası</th>
                                                    <th>Emaili</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($shops as $shop)

                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$shop->shopname}}</td>
                                                        <td>{{$shop->shop_serialnumber}}</td>
                                                        <td>{{$shop->category->name}}</td>
                                                        <td>{{$shop->email}}</td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input status" data-id="{{$shop->id}}" type="checkbox"  id="flexSwitchCheckDefault">
                                                                <label class="form-check-label" for="flexSwitchCheckDefault">Tesdiq Edirəm</label>
                                                            </div>
                                                        </td>

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

            $('.status').on('click', function() {
                $.ajax({
                    type:'PUT',
                    url: "{{ route('shops.update', 'shop-id') }}".replace('shop-id', $(this).data('id')),
                    data: {
                        'aprovel': $('.status:checked').val(),
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(data) {
                       console.log(data.success)
                    },
                });
            });
        } );
    </script>
@endsection

@section('js-script')

@endsection
