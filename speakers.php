<?php $args = array(
					'post_type' => 	'People',
					'orderby' 	=> 	'title',
					'order'		=>	'ASC',
					);
	
	$my_query = new WP_Query($args);

					 ?>



<!-- Speaker Snippet -->
<div class="col-md-12">
<?php if ($my_query->have_posts()) : ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<!-- loop of speakers -->
		<div class="media">
			<div class="media-left">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_field('photo'); ?>" alt="<?php the_title( ); ?>" class="media-object thumbnail" width="72">
				</a>
			</div>
			<div class="media-body">
				<h3 class="media-heading"><?php the_title(); ?> <small><a href="http://www.twitter.com/<?php the_field('twitter_handle') ?>"><?php the_field('twitter_handle') ?></a> <?php the_field('title') ?>, <?php the_field('organization') ?></small></h3>
				<!-- removed sessions for now, get code from test-people.php -->
			</div>
		</div>
		<!-- end speaker entry -->
		<hr>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>



