<hr>
			<h4>Sessions</h4>
				<?php
				$post_objects = get_field('sessions');
				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				            <p><strong>Location</strong> <?php the_field('location'); ?></p>
				            <?php the_excerpt(); ?>				            
				    <?php endforeach; ?>
				    </ul>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;

				?>