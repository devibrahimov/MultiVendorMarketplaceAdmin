@extends('site.index')

@section('css')
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .ad-add .row {
            --bs-gutter-x: 10px;
        }

        .variant {
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
        }

        .variant select {
            max-width: 350px;
        }

        .variant button {
            margin-left: 12px;
            background: #41ec82;
            height: 37px;
            width: 40px;
            border-radius: 8px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            font-size: 30px;
        }

        .variant button:hover {
            background: white;
            border: 2px solid #41ec8281;
            color: #41ec82;
        }

        .variant .size {
            margin: 15px 0;
            position: relative;
            display: inline-flex;
            flex-direction: column;
        }

        .variant .size-variant select {
            width: 100px;
        }

        .variant .size-variant input {
            width: 100px;
        }

        .variant .size-variant button {
            position: relative;
            top: 38px;
        }

        .variant .bx-x {
            position: relative;
            cursor: pointer;
            top: 6px;
            left: 35px;
            display: grid;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            border-radius: 8px;
            font-size: 30px;
            color: red;
            background: rgb(255, 189, 189);
        }

        .variant .ad-head .bx-x {
            position: relative;
            top: 3px;
            left: 12px;
        }

        .variant .size-box {
            display: flex;
            flex-wrap: wrap;
        }

        .variant .sizes {
            width: 80px;
            margin-right: 15px;
            height: auto;
        }

        .variant .sizes span {
            font-size: 20px;
        }

        #overlayout {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.54);
            display: none;
            min-width: 100%;
            min-height: 100%;
            z-index: 999999999999999;
        }

        .variant .overLoad {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.54);
            min-width: 100%;
            min-height: 100%;
        }

        .overLoad img {
            margin-top: 27px;
            text-align: center
        }

        button.addnewvaryantbtn {
            color: #22ca46;
            border: 1px solid #22ca46;
            border-radius: 25px;
            padding: 1px 10px;
            background: #fff;
            margin-right: 20px;
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



        .citySelect {
            width: 220px;
        }
        .tag-name{   padding: 5px 12px;
            border-radius: 20px;
            border: 2px #999 solid;
            display: inline-block;
            margin-right: 3px;
            margin-bottom: 6px;
            font-size: 12px;
            font-weight: 600;
            color: #555;}

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



        @media only screen and (max-width: 600px) {
            .image-uploader li {
                flex-basis: 100%;
            }

            .citySelect {
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

        .upload-img img {
            border: 0.5px solid gray;
            padding: 0px;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .list_category {
            overflow: auto !important;
        }

        /*.categoriya {*/
        /*    margin-left: 15px;*/
        /*    padding: 5px;*/
        /*    border: 0.5px solid #e3e3e3*/
        /*}*/

        /*.subcategoriya {*/
        /*    padding: 5px;*/
        /*    border: 0.5px solid #f3f3f3;*/
        /*    margin-top: 3px;*/
        /*    font-size: smaller;*/
        /*}*/

        .selected {
            background-color: #ebebeb;
        }

        @media only screen and (max-width: 600px) {
            .upload-item {
                height: 230px;
            }
        }

        .addtechbtn,
        .removetechbtn {
            height: 30px;
            width: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: normal;
            border-radius: 50%;
        }

        .addproductoption {
            color: #22ca46;
            border: 1px solid #22ca46;
            border-radius: 25px;
            padding: 1px 10px;
            background: #fff;
            margin-right: 20px;
        }

        .ad-add #ad-images :is(.image_container, .image_container img) {
            transition: none;
        }

        .listSubCategory::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }

        .listSubCategory::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        .listSubCategory::-webkit-scrollbar-thumb {
            background: var(--theme-color);
            border-radius: 4px;
        }

        .custom_overload {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            position: fixed;
            z-index: 1000000;
            left: 0;
            top: 0;
            height: 100vh;
            width: 100%;
            background: rgba(235, 235, 235, 0.47);
        }
        .category_overlay{
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            left: 0;
            top:0;
            padding: 10px;
            z-index: 222;
            width: 100%;
            height: 100%;
            background-color: #93caf461;
            border-radius: 4px;
            backdrop-filter: blur(10px);
        }
        .category_overlay span{
            color: #03001b;
            border: 1px solid #03001b;
            padding: 8px;
            border-radius: 6px;
            margin-left: 10px;
            margin-bottom: 5px;
        }
        .category_overlay button{
            margin-top: 10px;
            background-color: #ffffff;
            color: #1a2e3b;
            border: 1px solid white;
            padding: 8px;
            border-radius: 6px;
            width: 250px !important;
        }
    </style>
@endsection



@section('content')

    <div class="main-div pb-5 pt-2 posr">

        <style>
            .custom_overload{
                display: none;
            }
        </style>

        <div class="custom_overload">
            <span class="fw-600 text-grey-900 font-lg mb-0 text-capitalize"> Gözləyin . . .</span>
            <div   data-postid="15270884" data-share-method="host" data-aspect-ratio="1" data-width="30%">
                <img src="/site/images/492329d446c422b0483677d0318ab4fa.gif" alt="">
                </div>

        </div>

        <div class="row ps-2 mt-3 ps-md-4 mb-3">
            <a href="{{url()->previous()}}" class="fw-600 text-current font-md d-flex align-items-center"><i class='bx
            bx-chevron-left
            font-xl '></i> Geri</a>
        </div>
        <div class="container ad-add my-2 ps-md-5 ps-4 ad-add">

                <div class="note_list shadow-sm px-3 py-2 d-flex flex-column">
                    <span class="font-xssss text-grey-700">1. Maksimum 30 şəkil yükləyin.</span>
                    <span class="font-xssss text-grey-700">2. Minimum 3 şəkil olmalıdır.</span>
                    <span class="font-xssss text-grey-700">3. Ölçüsü 5 Mb-dan kiçik şəkillərdən istifadə edin.</span>
                    <span class="font-xssss text-grey-700">4. Keyfiyyəti və əlaqəli şəkillər yükləyin.</span>
                </div>
            <div class="row">
                {{-- <div class="col-lg-4">--}}
                {{-- @include('site.pages.shop.partials.navbar')--}}
                {{-- </div>--}}
            </div>

            <div class="row">
                <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Asanlıqla pulsuz elan yerləşdirin
                </h3>
                <p class="fw-600 text-grey-900  mb-0 text-capitalize mt-3">
                    <b class="font-xsss">Şəkilləri yükləyin</b>
                    <span class="font-xssss">(30 şəkilə qədər)</span>
                </p>
                <label for="imageuploadinput" class="ad-label ms-2 mt-1" role="button">
                    <i class='feather-download me-2'></i>
                    <span class="text-center">Şəkil yüklə</span>
                    <input type="file" id='imageuploadinput' onchange="saveNewImages(event)" multiple accept="image/png,
                    image/jpeg,image/jpeg" />
                    {{-- id="fronUpload"  class="d-none"--}}
                </label>


            </div>

            <div class="row mt-2">
                <div class="imagelistdivrow  pe-0 " id='ad-images'>

                </div>
            </div>



            <div class="ad-info row w-75 mt-5 posr">
                <div class="col">
                    <div class="row w-100 mb-3">
                        <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Kateqoriya <span style="color: red;">*</span> </h3>

                        <div class="posr">
                            <input type="number" style="display: none" id="category_id" value="">
                            <div class="category_overlay ms-1">
                                <div class="d-flex justify-content-center align-items-center flex-wrap">
                                    {!! productcategorylist(json_decode($product)->category_id) !!}
                                </div>
                                <div class="row d-flex justify-content-center align-items-center">
                                    <button id="change_category"><i @class('fas fa-list')> </i> Seçili kategoriyanı dəyiş
                                    </button>
                                </div>
                            </div>

                            <div class="w-100">
                                <div class="d-flex mt-2 ">
                                    {{-- Ana Katgoriyalar bu ashaqidaki ul icne siyahilanir--}}
                                    <ul class="d-flex flex-wrap image-uploader list_category">
                                        {{-- <i class='bx bx-devices font-xxl text-grey-900'></i> <i class='bx bx-mobile font-xxl text-grey-900'></i>--}}
                                    </ul>

                                </div>
                            </div>



                            <div class="row w-100 ms-1 ps-2 mt-2 listSubCategory overflow-auto d-flex flex-nowrap
                        align-items-center" style="border:1px solid #eeeeee;height: 230px; border-radius: 4px;">
                            </div>
                    </div>
                    </div>

                    <div class="form-group mb-2">
                        <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Elanın adı</h6>
                    </div>
                    <div class="form-group w-100 mb-4">
                        <input type="text" class="form-control text-grey-700 font-xssss fw-600 bg-white border"
                               id="name"   placeholder="Məsələn: İphone 13 Pro Max">
                    </div>
                    <div class="form-group mb-2 posr">
                        <div class="note_list shadow-sm px-3 py-2 d-flex flex-column" style="right: -270px; top: 0;">
                            <span class="font-xssss text-grey-700">1. Maksimum 30 şəkil yükləyin.</span>
                            <span class="font-xssss text-grey-700">2. Minimum 3 şəkil olmalıdır.</span>
                            <span class="font-xssss text-grey-700">3. Ölçüsü 5 Mb-dan kiçik şəkillərdən istifadə edin.</span>
                            <span class="font-xssss text-grey-700">4. Keyfiyyəti və əlaqəli şəkillər yükləyin.</span>
                        </div>
                        <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Açıqlama</h6>
                    </div>
                    <div class="form-group w-100 mb-3">
                    <textarea maxlength="300" style="height: 250px ; line-height: 25px; resize: none"
                              id="description"
                              class="form-control font-xssss text-grey-700 fw-600 bg-white border" placeholder="Məhsul
                              haqqında açıqlama mətni "></textarea>
                    </div>

                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Qiymət <span style="color: red;">*</span></h3>
                            </div>

                            <div class="form-group mb-3 w-100">
                                <input type="number" class="form-control text-grey-700 font-xssss fw-600 bg-white border" maxlength="8" id="price" placeholder="100₼" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Endirimli Qiymət </h3>
                            </div>
                            <div class="form-group mb-5 w-100">
                                <input type="number" class="form-control text-grey-700 font-xssss fw-600 bg-white border" maxlength="8" id="sale_price" placeholder="123₼" required>
                            </div>
                        </div>
                    </div>


                    <div class="row w-100">
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Stok Sayı <span style="color: red;">*</span> </h3>
                            </div>

                            <div class="form-group mb-3 w-100">
                                <input class="form-control font-xssss fw-600 text-grey-700 bg-white border" type="number" maxlength="8" id="stock" placeholder="0">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">SKU kodu <span style="color: red;">*</span> </h3>
                            </div>
                            <div class="form-group mb-5 w-100">
                                <input type="text" class="form-control font-xssss text-grey-700 fw-600 bg-white border" max="8" id="sku" placeholder="EM90DT31012022">
                            </div>
                        </div>
                    </div>



                    <div class="row w-100 mb-3">
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Barkod <span style="color: red;">*</span></h3>
                            </div>

                            <div class="form-group mb-3 w-100">
                                <input type="number" class="form-control text-grey-700 font-xssss fw-600 bg-white border" maxlength="8" id="barkode" placeholder="9786052998380">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mb-2">
                                <h3 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Qaranti müddəti </h3>
                            </div>
                            <div class="form-group mb-5 w-100">
                                <input type="number" class="form-control text-grey-700 font-xssss fw-600 bg-white border" maxlength="8" id="warranty" placeholder="Qarantiya müddəti Ay ilə">
                            </div>
                        </div>
                    </div>

                    <div class='row w-100 mt-3 mb-4 posr' id="techniquelinputs">
                        <div class="note_list shadow-sm px-3 py-2 d-flex flex-column" style="right: -270px; top: 0;">
                            <span class="font-xssss text-grey-700">1. Maksimum 30 şəkil yükləyin.</span>
                            <span class="font-xssss text-grey-700">2. Minimum 3 şəkil olmalıdır.</span>
                            <span class="font-xssss text-grey-700">3. Ölçüsü 5 Mb-dan kiçik şəkillərdən istifadə edin.</span>
                            <span class="font-xssss text-grey-700">4. Keyfiyyəti və əlaqəli şəkillər yükləyin.</span>
                        </div>


                        <h3 class="fw-500 text-grey-900 font-xss mb-3 text-capitalize">
                            Məhsul Xüsusiyyətləri <span style="color: red;">*</span>
                        </h3>

                        <div class="row d-flex flex-row align-items-center w-100">
                            <div class="form-group w-50">
                                <input type="text" maxlength="58" class="techkey text-grey-700 form-control text-grey-700 font-xssss fw-600 bg-white border" value="İstehsalatçı Ölkə" required disabled="">
                            </div>

                            <div class="form-group w-25">
                                <select class=" text-grey-700 form-control text-grey-700 font-xssss fw-600 bg-white
                            border   techvalue " id="select-country"
                                        data-live-search="true">
                                    @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $country)
                                        <option
                                            value="{{$country->countries_iso_code}}">
                                            {{$country->countries_name}}
                                        </option>
                                    @endforeach
                                </select>

                                {{--                            <input type="text" required maxlength="58" class="techvalue text-grey-700 form-control text-grey-700 font-xssss fw-600 bg-white border">--}}
                            </div>

                            <button type="button" class="addtechbtn ms-1 p-0 btn font-xss text-white bg-current"><i class='bx bx-plus'></i></button>
                        </div>

                    </div>
                    {{-- <div class=' p-5 mt-3' style=" width:40%; border:1px solid #e7e7e7" --}} {{-- id="techniquelinputs">--}}
                    {{-- <h3 class="fw-500 text-grey-900 font-xss mb-3 text-capitalize">--}}
                    {{-- Məhsul Varyatı--}}
                    {{-- </h3>--}}
                    {{-- <div class="row">--}}
                    {{-- <button type="button" style="width:90%!important;" --}} {{-- data-bs-toggle="modal"
            data-bs-target="#productoptions" --}} {{-- class="addproductoption">Məhsul Varyatı Əlavə Et</button>--}}
                    {{-- </div>--}}
                    {{-- </div>--}}

                    <a href="#" class="btn-lg px-3 rounded-5 font-xss text-white btn bg-current btnSubmit" id="postbutton">Elanı dərc et</a>
                </div>
            </div>
        </div>


    </div>
    </div>


    <div class="modal fade" id="productoptions" aria-hidden="true" aria-labelledby="productoptionsLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Məhsul Varyantları</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="variant">
                        <h3> Ölçü </h3>

                        <div class="size-variant d-flex mt-3 border rounded p-3">
                            <div class="size-box">
                                <div class="size mr-2">
                                    <input type="text" class="form-control text-grey-700 mt-2 text-center" placeholder="Varyant">
                                    <input type="text" class="form-control text-grey-700 mt-2 text-center" placeholder="Stok Sayı">
                                </div>
                            </div>


                            <button class="btn  " id="size-add">
                                <i class='bx bx-plus'></i>
                            </button>
                        </div>
                        <button class="  addnewvaryantbtn" id="variant-add">
                            <i class='bx bx-plus'> Rəng Əlavə Et </i>
                        </button>

                    </div>
                </div>


                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Varyantları Əlavə Et</button>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')


    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>





    <script>
        let productData = jQuery.parseJSON(JSON.stringify({!! $product !!}));
        let imageJSONFiles = jQuery.parseJSON( productData.images);

        var output = document.querySelector(".imagelistdivrow");

        reqem =0;

        $(document).ready(function() {

            console.log(productData)

            $('#name').val(productData.name);
            $('#description').val(productData.description);
            $('#price').val(productData.price);

            if(productData.price > productData.sale_price ){

                $('#sale_price').val(productData.sale_price);

            }

            $('#stock').val(productData.stock);
            $('#sku').val(productData.sku);
            $('#barkode').val(productData.barkode);
            $('#warranty').val(productData.warranty);
            $('#category_id').val(productData.category_id);

            $('#change_category').on('click',function (){
                $('#category_id').val('');
                $('.category_overlay').hide();

            });

            for (var i = 0; i <  imageJSONFiles.length; ++i) {
                let imageFile =imageJSONFiles[i]

                if(i==0){
                    Cover =` <button   class="do_main_photo posa btn bg-white
                          text-secondary">Əsas şəkil</button>`;
                }else{
                    Cover =` <button data-id="${reqem}" class="do_main_photo posa btn bg-white
                          text-secondary">Əsas şəkil et</button>`;
                }
                    var div = document.createElement("div");
                    div.classList = `image_container d-flex justify-content-center position-relative
                        mainPhoto${reqem}`;
                    div.innerHTML = `<img id="image${reqem}" src="${imageFile}" >
                            <span onclick="delRef(${reqem})" class=" psor delete_image position-absolute">&times;
                            </span> ${Cover} ` ;

                    output.insertBefore(div, null);
                    reqem++
                } //end reader.onload

        });
        let coverimage = 0;

        function delRef(index) {

            var resource = document.getElementById('image' + index);
           // console.log(imageJSONFiles[index]);

            $.ajax({
                url: "{{route('shop.deletefile')}}",
                method: "POST",
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                data: {
                    "file":imageJSONFiles[index],
                    "product_key": productData.key
                },
                success: function(data) {
                    //response gelen datamiz json oldugu ucun ellevce decode edirik
                    if (data == true) {
                        resource.parentElement.remove()
                    }
                }

            }); //endajax


            //console.log(a)
        }

       function saveNewImages(event) {
           var form_data = new FormData();
           form_data.append("_token", '{{ csrf_token() }}');
           form_data.append("product_key", productData.key);
           var files = $('#imageuploadinput')[0].files;
           for (let i = 0; i < files.length; i++) {
               let imageFile = document.getElementById('imageuploadinput').files[i]
               //image faylimizi file[] adi ile formumuza elave ediirik.
               form_data.append('file[]', imageFile);
           } //endfor
           $.ajax({
               url: "{{route('shop.storeNewImages')}}",
               method: "POST",
               data: form_data,
               contentType: false,
               cache: false,
               processData: false,
               success: function(data) {
                   //response gelen datamiz json oldugu ucun ellevce decode edirik
                   data = $.parseJSON(data);
                   console.log(data) ;
                   if (data.status == true) {
                       imagenewJSONFiles =  data.images

                       for (var i = 0; i <  imagenewJSONFiles.length; ++i) {
                           let imageFile =imagenewJSONFiles[i]

                           if(i==0){
                               Cover =` <button   class="do_main_photo posa btn bg-white
                          text-secondary">Əsas şəkil</button>`;
                           }else{
                               Cover =` <button data-id="${reqem}" class="do_main_photo posa btn bg-white
                          text-secondary">Əsas şəkil et</button>`;
                           }
                           var div = document.createElement("div");
                           div.classList = `image_container d-flex justify-content-center position-relative
                        mainPhoto${reqem}`;
                           div.innerHTML = `<img id="image${reqem}" src="${imageFile}" >
                            <span onclick="delRef(${reqem})" class=" psor delete_image position-absolute">&times;
                            </span> ${Cover}`;

                           output.insertBefore(div, null);
                           reqem++
                       } //end reader.onload


                   }
               }
               //  console.log(data)
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
               // }
           }); //endajax

       }

        function coverImage(indx) {
            coverimage = indx;
        }

        $(document).on('click', '.do_main_photo', function(evt) {
            coverimage = $(this).attr('data-id')
            //console.log(coverimage)
            let mainImageDiv = evt.target.parentElement;
            //  .before(mainImageDiv)
            //       first = $('.image_container').children(":first");
            first = $('.imagelistdivrow').children().first();
            first.before(mainImageDiv)

            //  console.log(first)
        })



        function  validateform(){

            if($('#category_id').val() == ''){
                toastr.error(`Məhsul Kateqoriyası seçməyi unutmusunuz !`);
                return false;
            }
            if($('#name').val() == ''){
                toastr.error(`Məhsul başlıqını yazmağı unutmusunuz !`);
                return false;
            }
            if($('#description').val() == ''){
                toastr.error(`Məhsul Açıqlama Mətnini doldurmağı unutmusunuz !`);
                return false;
            }
            if($('#price').val() == ''){
                toastr.error(`Məhsulun qiymətini yazmağı unutmusunuz !`);
                return false;
            }
            if($('#price').val() < $('#sale_price').val()){
                toastr.error(`Məhsulun endirimli qiyməti ,Real qiymetindən çox ola bilməz !`);
                return false;
            }
            if($('#stock').val() == ''){
                toastr.error(`Məhsulun stok sayını yazmağı unutmusunuz !`);
                return false;
            }
            if($('#sku').val() == ''){
                toastr.error(`Məhsulun SKU kodunu yazmağı unutmusunuz !`);
                return false;
            }
            if($('#barkode').val() == ''){
                toastr.error(`Məhsulun barkodunu yazmağı unutmusunuz !`);
                return false;
            }
            if($('#warranty').val() == ''){
                toastr.error(`Məhsul Açıqlama Mətnini doldurmağı unutmusunuz !`);
                return false;
            }

            //butun if leri kecib gelerse true donecek
            return true ;
        }

        $(document).on('click', '#postbutton', function() {
            if(validateform() == true){

                $('.custom_overload').css('display:block')

                var form_data = new FormData();
                form_data.append("_token", '{{ csrf_token() }}');
                form_data.append("price", $('#price').val());
                form_data.append("sale_price", $('#sale_price').val());
                form_data.append("stock", $('#stock').val());
                form_data.append("sku", $('#sku').val());
                form_data.append("name", $('#name').val());
                form_data.append("barkode", $('#barkode').val());
                form_data.append("warranty", $('#warranty').val());
                form_data.append("category_id", $('#category_id').val());
                form_data.append("description", $('#description').val());



                let informationtechvalue = $('#techniquelinputs .form-group .techvalue')
                let informationtechkey = $('#techniquelinputs .form-group .techkey')

                $(informationtechvalue).each(function(index) {
                    form_data.append("techvalue[]", $(this).val());
                });
                $(informationtechkey).each(function(index) {
                    form_data.append("techkey[]", $(this).val());
                });

                $.ajax({
                    url: "{{route('shop.createproduct')}}",
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        //response gelen datamiz json oldugu ucun ellevce decode edirik
                        data = $.parseJSON(data);
                        if (data == true) {
                            window.location.href = "{{route('shop.products')}}";
                        }
                    }

                }); //endajax

            }

        }); //endajax



        $('.addtechbtn').on('click', function() {

            var thisIputHtmls = `<div class="row d-flex align-items-center mt-3">
                                                   <div class="form-group w-50">
                                                       <input type="text" required maxlength="58" class="techkey text-grey-700 form-control font-xssss fw-600 bg-white border"
                                                              placeholder="Məsələn: Rəng">
                                                   </div>

                                                   <div class="form-group w-25">
                                                       <input type="text" class="form-control font-xssss fw-600 text-grey-700 border" required maxlength="58" class="techvalue"
                                                              placeholder="Yaşıl">
                                                   </div>
                                                    <button type="button" class="removetechbtn ms-1 p-0 btn font-xss text-white bg-danger"><i class='bx bx-minus'></i></button>
                                           </div>`;
            $('#techniquelinputs').append(thisIputHtmls);

        });

        $(document).on('click', '.removetechbtn', function() {
            $(this).parent().remove()
        })


        $(document).ready(function() {
            let allcategories = {!!json_encode(\App\Models\Category::all(), JSON_UNESCAPED_UNICODE)!!}

                parentCategoriesJson = allcategories.filter(c => c.parent_id == null)

            for (var i = 0; i < parentCategoriesJson.length; i++) {
                let category = parentCategoriesJson[i];
                let li = `<li class="categoriya getsubcat " data-id="${category.id}">
                       <span class="tag-name"> ${category.name} </span>  </li>`;
                $('.list_category').append(li)
            }
            // <img style="width: 55px" src="${category.icon}" alt="">

            let Uldataindex = 0;
            $(document).on('click', '.getsubcat', function() {
                let cat_id = $(this).attr('data-id')
                subCategoriesJson = allcategories.filter(sc => sc.parent_id == cat_id);

                //listSubCategory div-inin icini boshaldiriq
                if ($(this).hasClass('categoriya')) {
                    Uldataindex = 0;
                    $('.listSubCategory').html('')
                }


                let dataindex = $(this).parent().attr('data-index')

                let ulList = $('.listSubCategory').children()

                ulList.each(function(index) {
                    // console.log( dataindex )
                    if (dataindex < index) {
                        ulList[index].remove()
                    }

                }); //ana kategoriya klikleyende sublari qalir hala gelir yene .




                if (subCategoriesJson.length != 0) {
                    // style="margin-left:5px;float: left"
                    var listSubCategoryHTML = `<ul class="w-auto me-4" data-index="${Uldataindex}">`;
                    for (var i = 0; i < subCategoriesJson.length; i++) {
                        let category = subCategoriesJson[i];
                        let li = `<li class=" font-xsss lh-30 text-grey-900 fw-500 d-flex align-items-center
                    subcategoriya getsubcat" data-id="${category.id}"><span> ${category.name} </span> </li>`;
                        listSubCategoryHTML += li
                        //   $('.listSubCategory').append(li)
                    }
                    listSubCategoryHTML += `</ul>`
                    $('.listSubCategory').append(listSubCategoryHTML);
                    Uldataindex++
                }


                //eger kliklenen sub categoriyadirsa
                if ($(this).hasClass('subcategoriya')) {

                    let selected = $('.listSubCategory').find('.selected');

                    if (selected[0] != undefined) {
                        if (selected.children()[1] != undefined) {
                            selected.children('i').remove()
                        }

                    }

                    $(this).parent().children().removeClass('selected')

                    $(this).addClass('selected')

                    if (subCategoriesJson.length == 0) {

                        current = `<i class=" text-current fas fa-check-circle" style="margin-left: 5px;"></i>`
                        $(this).append(current)
                        catid = $(this).attr('data-id');
                        catid = $(this).attr('data-id');
                        $('#category_id').val(catid)

                    } else {
                        $('#category_id').val(null)
                    }

                }


            }); //end on click

        });
    </script>





    <script>
        $(document).on('click', '#addnewoption1', function() {
            let option = ` <div>
                 <input type="text" class="form-control font-xssss fw-600 bg-white border text-grey-700" placeholder="varyant">
                 <input type="text" class="form-control font-xssss fw-600 bg-white border text-grey-700" placeholder="stok sayisi">
             </div> `;
            $('.option1').append(option);
        })
    </script>

    <script>
        $(document).ready(function() {



            $("#variant-add").one("click", function() {
                console.log($("#variant-select option:selected"))
                $(".variant").append(`
                <div class="variant2">
                <h3 class="mt-5"> Rəng</h3>

                <div class="size-variant d-flex mt-3 border rounded p-3">

                    <div class="size-box">
                        <div class="sizes d-flex justify-content-center align-items-center">
                            <span class="text-secondary">L</span>
                        </div>
                        <div class="size mr-2">

                            <input type="text" class="form-control mt-2 font-xssss fw-600 bg-white border text-grey-700 text-center" placeholder="varyant">
                            <input type="text" class="form-control mt-2 font-xssss fw-600 bg-white border text-grey-700 text-center" placeholder="Stok Sayı">

                        </div>
                    </div>
                    <button class="btn" id="size-add">
                        <i class='bx bx-plus'></i>
                    </button>

                </div>
                </div>
            `)
                $(".bx-x").on("click", function() {
                    $(this).parent().parent().remove();
                });
            });



            $(".size-variant #size-add").on('click', function() {
                $(this).parent().children(".size-box").append(`<div class="size ml-2 mr-2">

                    <input type="text" class="form-control mt-2 font-xssss fw-600 bg-white border text-grey-700 text-center" placeholder="varyant">
                    <input type="text" class="form-control mt-2 font-xssss fw-600 bg-white border text-grey-700 text-center" placeholder="Stok Sayı">
                    <i class='bx bx-x'></i>
                </div>`)
                $(".bx-x").on("click", function() {
                    $(this).parent(".size").remove();
                });
            })

        })
    </script>




@endsection
