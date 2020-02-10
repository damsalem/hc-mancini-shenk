<?php get_header(); ?>

  <?php get_template_part('template-parts/section_hero_tpl_default'); ?> 



<div class="section margin-top-65 margin-bottom-65">
<div class="page-container">
    <div class="container">
    
                 <div class="content sidebar_content">
                <div class="row">
                
                <div class="col-lg-4">
                
                  <div class="blog-item">
                            <?php if ( has_post_thumbnail() ) { ?>
                           <div class="blog-img blog-img-post member-img"><?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?></div>
                            <?php } else { ?>
                            <div class="blog-img blog-img-post member-img"> <img src="https://nychg.org/wp-content/uploads/sites/114/2019/07/nychg-image-holder.jpg" alt="<?php the_title(); ?>" class="img-responsive"></div>
                            <?php } ?>
                                <div class="blog-content blog-page-content">
                                <h3 style="font-weight: bold; font-size: 20px;"><?php the_title(); ?></h3>
                                    <p style="margin-bottom: 5px;"><?php the_field('member_specialty'); ?></p>
                                    <?php if( have_rows('personal_information') ): 

	while( have_rows('personal_information') ): the_row(); 
		
		// vars
		$bio = get_sub_field('personal_bio');
		
		
		?>
                                    <?php if( get_sub_field('linkedin_profile') ): ?>
                                    <a class="member-icon" href="<?php the_sub_field('linkedin_profile'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fab fa-linkedin fa-stack-1x fa-circle-icon"></i>
</span></a>
                                    <?php endif; ?>
                                    
                                     <?php if( get_sub_field('email') ): ?>
                                    <a class="member-icon" href="mailto:<?php the_sub_field('email'); ?>" target="_blank">
                                    <span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fas fa-envelope-open-text fa-stack-1x fa-circle-icon"></i>
</span>
                                    </a>
                                    <?php endif; ?>
                                    
                                     <?php if( get_sub_field('personal_bio') ): ?>
	<p style="margin-top: 5px;"><?php the_sub_field('personal_bio'); ?></p>
<?php endif; ?>
                                    
                                    
<?php endwhile; ?>
	
<?php endif; ?>
                
                                  
                                    
                                </div>
                             </div>
                </div>
                
                 <div class="col-lg-8" style="padding-top: 20px;"> 
              
                
           
               
               <?php if( have_rows('business_information') ): 

	while( have_rows('business_information') ): the_row(); 
		
		// vars
		$image = get_sub_field('business_logo');
		
		
		?>
        <div class="row">
        <div class="col-lg-3" style="display: flex; align-items: center;"><?php if( get_sub_field('business_logo') ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php   else: ?>
    <img src="https://nychg.org/wp-content/uploads/sites/114/2019/09/nychg-hospitality.png" alt="<?php the_title(); ?>" class="img-responsive">
<?php endif; ?></div>
        <div class="col-lg-9">
            <?php if( get_sub_field('business_name') ): ?>
 <h2 style="font-weight: bold; font-size: 20px; margin-bottom: 10px;"><?php the_sub_field('business_name'); ?></h2>
<?php endif; ?>
<?php if( get_sub_field('business_address') ): ?>
 <p style="margin-bottom: 0px;"><?php the_sub_field('business_address'); ?></p>
<?php endif; ?>
<?php if( get_sub_field('phone_number') ): ?>
 <p><?php the_sub_field('phone_number'); ?></p>
<?php endif; ?>
<?php if( get_sub_field('business_map') ): ?>
<a class="member-icon smaller-icon" href="<?php the_sub_field('business_map'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fas fa-map-marker-alt fa-stack-1x fa-circle-icon"></i>
</span></a>
<?php endif; ?>
<?php if( get_sub_field('business_instagram') ): ?>
<a class="member-icon smaller-icon" href="<?php the_sub_field('business_instagram'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fab fa-instagram fa-stack-1x fa-circle-icon"></i>
</span></a>
<?php endif; ?>
<?php if( get_sub_field('business_facebook') ): ?>
<a class="member-icon smaller-icon" href="<?php the_sub_field('business_facebook'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fab fa-facebook fa-stack-1x fa-circle-icon"></i>
</span></a>
<?php endif; ?>
<?php if( get_sub_field('business_twitter') ): ?>
<a class="member-icon smaller-icon" href="<?php the_sub_field('business_twitter'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fab fa-twitter fa-stack-1x fa-circle-icon"></i>
</span></a>
<?php endif; ?>
<?php if( get_sub_field('business_linkedin') ): ?>
<a class="member-icon smaller-icon" href="<?php the_sub_field('business_linkedin'); ?>" target="_blank"><span class="fa-stack fa-lg" style="margin-bottom: 0px;">
  <i class="fas fa-circle fa-stack-2x fa-bg-circle"></i>
  <i class="fab fa-linkedin fa-stack-1x fa-circle-icon"></i>
</span></a>
<?php endif; ?>

        </div>
        <hr>
        <div class="col-lg-12">
        <?php if( get_sub_field('business_description') ): ?>
        <p style="padding: 20px; box-shadow: 0px 0px 10px #ccc; border-top: 5px solid #2c2d32; margin-top: 20px;"><?php the_sub_field('business_description'); ?></p>
<?php endif; ?>
        </div>
        <hr>
         <div class="col-lg-12">
        <?php if( get_sub_field('notable_organizations') ): ?>
        <div style="padding: 20px; box-shadow: 0px 0px 10px #ccc; border-top: 5px solid #2c2d32;">
        <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 15px;">Notable Clients</h3>
        <p><?php the_sub_field('notable_organizations'); ?></p>
        </div>
<?php endif; ?>
</div>
        </div>
        

 

		
	<?php endwhile; ?>
	
<?php endif; ?>
<a class="btn back-btn" href="/members" title="Members of NYCHG">Back to Members</a>
                 </div>
                
                
                </div>
                    
                </div>
                </div>
            </div>
       
   
	</div>


<?php get_footer(); ?>