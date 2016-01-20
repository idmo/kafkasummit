<?php get_header(); ?>

<div class="container">
	<div class="row">
	<div class="col-md-12">
		<h3><?php the_title( ); ?></h3>
		<p class="position">
			<strong><?php the_field('title')?>, <?php the_field('organization') ?></strong>
		</p>
		
	</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?php get_template_part('clip', 'single'); ?>
			<a href="http://www.twitter.com/<?php the_field('twitter_handle') ?>"><i class="icon-twitter"></i> <?php the_field('twitter_handle') ?></a>
		</div>
		<div class="col-md-4">
			<img class="img-responsive pull-right thumbnail" src="<?php the_field('photo') ?>" alt="<?php the_field('title') ?>"> 
		</div>
	</div>
</div>




<?php get_footer(); ?>


