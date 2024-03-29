<div class="card rounded-10 shadow-xss p-4 border-0 mt-n10">
    <div class="card-body text-center">
        <figure class="avatar ms-auto me-auto mb-0 mt-0 w100 posr">
            @php
            $shop = \App\Models\ShopInformation::where('shop_id',auth('shop')->user()->id)->select('avatar')->first();
            if( $shop->avatar == null || !file_exists(public_path() .$shop->avatar)){
                  $avatar = '/uploads/shop/defaultavatar.png';
            }else{
                 $avatar = $shop->avatar ;
            }
            @endphp
            <img src="{{$avatar}}" alt="product" id="avatarimage"
                 class="shadow-sm rounded-circle w-125" style="height: 125px; object-fit: cover;"/>

            <form  enctype="multipart/form-data" method="post">
                <label class="edit_photo bg-secondary btn posa" for="avatar">
                    <i class='bx bxs-camera'></i>
                    <input type="file" style="display:none;" id="avatar" name="image" accept="image/*" onchange="loadFile(event)">
                </label>
            </form>
        </figure>
        <h4 class="fw-700 text-grey-900 white-text font-sm mb-0 mt-3">
            {{auth('shop')->user()->shopname}}
        </h4>
        <span class="fw-600 font-xssss text-grey-500 mt-0 d-block">
           @ {{auth('shop')->user()->shop_serialnumber}}
        </span>
    </div>
    <div class="card-body p-0 mt-4">
        <ul class="list-inline mb-0">
            <li class="list-inline-item d-block me-0">
                <a href="{{route('shop.profil')}}" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-primary-gradiant text-white feather-home font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Profil</h4>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="{{route('shop.products')}}" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-gold-gradiant text-white feather-map-pin font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Məhsullar</h4>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="#" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-mini-gradiant text-white feather-hard-drive font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Sifarişlər</h4>
                    <span class="  text-white font-xsssss fw-600 ls-3 badge badge-secondary   ms-auto" >Aktiv
                        deyil</span>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="{{route('shop.profiledit')}}" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-skype text-white feather-award font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Profil Məlumatları</h4>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="#" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-current-gradiant text-white feather-credit-card font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Mağaza Məlumatları</h4>
                    <span class="  text-white font-xsssss fw-600 ls-3 badge badge-secondary   ms-auto" >Aktiv
                        deyil</span>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="#" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-blue-gradiant text-white feather-bell font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Bildirişlər</h4>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
            <li class="list-inline-item d-block me-0">
                <a href="{{route('changepassword')}}" class="pt-2 pb-2 d-flex align-items-center">
                    <i class="btn-round-sm bg-red-gradiant text-white feather-lock font-xss me-3"></i>
                    <h4 class="fw-600 font-xsss ls-0 text-grey-700 mb-0 mt-0">Şifrə Yeniləmə</h4>
                    <i class="ti-angle-right font-xsssss text-grey-500 ms-auto mt-1"></i>
                </a>
            </li>
        </ul>
    </div>
</div>



<script>
    function loadFile(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('avatarimage');
            output.src = reader.result;
        };

        reader.readAsDataURL(event.target.files[0]);

        event.preventDefault();
        var formData = new FormData();

        formData.append("_token", '{{ csrf_token() }}');
        formData.append('image',event.target.files[0]);
        $.ajax({
            type:'POST',
            url: '{{route('shop.changeAvatar')}}',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });

    };

</script>
