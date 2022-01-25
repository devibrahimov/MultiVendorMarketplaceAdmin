<!-- FOOTER WRAPPER -->
<div class="upper-footer">
    <div class="container pt-5 pb-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 xs-mb-4 md-mb-3 text-start">
                <i class="ti-shopping-cart text-grey-900 display1-size float-start me-3"></i>
                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">100% Təhlükəsiz Ödəmə</h4>
                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% Ödeme Qoruması.</p>
            </div>

            <div class="col-lg-3 col-md-6 xs-mb-4 md-mb-3 text-start">
                <i class="ti-headphone-alt text-grey-900 display1-size float-start me-3"></i>
                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">Dəstək</h4>
                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Həmişə onlayn 24/7 Canlı Dəstək</p>
            </div>
            <div class="col-lg-3 col-md-6 md-mb-3 text-start">
                <i class="ti-lock text-grey-900 display1-size float-start me-3"></i>
                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">Məlumatların Qoruması</h4>
                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Məlumatlarınızın Gizlilik Qoruması</p>
            </div>
            <div class="col-lg-3 col-md-6 text-start">
                <i class="ti-reload text-grey-900 display1-size float-start me-3"></i>
                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0"> Ödənişi Geri Qayatmaq </h4>
                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% ödəmənin geri qaytarılması</p>
            </div>
        </div>
    </div>
</div>
<div class="upper-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5 mt-5"></div>
            <div class="col-md-3 col-xs-6 sm-mb-3">
                <h3>Korporativ</h3>
                <ul class="menu">
                    @foreach(\App\Models\CorporativePages::select(['id','title','slug'])->get() as $page)
                    <li><a href="{{route('site.corporativ',$page->slug)}}">{{$page->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 sm-mb-3">
                <h3>Sözləşmələr</h3>
                <ul class="menu">
                    @foreach(\App\Models\Contract::select(['id','title','slug'])->get() as $page)
                        <li><a href="{{route('site.contract',$page->slug)}}">{{$page->title}}</a></li>
                    @endforeach                </ul>
            </div>

            <div class="col-md-3 col-xs-6 sm-mb-3">
                <h3>BEVERAGES</h3>
                <ul class="menu">
                    <li><a href="#">Packaged Produce</a></li>
                    <li><a href="#">Party Trays</a></li>
                    <li><a href="#">Fresh Vegetables</a></li>
                    <li><a href="#">Herbs &amp; Seasonings</a></li>
                    <li><a href="#">Fresh Fruits</a></li>
                    <li><a href="#">Cuts &amp; Sprouts</a></li>
                    <li><a href="#">Exotic Fruits &amp; Veggies</a></li>
                    <li><a href="#">Packaged Produce</a></li>
                    <li><a href="#">Party Trays</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 sm-mb-3">
                <h3>FRUIT & VEGETABLES</h3>
                <ul class="menu">
                    <li><a href="#">Fresh Vegetables</a></li>
                    <li><a href="#">Herbs &amp; Seasonings</a></li>
                    <li><a href="#">Fresh Fruits</a></li>
                    <li><a href="#">Cuts &amp; Sprouts</a></li>
                    <li><a href="#">Exotic Fruits &amp; Veggies</a></li>
                    <li><a href="#">Packaged Produce</a></li>
                    <li><a href="#">Party Trays</a></li>
                </ul>
            </div>
            <div class="col-lg-12 pt-5 mt-5"></div>
        </div>
    </div>
</div>

<div class="lower-footer bg-white pb-3 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center text-sm-start xs-mb-3">
                <a href="#"><img src="/site/images/logo.png" alt="logo" class="w-125"></a>
            </div>
            <div class="col-md-4 text-center text-sm-start xs-mb-3">
                <p class="text-grey-500 fw-500 font-xssss mb-0">@ Copyright 2021 Bütün Hüquqları Qorunmaqdadır.</p>
            </div>
            <div class="col-md-4 text-center text-sm-end"><img src="https://via.placeholder.com/320x28.png"
                                                               alt="payment"></div>
        </div>
    </div>
</div>
<!-- FOOTER WRAPPER -->

