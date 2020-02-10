  <!-- events-area start -->
    <div class="event-area">
        <div class="container">
        <h2>Recent Events</h2>
			<p style="margin-top: -20px;
    margin-bottom: 50px;">Besides being a ton of fun, NYCHG events are great opportunities for networking, educational experience, and discovering new restaurants. Click the link below to find out more info on our latest event.</p>
            <div class="row align-items-center">
            <?php 
                    $args = array(
                    'category_name'		=> 'events',
                    'meta_key'			=> '',
	                'orderby'			=> 'meta_value',
	                'order'				=> 'DESC',
                    'posts_per_page' => 1
                    );
                    query_posts( $args ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                     <div class="col-lg-6 col-md-6">
                    
                    <div class="event-img">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?>
                            <?php } else { ?>
                           <img src="https://nychg.org/wp-content/uploads/sites/114/2019/09/nychg-image-placement-holder.png" alt="<?php the_title(); ?>" class="img-responsive">
                            <?php } ?>
                            </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="event-content">
                    <h5><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" style="color: #CFDEF1"><?php the_title(); ?></a></h5>
                        <span><?php $post_tags = get_the_tags();
if ( $post_tags ) {
    echo $post_tags[0]->name; 
} ?></span>
                     
                     <p><?php echo get_the_excerpt(); ?> <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">View Pictures and Learn More...</a></p>
                        <div class="button">
                            <a href="/events" title="Past Events from NYCHG">PAST EVENTS</a>
                        </div>
                    </div>
                </div>
                          
                                          
          
                        <?php endwhile; wp_reset_query(); else : ?>

                    <?php endif; ?>
                
                        </div>
                    </div>
                </div>
         
    <!-- events-area end -->
