<?php if (is_page()): the_post() ?>
	<?php the_content(); ?> 
<?php else: ?>
	<?php if (have_posts()):
		while (have_posts()) : the_post() ?>
			<?php (is_single()) ? the_content() : the_excerpt() ?>
		<?php endwhile; ?>
	<?php else: ?>
		<p>Nothing matches your query.</p>
	<?php  endif; ?>
<?php  endif; ?>
