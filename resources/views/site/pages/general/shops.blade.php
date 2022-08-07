@extends('site.index')

@section('css')

@endsection


@section('content')
    <div class='container mx-auto min-vh-100 py-5'>
        <h2 class="font-xxl ps-3 text-black fw-600">Mağazalar</h2>


        <div class="market_list mt-3 w-100">


            @foreach( $shops as $shop)
                <div class="market_card">
                    @php
                        if( $shop->avatar == null ){
                              $avatar = '/uploads/shop/defaultavatar.png';
                        }elseif(!file_exists(public_path() .$shop->avatar)){
                            $avatar = 'tapilmadi';
                        }else{
                             $avatar = $shop->avatar ;
                        }
                    @endphp
                    <img src=" {{$avatar}}" alt="{{$shop->shopname}}">
                    <span class="posa text-white fw-600">{{$shop->shopname}}</span>
                    <p class="posa text-white font-xssss m-0 fw-400">{{$shop->work_time}}</p>
                    <a href="#" class="btn posa text-white bg-black font-xssss m-0 fw-600">Mağazaya get</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')

@endsection
