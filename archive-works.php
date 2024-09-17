<?php get_header('works'); ?>
<!-- パラメーター出力用 -->
<?/*php print_r($wp_query);*/ ?>
<!-- パラメーター出力用 -->
		<section id='title_works'>
			<div class="inner">
				<h2 class="site_logo"><img src="<?php bloginfo('template_url'); ?>/images/works/logo_works.svg" alt=""></h2>
			</div>
		</section>
<!--head-->
		<section id="contents" class="detail">
        <!-- <h2 class="category-heading"><?php single_cat_title(); ?>カテゴリー一覧</h2> -->
        <ul class="category_works">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="works_category_list btn">
								<a href="<?php the_permalink(); ?>">
										<!-- タイトル -->
												<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'works_main_img', true),'works_main_img'); ?>
												<h2 class="works_title">
												<!-- 日付 -->
												<?php the_title(); ?>
												</h2>
								</a>
							</li>
								<?php endwhile; ?>
					<?php endif;
					wp_reset_postdata(); ?>
        </ul>
		</section><!-- contents -->
<?php get_footer(); ?>
