
<!-- MOBILE NAVIGATION -->
<div class="mobile-navigation">
    <div class="home"><a href="#"><i class='bx bx-home'></i><span>Əsas</span></a></div>
    <div class="category-mobile"><i class='bx bxs-category'></i><span>Kateqoriya</span></div>
    <div class="add-button"><a href="#"><i class='bx bx-plus-medical'></i><span>Yeni Elan</span></a></div>
    <div class="favori"><a href="#"><i class='bx bxs-heart'></i><span>Favorilər</span></a></div>
    <div class="user-account"><a href="#"><i class='bx bx-user'></i><span>Hesabım</span></a></div>
</div>
<!-- MOBILE NAVIGATION -->
<!-- HEADER WRAPPER -->
<div class="header-menu-mob pt-2 pb-2 shadow-xss w-100 z-index-5 bg-white d-none d-block-md"
     id="header-menu-mob">
    <div class="container">
        <div class="row">
            <div class="col text-start pt-2"><button class="navbar-toggler border-0" type="button"
                                                     data-bs-toggle="modal" data-bs-target="#menumodal"><span
                        class="navbar-toggler-icon"></span></button></div>
            <div class="col text-center"><a href="index.html">FARM</a></div>
            <div class="col text-end"><a class="btn category-mobile"><i class='bx bxs-category'></i></a></div>
        </div>
    </div>
</div>
<div class="upper-header bg-lightgrey pt-2 pb-2 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="nav">
                    <li class="nav-item"><a class=" ps-0" href="about.html">About Us</a></li>
                    <li class="nav-item"><a href="dashboard.html">My account</a></li>
                    <li class="nav-item"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#savedmodal">Wishlist</a></li>
                    <li class="nav-item"><a href="#">Order Tracking</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-end">
                <ul class="navbar-nav float-end">
                    <ul class="navbar-nav ms-auto">

                      @guest('shop') @guest('user')
                        <li class="nav-item  nav-item-toggle active dropdown mr-5">
                            <a class="nav-link dropdown-toggle text-current" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Mağaza</a>

                            <ul class="dropdown-menu border-0 shadow-xss">
                                <li><a class="dropdown-item" href="{{route('shop.register')}}"> Qeydiyyat</a></li>
                                <li><a class="dropdown-item" href="{{route('shop.login')}}"> Giriş </a></li>
                            </ul>

                        </li>

                        <li class="nav-item nav-item-toggle  active dropdown">
                            <a class="nav-link dropdown-toggle text-current" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">İstifadəçi</a>
                            <ul class="dropdown-menu border-0 shadow-xss">
                                <li><a class="dropdown-item" href="{{route('user.register')}}"> Qeydiyyat</a></li>
                                <li><a class="dropdown-item" href="{{route('user.login')}}"> Giriş </a></li>
                            </ul>
                        </li>
                        @endguest
                        @endguest

                    @auth('shop')
                                <li class="nav-item  nav-item-toggle active dropdown mr-5">
                                    <a class="nav-link dropdown-toggle text-current" href="#" data-bs-toggle="dropdown"
                                       aria-expanded="false">{{auth('shop')->user()->shopname}}</a>

                                    <ul class="dropdown-menu border-0 shadow-xss">
                                        <li><a class="dropdown-item" href="{{route('shop.profil')}}"> Profilim</a></li>
                                        <li><a class="dropdown-item" href="{{route('shop.logout')}}"> Çıxış et </a></li>
                                    </ul>

                                </li>
                            @endauth

                            @auth('user')
                                <li class="nav-item  nav-item-toggle active dropdown mr-5">
                                    <a class="nav-link dropdown-toggle text-current" href="#" data-bs-toggle="dropdown"
                                       aria-expanded="false">{{auth('user')->user()->name}}</a>


                                    <ul class="dropdown-menu border-0 shadow-xss">
                                        <li><a class="dropdown-item" href="{{route('user.profil')}}"> Profilim</a></li>
                                        <li><a class="dropdown-item" href="{{route('user.logout')}}"> Çıxış et </a></li>
                                    </ul>

                                </li>
                            @endauth




                    </ul>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="header-wrapper pt-4 pb-1 z-index-5 ovh bg-white d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex">
                <!-- <a href="#" class="nav-icon ps-0 ms-0 ms-n1" data-bs-toggle="modal" data-bs-target="#categorymodal"><i class="feather-menu font-lg text-grey-500"></i></a> -->
                <a href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
                <div class="header-search ms-auto me-2 d-flex">
                    <!-- <a href="#" class="location me-3" data-bs-toggle="modal" data-bs-target="#locationmodal">
                        <span class="fw-600 font-xssss text-grey-400">Delivery to</span>
                        <i class="feather-map-pin text-grey-500"></i>
                        <h4 class="fw-600 font-xssss mt-0 text-current mb-0 ls-0">Downtown New York..</h4>
                    </a> -->
                    <div class="form-group mb-0 icon-input d-none d-xl-block me-2">
                        <i class="feather-search font-sm text-grey-400"></i>
                        <input type="text" placeholder="Start typing to search.."
                               class="lh-38 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl posr">
                    </div>
                    <a href="#" class="nav-icon"><span class="dot-count bg-warning"></span><i
                            class="feather-bell text-grey-500"></i></a>
                    <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#savedmodal"><i
                            class="feather-heart text-grey-500"></i></a>
                    <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#cartmodal"><i
                            class="feather-shopping-bag text-grey-500"></i></a>
                    <a href="dashboard.html" class="nav-icon p-0"><img
                            src="https://via.placeholder.com/50x50.png" alt="user" class="w-40 mt-1"></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="lower-header pt-3 pb-1 shadow-xss z-index-1 bg-white d-none d-lg-block" id="lower-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="navbar navbar-expand-lg p-0">
                    <div class="navbar-collapse collapse show d-flex justify-content-center align-content-center"
                         id="main_nav">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_nav" aria-expanded="true" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop-list-1.html">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="single-product-1.html">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER WRAPPER -->
