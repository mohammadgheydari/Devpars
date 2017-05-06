<?php get_header(); ?>
    <div class="body-content">

    <div class="container">
        <div class="row">

            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format());?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Recent Post Available') ?></p>
            <?php endif; ?>

            <div class="col-xs-12 col-sm-2">
                <?php if (is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>


    </div>


<?php get_footer(); ?>