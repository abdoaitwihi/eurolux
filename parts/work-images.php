
<?php 
$images =  [];
if ( $args['images'] ) {
    $images  =  $args['images'];
}

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
    <h2 class="section-title d-inline-block mx-auto mb-3 mt-5">Nos réalisations</h2>
</div>
<div class="container">
    <div id="lightgallery" class="mygallery">
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