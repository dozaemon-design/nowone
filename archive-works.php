<?php get_header(); ?>
		<section id='title_works'>
			<div class="inner">
				<h2 class="site_logo"><img src="<?php bloginfo('template_url'); ?>/images/common/logo_nowone.png" alt=""></h2>
			</div>
		</section>
		<section id="contents">
	<ul class="works_list">
	<?php $args = array(
		'post_type' => 'works', /* 右にスラッグを記入 */
		'posts_per_page' => 20, /* 表示する数 */
	); ?>
	<?php $my_query = new WP_Query( $args ); ?>
	<!-- ▽ ループ開始 ▽ -->
	<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<?php
					$image = get_field('works_thumb_img'); //フィールド名「img_test」の画像オブジェクトの情報を取得
					if(!empty($image)){
						$url = $image['url']; //画像のURL
						$alt = $image['alt']; //画像のalt
						$title = $image['title']; //画像のタイトル
						$size = 'works_thumb_img'; //出力サイズを変数に格納
						$imgThumb = $image['sizes'][ $size ]; //サムネイル画像のURL
				?>
					<div class="img_wrap">
						<img src="<?php echo $imgThumb; ?>" class="img_web_thumb hov_b" alt="<?php echo $alt; ?>" />
					</div>
				<?php } ?>
				<h3><?php echo the_title(); ?></h3>
			</a>
		</li>
	<?php endwhile; ?>
	<!-- △ ループ終了 △ -->
	</ul><!--/works_list-->

			<?php wp_reset_postdata(); ?>
		</section><!--contents-->

<?php get_footer(); ?>