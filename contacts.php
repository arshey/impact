<?php 

$page = "contact";

require 'inc/header.php';

?>


<div id="content" class="site-content">

    <section class="p-t110 z-index-1 section-contact">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 col-xs-12 sm-m-b60">
                    <div class="our-contact text-light">
                        <div class="ot-heading text-light">
                            <h6><span>Détails de contact</span></h6>
                            <h2 class="main-heading">Nos Contacts </h2>
                        </div>
                        <p class="m-b45">N’HÉSITEZ PAS À NOUS CONTACTER, NOUS SOMMES À VOTRE ÉCOUTE</p>
                        <div class="contact-info text-light m-b30">
                            <i class="flaticon-world"></i>
                            <div class="info-text">
                                <h6>Notre Adresse</h6>
                                <p>Abidjan , Cote d'ivoire, Cocody </p>
                            </div>
                        </div>
                        <div class="contact-info text-light m-b30">
                            <i class="flaticon-note"></i>
                            <div class="info-text">
                                <h6>Notre mail:</h6>
                                <p><a href="mailto:onum_company@mail.com">oinfos@impactafric.com</a></p>
                            </div>
                        </div>
                        <div class="contact-info text-light">
                            <i class="flaticon-viber"></i>
                            <div class="info-text">
                                <h6>Notre Téléphone</h6>
                                <p><a href="tel:800-456-478-23">+225 20 39 80 70 / +225 07 48 99 79 45</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 align-self-center">
                    <div class="form-contact">
                        <div class="ot-heading">
                            <h6><span>Écrivez nous</span></h6>
                            <h2 class="main-heading">Prêt à vous lancer?</h2>
                        </div>
                        <form action="" class="wpcf7-form" method="POST">
                            <p>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" id="name" class="wpcf7-form-control wpcf7-text"
                                        placeholder="Votre nom *" required="">
                                </span>
                            </p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" id="email"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="Votre E-mail *"
                                        required="">
                                </span>
                            </p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea type="text" name="message" id="message"
                                        class="wpcf7-form-control wpcf7-textarea" placeholder="Message..."
                                        required=""></textarea>
                                </span>
                            </p>
                            <p>
                                <button type="submit" class="octf-btn octf-btn-primary octf-btn-icon">Envoyez
                                    votre message <i class="flaticon-right-arrow-1"></i></button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="map">
            <iframe
                src=""
                width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </section>
</div>


<?php 

require 'inc/footer.php';

?>