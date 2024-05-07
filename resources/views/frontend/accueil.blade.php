@extends('frontend.config.master')
@section('title',"La page d'accueil ")
@section('content')
    @include('frontend.partials.slider')
    @include('frontend.partials.service')

    @php
        $flash_deal = \App\Models\Flashdeal::where('status', 1)->where('featured', 0)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('d-m-Y')) >= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date)
        <div class="product-area m-2">
            <div class="container bg-white">
                <div class="section-title-btn-wrap border-bottom-3 pb-2">
                    <div class="section-title-deal-wrap">
                        <div class="section-title-3">
                        <h2>Les promos du jour</h2>
                        </div>
                        <div class="timer-wrap-2">
                            <h4><i class="icon-speedometer"></i> Expire le:</h4>
                            <div class="timer-style-2">{{ date('d/m/Y', $flash_deal->end_date) }}</div>
                        </div>
                    </div>
                </div>
                <div class="section-wrap-1" >
                    <div class="product-slider-active-8 dot-style-2 dot-style-2-position-static dot-style-2-mrg-3 nav-style-5 nav-style-5-modify">
                    @foreach ($flash_deal->flash_deal_products as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                        <div class="product-plr-1" style="height:50%;">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-5">
                                    <a href="{{ route('product', $product->slug) }}">
                                        <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->nom}}">
                                    </a>
                                    <span class="pro-badge left bg-red">{{$flash_deal_product->remise}} %</span>
                                    <div class="product-action-2">
                                        <!-- <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button> -->
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="{{ route('product', $product->slug) }}">{{$product->nom}}</a></h3>
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
                                        <span class="new-price">{{ home_discounted_base_price($product->id) }} Fcfa</span>
                                    @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                        <span class="old-price text-danger">{{ home_base_price($product->id) }} Fcfa</span>
                                    @endif
                                    </div>
                                    <!--<div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>-->
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="{{ route('product', $product->slug) }}">{{$product->nom}}</a></h3>
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
                                        <span class="new-price">{{ home_discounted_base_price($product->id) }} Fcfa</span>
                                    @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                        <span class="old-price text-danger">{{ home_base_price($product->id) }} Fcfa</span>
                                    @endif
                                    </div>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="id" name="id" value="{{ $product->id }}">
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
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

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
                    <a href="{{ route('categorie') }}">Voir Toutes les Categories <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
              @foreach (\App\Models\Category::where('featured', 1)->take(6)->get() as $categorie)
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="product-categories-wrap product-categories-border mb-15">
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
   <!--- end Top categories -->
   
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $.post('{{ route('home.product.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                slickInit();
            });
        });
    </script>
@endsection
