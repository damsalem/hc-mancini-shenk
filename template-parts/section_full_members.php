
           
            <div class="row">
            
          
            
                                                         
                    <?php 
                    $args = array(
                    'category_name'		=> 'members',
                    'meta_key'			=> '',
	                'orderby'			=> 'meta_value',
	                'order'				=> 'DESC'
                    );
                    query_posts( $args ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <div class="col-lg-4 col-md-4">
                    <div class="blog-item">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""><div class="blog-img blog-img-post"><?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?></div></a>
                            <?php } else { ?>
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""><div class="blog-img blog-img-post"> <img src="https://nychg.org/wp-content/uploads/sites/114/2019/09/nychg-image-placement-holder.png" alt="<?php the_title(); ?>" class="img-responsive"></div></a>
                            <?php } ?>
                                <div class="blog-content blog-page-content">
                                <h5><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h5>
                                    <p><p><?php the_field('member_specialty'); ?></p>
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">View Profile <i class="fas fa-long-arrow-alt-right"></i></a></p>
                                    
                                </div>
                             </div>
                         </div>
                                          
          
                        <?php endwhile; wp_reset_query(); else : ?>

                    <?php endif; ?>
           
            </div>
     

