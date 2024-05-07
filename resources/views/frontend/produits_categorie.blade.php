@extends("frontend.config.master")
@section('title', 'Tous les offres')
@section('content')
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('boutique')}}">Boutique</a>
                </li>
                <li class="active">Produits recherchés par leur catégorie</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area m-2 pt-5 pb-50">
    <div class="container card p-4">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="shop-topbar-left">
                        <div class="view-mode nav">
                            <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                            <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                        </div>
                        <p>Affichage des résultats 1-5 sur 30 </p>
                    </div>
                    <div class="product-sorting-wrapper">
                        <div class="product-shorting shorting-style">
                            <form action="{{ route('product.recherches') }}">
                                <label>Vue :</label>
                                <select name="per_page" value="per_page" onchange="this.form.submit()">
                                    <option value=""> </option>
                                    <option value="5"> 5</option>
                                    <option value="10"> 10</option>
                                    <option value="30"> 30</option>
                                </select>
                            </form>
                        </div>
                        <div class="product-show shorting-style">
                            <form action="{{ route('product.personalise') }}" >
                                <label>Trier par nom:</label>
                                <select name="search_text" value="search_text" onchange="this.form.submit()">
                                    <option value="">Défault</option>
                                    @foreach ($products as $product)
                                    <option value="{{$product->nom}}">{{$product->nom}}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                              @foreach ($products as $key => $product)
                              <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                                
                                                <img src="{{ asset('storage/'.$product->image) }}" class="img-thumbnail" alt="{{$product->nom}}">
                                            
                                            <div class="product-action-2 tooltip-style-2">
                                                <!-- <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button> -->
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3>{{$product->nom}}</h3>
                                            <div class="product-price-2">
                                                <span>{{$product->prix_unitaire}} Fcfa</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">
                                            <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>
                                            <h3>{{$product->nom}}</h3>
                                            <div class="product-price-2">
                                                <span>{{$product->prix_unitaire}} Fcfa</span>
                                            </div>

                                            <div class="pro-add-to-cart">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                                                    <input id="quantity" name="quantity" type="number" value="1" min="1">
                                                    <div class="card-footer" style="background-color: white;">
                                                        <div class="row">
                                                            <button title="Ajouter au Panier">Ajouter au Panier</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                    <h4 class="sidebar-widget-title">Recherche </h4>
                    <div class="categori-search-wrap categori-search-wrap-modify-3">
                        <div class="search-wrap-3">
                            <form action="#">
                                <input name="search" placeholder="Cherchez un produit par catégorie ou nom ..." type="text">
                                <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                        <h4 class="sidebar-widget-title">Categories </h4>
                        <div class="shop-catigory bg-diaw">
                            <ul>
                                @foreach (\App\Models\Category::all() as $key => $category)
                                    <li><a href="{{ route('categorie.detail',$category->slug) }}">{{$category->nom}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Filtrer Par Prix </h4>
                        <div class="price-filter bg-diaw">
                            <span>Tranche de: 10.000 Fcfa - 150.000 Fcfa</span>
                            <div id="slider-range "></div>
                            <div class="price-slider-amount">
                            <form action="{{ route('product.filtrage') }}">
                            
                                <div class="label-input">
                                    <select name="prixUnitaire" id="prixUnitaire">
                                        <option name='prixUnitaire'>Select Prix</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">
                                            {{ $product->prix_unitaire }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit">Filtrer</button>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Affiner par </h4>
                        <div class="sidebar-widget-list bg-diaw">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox"> <a href="#">En soldes<span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Nouveau <span>5</span></a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">En stock <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Taille </h4>
                        <div class="sidebar-widget-list bg-diaw">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Couleur </h4>
                        <div class="sidebar-widget-list bg-diaw">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Verte <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Blanche <span>8</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Bleue <span>9</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Noire <span>3</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border pt-40">
                        <h4 class="sidebar-widget-title">Tags populaires</h4>
                        <div class="tag-wrap sidebar-widget-tag bg-diaw">
                            @foreach(\App\Models\Product::all() as $product)
                                <a href="#">{{$product->tags}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection