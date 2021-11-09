<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin qardash</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"onclick="event.preventDefault(); document.getElementById('logoutform').submit()">
                                <i class="material-icons">input</i> Çıxış Et</a></li>
                        <form action="{{route('logout')}}" method="post" id="logoutform" style="display: none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->

        @php
        $menu = [
                    ['icon'=>'home','name' =>'Ana Səhifə' , 'route'=>'dashboard'],
                    ['icon'=>'adb','name' =>'Administrator' , 'route'=>'#'],
                    ['icon'=>'line_style','name' =>'Kategoriyalar' , 'route'=>'categories'],
                    ['icon'=>'map','name' =>'Bölgə və Şəhərlər' , 'route'=>'#'],
                    ['icon'=>'dashboard','name' =>'Reklam İdarəsi' , 'route'=>'#'],
                     ['icon'=>'store','name' =>'Mağazaların İdarəsi','application' =>[
                        ['icon'=>'assignment_ind','name' =>'Qeydiyyat' , 'route'=>'setting'],
                        ['icon'=>'assignment','name' =>'Siyahısı' , 'route'=>'#'],
                        ['icon'=>'warning','name' =>'Şikayətlər Qutusu' , 'route'=>'#'],
                        ['icon'=>'shopping_basket','name' =>'Mağaza Məhsulları' , 'route'=>'#'],]
                    ],
                     ['icon'=>'local_hospital','name' =>'Baytar / Klinikalar','application' =>[
                        ['icon'=>'assignment_ind','name' =>'Qeydiyyat' , 'route'=>'setting'],
                        ['icon'=>'assignment','name' =>'Siyahısı' , 'route'=>'#']
                         ]
                    ],
                     ['icon'=>'perm_contact_calendar','name' =>'İstifadəçilər','application' =>[
                        ['icon'=>'assignment','name' =>'Siyahısı' , 'route'=>'#'],
                        ['icon'=>'warning','name' =>'Şikayətlər Qutusu' , 'route'=>'#'],
                       ]
                    ],
                    ['icon'=>'layers','name' =>'Viktorina Bölməsi','application' =>[
                        ['icon'=>'subject','name' =>'Kategoriyalar' , 'route'=>'#'],
                        ['icon'=>'shop','name' =>'Paylaşımlar' , 'route'=>'#'],
                        ['icon'=>'stars','name' =>'Qiymətləndirmələr' , 'route'=>'#'],
                        ]
                    ],
                     ['icon'=>'add_to_queue','name' =>'Web Sayt','application' =>[
                        ['icon'=>'build','name' =>'Tənizmləmələr' , 'route'=>'setting'],
                        ['icon'=>'extension','name' =>'Entegrasiyalar' , 'route'=>'#'],
                        ['icon'=>'content_paste','name' =>'Korporativ Səhifələr' , 'route'=>'#'],
                        ['icon'=>'content_paste','name' =>'Sözləşmələr' , 'route'=>'#'],
                        ['icon'=>'question_answer','name' =>'Sual-Cavab' , 'route'=>'#'],
                        ]
                    ],

                    ['icon'=>'layers','name' =>'Blog' , 'route'=>'#'],
                    ['icon'=>'warning','name' =>'Şikayətlər Qutusu' , 'route'=>'#']
                ];
        @endphp

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                @foreach($menu as $item)
                    <li>
                        <a @if(key_exists('application',$item))  href="javascript:void(0);" class="menu-toggle"  @else href="{{$item['route'] !='#'? route($item['route']) : '#'}}" @endif >
                            <i class="material-icons">{{$item['icon']}}</i>
                            <span>{{$item['name']}}</span>
                        </a>
                        @if(key_exists('application',$item))
                        <ul class="ml-menu">
                            @foreach($item['application'] as $subitem)
                            <li>
                                <a href="{{$subitem['route'] !='#'? route($subitem['route']) : '#'}}"  >
                                    <i class="material-icons">{{$subitem['icon']}}</i>
                                    <span>{{$subitem['name']}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>

                @endforeach

                <li class="header">SEO & STATİSTİKA</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>SEO TOOLS</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Ən Çox Axtarılan Sözlər</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Online Sifariş Statistikası</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2021 <a href="http://lumusoft.com">Lumusoft - Modern Software Agency</a>.
            </div>

        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

</section>
