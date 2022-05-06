<?php
/**
 * The home page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eurolux
 */

get_header();
?>
         <!-- banner -->
         <div class="home-banner container">
            <div id="carouselExampleControls" class="carousel slide my-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- end of banner -->
        <!-- section 1 -->
        <?php 
          get_template_part('parts/home-particular')
        ?> 
        <!-- end of section 1 -->
        <!-- section 2  -->
        <div class="container mt-5">
            <h2 class="section-title mb-2">Lorem ipsum dolor sit amet</h2>
            <div class="row">
                <div class="col-md-6 py-2 card2-outer">
                    <div class="card2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="content">
                            <h2>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h2>
                            <button class="primary-button px-5">Découvrez</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2 card2-outer">
                    <div class="card2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="content">
                            <h2>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h2>
                            <button class="primary-button px-5">Découvrez</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 py-2 card2-outer">
                    <div class="card2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="content">
                            <h2>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h2>
                            <button class="primary-button px-5">Découvrez</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of section 2 -->
        <!-- section 3 -->
        <div class="container-fluid px-0 contact-section mt-5 bg-1">
            <div class="row">
                <div class="col-md-6 left-contact-side"></div>
                <div class="col-md-6 py-5">
                    <h2 class="text-center mb-4">Demande de devis</h2>
                    <form action="" class="primary-form px-3 px-md-5">
                        <div class="row">
                            <div class="col-md-6 py-2">
                                <label for="">Nom</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="">Prénom</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="">Telephone</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="">Email</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="">Adresse</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="">Ville</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-12 py-2">
                                <label for="">Objet</label>
                                <input type="text" />
                            </div>
                            <div class="col-md-12 py-2">
                                <label for="">Votre demande</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="primary-button px-5">Envoyez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of section 3 -->
<?php
get_footer();
?> 
