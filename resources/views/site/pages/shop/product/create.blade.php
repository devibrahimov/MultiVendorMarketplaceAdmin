@extends('site.index')

@section('css')
    <style>

        .overLoad {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.54);
            min-width: 100%;
            min-height: 100%;
        }
        .overLoad img{
            margin-top: 27px;
            text-align:center
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
            border: 1px solid #dbdbdb;
            padding: 5px;
            width: 300px;
            border-radius: 2px;
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
        .upload-img {
            width: 97%;

        }

        .upload-img img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        @media only screen and (max-width: 600px) {
                .upload-item{
                    height: 230px;
                }
        }
        .addtechbtn{ color: #22ca46;
            border: 1px solid #22ca46;
            border-radius: 25px;
            padding: 1px 10px;
            background: #fff;
            margin-right: 20px;}

        .removetechbtn{ color: #22ca46;
            border: 1px solid #22ca46;
            border-radius: 25px;
            padding: 1px 10px;
            background: #fff;
            margin-right: 20px;}
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


                                        <div class="row imagelistdivrow" >


                                        </div>

                                        <label for="fronUpload" class="col-lg-3 col-md-3 col-sm-3 p-0 overflow-hidden
                                            align-items-center justify-content-center d-flex mb-2 upload-item"
                                               style="height: 150px" >
                                            <input type="file" id="fronUpload"  class="d-none"
                                                   onchange="updateInputFile(event)" multiple>
                                            <div class="overflow-hidden rounded-10 h-100 upload-img"  >
                                                <div   class="card border-0 text-center alert-success
                                                    align-items-center h-100 d-flex align-items-center justify-content-center"
                                                       style="cursor: pointer" >
                                                    <i class="psor feather-plus text-white btn-round-md
                                                        bg-success font-xs"  ></i>
                                                    <span class="font-xs ls-0 text-grey-700 fw-600 mt-0" >
                                                            Şəkil əlavə et</span >
                                                </div>
                                            </div>
                                        </label>

                                        <input id="imageuploadinput" class="d-none"
                                               name="images" type="file" multiple  onchange="updateReferenceList()">

                                        <div class="w-100 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Təsvir
                                            </h3>
                                            <div class="form-group mt-2">
                                  <textarea style="border:1px solid #ccc;" class=" p-2 font-xssss w-100 " rows="4"
                                  placeholder="Nümunə: Dəbdə olan Samsung Galaxy S9! Rəng - qara brilyant. Super parlaq ekran, 12 Mp kamera. 1 il əvvəl alınıb, vəziyyəti - yeni kimi. Yaxşı işləyir."></textarea>
                                            </div>
                                        </div>
                                        <div class="w-50 mt-4">
                                            <h3 class="fw-500 text-grey-900 font-xss mb-3 text-capitalize">Qiymet
                                                (AZN)</h3>
                                            <div class="input-group">
                                                <input type="number" maxlength="8" placeholder="Razılaşma yolu ilə">
                                            </div>
                                        </div>
                                        <div class="w-100 mt-4">
                                            <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Kateqoriya <span
                                                    style="color: red;">*</span> </h3>

                                            <input type="hidden" name="category" id="category_id" value="1">
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


                                       <div @class('row p-5 mt-3')style="border:1px solid #e7e7e7"
                                            id="techniquelinputs">
                                           <h3 class="fw-500 text-grey-900 font-xss mb-3 text-capitalize">
                                               Məhsul Məlumatları
                                             </h3>
                                           <div class="row" id="0">
                                               <div class="w-200 mt-4">
                                                   <div class="input-group" style="width: 178px!important;">
                                                       <input type="text" maxlength="58" name="techkey[]"
                                                              placeholder="Məslən : Rəng">
                                                   </div>
                                               </div>

                                               <div class="w-200 mt-4">
                                                   <div class="input-group" style="width: 258px!important;">
                                                       <input type="text"  maxlength="58" name="techvalue[]"
                                                              placeholder="
                                                       Yaşıl">
                                                   </div>
                                               </div>

                                               <div class="w-20 mt-4" style="margin-left: 74px">

                                                       <button type="button"   style="width:90px!important;"
                                                               class="addtechbtn">Əlavə et</button>

                                               </div>
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
                                            <button type="button"   id="postbutton" class="btnSubmit">Elanı dərc edin!</button>
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


@section('shop-create-product-page')
    <div class="modal fade  modal-scrollable" id="savedmodal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0 categoryModal"
                 style="height: 80vh; overflow: auto;">
                <button type="button"
                        class="btn-close category-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-boxCategory vh-80 p-4">
                    <h3>Kategory Secin</h3>
                    <div class=" d-flex justify-content-between mt-2 ">
                        <div class=" w-100 p-3 left-category ">

                            <ul class="d-flex flex-wrap ">
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                                <li>
                                    <img src="/site/images/map-marker.png" />
                                    <p> <a href="#">mawinlar</a></p>
                                </li>
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                                <li>
                                    <img src="/site/images//12.png" />
                                    <p> <a href="#">televizorrrrr</a></p>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="cart-boxCategory2 vh-80 p-4">
                    <div class="d-flex w-50 justify-content-between mobileMargin">
                        <span class="backsub2"><i class="fas fa-chevron-left"></i></span>
                        <h3>category2</h3>
                    </div>
                    <ul class=" d-flex flex-wrap justify-content-between mt-2 ">
                        <li>
                            <a href="#">category1 </a>
                        </li>
                        <li>
                            <a href="#">category2 </a>
                        </li>
                        <li>
                            <a href="#">category3 </a>
                        </li>
                        <li>
                            <a href="#">category4 </a>
                        </li>
                        <li>
                            <a href="#">category5 </a>
                        </li>
                        <li>
                            <a href="#">category6 </a>
                        </li>
                        <li>
                            <a href="#">category7 </a>
                        </li>
                        <li>
                            <a href="#">category8 </a>
                        </li>
                        <li>
                            <a href="#">category9 </a>
                        </li>
                    </ul>
                </div>
                <div class="cart-boxCategory3 vh-80 p-4">
                    <div class="d-flex w-50 justify-content-between mobileMargin">
                        <span class="backsub3"><i class="fas fa-chevron-left"></i></span>
                        <h3>category3</h3>
                    </div>
                    <ul class=" d-flex flex-wrap justify-content-between mt-2 ">
                        <li>
                            <a data-bs-dismiss="modal" aria-label="Close" href="#">category end1 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end2 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end3 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end4 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end56 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category 75 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end65 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end6y5 </a>
                        </li>
                        <li>
                            <a data-bs-dismiss="modal"  href="#">category end6y56 </a>
                        </li>
                    </ul>
                </div>
                <div class="category-down">
                    <!-- <a href="#">category <span><i class="fas fa-arrow-right"></i></span></a> -->
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script>

            function delRef(index) {
                //  e.parentElement.parentElement.remove()
                var filesa = $('#imageuploadinput')[0].files;


                var dt = new DataTransfer()
                var input = document.getElementById('imageuploadinput')
                var {files} = input
                for (var i = 0; i < files.length; i++) {
                    var file = files[i]
                    if (index !== i) dt.items.add(file)
                    input.files = dt.files
                }

                var resource = document.getElementById('image' + index);
                resource.parentElement.remove()
                var a = $('#imageuploadinput')[0].files;
                console.log(a)
            }

            function updateReferenceList() {
                var ref_input = document.getElementById('imageuploadinput');
                var output = document.querySelector(".imagelistdivrow");
                let reqem = 0;

                var a = (ref_input.files.length - 1);
                hasimagelist = document.getElementById('image'+a);
                imageuploader = document.querySelector('.imagelistdivrow');
                imageuploader.innerHTML = "";
                console.log(hasimagelist)

                for (var i = 0; i < ref_input.files.length; ++i) {
                    let imageFile = ref_input.files[i]


                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var div = document.createElement("div");
                        div.classList = `col-lg-3 col-md-3 col-sm-3 p-0 overflow-hidden align-items-center
                            justify-content-center d-flex mb-2 upload-item`;
                        div.style = `height: 150px;`;
                        div.innerHTML =
                            `<div  class="overflow-hidden rounded-10 h-100 upload-img  position-relative"  >
                    <i onclick="delRef(${reqem})" class="psor feather-trash text-white btn-round-md
                                  bg-success  font-xs position-absolute top-0 right-0 m-1 d-flex justify-content-center align-items-center"
                                      style="width: 35px; height: 35px;cursor:pointer;" ></i>
                        <div class='overLoad' id='overlay'> <img src="https://i0.wp.com/itcats.in/images/ajax-loader.gif" alt=""> </div>
                                  <img id="image${reqem}" src="${e.target.result}"   alt="flame"  />
                              </div>  `;

                        output.insertBefore(div, null);
                        reqem++


                    }//end reader.onload
                    reader.readAsDataURL(imageFile);


                }
                console.log(ref_input.files.length)
            }

            function updateInputFile(event) {
                var dt = new DataTransfer();
                var input = document.getElementById('imageuploadinput');
                var {files} = input;

                for (var i = 0; i < files.length; i++) {

                    var file = files[i]

                    dt.items.add(file)

                    input.files = dt.files
                }

                newfiles = event.target.files;
                console.log(newfiles)
                // if(newfiles.length>0){
                for (var q = 0; q < newfiles.length; q++) {

                    var newfile = newfiles[q]
                    console.log('file: ' + newfile)
                    dt.items.add(newfile)
                    console.log('dt.items: ' + dt.items)
                    input.files = dt.files
                }
                // }


                updateReferenceList()
            }

    </script>



    <script>
        $(document).on('click','#postbutton',function(){

            var form_data = new FormData();
            form_data.append( "_token",'{{ csrf_token() }}' );
            var files = $('#imageuploadinput')[0].files;

            for(let i=0; i<files.length; i++){
                let imageFile =document.getElementById('imageuploadinput').files[i]
                  //image faylimizi file[] adi ile formumuza elave ediirik.
                 form_data.append('file[]',document.getElementById('imageuploadinput').files[i]);
            }//endfor


            $.ajax({
                url:"{{route('shop.createproduct')}}",
                method: "POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function (data){
                    //response gelen datamiz json oldugu ucun ellevce decode edirik
                    data = $.parseJSON(data);
                    console.log(data)
                    //
                    // //gelen datani jquerynin each functionu ile dondururuk
                    // $.each(data , function(k, v) {
                    //
                    //     //console.log('index:'+v.index + 'name:'+v.name);
                    //
                    //      $('#'+v.index).attr("src",v.link)
                    //   //  $('#'+imagefilecount).attr("src",v.link);
                    //     $('#'+v.index).next('#overlay').remove();
                    //
                    //
                    // });

                   // shekillerin yuklenmish oldugunu gostermek
                }
            });//endajax

              });//endajax


        var techrowid = 1 ;
        $('.addtechbtn').on('click',function (){

            var thisIputHtmls = `<div class="row" id="techrowid${techrowid}">
                                               <div class="w-200 mt-4">
                                                   <div class="input-group" style="width: 178px!important;">
                                                       <input type="text" required maxlength="58" name="techkey[]"
                                                              placeholder="Məslən : Rəng">
                                                   </div>
                                               </div>

                                               <div class="w-200 mt-4">
                                                   <div class="input-group" style="width: 258px!important;">
                                                       <input type="text" required maxlength="58" name="techvalue[]"
                                                              placeholder="
                                                       Yaşıl">
                                                   </div>
                                               </div>

                                               <div class="w-20 mt-4" style="margin-left: 74px">

                                                       <button type="button"   style="width:90px!important;"
                                                               class="removetechbtn">Sil</button>

                                               </div>
                                           </div>`;
            $('#techniquelinputs').append(thisIputHtmls);
            techrowid++;
        });

        $(document).on('click','.removetechbtn',function (){
            $(this).parent().parent().remove()
        })

    </script>


{{--    file uploadin ajaxla yazildigi kodlar icinde filesize controll falanda var--}}
      <script>
{{--        // $(document).ready(function () {--}}



{{--            //yuklenen fayllarini ayrd edib spesifik ishler gore bilmek ucun--}}
{{--            //her yukelenen shekile gore sayini artiracaqiq ve image de id olaraq cagiracaqiq--}}
{{--            //hemde response ucun apiye gondereceyik--}}
{{--            // let imagefilecount = 0;--}}



        {{--$(document).on('change','#imageuploadinput',function(){--}}
        {{--    var error_images = '';--}}
        {{--    var form_data = new FormData();--}}
        {{--    form_data.append( "_token",'{{ csrf_token() }}' );--}}
        {{--    var files = $('#imageuploadinput')[0].files;--}}



        {{--    var filesMeatdata = [];--}}



        {{--    if(files.length > 20){--}}

        {{--        error_images += '10 dan cox shekil yukleye bilmersiniz'--}}

        {{--    }else{--}}
        {{--        var output = document.querySelector(".ul");--}}

        {{--        for(let i=0; i<files.length; i++){--}}

        {{--            let imageFile =document.getElementById('imageuploadinput').files[i]--}}

        {{--            let name = imageFile.name;--}}
        {{--          //  console.log(imageFile)--}}

        {{--            let ext = name.split('.').pop().toLowerCase();--}}

        {{--            //bu hissede istifadeci terefinden secilmish shekilleri review olaraq gostereceyik--}}
        {{--             //console.log(imageFile)--}}

        {{--            if(jQuery.inArray(ext,['jpg','jpeg','png']) == -1){--}}
        {{--                error_images += 'Formata uyğun olmayan '+i+' Fayl yükləməyə çalışırsınız';--}}
        {{--                alert(error_images)--}}
        {{--            }else{--}}

        {{--                //faylimizin size ini yoxlayiriq--}}
        {{--                if(imageFile.size > 9897545){--}}

        {{--                //burda daha duzgun bir alert cixacaq ve hansi faylin boyuk oldugunu gosterecek--}}
        {{--                    alert('bu dosya cok buyuktur:'+ imageFile.name)--}}

        {{--                }else{--}}

        {{--                    //yeni Object yaradiriq--}}
        {{--                    var reader = new FileReader();--}}

        {{--                    //daha sonradan shekili sile ve loadiri qaldira bilmek ucun--}}
        {{--                    // shekilin bezi melumatlarinida  formda gonderirik--}}
        {{--                    filesMeatdata.push({--}}
        {{--                        name: imageFile.name,--}}
        {{--                        index: imagefilecount--}}
        {{--                    });--}}

        {{--                  //  console.log('---'+imagefilecount)--}}

        {{--                    //on goruntu fayllarini elave edirik--}}
        {{--                    reader.onload = function (e) {--}}
        {{--                        var li = document.createElement("li");--}}
        {{--                        li.innerHTML = "<img id='"+imagefilecount+"' class='thumbnail' src='" + e.target.result + "'" +--}}
        {{--                            "title=' '/> <div class='overLoad' id='overlay'> <img src='https://i0.wp" +--}}
        {{--                            ".com/itcats" +--}}
        {{--                            ".in/images/ajax-loader.gif' alt=''> " +--}}
        {{--                            "</div> <div class='action-btn'> <span " +--}}
        {{--                            "onclick='del(this)' data-id='"+imagefilecount+"'>x</span> </div>"--}}

        {{--                        output.insertBefore(li,null );--}}
        {{--                        // // en yuxarida yaratdigimiz deyishkenin sayini artiririq--}}
        {{--                        imagefilecount++;--}}
        {{--                     //   console.log(e)--}}
        {{--                    }//end reader.onload--}}


        {{--                     //imagefilecount--;--}}
        {{--                    //yuklenmeden onceki gorunumler burda doma elave edilid--}}
        {{--                    reader.readAsDataURL(imageFile);--}}


        {{--                     //image faylimizi file[] adi ile formumuza elave ediirik.--}}
        {{--                    form_data.append('file[]',document.getElementById('imageuploadinput').files[i]);--}}


        {{--                    // en yuxarida yaratdigimiz deyishkenin sayini artiririq--}}
        {{--                    //  imagefilecount++;--}}

        {{--                }//endelse maxsize--}}

        {{--            }//endelse--}}
        {{--        }//endfor--}}

        {{--        //meta datamizi forma push edirik--}}
        {{--        filesMeatdata=JSON.stringify(filesMeatdata);--}}
        {{--        form_data.append( "filesMeatdata", filesMeatdata );--}}


        {{--        if(error_images == ''){ //xeta boshdursa--}}

        {{--            $.ajax({--}}
        {{--                url: "{{route('shop.imageupload')}}",--}}
        {{--                method: "POST",--}}
        {{--                data:form_data,--}}
        {{--                contentType:false,--}}
        {{--                cache:false,--}}
        {{--                processData:false,--}}
        {{--                beforeSend:function(){--}}

        {{--                    //bura shekiller yuklenir loadingi qoymaq--}}

        {{--                },--}}
        {{--                success:function (data){--}}
        {{--                    //response gelen datamiz json oldugu ucun ellevce decode edirik--}}
        {{--                    data = $.parseJSON(data);--}}

        {{--                    //gelen datani jquerynin each functionu ile dondururuk--}}
        {{--                    $.each(data , function(k, v) {--}}

        {{--                        //console.log('index:'+v.index + 'name:'+v.name);--}}

        {{--                         $('#'+v.index).attr("src",v.link)--}}
        {{--                      //  $('#'+imagefilecount).attr("src",v.link);--}}
        {{--                        $('#'+v.index).next('#overlay').remove();--}}


        {{--                    });--}}

        {{--                   // shekillerin yuklenmish oldugunu gostermek--}}
        {{--                }--}}


        {{--            })--}}

        {{--        }else{--}}
        {{--            console.log(error_images)--}}
        {{--            // $('#imageuploadinput').val(null);--}}
        {{--            // $('#error_messages_for_files').html('Error mesajiniz'+error_images)--}}
        {{--        }--}}

        {{--    }--}}

        {{--   // $( a).insertBefore('.iputadd');--}}

        {{--});--}}


{{--//        });--}}

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
