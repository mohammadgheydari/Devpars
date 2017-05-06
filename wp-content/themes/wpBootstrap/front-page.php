<?php get_header(); ?>
    <div class="body-content">
    <div class=" row-padding center" style="background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg');?>) no-repeat center center"  >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 right">
                    <h2><?php echo get_theme_mod('showcase_heading', 'DevPars') ?></h2>
                    <h3 class="lead"><?php echo get_theme_mod('showcase_text', 'DevPars') ?></h3>
                     <p>
                         <a href="<?php echo get_theme_mod('btn-url', 'http://test.com') ?>" class="btn btn-success btn-lg hvr-sweep-to-right">
                             <?php echo get_theme_mod('btn-text', 'Read More') ?>
                         </a>
                     </p>
                    <p><a href="http://asp.net" class="btn btn-success btn-lg hvr-shutter-in-horizontal">Learn more</a>
                    </p>
                    <p><a href="http://asp.net" class="btn btn-default btn-lg hvr-underline-reveal">Learn more</a></p>
                    <p><a href="http://asp.net" class="btn btn-default btn-lg hvr-float-shadow">Learn more</a></p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <iframe class="z-depth-2" width="560" height="315" src="https://www.youtube.com/embed/uEdyTlI3BAA"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>FrontEnd Development</h2>
            </div>
            <div class="col-xs-12 col-sm-12">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format());?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Recent Post Available') ?></p>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row row-padding ">
                <?php if(is_active_sidebar('box1')): ?>
                    <?php dynamic_sidebar('box1'); ?>
                <?php endif; ?>
                <?php if(is_active_sidebar('box2')): ?>
                    <?php dynamic_sidebar('box2'); ?>
                <?php endif; ?>
                <?php if(is_active_sidebar('box3')): ?>
                    <?php dynamic_sidebar('box3'); ?>
                <?php endif; ?>
        </div>
    </div>
    <div class="grey">
        <div class="container">
            <div class="row row-padding">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                <img class="img-responsive "
                                     src="<?php bloginfo('template_url'); ?>/images/testimonial/01.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1">
                                <img class="img-responsive"
                                     src="<?php bloginfo('template_url'); ?>/images/testimonial/02.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2">
                                <img class="img-responsive"
                                     src="<?php bloginfo('template_url'); ?>/images/testimonial/03.jpg" alt="">
                            </li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                            <small>Someone famous</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                class="ion-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                class="ion-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 center">

                <h1>Contact US</h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>

                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    <br/>

                    <div class="form-group">
                        <div class=" col-sm-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php get_footer(); ?>