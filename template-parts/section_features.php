 <!-- features-area start -->
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                
                    <div class="feature-list">
                    <h2><?php the_field('feature_title'); ?></h2>
                    <div class="feature-item">
                        
                        <?php if( have_rows('feature_1') ): 
	while( have_rows('feature_1') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		?>
			<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <h5><?php the_sub_field('title'); ?></h5>
			<p><?php the_sub_field('description'); ?></p>	
	<?php endwhile; ?>
<?php endif; ?>
</div>   

<div class="feature-item">
                        
                        <?php if( have_rows('feature_2') ): 
	while( have_rows('feature_2') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		?>
			<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <h5><?php the_sub_field('title'); ?></h5>
			<p><?php the_sub_field('description'); ?></p>	
	<?php endwhile; ?>
<?php endif; ?>
</div>   

<div class="feature-item">
                        
                        <?php if( have_rows('feature_3') ): 
	while( have_rows('feature_3') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		?>
			<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <h5><?php the_sub_field('title'); ?></h5>
			<p><?php the_sub_field('description'); ?></p>	
	<?php endwhile; ?>
<?php endif; ?>
</div>   

<div class="feature-item">
                        
                        <?php if( have_rows('feature_4') ): 
	while( have_rows('feature_4') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		?>
			<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <h5><?php the_sub_field('title'); ?></h5>
			<p><?php the_sub_field('description'); ?></p>	
	<?php endwhile; ?>
<?php endif; ?>
</div>   
                        
                            
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="abouts">
                        <div class="about-img">
                        <?php 
		// vars
		$image = get_field('about_logo');
		?>
                           <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                        <div class="about-content">
                            <p><?php the_field('about_description'); ?></p>
                              <?php 
		// vars
		$link = get_field('button');
		?>
                            <div class="button">
                                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-area end -->