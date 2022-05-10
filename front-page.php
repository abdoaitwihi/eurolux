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
         $sliderImages = explode(',' , get_field('slider_images' ));
         $title = get_the_content();
        ?>
        
        <?php 
        $images = array_map('trim', $sliderImages );

        ?> 

        <div class="carousel-banner container home-page-carousel-banner">
            <div id="carouselExampleControls" class="carousel slide my-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $index = 0; foreach ($images as $image) { ?> 
                    <div class="carousel-item <?php echo $index == 0 ? 'active' : '' ?> home-page-carousel"> 
                        <img src="<?php echo $image ; ?> " class="d-block w-100" alt="..." />
                        <div class="carousel-caption ">
                          <?php echo $title; ?> 
                        </div>
                    </div>
                    <?php $index++; } ?> 
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
