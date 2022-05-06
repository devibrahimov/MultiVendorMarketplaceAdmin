@extends('site.index')

@section('css')

@endsection


@section('content')


    <div class="das-nav md-mt-6 p-0 bg-current-shade bg-image-bottomcenter bg-image-cover" style="background-image: url(https://via.placeholder.com/1900x250.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ps-4 offset-lg-4 d-flex align-items-start flex-column h-250">
                    <h1 class="mt-lg-auto mb-4 mt-5 display3-size display1-sm-size text-grey-900 fw-700">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="main-div pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @include('site.pages.shop.partials.navbar')
                </div>
                <div class="col-lg-8 pt-5 ps-4">
                    <div class="row">
                        <nav class="nav nav-pills nav-fill" style="background-color: whitesmoke;">
                            <a class="nav-link active" aria-current="page" href="{{route('shop.products')}}">Məhsullar</a>
                            <a class="nav-link  " href="{{route('shop.createproduct')}}">Yeni Məhsul Əlavə Et</a>
                            <a class="nav-link" href="{{route('shop.trashedproducts')}}"> <i class="ti-trash font-xs ">
                                </i>
                                Silinmiş
                                Məhsullar </a>
                        </nav>
                        <style>
                            .form-check-label {
                                font-size: 14px
                            }
                        </style>
                        @if(isset($products))
                        <div class="col-lg-12 ps-2 pe-2">
                            <div class="card border-0 mt-3">
                                <div class="table-content table-responsive">
                                    <table class="table text-center mb-0">
                                        <tbody>
                                      @foreach($products as $product)
                                        <tr>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="{{isset(json_decode($product->images)[0])?json_decode
                                                ($product->images)[0]:''}}"
                                                     alt="product-image" class="w-80 d-inline-block
                                                pt-3 pb-3 bg-greylight rounded-6">
                                            </td>

                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1"><span class="font-xsssss text-grey-500">₼</span>{{$product->sale_price}}  @if($product->sale_price != $product->price) <sup><del class="text-red"><span class="font-xsssss text-grey-500">₼</span> {{$product->price}}</del></sup> @endif</h6>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="money text-grey-500 ls-3 font-xsssss fw-700"> {{$product->created_at->format('d/m/Y')}}</span>
                                            </td>
                                            <td class="product-total-price">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                           data-id="{{$product->key}}" {{$product->access == 1
                                                           ?'checked':''}} >
                                                </div>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="{{route('shop.editproduct',['id'=> $product->key, 'slug'
                                                =>$product->slug])}} "><i class="feather-edit me-1 font-xs text-grey-500"></i></a>
                                                <a href="{{route('shop.productDelete',$product->key)}}">
                                                    <i class="ti-trash font-xs text-grey-500"></i> </a>
                                            </td>
                                        </tr>
                                      @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{$products->links('vendor.pagination.mypagination')}}

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script>
        $(document).on('change', '.form-check-input', function () {
            var ariapressed = $(this).is(':checked');
            var dataid = $(this).attr('data-id');
            console.log(ariapressed)

            $.ajax({
                url: "{{route('shop.productActive')}}/",
                type: "get",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': dataid,
                    'status': ariapressed
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
    </script>
@endsection
