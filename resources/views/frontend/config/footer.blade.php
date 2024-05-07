
<footer class="footer-area">
    <div class="footer-top border-bottom-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Nos catégories</h3>
                        <div class="footer-info-list info-list-50-parcent bg-diaw">
                            <ul>
                                @foreach (\App\Models\Category::all() as $key => $category)
                                    <li><a href="{{ route('categorie.detail',$category->slug) }}">{{$category->nom}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget ml-70 mb-40">
                        <h3 class="footer-title">Liens utiles</h3>
                        <div class="footer-info-list bg-diaw">
                            <ul>
                                <li><a href="#">Qui sommes-nous</a></li>
                                <li><a href="#">Conditions Générales d'utilisation</a></li>
                                <li><a href="#">Politique de Confidentialité</a></li>
                                <li><a href="#">Comment annuler ma commande</a></li>
                                <li><a href="#">Mon compte</a></li>
                                <li><a role="button" class="p-2 text-center text-white bg-mody" href="#"><i class="bi bi-bag-dash-fill"></i> Vendre sur Gachi AgroBusiness</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget mb-40 ">
                        <h3 class="footer-title">NOUS CONTACTER</h3>
                        <div class="contact-info-2">
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-call-end"></i>
                                </div>
                                <div class="contact-info-2-content contact-info-2-content-purple">
                                    <p>tu as une question? Appelez-nous 24/7</p>
                                    <h4 class="purple social-style-1">+33 7 67 65 32 10</h4>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-cursor icons"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>adress</p>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-envelope-open "></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>serviceclient@gachi.fr</p>
                                    <a href="https://www.facebook.com/lapostesn/"><i class="bi bi-facebook social"></i></a>
                                    <a href="https://www.linkedin.com/company/lapostesn/posts/?feedView=all"><i class="bi bi-linkedin social"></i></a>
                                    <a href="https://www.instagram.com/laposte_senegal/"><i class="bi bi-instagram social"></i></a>
                                    <a href="https://twitter.com/lapostesn?lang=fr"><i class="bi bi-twitter social"></i></a>
                                    <a href="https://www.youtube.com/channel/UC6ssqxbVPXV_XbtQJPbv27w"><i class="bi bi-youtube social"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-10 pb-10 bg-mody">
        <div class="container">
        <div class="copyright copyright-center">
            <p class="text-white text-center" style="font-family: 'Inknut Antiqua', serif;">Copyright © 2023 <strong>Tous droits réservés</strong> | <a href="#"><span class="text-white">Gachi AgroBusiness</span></a>.</p>
        </div>
        </div>
    </div>
</footer>