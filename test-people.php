
<!-- sessions loop -->

<?php $speaker_sessions = get_field('sessions') ?>
				<?php foreach ($speaker_sessions as $post) : ?>
					<div><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a>, <?php the_field('location'); ?></div>
				<?php endforeach ?>