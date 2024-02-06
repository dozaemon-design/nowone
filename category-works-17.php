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

1717171717
<section id="contents" class="detail clearfix">
		<?php
$cat_id = get_queried_object()->cat_ID;
$post_id = 'category_'.$cat_id; 
$catimg = get_field('works',$post_id);
?>
<h2><img src="<?php the_field('text',$post_id); ?>" alt=""><?php single_cat_title(); ?></h2>
<div><?php the_field('works',$post_id); ?></div>
		</section><!-- contents -->
<?php get_footer(); ?>
