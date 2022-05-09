<?php 
$args = [
    'post_type' => 'particulier',
    'post_status' => 'publish',
    'numberposts' => -1
    // 'order'    => 'ASC'
];
  $query = new WP_Query( $args );

?> 

<div class="container mt-3">
    <div class="aw-grid-3">


        <?php 

          while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'parts/simple-card' , '' , ['data' =>
            [ 'url' => get_the_permalink(), 'image' => get_field('thumbnail_image'), 'text' => get_the_title()  ]] );      
          }

        ?>
    </div>
</div>
