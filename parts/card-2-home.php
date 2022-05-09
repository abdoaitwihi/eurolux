<?php 
$data = [];
if ( $args['data'] ) {
    $data  =  $args['data'];
}
?>


    <div class="col-md-6 py-2 card2-outer">
        <div class="card2">
            <img src="<?php echo $data['image'] ?>" alt="" class="bg-image" />
            <div class="content">
                <h2><?php echo $data['text'] ?></h2>
                <a href="<?php echo $data['url'] ?>" class="primary-button px-5 d-inline-block">Découvrez</a>
            </div>
        </div>
    </div>