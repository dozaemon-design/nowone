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
<ul class="category_list">
<?php
	// 親カテゴリーのものだけを一覧で取得
	$args = array(
		'parent' => 1,
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories( $args );
?>
カテゴリー
<?php foreach( $categories as $category ) : ?>
  <li>
    <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
  </li>
<?php endforeach; ?>
</ul>
<section id="contents" class="detail clearfix">

		</section><!-- contents -->
<?php get_footer(); ?>
