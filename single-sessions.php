<?php get_header( ); ?>

<div class="slide">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3><?php the_title( ); ?></h3>
				<p><?php the_field('date') ?></p>
				<?php

				$post_objects = get_field('speaker');

				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				            <?php the_title(); ?>, 
				            <span><?php the_field('title'); ?> <?php the_field('organization'); ?></span>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				?>
				
				<h2>Description</h2>
				<?php get_template_part('clip', 'single'); ?>
			</div>
		</div>
	</div>
</div>


<div class="slide">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
		<h4>Speakers</h4>
		<?php
			$post_objects = get_field('speaker');
				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
						<div class="media">
						  <div class="media-left">
						    <a href="<?php the_permalink(); ?>">
						      <img class="media-object" src="<?php the_field('photo') ?>" alt="..." width="96px"> 
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						    <?php the_field('title') ?>, <?php the_field('organization') ?>
						    <?php the_excerpt(); ?>
						  </div>
						</div>						
		    	<?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;

				?>
			</div>
		</div>
	</div>
</div>



<?php get_footer( ); ?>