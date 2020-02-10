
				<?php
				$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				if ( has_post_thumbnail() ) { ?>
                <div class="hero-background-image" style="background: url('<?php echo $img['0'];?>') center top no-repeat;">
                <div class="header-overlay"></div>
                <div class="container">
                 <span class="hero-text-holder">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
               
                <?php the_excerpt(); ?></span>
					<?php if( get_field('photo_credit') ): ?>
	<p class="photo_cred">Photo credit: <?php the_field('photo_credit'); ?></p>
<?php endif; ?>
                </div>
                </div>
				<?php } else { ?>
                <div class="hero-background-image" style="background: url('https://nychg.org/wp-content/uploads/sites/114/2019/10/nychg-hospitality-in-new-york-city.jpg') center bottom no-repeat;">
                <div class="header-overlay"></div>
                <div class="container">
                <span class="hero-text-holder">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
               
                <?php the_excerpt(); ?>
					
					<div class="carousel-link">
						
						<?php 
$link = get_field('hero_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="meet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?> 
						
          

	<a title="NYCHG Member Application Form" href="/nychg-application-form/" target="_self">Apply Now</a>

</div>
					
					</span>
					
					
					
					
					
                </div>
                </div>
				<?php } ?>

  
   
<!-- ========== End Hero ========== --> 

