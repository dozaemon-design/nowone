<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo ('charset'); ?>" />

<?php if(is_home()): ?>
<meta name="Description" content="ここはウェブデザイナーnowone.jpのポートフォリオサイトです。" />
<?php elseif ( is_single() ): ?>
<meta name="Description" content="<?php echo get_post_meta($post->ID , 'description' ,true); ?>" />
<?php else: ?>
<meta name="Description" content="ここはウェブデザイナーnowone.jpのポートフォリオサイトです。" />
<?php endif; ?>

<?php if(is_home()): ?>
<meta name="keywords" content="webdesigner,ウェブデザイナー,music" />
<?php elseif ( is_single() ): ?>
<meta name="keywords" content="<?php $posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo $tag->name . ',';}}?>" />
<?php else: ?>
<meta name="keywords" content="webdesigner,ウェブデザイナー,music" />
<?php endif; ?>


<?php if(is_home()): ?>
<title><?php bloginfo('name'); ?></title>
<?php else: ?>
<title><?php the_title(); ?></title>
<?php endif; ?>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS_FEED" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="ATOM_FEED" href="<?php bloginfo('atom_url'); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery-3.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/augment.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/chart.js" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/lib/html5shiv.js"></script><![endif]-->

<!-- ▼分析用▼ -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39922525-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-39922525-3');
</script>
<!-- ▲分析用▲ -->

<!-- [head]内や、[body]の終了直前などに配置 -->
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if(is_home()): ?>
<meta property="og:site_name" content="Nowone.jp" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php bloginfo('template_url'); ?>" />
<meta property="og:title" content="Nowone.jp" />
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/common/sns_image.jpg" />
<meta property="og:description" content="ここはウェブデザイナーnowone.jpのポートフォリオサイトです。" />
<?php else: ?>
<meta property="og:site_name" content="Nowone.jp" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php the_permalink() ?>" />
<meta property="og:title" content="<?php the_title(); ?> | Daiichi" />
<meta property="og:image" content="<?php get_featured_image_url(); ?>" />
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
<?php endif; ?>
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<?php
	if ( is_front_page() ) {
	$body_id = 'home';
	} else if ( is_single() || is_page() ) {
	$body_id = ''.$post->post_name.'';
	} else if ( is_category() ) {
	$category = get_the_category();
	$body_id = 'category_'.$category[0]->category_nicename.'';
	} else if ( is_tax() ) {
		// $taxonomy = get_the_taxonomies();
		// $body_id = 'taxonomy_'.$taxonomy[0]->taxonomy_nicename.'';
		$body_id = ' works ';
	}
?>

<body <?php echo ( $body_id ) ? ' id="'.$body_id.'"' : ''; ?> >
<!-- <header>
	<nav id="gnav">
	<ul>
		<li>
			<div class="menu_wrap">
				<h3>
					<a href="<?php echo esc_url( home_url('/') ); ?>service/">サービス<br><span>service</span></a>
				</h3>
				<ol>
				<?php
					$categories = get_terms( 'category', array(
						'orderby'    => 'count',
						'hide_empty' => 0,
						'child_of' => 2,
					) );
					foreach($categories as $value):
					?>
					<li class="<?php echo $value->slug; ?>"><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
				<?php endforeach; ?>
					<li><a href="<?php echo home_url(); ?>/new_project/">新規プロジェクト</a></li>
				</ol>
			</div>
		</li>
		<li>
			<div class="menu_wrap">
				<h3><a href="<?php echo esc_url( home_url('/') ); ?>news/">ニュース<br><span>news</span></a></h3>
			</div>
		</li>
		<li>
			<div class="menu_wrap">
				<h3><a href="<?php echo home_url(); ?>/company/">会社情報<br><span>company</span></a></h3>
			</div>
		</li>
		<li>
			<div class="menu_wrap">
				<h3><a href="<?php echo esc_url( home_url('/') ); ?>staff/">社員紹介<br><span>staff</span></a></h3>
				<ol>
					<?php
					$categories = get_terms( 'category', array(
						'orderby'    => 'count',
						'hide_empty' => 0,
						'child_of' => 4,
					) );
					foreach($categories as $value):
					?>
					<li class="<?php echo $value->slug; ?>"><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</li>
		<li>
			<div class="menu_wrap">
				<h3><a href="<?php echo esc_url( home_url('/') ); ?>contact/">問い合わせ<br><span>contact</span></a></h3>
			</div>
		</li>
		<li>
			<div class="menu_wrap">
				<h3>
					<a href="<?php echo esc_url( home_url('/') ); ?>recruit/">採用情報<br><span>recruit</span></a>
				</h3>
			</div>
		</li>
	</ul>
	</nav>
	<div id="nav_toggle" class="close">
		<span></span>
		<span></span>
		<span></span>
		<p class="menu_text">menu</p>
	</div>
</header> -->