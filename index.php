<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>title___here</title>

        <!-- bootstrap css -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
            integrity="sha512-F7WyTLiiiPqvu2pGumDR15med0MDkUIo5VTVyyfECR5DZmCnDhti9q5VID02ItWjq6fvDfMaBaDl2J3WdL1uxA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- font awsome cdn -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

        <!-- owl carousel  -->
        <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->

        <!-- custom css -->
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body>
        <!-- header -->
        <header class="container">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                <!-- logo -->
                <div class="text-center">
                    <img style="filter: brightness(0.5)" src="/assets/icons/logo.svg" alt="" class="logo mt-3 mb-4" />
                </div>
                <div>
                    <!-- mobile toggler -->
                    <a href="" class="menu-toggler d-md-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <!-- menu -->
            <div class="outer-menu d-none d-md-block">
                <div class="inner-menu desktop">
                    <ul>
                        <li><a href="">À propos de nous</a></li>
                        <li><a href="">Catalogues</a></li>
                        <li><a href="">Pro</a></li>
                        <li><a href="">Particulier</a></li>
                        <li><a href="">Nos réalisations</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- mobile menu -->
        <div class="d-md-none">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of menu -->
        <!-- banner -->
        <div class="home-banner container">
            <div id="carouselExampleControls" class="carousel slide my-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/images/bg-home.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/bg-home.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/bg-home.png" class="d-block w-100" alt="..." />
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
        <div class="container mt-3">
            <div class="aw-grid-3">
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="card1">
                        <img src="/assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="stripe">
                            <div>
                                <h2>Lorem, ipsum dolor.</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- end of section 1 -->
        <!-- section 2  -->
        <div class="container mt-5">
            <h2 class="section-title mb-2">Lorem ipsum dolor sit amet</h2>
            <div class="row">
                <div class="col-md-6 py-2 card2-outer">
                    <div class="card2">
                        <img src="./assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="content">
                            <h2>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h2>
                            <button class="primary-button px-5">Découvrez</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2 card2-outer">
                    <div class="card2">
                        <img src="./assets/images/bg-home.png" alt="" class="bg-image" />
                        <div class="content">
                            <h2>Lorem ipsum dolor sit. Lorem, ipsum dolor.</h2>
                            <button class="primary-button px-5">Découvrez</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 py-2 card2-outer">
                    <div class="card2">
                        <img src="./assets/images/bg-home.png" alt="" class="bg-image" />
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

        <footer class="container-fluid px-0 py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux</h3>
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Demande de devis</a></li>
                            <li><a href="">Catalogue</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux Particulier</h3>
                        <ul>
                            <li><a href="">Mobilier</a></li>
                            <li><a href="">Cuisine</a></li>
                            <li><a href="">Catalogue</a></li>
                            <li><a href="">Catalogue</a></li>
                            <li><a href="">Catalogue</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux Pro</h3>
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Demande de devis</a></li>
                            <li><a href="">Catalogue</a></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        &copy;
                        <script src="">
                            document.write(new Date().getFullYear());
                        </script>
                        Eurolux.
                    </div>
                    <div class="social-media">
                        <a href=""> <i class="fab fa-facebook"></i> </a>
                        <a href=""> <i class="fab fa-instagram"></i> </a>
                        <a href=""> <i class="fab fa-linkedin"></i> </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jquery script -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <!-- owl carsousel -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <!-- bootstrap script -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"
            integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <!-- custom js -->
        <script src="./js/main.js"></script>
    </body>
</html>
