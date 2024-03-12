<?php get_header('works'); ?>
<!-- パラメーター出力用 -->
<?php print_r($wp_query); ?>
<!-- パラメーター出力用 -->
		<section id='title_works'>
			<div class="inner">
				<h2 class="site_logo"><img src="<?php bloginfo('template_url'); ?>/images/works/logo_works.svg" alt=""></h2>
			</div>
		</section>
<!--head-->
		<section id="contents" class="detail clearfix">
		<ul class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
			bcn_display();
			}?>
		</ul>

		<!-- work_category_list -->

<ul>
	<li>ああああ</li>
	<li>いいい</li>
</ul>
<?php $field = get_field_object("works");
var_dump($field);?>



<!-------------- main contents -------------->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<ul class="works_detail">
				<li class="works_main_img">
					<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'works_main_img', true),'works_main_img'); ?>
				</li>
				<li class="works_info">
					<!-- 作成年月日 -->
					<?php
					$text = get_field('works_year');
					if( $text ) { ?>
						<p class="date"><?php the_field('works_year'); ?></p>
					<?php } ?>
					<h1><?php the_title(); ?></h1>
					<dl>

					<!-- 担当分野 -->
						<dt>Field</dt>
						<dd>
							<?php $field = get_field('works_charge'); if ($field): ?>
								<ul class="works_charge">
								<?php foreach( $field as $value ): ?>
									<li class="<?php echo $value; ?>"><?php echo $value; ?></li>
								<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</dd>

						<!-- スキル -->
						<dt>SKILL</dt>
						<dd class="works_skill">
							<?php $skill = get_field('works_skill'); if ($skill): ?>
							<ul class="works_skill">
							<?php foreach( $skill as $value ): ?>
								<li class="<?php echo $value; ?>"><?php echo $value; ?></li>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</dd>

						<!-- 作業内容・担当説明 -->
						<dt>MESSAGE</dt>
						<dd>
							<?php
								$text = get_field('works_message');
								if( $text ) { ?>
								<p class="date"><?php the_field('works_message'); ?></p>
							<?php } ?>
						</dd>

						<!-- サイトURL -->
						<?php if(get_field('works_url')): ?>
							<dt>SITE URL</dt>
							<dd class="site_url">
								<a href="<?php the_field('works_url'); ?>" target="_blank"><?php the_field('works_url'); ?></a>
							</dd>
						<?php endif; ?>
					</dl>
				</li>
			</ul>
			<div class="inner">
				<ul class="works_photos">

<!---------------- Thumbnail_1 ---------------->
					<li class="box" >
						<?php if( get_field('works_sub_text_1') ) { ?>
							<h3><?php the_field('works_sub_text_1'); ?></h3>
						<?php } ?>
						<div class="box_inner">
						<?php if( get_field('works_sub_img_1') ) { ?>
							<?php
							$image = get_field('works_sub_img_1'); //フィールド名「img_test」の画像オブジェクトの情報を取得
							if(!empty($image)){
								$url = $image['url']; //画像のURL
								$alt = $image['alt']; //画像のalt
								$title = $image['title']; //画像のタイトル
								$size = 'works_sub_img';
								$size2 = 'works_popup_img'; //出力サイズを変数に格納
								$imgThumb = $image['sizes'][ $size ];
								$imgThumbFull = $image['sizes'][ $size2 ]; //サムネイル画像のURL
							?>
							<a href="<?php echo $imgThumbFull; ?>" class="popup">
							<div class="img_wrap">
								<img src="<?php echo $imgThumb; ?>" class="img_app_thumb hov_b" alt="<?php echo $alt; ?>" />
							</div>
							</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
<!---------------- Thumbnail_2 ---------------->
				<?php if( get_field('works_sub_img_2') ) { ?>
					<li class="box box">
						<?php if( get_field('works_sub_text_2') ) { ?>
							<h3><?php the_field('works_sub_text_2'); ?></h3>
						<?php } ?>
						<div class="box_inner">
							<?php
							$image = get_field('works_sub_img_2'); //フィールド名「img_test」の画像オブジェクトの情報を取得
							if(!empty($image)){
								$url = $image['url']; //画像のURL
								$alt = $image['alt']; //画像のalt
								$title = $image['title']; //画像のタイトル
								$size = 'works_sub_img';
								$size2 = 'works_popup_img'; //出力サイズを変数に格納
								$imgThumb = $image['sizes'][ $size ];
								$imgThumbFull = $image['sizes'][ $size2 ]; //ポップアップサムネイル画像のURL
							?>
							<a href="<?php echo $imgThumbFull; ?>" class="popup">
							<div class="img_wrap">
								<img src="<?php echo $imgThumb; ?>" class="img_app_thumb hov_b" alt="<?php echo $alt; ?>" />
							</div>
							</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
<!---------------- Thumbnail_3 ---------------->
				<?php if( get_field('works_sub_img_3') ) { ?>
					<li class="box box">
						<?php if( get_field('works_sub_text_3') ) { ?>
							<h3><?php the_field('works_sub_text_3'); ?></h3>
						<?php } ?>
						<div class="box_inner">
							<?php
							$image = get_field('works_sub_img_3'); //フィールド名「img_test」の画像オブジェクトの情報を取得
							if(!empty($image)){
								$url = $image['url']; //画像のURL
								$alt = $image['alt']; //画像のalt
								$title = $image['title']; //画像のタイトル
								$size = 'works_sub_img';
								$size2 = 'works_popup_img'; //出力サイズを変数に格納
								$imgThumb = $image['sizes'][ $size ];
								$imgThumbFull = $image['sizes'][ $size2 ]; //サムネイル画像のURL
							?>
							<a href="<?php echo $imgThumbFull; ?>" class="popup">
							<div class="img_wrap">
								<img src="<?php echo $imgThumb; ?>" class="img_app_thumb hov_b" alt="<?php echo $alt; ?>" />
							</div>
							</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
<!---------------- Thumbnail_4 ---------------->
				<?php if( get_field('works_sub_img_4') ) { ?>
					<li class="box box">
						<?php if( get_field('works_sub_text_4') ) { ?>
							<h3><?php the_field('works_sub_text_4'); ?></h3>
						<?php } ?>
						<div class="box_inner">
							<?php
							$image = get_field('works_sub_img_4'); //フィールド名「img_test」の画像オブジェクトの情報を取得
							if(!empty($image)){
								$url = $image['url']; //画像のURL
								$alt = $image['alt']; //画像のalt
								$title = $image['title']; //画像のタイトル
								$size = 'works_sub_img';
								$size2 = 'works_popup_img'; //出力サイズを変数に格納
								$imgThumb = $image['sizes'][ $size ];
								$imgThumbFull = $image['sizes'][ $size2 ]; //サムネイル画像のURL
							?>
							<a href="<?php echo $imgThumbFull; ?>" class="popup">
							<div class="img_wrap">
								<img src="<?php echo $imgThumb; ?>" class="img_app_thumb hov_b" alt="<?php echo $alt; ?>" />
							</div>
							</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
<!---------------- Thumbnail_5 ---------------->
				<?php if( get_field('works_sub_img_5') ) { ?>
					<li class="box box">
						<?php if( get_field('works_sub_text_5') ) { ?>
							<h3><?php the_field('works_sub_text_5'); ?></h3>
						<?php } ?>
						<div class="box_inner">
							<?php
							$image = get_field('works_sub_img_5'); //フィールド名「img_test」の画像オブジェクトの情報を取得
							if(!empty($image)){
								$url = $image['url']; //画像のURL
								$alt = $image['alt']; //画像のalt
								$title = $image['title']; //画像のタイトル
								$size = 'works_sub_img';
								$size2 = 'works_popup_img'; //出力サイズを変数に格納
								$imgThumb = $image['sizes'][ $size ];
								$imgThumbFull = $image['sizes'][ $size2 ]; //サムネイル画像のURL
							?>
							<a href="<?php echo $imgThumbFull; ?>" class="popup">
							<div class="img_wrap">
								<img src="<?php echo $imgThumb; ?>" class="img_app_thumb hov_b" alt="<?php echo $alt; ?>" />
							</div>
							</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>
			<?php endwhile; endif; ?>
		</section><!-- contents -->
<?php get_footer(); ?>
