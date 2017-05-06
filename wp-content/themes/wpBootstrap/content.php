<?php if(is_single()): ?>
    <div class="col-xs-12 col-sm-10">
        <h3>
            <?php the_title() ?>
        </h3>
        <p>
            <?php the_time('F j, Y g:i a'); ?>
            By
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author() ?>
            </a>
        </p>
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
        <?php endif; ?>
        <?php the_content() ?>

        <?php comments_template()?>
    </div>
<?php else: ?>
    <div class="col-xs-12 col-sm-4">
        <div class="card center z-depth-1">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail() ?>
            <?php endif; ?>
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?>
                </a>
            </h3>

            <?php the_excerpt() ?>
            <br>
            <p>
                <?php the_time('F j, Y g:i a'); ?>
                By
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author() ?>
                </a>
            </p>
            <footer>
                <a href="" class="btn btn-success">Enter</a>
            </footer>
        </div>
    </div>
<?php endif;?>
