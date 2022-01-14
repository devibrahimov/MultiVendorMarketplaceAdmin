@extends('site.index')

@section('css')

@endsection


@section('content')


    <div class="main-div pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @include('site.pages.user.partials.navbar')
                </div>
                <div class="col-lg-8 pt-5 ps-4">
                    <div class="row">
                        <div class="col-lg-12 ps-2 pe-2">
                            <div class="card border-0 mt-3">
                                <div class="table-content table-responsive">
                                    <table class="table text-center mb-0">
                                        <tbody>

                                        <tr>
                                            <td class="product-thumbnail text-start ps-0">
                                                <img src="https://via.placeholder.com/171x148.png" alt="product-image" class="w-80 d-inline-block pt-3 pb-3 bg-greylight rounded-6">
                                            </td>
                                            <td class="product-p">
                                                <h6 class="font-xs ls-3 fw-700 text-current mt-1">asdasdasds adasd
                                                    asd a d</h6>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 alert-success d-inline-block text-success mb-1">DONE</span>
                                            </td>
                                            <td class="product-remove text-right">
                                                <a href="#"><i class="bx bx-cart me-1 font-xs text-grey-500"></i></a>
                                                <a href="#"><i class="ti-trash font-xs text-grey-500"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mt-4">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#"><i class="feather-chevrons-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="feather-chevrons-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
