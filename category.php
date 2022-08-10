<?php get_header(); ?>
<main>
	<ul class="category_list">
	<?php
	$categories = get_categories('hide_empty=1&title_li=');
	if (is_array($categories)) {
		foreach($categories as $category):
			$cat_id = $category->cat_ID;
			$cat_title = $category->cat_name;
			$cat_url = get_category_link($cat_id);
			echo "<li";
			if (is_category($cat_id)) {
				echo ' class="active"';
			}
			echo '><a href="'.$cat_url.'" title="'.$cat_title.'">'.$cat_title.'</a></li>';
		endforeach;
	}
?>
	</ul>



<?php if( in_category('movie') ): ?>
<ul class="music_list">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <li>
      <?php
        $youtube = get_field('youtube_url');
        if( $youtube ) { ?>
       <?php the_field('youtube_url'); ?>
			<?php } ?>
  </li>
<?php endwhile; endif; ?>
</ul>

<?php elseif( in_category('music') ): ?>
	<ul class="music_list">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <li>
		<a href="<?php the_field('music_link'); ?>">
      <?php
        $music_thumb = get_field('music_thumb');
        if( $music_thumb ) { ?>
       <img src="<?php the_field('music_thumb'); ?>" alt="">
			<?php } ?>
		</a>
	</li>
<?php endwhile; endif; ?>
</ul>
<?php endif; ?>



</main>

<?php get_footer(); ?>