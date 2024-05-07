@extends('frontend.config.master')
@section('title',"Les pages")
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li class="active">Les pages</li>
            </ul>
        </div>
    </div>
</div>
<!-- my account wrapper start -->
<div class="my-account-wrapper pt-5 pb-50">
    <div class="container card p-4">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Les pages</a>
                                <a href="#orders" data-toggle="tab"><i class=""></i> Qui sommes-nous</a>
                                <a href="#download" data-toggle="tab"><i class=""></i> Conditions Générales d'utilisation et de vente</a>
                                <a href="#payment-method" data-toggle="tab"><i class=""></i> Politique de Confidentialité</a>
                                <a href="#annuler-method" data-toggle="tab"><i class=""></i> Comment annuler ma commande</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Besoin D'aide ?</h3>
                                        <div class="welcome">
                                            <p>Bonjour! <br> Bienvenue dans votre plateforme Postmarket</p>
                                        </div>

                                        <p class="mb-0">
                                            Depuis le tableau de bord de l'onglet page, vous pouvez facilement voir notre briève présentation, notre condition générale d'utilisation et de vente, notre politique de confidentialité et comment annuler une commande.  .
                                        </p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Qui sommes-nous</h3>
                                        <p class="saved-message">Fonctinnalité à venir</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Conditions Générales d'utilisation et de vente</h3>
                                        <p class="saved-message" style="text-align: justify">
                                            En utilisant le lien du site, vous accèdez directement sur le catalogue. 
                                            La barre de recherche vous permet de retrouver facilement un produit en 
                                            tapant un nom spécifique en tête ou en fonction du type de catégories sélectionées. 
                                            En cliquant sur un produit, vous verrez les détails et un bouton permettant d'ajouter ce produit à votre
                                            <strong>panier</strong>.   
                                        </p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Politique de Confidentialité</h3>
                                        <p class="saved-message">Fonctinnalité à venir aussi</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="annuler-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Comment annuler ma commande</h3>
                                        <p class="saved-message">Fonctinnalité à venir aussi</p>
                                        <h2>Etape à suivre:</h2>
                                        <ul style="text-align: justify">
                                            <li><span class="iconify" data-icon="ri-check-double-line" width="30px" data-inline="false"></span> De votre liste de commandes sur votre compte Postmarket, cliquez sur "Détails" à droite de l'élément que vous désirez annuler</li>
                                            <li><span class="iconify" data-icon="ri-check-double-line" width="30px" data-inline="false"></span> Cliquez sur le bouton "Annuler la commande"</li>
                                            <li><span class="iconify" data-icon="ri-check-double-line" width="30px" data-inline="false"></span> Sélectionnez la quantité à annuler et la raison d'annulation de la liste déroulante, puis cliquez sur "Soumettre"</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
@endsection