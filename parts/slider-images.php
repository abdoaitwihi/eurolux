
<?php 
$images =  [];
if ( $args['images'] ) {
    $images  =  $args['images'];
}

$images = array_map('trim', $images );

?> 

<div class="carousel-banner container">
    <div id="carouselExampleControls" class="carousel slide my-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $index = 0; foreach ($images as $image) { ?> 
            <div class="carousel-item <?php echo $index == 0 ? 'active' : '' ?> "> 
                <img src="<?php echo $image ; ?> " class="d-block w-100" alt="..." />
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