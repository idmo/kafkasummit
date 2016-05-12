<?php $args = array(
					'post_type' => 	'sessions',
					'orderby' 	=> 	'title',
					'order'		=>	'ASC',
					
					);
	
	$my_query = new WP_Query($args);

					 ?>



<!-- Speaker Snippet -->
<div class="col-md-12">
<?php if ($my_query->have_posts()) : ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<!-- loop of sessions -->
		<h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
		<?php the_excerpt(); ?>
		<a href="<?php the_field('video_and_slides') ?>">View video and slides</a>
		
					<?php $session_speakers = get_field('speaker') ?>
					
					<h3>Speakers</h3>
					<?php foreach ($session_speakers as $post) : ?>
						<p><?php the_title( ); ?></p>
					<?php endforeach ?>

		<!-- end session entry entry -->
		<hr>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>



