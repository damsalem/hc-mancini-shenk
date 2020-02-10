<div class="member-area">
    <div class="container">
        <div class="member-top">
            <h2 style="display: inline-block">our members</h2>
			<a href="/members" title="All Members of NYCHG" class="btn back-btn" style="margin-top: 0px; display: inline-block; float: right; margin-right: 15px;">All Members</a>
			<p style="margin-left: 15px; margin-top: 20px">Providing legal services, design advice, brand development, and hospitality consulting are just some of the ways our members are helping the New York City hosptiality business thrive. </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="full-slider">
                <a href="#" class="prev noscroll"><i class="fas fa-arrow-alt-circle-left"></i></a>
                    <div class="member-slider">                                         
                    <?php 
                    $args = array(
                    'category_name'		=> 'members',
                    'meta_key'			=> '',
	                'orderby'			=> 'meta_value',
	                'order'				=> 'DESC'
                    );
                    query_posts( $args ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="amar-two">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>
                            <?php } else { ?>
                            <img src="https://nychg.org/wp-content/uploads/sites/114/2019/09/nychg-image-placement-holder.png" alt="<?php the_title(); ?>" class="img-responsive">
                            <?php } ?>
                                <div class="amar-two-content">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_field('member_specialty'); ?></p>
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">View Member Profile <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                             </div>
                         </div>
                        <?php endwhile; wp_reset_query(); else : ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <a href="#" class="next noscroll"><i class="fas fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>