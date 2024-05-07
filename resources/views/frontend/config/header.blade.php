<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<header class="header-area">
    <div class="header-large-device">
        <div class="header-top header-top-ptb-1 border-bottom-1 bg-mody">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="social-offer-wrap">
                            <div class="social-style-1">
                                <h4 class="text-white"> Suivez-nous sur les réseaux sociaux <span><i class="bi bi-chevron-right"></i></span></h4>
                            </div>
                            <div class="header-offer-wrap-2">
                                <a href="https://www.facebook.com/lapostesn/"><i class="icon-social-facebook text-white"></i></a>
                                <a href="https://www.linkedin.com/company/lapostesn/posts/?feedView=all"><i class="icon-social-linkedin text-white"></i></a>
                                <a href="https://www.instagram.com/laposte_senegal/"><i class="bi bi-instagram text-white"></i></a>
                                <a href="https://twitter.com/lapostesn?lang=fr"><i class="icon-social-twitter text-white"></i></a>
                                <a href="https://www.youtube.com/channel/UC6ssqxbVPXV_XbtQJPbv27w"><i class="bi bi-youtube text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="header-top-right">
                            <div class="same-style-wrap">
                                <div class="same-style  track-order">
                                    <h4 class="text-white clignote">Besoin d'aide? Appelez au <i class="bi bi-forward-fill text-white"></i></h4>
                                </div>
                                <div class="same-style  language-wrap">
                                    <h4 class="text-white clignote"><i class="bi bi-telephone-inbound text-white"></i> +33 7 67 65 32 10</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-padding-2 bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href=" {{route('home')}} "><img src="{{ asset('assets/front/images/logo/p44.png')}}" alt="logo" height="65" width="65"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="categori-search-wrap categori-search-wrap-modify-3">
                            <div class="categori-style-1">
                                <form action="#">
                                    <select name="search" class="nice-select nice-select-style-1" onchange="this.form.submit()">
                                        <option>Nos Categories </option>
                                        @foreach (\App\Models\Category::all()->take(10) as $key => $categorie)
                                        <option>{{$categorie->nom}}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div class="search-wrap-3">
                                <form action="#">
                                    <input name="search" placeholder="Cherchez un produit par catégorie ou nom ..." type="text">
                                    <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="hotline-2-wrap">
                            <div class="hotline-2-icon">
                                <i class="blue icon-call-end"></i>
                            </div>
                            <div class="hotline-2-content">
                                <span> Support 24/7</span>
                                <h5>+33 7 67 65 32 10</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-white">
            <div class="container">
                <div class="row align-items-center">
                     <!--Menu categorie -->
                     @include('frontend.partials.catemenu')
                    <!--end menue categorie-->
                    <div class="col-lg-6">
                        <div class="main-menu main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                            <nav>
                                <ul>
                                    <li><a href="{{route('boutique')}}">Boutique</a></li>
                                    <li><a href="{{route('boutique.pages')}}">Pages </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-action header-action-flex pr-20">
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="{{ url('login') }}"><i class="icon-user"></i></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec header-cart">
                                <a class="cart-active" href="#">
                                    <i class="icon-basket-loaded"></i><span class="pro-count red"> 0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device small-device">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="mobile-logo">
                        <a href=" {{route('home')}} ">
                            <img alt="" src="{{ asset('assets/front/images/logo/Logo_La_Poste_Sénégal.jpg')}}" style="width:50px;height:50px">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">
                        <div class="same-style-2 same-style-2-font-inc">
                            <a href="{{ route('login') }}"><i class="icon-user"></i></a>
                        </div>
                        <div class="same-style-2 same-style-2-font-inc">
                            <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                        </div>
                        <div class="same-style-2 same-style-2-font-inc header-cart">
                            <a class="cart-active" href="#" >
                                <i class="icon-basket-loaded"></i><span class="pro-count red"> 0</span>
                            </a>
                        </div>
                        <div class="same-style-2 main-menu-icon">
                            <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 pt-2">
            <div class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                <nav class="bg-mody p-2">
                    <div class="same-style-wrap">
                        <div class="same-style  track-order">
                            <h4 class="text-white clignote">Besoin d'aide?</h4>
                        </div>
                        <div class="same-style  language-wrap">
                            <h5 class="text-white clignote">Appelez au <i class="bi bi-forward-fill text-white"></i> <i class="bi bi-telephone-inbound text-white"></i> +33 7 67 65 32 10</h5>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 mt-2 mb-2">
            <div class="categori-search-wrap categori-search-wrap-modify-3">
                <div class="categori-style-1">
                    <form action="#">
                        <select name="search" class="nice-select nice-select-style-1" onchange="this.form.submit()">
                            <option>Nos Categories </option>
                            @foreach (\App\Models\Category::all()->take(10) as $key => $categorie)
                            <option>{{$categorie->nom}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="search-wrap-3">
                    <form action="#">
                        <input name="search" placeholder="Cherchez un produit par catégorie ou nom ..." type="text">
                        <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
