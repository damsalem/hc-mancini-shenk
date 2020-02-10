<?php get_header(); ?>

  <?php get_template_part('template-parts/section_hero_tpl_default'); ?> 
<?php get_template_part('template-parts/breadcrumbs'); ?> 



<div class="section margin-top-65 margin-bottom-65">
<div class="page-container">
    <div class="container">
    
                 <div class="content sidebar_content" style="padding-bottom: 50px;">
					 
					 
                <div class="row">
                
                <div class="col-lg-6">
                
               
                
                 <?php get_template_part('template-parts/section_post_slider'); ?> <!-- Slider -->
					<?php if( get_field('photo_credit') ): ?>
	<p style="    font-size: 14px;
    margin-top: 10px;">Photo credit: <?php the_field('photo_credit'); ?></p>
<?php endif; ?>
                </div>
                
                 <div class="col-lg-6"> 
                 <div class="post-credit">
					 <?php 

$posts = get_field('author_credit');

if( $posts ): ?>

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
       
			 <?php if ( has_post_thumbnail() ) { ?>
                           <div class="credit-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small', array('class' => 'img-fluid') ); ?></a></div>
                            <?php } else { ?>
                            <div class="credit-img"> <img src="https://nychg.org/wp-content/uploads/sites/114/2019/07/nychg-image-holder.jpg" alt="<?php the_title(); ?>" class="img-responsive"></div>
                            <?php } ?>
           <p>Hosted by: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
           
        
    <?php endforeach; ?>
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
					 </div>
                 <?php the_content(); ?>
                
               
<a href="/events" class="btn back-btn" title="Events of NYCHG">Back to Events</a>
  
                 </div>
                
                
                </div>
                    
                </div>
                </div>
            </div>
       
   
	</div>

<script>
jQuery(document).ready(function($) {

 

    //***************************
    // BannerOne Functions
    //***************************
   
$(function() {
  $('.carousel-inner .carousel-item:first').addClass('active');
});


// Owl Carousel //


		jQuery(".member-slider").owlCarousel({
			'autoPlay' : 5000,
			'items' : 3,
			'itemsDesktop' : [1200, 3],
			'itemsDesktopSmall' : [1000, 2],
			'itemsTablet' : [768, 1],
			'stopOnHover' : true,
		});


		jQuery(".full-slider .prev").click(function(){
			jQuery(".member-slider").trigger('owl.prev');
			
			return false;
		});

		jQuery(".full-slider .next").click(function(){
			jQuery(".member-slider").trigger('owl.next');
			
			return false;
		});


       


});

</script>


<?php get_footer(); ?>