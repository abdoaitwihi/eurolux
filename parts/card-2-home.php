<?php 
$data = [];
if ( $args['data'] ) {
    $data  =  $args['data'];
}
?>


    <div class="card2-outer">
        <div class="card2">
            <img src="<?php echo $data['image'] ?>" alt="" class="bg-image" />
            <div class="content">
                <h2><?php echo $data['text'] ?></h2>
                <a href="<?php echo $data['url'] ?>" class="primary-button px-5 d-inline-block">DÉCOUVRIR</a>
            </div>
        </div>
    </div>