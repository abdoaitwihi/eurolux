<?php 
$data = [];
if ( $args['data'] ) {
    $data  =  $args['data'];
}
?>

<a href="<?php echo $data['url'] ?> ">
    <div class="card1">
        <img src="<?php echo $data['image'] ?>" alt="" class="bg-image" />
        <div class="stripe">
            <div>
                <h2><?php echo $data['text'] ?></h2>
            </div>
        </div>
    </div>
</a>
