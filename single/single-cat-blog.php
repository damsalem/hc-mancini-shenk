<?php get_header(); ?>

  <?php get_template_part('template-parts/section_hero_tpl_default'); ?> 
  <?php get_template_part('template-parts/breadcrumbs'); ?> 



<div class="section margin-top-65 margin-bottom-65">
<div class="page-container">
    <div class="container">
    
                 <div class="content sidebar_content">
                <div class="row">
                
                <div class="col-lg-3">
                
                  <div class="blog-item">
                            <?php if ( has_post_thumbnail() ) { ?>
                           <div class="blog-img blog-img-post"><?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?></div>
                            <?php } else { ?>
                            <div class="blog-img blog-img-post"> <img src="https://nychg.org/wp-content/uploads/sites/114/2019/07/nychg-image-holder.jpg" alt="<?php the_title(); ?>" class="img-responsive"></div>
                            <?php } ?>
                               
                             </div>
                </div>
                
                 <div class="col-lg-9"> 
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
           <p>By: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
           
        
    <?php endforeach; ?>
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
					 </div>
                 <?php the_content(); ?>
                 
               
<a href="/blog" class="btn back-btn" title="Blog Posts of NYCHG">Back to Blog Posts</a>
                 </div>
                
                
                </div>
                    
                </div>
                </div>
            </div>
       
   
	</div>


<?php get_footer(); ?>