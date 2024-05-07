<div class="col-lg-3">
    <div class="main-categori-wrap main-categori-wrap-modify-2">
        <a class="categori-show categori-blue" href="#"><i class="lnr lnr-menu"></i> Toutes Categories <i class="icon-arrow-down icon-right"></i></a>
        <div class="category-menu categori-hide categori-not-visible">
            <nav>
                <ul>
                    @foreach (\App\Models\Category::all()->take(10) as $key => $categorie)
                        @php
                            $marques = array();
                        @endphp
                        @if(count($categorie->souscategories)>0)
                        <li class="cr-dropdown"><a href="{{ route('categorie.detail',$categorie->slug) }}">{{ __($categorie->nom) }} <span class="icon-arrow-right"></span></a>
                            <div class="category-menu-dropdown ct-menu-res-height-1">
                            @foreach($categorie->souscategories as $key => $subcategory)
                                <div class="single-category-menu ct-menu-mrg-bottom category-menu-border">
                                    <a href="{{ route('categorie.detail',$categorie->slug) }}">
                                        <h4> {{$subcategory->nom}}</h4>
                                    </a>
                                    <ul>
                                    @foreach($subcategory->soussouscategorie as $key => $subsubcategory)
                                        <li><a href="{{ route('categorie.detail',$categorie->slug) }}">{{$subsubcategory->nom}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endforeach
                            </div>
                        </li>
                        @else
                        <li class="cr-dropdown"><a href="{{ route('categorie.detail',$categorie->slug) }}">{{ __($categorie->nom) }} </a></li>
                        @endif
                  @endforeach
                  <li class="cr-dropdown btn bg-mody"><a href="{{ route('categorie') }}" class="text-white">{{ __('Voir toutes les catégories') }} </a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>