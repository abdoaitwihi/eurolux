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

<?php 
// $sliderImages = str_replace(" " , "" , get_field('slider_images'));
$sliderImages = explode(','  , get_field('slider_images'));
$content = get_the_content();
// $workImages = str_replace(" " , "" , get_field('work_images'));
$workImages = explode(',' , get_field('work_images'));
// $workImages = explode(',' , $workImages);

?> 

<div class="container text-center">
    <h1 class="section-title d-inline-block mx-auto my-3">Eurolux Particulier</h1>
</div>

<!-- list -->
<div class="container text-center">
    <?php wp_nav_menu( array( 'theme_location' => 'particular-page-menu' , 'menu_class' => 'clean-list cat-list mb-3') );  ?>
</div>
<!-- end of list -->

<!-- end of page title -->
<!-- banner -->
<?php 
    get_template_part( 'parts/slider-images' , '' , [ 'images' => $sliderImages] );      
?> 
<!-- end of banner -->
<!-- section 1 -->
<div class="container mt-3">
    <div class="page-content">
        <?php the_content() ?> 
    </div>
</div>
<!-- end of section 1 -->

<?php 
    get_template_part( 'parts/work-images' , '' , [ 'images' => $workImages] );      
?> 


<?php 
    get_template_part( 'parts/quote-request');      
?> 

<?php
get_footer();
?>
