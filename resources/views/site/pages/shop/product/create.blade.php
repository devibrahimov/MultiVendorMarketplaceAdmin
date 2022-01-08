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
    <!-- HEADER WRAPPER -->
    <div className='container mx-auto min-vh-100 my-2 ms-md-5 ms-1 ad-add'>
        <div class="ad-info row  m-4 ms-3">
            <div class="col ">
                <h3 class="fw-600 text-grey-900 font-xss mb-0 text-capitalize">Asanlıqla pulsuz elan yerləşdirin
                </h3>
                <p class="fw-600 text-grey-800  mb-0 text-capitalize mt-3">
                    <b class="font-xsss">Şəkilləri yükləyin</b>
                    <span class="font-xssss">(30 şəkilə qədər)</span>
                </p>
            </div>
            <div class=" d-flex flex-wrap justify-content-between mt-2 ">
                <div class=" w-75 p-3 left_images ">
                    <ul class="d-flex flex-wrap image-uploader">
                        <!-- <li>
                            <img src="./images//12.png" />
                            <div class="action-btn">
                                <span><i class="fas fa-times"></i></span>
                                <p>
                                    <a>esas wekil et</a>
                                </p>
                            </div>
                        </li> -->
                        <li>
                            <label for='files' class="addImg">
                                <p><span><i class="far fa-plus-square"></i></span></p>
                                wekil elave et
                                <input type="file" id="files" name="images[]" class="input"  style="width: auto; height: auto; display: none;" multiple
                                       accept="image/png, image/jpeg image/jpg">
                            </label>
                        </li>

                    </ul>
                </div>
                <div class=" w-25 p-3 right_text bg-lightgrey">
                    <p class="font-xsss p-2 text-grey-800">Keyfiyyətli fotoşəkilləri olan elanlar daha tez satılır!
                        Eyni anda bir neçə şəkil seçmək üçün Ctrl düyməsini sıxıb
                        saxlayın</p>
                    <p class="font-xsss p-2 text-grey-800">1 elan = 1 məhsul, xidmət və ya vakansiya. Şəkilləri və
                        təsviri nömrəsiz və linksiz yerləşdirin</p>
                </div>
            </div>
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
                <div class=" w-50 p-3 right_text bg-lightgrey mb-4">
                    <p class="font-xsss p-2 text-grey-800">Telefon nömrənizi beynəlxalq formatda daxil edin. Nümunə:
                        +994551234567 Nömrənin doğru olduğundan əmin olun! Bu nömrəni
                        istifadə edərək profilinizə daxil ola bilərsiniz</p>
                </div>
            </div>
            <div class="w-50 mt-2 mb-5">
                <button type="button" class="btnSubmit">Elanı dərc edin!</button>
            </div>
        </div>
    </div>

@endsection


@section('shop-create-product-page')
<!-- category modal -->
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
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                            <li>
                                <img src="./images/map-marker.png" />
                                <p> <a href="#">mawinlar</a></p>
                            </li>
                            <li>
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                            <li>
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                            <li>
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                            <li>
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                            <li>
                                <img src="./images//12.png" />
                                <p> <a href="#">televizorrrrr</a></p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="cart-boxCategory2 vh-80 p-4">
                <div class="d-flex w-50 justify-content-between ">
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
                <div class="d-flex w-50 justify-content-between ">
                    <h3>category3</h3>
                </div>
                <ul class=" d-flex flex-wrap justify-content-between mt-2 ">
                    <li>
                        <a data-bs-dismiss="modal"  class="category-close" href="#">category end1 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close"  href="#">category end2 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category end3 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category end4 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category end56 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category 75 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal"class="category-close"  href="#">category end65 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category end6y5 </a>
                    </li>
                    <li>
                        <a data-bs-dismiss="modal" class="category-close" href="#">category end6y56 </a>
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

        let input=document.querySelector(".input");

        if (window.File && window.FileList && window.FileReader) {
            //var filesInput = document.getElementById("files");
            input.addEventListener("change", function (event) {
                var files = event.target.files; //FileList object
                var output = document.querySelector(".image-uploader ");

                // var output = document.getElementById("result");
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    //Only pics

                    var picReader = new FileReader();
                    picReader.addEventListener("load", function (event) {

                        var picFile = event.target;
                        var li = document.createElement("li");
                        li.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/> <div class='action-btn'> <span onclick='del(this)' data-name="+ file.name+">x</span> </div> "
                        output.insertBefore(li, null);
                    });
                    //Read the image
                    picReader.readAsDataURL(file);
                }
                // console.log(document.getElementById('files').files, document.getElementById('files').files.length)
            });
        } else {
            console.log("Your browser does not support File API");
        }

        function del(e) {
            // let imageArr = document.getElementById('files').files;
            let imageArr = $('input:file#files')[0].files
            var result = Object.entries(imageArr);
            let image = e.dataset.name;

            console.log(result,111, typeof(result))

            for (let i = 0; i < result.length; i++) {
                const element = result[i][1];

                if (element['name'] == image) {
                    console.log(222,i, element)
                    result.splice(i,1);
                }

            }

            console.log(333,result)
            e.parentElement.parentElement.remove()
        }

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
