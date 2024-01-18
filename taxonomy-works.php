<?php get_header(); ?>

		<section id="contents">
		<ul class="works_archive">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<h2 class="pickup_title"><?php the_title(); ?></h2>
						<!-- 作成年月日 -->
						<?php
						$text = get_field('works_year');
						if( $text ) { ?>
							<p><?php the_field('works_year'); ?></p>
						<?php } ?>
						<!-- 担当分野 -->
						<?php if( get_field('works_charge') ) { ?>
							<ul>
							<?php $select = get_field('works_charge');
								foreach ( (array)$select as $value ) { ?>
								<li><?php echo $value; ?></li>
							<?php } ?>
							</ul>
						<?php } ?>


					<?php the_post_thumbnail('archive_works_thumb'); ?>
					</a>
				</li>
			<?php endwhile; endif; ?>
		</ul>
こっちはタクソノミー
	</section><!--contents-->

<?php get_footer(); ?>