<?php get_header(); ?>

	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<h3><?php the_title( ); ?></h3>
			<?php the_field('title') ?>, <?php the_field('organization') ?>
		</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<?php get_template_part('clip', 'single'); ?>
			</div>
			<div class="col-md-4">
				<img class="img-responsive pull-right thumbnail" src="<?php the_field('photo') ?>" alt="<?php the_field('title') ?>"> 
			</div>
		</div>
	</div>

<div class="slide">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
		<h4>Sessions</h4>
				<?php
				$post_objects = get_field('sessions');
				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				            <span><?php the_field('location'); ?></span>				        
				    <?php endforeach; ?>
				    </ul>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;

				?>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
