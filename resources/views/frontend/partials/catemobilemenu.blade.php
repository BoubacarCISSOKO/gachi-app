<!-- mobile header start -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                <p><span>LIVRAISON GRATUITE</span>  dans le monde entier pour toutes les commandes de plus de 100.000 fcfa </p>
            </div>
            <div class="mobile-search mobile-header-padding-border-1">
                <div class="search-wrap-3">
                    <form action="#">
                        <input name="search" placeholder="Cherchez un produit par catégorie ou nom ..." type="text">
                        <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav class="bg-diaw">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="{{ route('home') }}">ACCUEIL</a></li>
                        <li class="menu-item-has-children "><a href="#">BOUTIQUE</a></li>
                        <li class="menu-item-has-children"><a href="#">PAGES</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                <a class="categori-show purple" href="{{route('categorie')}}">
                    <i class="lnr lnr-menu"></i>Toutes les Catégories <i class="icon-arrow-down icon-right"></i>
                </a>
                <div class="categori-hide-2 bg-diaw">
                    <nav>
                        <ul class="mobile-menu">
                          @foreach (\App\Models\Category::all()->take(10) as $key => $categorie)
                            @php
                                $marques = array();
                            @endphp
                            @if(count($categorie->souscategories)>0)
                            <li class="menu-item-has-children "><a href="{{ route('categorie.detail',$categorie->slug) }}">{{ __($categorie->nom) }} </a>
                              @foreach($categorie->souscategories as $key => $subcategory)
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="{{ route('categorie.detail',$categorie->slug) }}">{{$subcategory->nom}}</a>
                                        <ul class="dropdown">
                                        @foreach($subcategory->soussouscategorie as $key => $subsubcategory)
                                            <li><a href="{{ route('categorie.detail',$categorie->slug) }}">{{$subsubcategory->nom}}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                </ul>
                              @endforeach
                            </li>
                            @else
                            <li><a href="{{ route('categorie.detail',$categorie->slug) }}">{{ __($categorie->nom) }} </a></li>
                            @endif
                          @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                <div class="single-mobile-header-info">
                    <a href="{{ route('boutique') }}"><i class="lastudioicon-pin-3-2"></i> Emplacement du magasin </a>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-language-active" href="#">Devise <span><i class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown lang-dropdown-active bg-diaw">
                       
                    </div>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-currency-active" href="#">Symbole <span><i class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown curr-dropdown-active bg-diaw">
                     
                    </div>
                </div>
            </div>
            <div class="mobile-contact-info mobile-header-padding-border-4 bg-diaw">
                <ul>
                    <li><i class="icon-phone "></i>(+221) 77 978-37-60 </li>
                    <li><i class="icon-envelope-open "></i> iratic@iratic.org</li>
                    <li><i class="icon-home"></i> N°2466 Dieupeul II en face l'Université Dakar Bourguiba</li>
                </ul>
            </div>
            <div class="mobile-social-icon">
                <a class="facebook bg-mody" href="https://www.facebook.com/lapostesn/"><i class="icon-social-facebook"></i></a>
                <a class="twitter bg-mody" href="https://twitter.com/lapostesn?lang=fr"><i class="icon-social-twitter"></i></a>
                <a class="twitter bg-mody" href="https://www.linkedin.com/company/lapostesn/posts/?feedView=all"><i class="icon-social-linkedin"></i></a>

            </div>
        </div>
    </div>
</div>