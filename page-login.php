<?php get_header('works'); ?>
    <section id='title_works'>
        <div class="inner">
            <h2 class="site_logo"><img src="<?php bloginfo('template_url'); ?>/images/common/logo_nowone.png" alt=""></h2>
        </div>
    </section>
    <main id="contact">
        <?php the_post();?>
        <?php echo the_content();?>
    </main><!-- #main -->
<?php get_footer(); ?>