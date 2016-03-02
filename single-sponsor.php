<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2><a href="<?php the_field('web_address'); ?>"><?php the_title( ); ?></a></h2>
			<?php get_template_part('clip','single'); ?>
		</div>
		<div class="col-md-4">
			<img class="img-responsive pull-right" src="<?php the_field('logo') ?>" alt="<?php the_field('title') ?>"> 
		</div>
	</div>
</div>





<?php get_footer(); ?>


