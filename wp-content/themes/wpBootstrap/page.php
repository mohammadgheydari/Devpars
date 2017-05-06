<?php get_header(); ?>
    <div class="body-content">

    <div class="container">
        <div class="row">

            <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-10">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail() ?>
                        <?php endif; ?>
                        <h3>
                            <?php the_title() ?>
                        </h3>

                        <?php the_content() ?>


                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Page Available') ?></p>
            <?php endif; ?>
            <div class="col-xs-12 col-sm-2">
                <?php if (is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>


    </div>



<?php get_footer(); ?>