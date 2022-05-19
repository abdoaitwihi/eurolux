<?php
/* Template Name: about us */

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


<!-- page title -->
<div class="container text-center">
    <h1 class="section-title d-inline-block mx-auto my-3">À propos de nous</h1>
</div>
<!-- end of page title -->
<!-- banner -->
<?php 
    get_template_part( 'parts/slider-images' , '' , [ 'images' => $sliderImages] );      
?> 

 <!-- section 1 -->
 <div class="container mt-3">
            <div class="page-content">
                <?php echo get_field('content_1') ?> 
            </div>
        </div>
        <!-- end of section 1 -->
        <!-- section 2  -->

        <div class="container bg-1">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img src="https://dev.eurolux.ma/wp-content/uploads/2022/05/8.png" alt="" class="w-100 d-none d-md-block h-100 img-fluid" />
                </div>
                <div class="col-md-6 my-auto content-2">
                    <div class="p-5">
                    <?php echo get_field('content_2') ?> 
                    </div>
                </div>
            </div>
        </div>
        <!-- end of section 2 -->

<?php 
    get_template_part( 'parts/work-images' , '' , [ 'images' => $workImages] );      
?> 


<?php 
    get_template_part( 'parts/quote-request');      
?> 

<?php
get_footer();
?>
