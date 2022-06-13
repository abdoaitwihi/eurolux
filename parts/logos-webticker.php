
<?php 


$logos = [
];

for ($i=1; $i <30 ; $i++) { 
    # code...
    array_push($logos , "logo".$i.".png");
}
?>


<ul id="webTicker" class="web-ticker d-flex">
<?php foreach ($logos as $logo) { ?>
 	<li><img src="<?php echo get_template_directory_uri()."/assets/images/logo-marques/".$logo ?>" alt=""></li>
     <?php  } ?>

 </ul>

 <script>
    $('#webTicker').webTicker({
        height: '180px',
         hoverpause :true,
         startEmpty : false
    });
 </script>