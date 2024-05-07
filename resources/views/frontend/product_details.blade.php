@extends('frontend.config.master')
@section('title', 'Détail du produit')
@section('content')
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('home')}}">Accueil</a>
                </li>
                <li class="active">Details  du produit</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area m-2 pt-5 pb-50">
    <div class="container card p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-tab">
                    <div class="product-dec-right pro-dec-big-img-slider">
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset('storage/'.$product->image) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->nom}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/'.$product->image) }}><i class="icon-size-fullscreen"></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset('storage/'.$product->image) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->nom}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/'.$product->image) }}"><i class="icon-size-fullscreen"></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset('storage/'.$product->image) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->nom}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/'.$product->image) }}"><i class="icon-size-fullscreen"></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset('storage/'.$product->image) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->nom}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/'.$product->image) }}"><i class="icon-size-fullscreen"></i></a>
                        </div>
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset('storage/'.$product->image) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->nom}}">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{ asset('storage/'.$product->image) }}"><i class="icon-size-fullscreen"></i></a>
                        </div>
                    </div>
                    <div class="product-dec-left product-dec-slider-small-2 product-dec-small-style2">
                      @if(is_array(json_decode($product->photos)) && count(json_decode($product->photos)) > 0)
                        @foreach (json_decode($product->photos) as $key => $photo)
                            <div class="product-dec-small active">
                                <img src="{{asset('storage/'.$photo)}}" alt="{{$product->nom}}">
                            </div>
                          @endforeach
                      @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content pro-details-content-mt-md">
                    <h2>{{$product->nom}}</h2>
                    <div class="product-ratting-review-wrap">
                        <div class="product-ratting-digit-wrap">
                            <div class="product-ratting">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <div class="product-digit">
                                <span>5.0</span>
                            </div>
                        </div>
                        <div class="product-review-order">
                            <span>62 Reviews</span>
                            <span>242 orders</span>
                        </div>
                    </div>
                    <p> {!! $product->description !!}</p>                    
                    <div class="pro-details-price">
                        <span class="new-price">{{$product->prix_unitaire}} Fcfa</span>
                        <!-- <span class="old-price">$95.72</span> -->
                    </div>
                    @if (count(json_decode($product->colors)) > 0)
                    <div class="pro-details-color-wrap">
                        <span>Couleur:</span>
                        <div class="pro-details-color-content">
                            <ul>
                            @foreach (json_decode($product->colors) as $key => $color)
                                <li>
                                    <input style="background: {{ $color }};" type="checkbock" id="{{ $product->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key == 0) checked @endif>
                                    <label style="background: {{ $color }};" for="{{ $product->id }}-color-{{ $key }}" data-toggle="tooltip"></label>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    <!-- <div class="pro-details-size">
                        <span>Size:</span>
                        <div class="pro-details-size-content">
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>
                    </div> -->
                   <!--  <div class="pro-details-quality">
                        <span>Quantité:</span>
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                        </div>
                    </div> -->
                    <div class="product-details-meta">
                        <ul>
                            <li><span>Categories:</span> <a href="#">{{$product->categorie->nom}}</a></li>
                            <li><span>Marque: </span> <a href="#">{{$product->marques->nom}}</a></li>
                        </ul>
                    </div>
                    <div class="pro-details-action-wrap">
                        <div class="pro-details-add-to-cart">
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                            <input id="quantity" name="quantity" type="number" value="1" min="1">
                            <div class="card-footer" style="background-color: white;">
                                <div class="row">
                                    <button class="btn btn-md bg-mody">Ajouter au Panier</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="pro-details-action">
                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                            <div class="product-dec-social">
                                <a class="facebook" title="Facebook" href="https://www.facebook.com/lapostesn/"><i class="icon-social-twitter"></i></a>
                                <a class="twitter" title="Twitter" href="https://twitter.com/lapostesn?lang=fr"><i class="icon-social-facebook"></i></a>
                                <a class="twitter" title="Twitter" href="https://www.linkedin.com/company/lapostesn/posts/?feedView=all"><i class="icon-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection