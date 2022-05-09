<?php
/* Template Name: pro archive */


get_header();
?>

<?php 
    $workImages = explode(',' , get_field('work_images'  , 11));
?> 

<div class="container text-center">
    <h1 class="section-title d-inline-block mx-auto my-3">Eurolux pro</h1>
</div>

<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // Your loop code
            ?> 

                <div class="container mt-5" id="<?php echo get_field('anchor') ?>" >
                    <h2 class="title2"><?php  the_title() ?> </h2>
                </div>

                <?php 
                    $sliderImages = explode(','  , get_field('slider_images'));
                    get_template_part( 'parts/slider-images' , '' , [ 'images' => $sliderImages] );
                ?>
                <div class="container mb-5">
                    <div class="page-content mt-3">
                        <?php  the_content() ?> 
                    </div>
                </div>                    


            <?php 
        endwhile;
    else :
        _e( 'Sorry, no posts were found.', 'textdomain' );
    endif;
?> 

<?php 

    get_template_part( 'parts/work-images' , '' , [ 'images' => $workImages] );      
?> 

<?php 
    get_template_part( 'parts/quote-request');      
?> 

<?php
get_footer();
?>
