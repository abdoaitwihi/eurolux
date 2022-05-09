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

<?php 
$images = explode(','  , get_field('images'));
$title = get_the_title();

?> 

<div class="container text-center">
      <h1 class="section-title d-inline-block mx-auto my-3 title-with-span">
        Nos realisations
        <span> <?php  echo $title; ?>  </span>
      </h1>
</div>

<div class="container">
      <div id="lightgallery" class="mygallery-1">
      <?php $index = 0; foreach ($images as $image) { ?>  
            <a class="grid-item item-<?php echo $index+1 ?>" href="<?php echo $image ?>">
                <img alt="" src="<?php echo $image ?>" />
            </a>
        <?php $index++; } ?> 
      </div>
    </div>

<?php
get_footer();
?>

<script type="text/javascript">
    lightGallery(document.getElementById("lightgallery"), {});
</script>