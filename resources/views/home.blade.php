@extends('frontend.config.master')
@section('title',"La page d'accueil ")
@section('content')
    @include('frontend.partials.slider')
    @include('frontend.partials.service')

        <div class="product-area m-2">
            <div class="container bg-white">
                <div class="section-title-btn-wrap border-bottom-3 pb-2">
                    <div class="section-title-deal-wrap">
                        <div class="section-title-3">
                        <h2>Les promos du jour</h2>
                        </div>
                        <div class="timer-wrap-2">
                            <h4><i class="icon-speedometer"></i> Expire le:</h4>
                            <div class="timer-style-2">date</div>
                        </div>
                    </div>
                </div>
                <div class="section-wrap-1" >
                    <div class="product-slider-active-8 dot-style-2 dot-style-2-position-static dot-style-2-mrg-3 nav-style-5 nav-style-5-modify">
                   
                        <div class="product-plr-1" style="height:50%;">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-5">
                                    <a href="#">
                                        <img src="#" alt="nom">
                                    </a>
                                    <div class="product-action-2">
                                        <!-- <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button> -->
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="#">nom</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                   
                                    </div>
                                    <!--<div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>-->
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="#">nom</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">12 Fcfa</span>
                                    </div>
                                    <form action="#" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="id" name="id" value="1">
                                        <div class="product-author">
                                            <span><input id="quantity" name="quantity" type="number" value="1" min="1" class="form-control" style="width:60px"></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Ajouter au panier">Ajouter au Panier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
  

    <div id="section_featured">

    </div>
    
   <!--- Top categories -->
    <div class="product-categories-area m-2 pb-5">
        <div class="container bg-white">
            <div class="section-title-tab-wrap border-bottom-3 mb-5 pb-10">
                <div class="section-title-3">
                    <h2>Nos Top Categories</h2>
                </div>
                <div class="btn-style-5">
                    <a href="#">Voir Toutes les Categories <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
              @foreach (\App\Models\Category::where('featured', 1)->take(6)->get() as $categorie)
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="product-categories-wrap product-categories-border mb-15">
                        <blockquote class="blockquote">
                        <a class="mb-0" href="#"><img src="" style="width:75px" alt=""></a>
                            <p>{{$categorie->nom}}</p>
                        </blockquote>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
   <!--- end Top categories -->
   
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $.post('#', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                slickInit();
            });
        });
    </script>
@endsection
