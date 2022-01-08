@extends('site.index')

@section('css')
    <style>
        .image-uploader li {
            flex-basis: 23%;
            height: 200px;
            margin-right: 2%;
            margin-bottom: 30px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-uploader li img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .action-btn {
            position: absolute;
            width: 100%;
            top: 0px;
            left: 0px;
            height: 100%;
            opacity: 0;
        }

        .action-btn span {
            font-weight: bolder;
            cursor: pointer;
            right: 10px;
            position: absolute;
            top: 8px;
            width: 25px;
            height: 25px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #000;
            z-index: 9999;
            border: 1px solid #ccc;

        }

        .action-btn p {
            display: flex;
            justify-content: center;
        }

        .action-btn p a {
            display: inline-block;
            position: absolute;
            bottom: 20px;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            background: #fff;
            cursor: pointer;
        }

        .image-uploader li:hover .action-btn {
            opacity: 1;
            transition: 0.5s;
        }

        .image-uploader li:nth-child(1) .action-btn {
            opacity: 1 !important;
        }

        .addImg {
            background-color: rebeccapurple;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .addImg p {
            margin-bottom: 0px !important;
        }

        .addImg p span {
            font-size: 25px;
        }

        .CategoryList button {
            color: #22ca46;
            border: 1px solid #22ca46;
            border-radius: 25px;
            padding: 1px 10px;
            background: #fff;
            margin-right: 20px;
        }

        .cart-boxCategory ul li {
            flex-basis: 14%;
            margin-bottom: 30px;
            margin-right: 2%;
            text-align: center;
        }

        .cart-boxCategory ul li img {
            width: 70px;
            border-radius: 50%;
            margin-bottom: 5px;
        }

        .cart-boxCategory ul li p {
            font-size: 15px;
        }

        .cart-boxCategory2 {
            display: none;
        }

        .cart-boxCategory2 span {
            padding: 3px 8px;
            cursor: pointer;
        }

        .cart-boxCategory2 ul li {
            flex-basis: 48%;
        }

        .cart-boxCategory2 ul li a {
            font-size: 15px !important;
            padding: 4px !important;
        }

        .cart-boxCategory3 {
            display: none;
        }

        .cart-boxCategory3 span {
            padding: 3px 8px;
            cursor: pointer;
        }

        .cart-boxCategory3 ul li {
            flex-basis: 48%;
        }

        .cart-boxCategory3 ul li a {
            font-size: 15px !important;
            padding: 4px !important;
        }

        .category-down {
            position: absolute;
            bottom: 0px !important;
            height: 70px;
            width: 100%;
            border-top: 1px solid #ccc;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .input-group {
            border-bottom: 1px solid #ccc;
            width: 300px;
        }

        .input-group input {
            border: none;
            width: 100%;
            padding: 0px 10px;
        }

        .inp-group {
            border-bottom: 1px solid #ccc;
            width: 90%;
        }

        .inp-group input {
            width: 100%;
            border: none;
            padding: 5px 10px;
        }

        .btnSubmit {
            padding: 9px 25px;
            background: #21b827;
            border: none;
            border-radius: 10px;
            color: #fff;
        }

        .citySelect {
            width: 220px;
        }

        @media only screen and (max-width: 1200px) {
            .image-uploader li {
                flex-basis: 30%;
            }
        }

        @media only screen and (max-width: 1024px) {
            .image-uploader li {
                flex-basis: 47%;
            }

            .left_images {
                width: 60% !important;
            }

            .right_text {
                width: 40% !important;
            }
        }

        @media only screen and (max-width: 900px) {
            .w-75 {
                width: 90% !important;
            }

            .w-25 {
                width: 60% !important;
            }
        }

        @media only screen and (max-width: 800px) {
            .w-75 {
                width: 95% !important;
            }

            .w-25 {
                width: 80% !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .image-uploader li {
                flex-basis: 100%;
            }

            .citySelect {
                width: 100% !important;
            }

            .w-25 {
                width: 90% !important;
            }

            .w-50 {
                width: 100% !important;
            }

            .inp-group {
                width: 100% !important;
            }

            .input-group {
                width: 100% !important;
            }

            .categoryModal {
                height: 100vh !important;
            }

            .modal-dialog {
                margin: 0rem !important;
            }

            .category-down {
                height: auto !important;
            }

            .cart-boxCategory ul {
                justify-content: space-between;
            }

            .cart-boxCategory ul li {
                flex-basis: 45%;
            }

            .cart-boxCategory ul li img {
                width: 60px;
            }
            .cart-boxCategory ul li p {
                font-size: 14px;
            }
        }
    </style>
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


                        <nav class="nav nav-pills nav-fill">
                            <a class="nav-link " aria-current="page" href="{{route('shop.products')}}">Məhsullar</a>
                            <a class="nav-link active " href="{{route('shop.createproduct')}}">Yeni Məhsul Əlavə Et</a>
                            <a class="nav-link" href="#">Deaktiv Məhsullar </a>

                        </nav>

                        <div class="col-lg-12 ps-2 pe-2">
                            <div class="card border-0 mt-3">
                                <!-- HEADER WRAPPER -->
                                <div className='  mx-auto min-vh-100 my-2 ms-md-5 ms-1 ad-add'>
                                    <div class="ad-info row  m-4 ms-3">
                                        <div class="col ">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Asanlıqla pulsuz elan yerləşdirin
                                            </h3>
                                            <p class="fw-600 text-grey-800  mb-0 text-capitalize mt-3">
                                                <b class="font-xsss">Şəkilləri yükləyin</b>
                                                <span class="font-xssss">(30 şəkilə qədər)</span>
                                            </p>
                                        </div>
                                        <form action="{{route('shop.createproduct')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class=" d-flex flex-wrap justify-content-between mt-2 ">
                                            <div class=" w-75 p-3 left_images ">
                                                <style>
                                                    .image-uploader__content-item {
                                                        margin-left: 8px;
                                                        margin-bottom: 8px;
                                                        width: 130px;
                                                        height: 106px;
                                                    }
                                                    .image-uploader__content-item {
                                                         position: relative;
                                                         float: left;
                                                         overflow: hidden;
                                                         width: calc(25vw - 9px);
                                                         height: calc(25vw - 9px);
                                                         border-radius: 6px;
                                                         margin-left: 1px;
                                                         margin-bottom: 1px;
                                                     }
                                                      .image-upload-button.sticky {
                                                          width: 152px;
                                                          height: 189px;
                                                          padding: 31px;
                                                        }

                                                      .image-upload-button {
                                                         display: inline-flex;
                                                         -webkit-box-align: center;
                                                         align-items: center;
                                                         -webkit-box-pack: center;
                                                         justify-content: center;
                                                         width: calc(25vw - 9px);
                                                         height: calc(25vw - 9px);
                                                         background: rgb(240, 242, 247);
                                                         border-radius: 6px;
                                                         cursor: pointer;
                                                     }
                                                     .image-upload-button__content {
                                                        display: flex;
                                                        flex-direction: column;
                                                        -webkit-box-align: center;
                                                        align-items: center;
                                                    }
                                                    .image-upload-button__content-title.Caption {
                                                        margin-top: 22px;
                                                        font-weight: 700;
                                                        line-height: 1.5;
                                                        color: rgb(10, 19, 49);
                                                    }
                                                </style>
                                                <ul class="d-flex flex-wrap image-uploader ul ">


{{--                                                    <li class="image-uploader__content-item">--}}
{{--                                                        <img src="" id="imagepreview" alt="">--}}
{{--                                                    </li>--}}

                                                    <li class="image-uploader__content-item"><div class="ImageUploaderButton css-1nw0pht">
                                                            <label for="imageuploadinput" class="image-upload-button sticky image">
                                                                <div class="image-upload-button__content">
                                                   <span class="Caption primary image-upload-button__content-title">
                                                     <i class="fas fa-camera"></i>
                                                                        Fotoşəkil əlavə edin</span>
                                                                </div>
                                                                <input id="imageuploadinput" class="d-none"
                                                                      name="images" type="file" multiple >
                                                            </label>

                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>
                                            <div class="w-50 mt-2 mb-5">
                                                <button type="submit" class="btnSubmit">Elanı dərc edin!</button>
                                            </div>
                                        </form>
                                        <div class="w-75 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Təsvir
                                            </h3>
                                            <div class="form-group mt-2">
                        <textarea style="border:1px solid #ccc;" class=" p-2 font-xssss w-100 " rows="4"
                                  placeholder="Nümunə: Dəbdə olan Samsung Galaxy S9! Rəng - qara brilyant. Super parlaq ekran, 12 Mp kamera. 1 il əvvəl alınıb, vəziyyəti - yeni kimi. Yaxşı işləyir."></textarea>
                                            </div>
                                        </div>
                                        <div class="w-75 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Kateqoriya <span
                                                    style="color: red;">*</span> </h3>

                                            <div class="w-75">
                                                <div class=" d-flex mt-2 ">
                                                    <ul class="d-flex flex-wrap image-uploader list_category">
                                                        <!-- <span>telvizor >></span> -->
                                                    </ul>
                                                    <div class="CategoryList">
                                                        <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#savedmodal2" class="btnModal">secmek</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-3 text-capitalize">Şəhər</h3>
                                            <select class="citySelect">
                                                <option>Baki</option>
                                            </select>
                                        </div>
                                        <div class="w-75 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-3 text-capitalize">Qiymet (AZN)</h3>
                                            <div class="input-group">
                                                <input type="number" maxlength="8" placeholder="Razılaşma yolu ilə">
                                            </div>
                                        </div>
                                        <div class="w-75 mt-5  d-flex flex-wrap justify-content-between">
                                            <div class=" w-50  mb-3">
                                                <div class="inp-group">
                                                    <input type="text" placeholder="+994xx" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="w-50 mt-2 mb-5">
                                            <button type="button" class="btnSubmit">Elanı dərc edin!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection



@section('js')

    <script>


        $(document).ready(function () {




        $(document).on('change','#imageuploadinput',function(){
            var error_images = '';
            var form_data = new FormData();
            form_data.append( "_token",'{{ csrf_token() }}' );
            var files = $('#imageuploadinput')[0].files;
             //console.log(files)

            if(files.length > 20){

                error_images += '10 dan cox shekil yukleye bilmersiniz'

            }else{
                var output = document.querySelector(".ul");
                for(var i=0;i<files.length;i++){
                    var imageFile =document.getElementById('imageuploadinput').files[i]
                    var name = imageFile.name;
                    var ext = name.split('.').pop().toLowerCase();

                    //bu hissede istifadeci terefinden secilmish shekilleri review olaraq gostereceyik
                     //console.log(imageFile)

                    //yeni Object yaradiriq
                    var reader = new FileReader();


                    reader.onload = function (e,i) {

                        var li = document.createElement("li");
                        li.innerHTML = "<img id='image"+i+"' class='thumbnail' src='" + e.target.result + "'" +
                            "title=' '/> <div class='action-btn'> <span onclick='del(this)'>x</span> </div> "
                         output.insertBefore(li, null);

                            $(li).insertBefore('.iputadd');
                      //  $('#imagepreview').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(imageFile);



                    // $(reviewImages).insertBefore('.iputadd');

                    if(jQuery.inArray(ext,['jpg','jpeg','png']) == -1){
                        error_images += 'Formata uyğun olmayan '+i+'Fayl yükləməyə çalışırsınız'
                        console.log(error_images)
                    }else{
                        form_data.append('file[]',document.getElementById('imageuploadinput').files[i]);


                    }//endelse
                }//endfor

                if(error_images == ''){//xeta boshdursa
                    $.ajax({
                        url: "{{route('shop.imageupload')}}",
                        method: "POST",
                        data:form_data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        beforeSend:function(){

                            //bura shekiller yuklenir loadingi qoymaq
                        },
                        success:function (){
                           // shekillerin yuklenmish oldugunu gostermek
                        }


                    })

                }else{
                    console.log(error_images)
                    // $('#imageuploadinput').val(null);
                    // $('#error_messages_for_files').html('Error mesajiniz'+error_images)
                }

            }

           // $( a).insertBefore('.iputadd');

        });




        });



    </script>

    <script>
        $(document).ready(function () {



            var ListCategory= document.querySelector(".list_category")
            $(".cart-boxCategory ul li").on("click", function (e) {
                ListCategory.innerHTML += `<span style="margin-right:10px">${e.target.innerHTML} <i class="fas fa-arrow-right"></i> </span>`
                document.querySelector(".category-down").innerHTML += ` <a style="margin-right:10px" href="#">${e.target.innerHTML} <span><i class="fas fa-arrow-right"></i></span></a>`

                $(this).parent().parent().parent().parent().fadeOut("fast")
                $(".cart-boxCategory2").show("fast")
            })
            $(".cart-boxCategory2 ul li a").on("click", function (e) {
                ListCategory.innerHTML += `<span style="margin-right:10px">${e.target.innerHTML} <i class="fas fa-arrow-right"></i> </span>`
                document.querySelector(".category-down").innerHTML += ` <a style="margin-right:10px" href="#">${e.target.innerHTML} <span><i class="fas fa-arrow-right"></i></span></a>`
                $(this).parent().parent().parent().fadeOut("fast")
                $(".cart-boxCategory3").show("fast")

            })
            $(".cart-boxCategory3 ul li a").on("click", function (e) {
                ListCategory.innerHTML += `<span style="margin-right:10px">${e.target.innerHTML} <i class="fas fa-arrow-right"></i> </span>`
                document.querySelector(".category-down").innerHTML += ` <a style="margin-right:10px" href="#">${e.target.innerHTML} <span><i class="fas fa-arrow-right"></i></span></a>`

            })

            $(".category-close").on("click", function () {
                $(".cart-boxCategory2").fadeOut("fast")
                $(".cart-boxCategory3").fadeOut("fast")
                $(".cart-boxCategory").show("fast")
            })
            $(".btnModal").on("click", function () {
                if ($(".list_category").children().length >= 1) {
                    $(".list_category").html("")
                }
            })
            $(".btnModal").on("click", function () {
                if ($(".category-down").children().length >= 1) {
                    $(".category-down").html("")
                }
            })


            $(".backsub2").on("click", function () {
                $(this).parent().parent().fadeOut("fast")
                $(".cart-boxCategory").show("fast")
            })
            $(".backsub3").on("click", function () {
                $(this).parent().parent().fadeOut("fast")
                $(".cart-boxCategory2").show("fast")
            })


        });
    </script>
@endsection
