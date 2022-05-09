<?php 
$args = [
    'post_type' => 'pro',
    'post_status' => 'publish',
    'numberposts' => -1
    // 'order'    => 'ASC'
];
  $query = new WP_Query( $args );

?> 




<div class="container mt-5">
    <h2 class="section-title mb-2 d-inline-block">Eurolux Pro</h2>
    <div class="row">
        <?php 

        while ( $query->have_posts() ) {
          $query->the_post();
          get_template_part( 'parts/card-2-home' , '' , ['data' =>
          [ 'url' => get_home_url(). '/pro#'.get_field('anchor'), 'image' => get_field('thumbnail_image'), 'text' => get_field('preview_text')  ]] );      
        }

        ?>
    </div>
</div>
