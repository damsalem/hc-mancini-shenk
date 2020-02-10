<?php  get_header(); ?>

 

  

<div class="sensical-main-wrapper">

    <div class="sensical-main-content">
     <div class="background-image-holder">
				<?php
				$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				if ( has_post_thumbnail() ) { ?>
                <div class="hero-background-image" style="background: url('<?php echo $img['0'];?>') center top no-repeat;">
                <div class="header-overlay"></div>
                 <span class="hero-text-holder">
                 <h1 class="entry-title" style="color: #ff4242">Oops!</h1>
                <div class="seperator">
                <div class="seperator-container">
                <div class="sep-left"></div>
                <div class="sep-center"></div>
                <div class="sep-right"></div>
                </div>
                </div>
                <p>It Looks like the page you are looking for was moved or doesn't exist. </p></span>
                </div>
				<?php } else { ?>
                <div class="hero-background-image" style="background: url('http://sensical.hudsoncreative.com/wp-content/uploads/sites/113/2019/06/banner-3.jpg') center top no-repeat;">
                <div class="header-overlay"></div>
                <span class="hero-text-holder">
                 <h1 class="entry-title" style="color: #ff4242">Oops!</h1>
                <div class="seperator">
                <div class="seperator-container">
                <div class="sep-left"></div>
                <div class="sep-center"></div>
                <div class="sep-right"></div>
                </div>
                </div>
                <p>It Looks like the page you are looking for was moved or doesn't exist. </p></span>
                </div>
				
				<?php } ?>

                </div>
   
<!-- ========== End Hero ========== --> 

<div class="container interior-content" style="padding-bottom: 40px; padding-top: 40px;">
        <p style="color: red; text-align: center;">If this is a mistake, please send an email to <a href="mailto:info@nychg.org">info@nychg.org</a>. </p>
<div class="about-content" style="text-align: center;">
<a href="/">Return Home</a>
</div>
        </div>
    </div>
     
    <div class="clearfix"></div>
    
</div>

  
   
   

    

    

    
 


 
  
  <!-- End -->
<?php get_footer(); ?>
