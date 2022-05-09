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
        <?php 
            $sliderImages = [
                "http://localhost/eurolux-latest/wp-content/uploads/2022/05/bg-home.png",
                "http://localhost/eurolux-latest/wp-content/uploads/2022/05/bg-home.png",
                "http://localhost/eurolux-latest/wp-content/uploads/2022/05/bg-home.png"
            ];
            get_template_part( 'parts/slider-images' , '' , [ 'images' => $sliderImages] );
        ?>
        <!-- end of banner -->
        <!-- section 1 -->
        <?php 
          get_template_part('parts/home-particular')
        ?> 
        <!-- end of section 1 -->
        <!-- section 2  -->
        <?php 
          get_template_part('parts/home-pro')
        ?> 
        <!-- end of section 2 -->
        <!-- section 3 -->
        <?php 
          get_template_part('parts/quote-request')
        ?> 
        <!-- end of section 3 -->
<?php
get_footer();
?> 
