<?php
/* Template Name: pro archive */


get_header();
?>

<div class="container text-center">
    <h1 class="section-title d-inline-block mx-auto my-3">Nos réalisations</h1>
</div>
<div class="container mt-3">
    <div class="aw-grid-3">
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    // Your loop code
                    ?>
                    
                        
                    <?php 

                        get_template_part( 'parts/simple-card' , '' , ['data' =>
                        [ 'url' => get_the_permalink(), 'image' => get_field('thumbnail_image')['url'], 'text' => get_the_title()  ]] );      


                    ?>

                    <?php 
                endwhile;
            else :
                _e( 'Sorry, no posts were found.', 'textdomain' );
            endif;
        ?> 
    </div>
</div>




<?php
get_footer();
?>
