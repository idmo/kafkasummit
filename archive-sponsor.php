<?php get_header( ); ?>
<?php 

	$args = array(
					'post_type' => 	'Sponsor',
					);
	
	$my_query = new WP_Query($args);

					 ?>


<div class="container">
<h1>Sponsors</h1>
<div class="row">
<?php if ($my_query->have_posts()) : ?>
	<?php $count = (int)0; ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		
<?php
	//Set the span to our default span12
	$span = 'col-md-3';
	//If the count is 2 or 3 change span to be span3. You can put whatever conditions you want here
	if($count == 2 || $count == 3){
   	$span = 'col-md-3';
	}
	//If the count is equal to 3 or higher (which it should not be) then reset the count to 0
	if($count >= 3){
   	$count = 0;
	}
	//If its not 3 or higher, increase the count
	else{
   	$count++;
	}
?>

	<div class="<?php echo $span; ?> logo">
	<a href="<?php the_permalink(); ?>">
		<img src="<?php the_field('logo') ?>" alt="<?php the_title( ); ?>" class="img-responsive center-block">
	</a>
	</div>


		
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>

<hr>

<hr>

<div class="row">
	<div class="col-md-6">
		<h3>Community Partner</h3>
		<a href="http://www.apache.org/">
		<img src="<?php echo get_template_directory_uri() ?>/images/apache-foundation.png" alt="Apache Software Foundation" class="img-responsive center-block">
		</a>
	</div>
	<div class="col-md-6">
		<h3>Media Partner</h3>
		<a href="http://www.oreilly.com/">
		<img src="<?php echo get_template_directory_uri() ?>/images/oreilly.png" alt="O'Reilly" class="img-responsive center-block">
		</a>		
	</div>
</div>

<hr>
<div class="row">
	<div class="col-md-12"><h3>Organized By</h3></div>
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<img src="<?php echo get_template_directory_uri() ?>/images/confluent.png" alt="Confluent" class="img-responsive">
	</div>
</div>
</div>




<?php get_footer( ); ?>