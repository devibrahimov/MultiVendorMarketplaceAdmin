@extends('site.index')

@section('css')

@endsection


@section('content')
    <!-- BANNER WRAPPER -->
    <div class="page-nav md-mt-6" style="background-image: url('{{$contracts->image}}');">
        <div class="container p-4">

        </div>
    </div>
    <!-- BANNER WRAPPER -->

    <!-- BLOG WRAPPER -->
    <div class="blog-wrapper pt-lg-12 pb-lg-12 py-4 my-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="fw-700 text-grey-800 display1-size display1-sm-size lh-3 mb-3
                    pe-lg-5">{{$contracts->title}}</h2>
                    {!! $contracts->content !!}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
