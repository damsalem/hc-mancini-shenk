<!-- airtcle-area start -->
    <div class="airtcle-area">
        <div class="container">
            <div class="airtcle-top">
                <h2>Hospitality News</h2>
                <a href="/blog" title="Blog Posts NYCHG" class="btn back-btn" style="margin-top: 0px;">All Posts</a>
            </div>
            <div class="row">
            
          
            
                                                         
                    <?php 
                    $args = array(
                    'category_name'		=> 'blog',
                    'meta_key'			=> '',
                    'posts_per_page' => 3
                    );
                    query_posts( $args ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <div class="col-lg-4 col-md-4">
                    <div class="blog-item">
                            <?php if ( has_post_thumbnail() ) { ?>
                           <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""> <div class="blog-img"><?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?></div></a>
                            <?php } else { ?>
                           <div class="blog-img"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""> <img src="https://nychg.org/wp-content/uploads/sites/114/2019/07/nychg-image-holder.jpg" alt="<?php the_title(); ?>" class="img-responsive"></a></div>
                            <?php } ?>
                                <div class="blog-content">
                                <h5><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h5>
                                    
                                    
                                </div>
                             </div>
                         </div>
                                          
          
                        <?php endwhile; wp_reset_query(); else : ?>

                    <?php endif; ?>
           
            </div>
        </div>
    </div>
    <!-- article-area end -->

