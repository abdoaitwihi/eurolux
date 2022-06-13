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
$images =  $workImages;

$images = array_map('trim', $images );
// $newImages = [];

// $url = 'http://localhost/eurolux-latest';
// foreach ($images as $image) {
//     $image = str_replace($url , '', $image );
//     array_push($newImages , $image);
// }
// print_r($newImages);

?> 



<div class="container text-center">
    <h2 class="section-title d-inline-block mx-auto mb-3 mt-5">Nos partenaires</h2>
</div>
<div class="container">
    <div id="lightgallery" class=" simple_gallery">
         <?php $index = 0; foreach ($images as $image) { ?> 
            <a class="grid-item item-<?php echo $index+1 ?>" href="<?php echo $image ?>">
                <img alt="" src="<?php echo $image ?>" />
            </a>
        <?php $index++; } ?> 
    </div>
</div>


<script type="text/javascript">
    lightGallery(document.getElementById("lightgallery"), {});
</script>


<?php 
    get_template_part( 'parts/quote-request');      
?> 

<?php
get_footer();
?>
