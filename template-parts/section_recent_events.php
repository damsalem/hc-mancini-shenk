  <!-- events-area start -->
    <div 
    class="featured-news text-center py-5"
    style="background-image: url(<?php the_field('featured_news_background_image') ?>);"
    >
        <div class="container">
            <h2><?php the_field('featured_news_title') ?></h2>
            <div class="row align-items-center my-5">
            <?php 
                $args = array(
                'category_name'		=> 'news-featured',
                'posts_per_page'    => 1
                );
                query_posts( $args ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                
                <div class="news-img">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?>
                        <?php } else { ?>
                        <img src="http://a.lex45.com/mancinishenk/wp-content/uploads/sites/120/2020/02/Contract.jpg" alt="<?php the_title(); ?>" class="img-responsive">
                        <?php } ?>
                        </a>
                </div>
                </div>
                <div class="col-md-8">
                    <div class="featured-news-content">
                    <h4 class="text-left"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="text-left">By <?php the_author(); ?>, <?php echo get_the_date(); ?></p>
                    <p class="text-left"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
                          
                                          
          
                <?php endwhile; wp_reset_query(); else : ?>

                <?php endif; ?>
                
            </div>

            <div class="row">
                <div class="col"><h3 class="my-4">Recently Featured</h3></div>
            </div>

            <div class="row justify-content-around">
                <?php 
                    $args = array(
                    'category_name'		=> 'news-recently-featured',
                    'meta_key'			=> '',
                    'posts_per_page' => 3
                    );
                    query_posts( $args ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6">
                            <div class="recent-news-item">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">
                                        <div class="recent-news-img"><?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?></div>
                                    </a>
                                <?php } else { ?>
                                    <div class="recent-news-img">
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">
                                            <img src="http://a.lex45.com/mancinishenk/wp-content/uploads/sites/120/2020/02/Contract.jpg" alt="<?php the_title(); ?>" class="img-responsive">
                                        </a>
                                    </div>
                                <?php } ?>
                                <div class="recent-news-content">
                                    <h4 class="text-left"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h4>
                                    <p class="text-left">By <?php the_author(); ?>, <?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </div>
                                          
          
                        <?php endwhile; wp_reset_query(); else : ?>

                    <?php endif; ?>
                        </div>
                    </div>
                </div>
         
    <!-- events-area end -->
