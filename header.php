<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eurolux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- header -->
  <header class="container">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                <!-- logo -->
                <div class="text-center">
                    <a href="<?php echo get_home_url() ?> ">
                        <img style="filter: brightness(0.5)" src="<?php echo get_template_directory_uri() ?>/assets/icons/logo.svg" alt="" class="logo mt-3 mb-4" />
                    </a>
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
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );  ?>
                </div>
            </div>
        </header>
        <!-- mobile menu -->
        <div class="d-md-none">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
