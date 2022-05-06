<?php 
$items = get_posts([
    'post_type' => 'particulier',
    'post_status' => 'publish',
    'numberposts' => -1
    // 'order'    => 'ASC'
  ]);
?> 

<div class="container mt-3">
    <div class="aw-grid-3">


        <?php 
        foreach ($items as $key => $value) {
            print_r( $value);
              get_template_part( 'parts/simple-card' , '' , ['data' =>
        [ 'url' => 'url', 'image' => 'image', 'text' => 'text' ]] ); 
        
         }
        ?>
    </div>
</div>
