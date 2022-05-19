<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eurolux
 */

?>



<footer class="container-fluid px-0 py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux</h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1') );  ?>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux Particulier</h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2') );  ?>
                    </div>
                    <div class="col-md-6 col-lg-4 py-2">
                        <h3>Eurolux Pro</h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3') );  ?>
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
                        <a href="https://www.facebook.com/EuroluxMaroc-101508795795954"> <i class="fab fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/eurolux.maroc/"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.linkedin.com/company/79023345/admin/"> <i class="fab fa-linkedin"></i> </a>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>

</body>
</html>
