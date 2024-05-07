@extends('frontend.config.master')
@section('title', 'Les categories')
@section('content')
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('home')}}">Accueil</a>
                </li>
                <li class="active">Catégories</li>
            </ul>
        </div>
    </div>
</div>

<div class="shop-area m-2 pt-5 pb-50">
    <div class="container card p-4">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div class="section-title-tab-wrap border-bottom-3 mb-40">
                            <h2>Toutes les catégories</h2>
                        </div>
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach ($categories as $key => $categorie)
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
                                        <div class="product-categories-wrap product-categories-border mb-45">
                                        <blockquote class="blockquote">
                                            <a class="mb-0" href="{{ route('categorie.detail',$categorie->slug) }}"><img src="{{asset('storage/'.$categorie->image)}}" style="width:75px" alt="{{$categorie->nom}}"></a>
                                            <p>{{$categorie->nom}}</p>
                                        </blockquote>
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection