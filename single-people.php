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
			<?php if( get_field('linkedin_profile')): ?>
				<a href="https://www.linkedin.com/in/<?php the_field('linkedin_profile') ?>"><i class="fa fa-linkedin-square fa-lg"></i></a> 
			<?php endif; ?>
			<?php if( get_field('twitter_handle')): ?>
				<a href="http://www.twitter.com/<?php the_field('twitter_handle') ?>"><?php the_field('twitter_handle') ?></a>
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<img class="img-responsive pull-right thumbnail" src="<?php the_field('photo') ?>" alt="<?php the_field('title') ?>"> 
		</div>
	</div>
</div>




<?php get_footer(); ?>


