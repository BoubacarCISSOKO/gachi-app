<div class="product-area section-padding-1 pt-10 pb-10">
    <div class="container bg-white">
        <div class="section-title-tab-wrap border-bottom-3 mb-10">
            <div class="section-title">
                <h2>{{__('Produits Vedettes')}}</h2>
            </div>
            <div class="tab-style-1 nav">
                <a href="{{route('boutique')}}" >Tous les produits</a>
            </div>
        </div>
        
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="row">
                  @foreach (filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->limit(100)->get() as $key => $product)
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 card p-1">
                        <div class="single-product-wrap mb-5">
                            <div class="product-img product-img-zoom mb-2">
                                <a href="{{ route('product', $product->slug) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" data-src="{{ asset('storage/'.$product->image) }}" alt="{{ __($product->nom) }}">
                                </a>
                                <div class="product-action-wrap">
                                    <div class="product-action-left">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                                        <input id="quantity" name="quantity" type="number" value="1" min="1">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                            <button><i class="icon-basket-loaded"></i><span>Ajouter au Panier</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="product-action-right tooltip-style">
                                        <!-- <button data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Aperçu</span></button> -->
                                        <button class="font-inc"><i class="icon-refresh"></i><span>Comparer</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-content-left">
                                    <h4><a href="{{ route('product', $product->slug) }}">{{$product->nom}}</a></h4>
                                    <div class="product-price">
                                    <span class="new-price">{{ home_discounted_base_price($product->id) }} Fcfa</span>
                                    @if(home_base_price($product->id) != home_discounted_base_price($product->id))
                                        <span class="old-price text-danger">{{ home_base_price($product->id) }} Fcfa</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="product-content-right tooltip-style">
                                    <button class="font-inc"><i class="icon-heart"></i><span>Favoris</span></button>
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