<?php get_header(); ?>

  <?php get_template_part('template-parts/section_hero_tpl_default'); ?> 



<div class="section margin-top-65 margin-bottom-65">
<div class="page-container">
    <div class="container">
                 <div class="content sidebar_content">
                <div class="row">
                
                <div class="col-lg-9 col-md-12 col-md-push-3">
                
                <?php get_template_part( 'template-parts/content-single', $slug ); ?>
                </div>
                
               

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    
    <?php if ( has_post_thumbnail() ) { ?>
    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="">
        <?php the_post_thumbnail( 'medium', array('class' => 'img-responsive') ); ?>
        </a>
        <?php } else { ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
        <img src="image-path.jpg" alt="<?php the_title(); ?>" class="img-responsive">
        </a>
    <?php } ?>
    <p class="event_title_sidebar"><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <p class="event_date_sidebar"><?php the_field('event_date'); ?></p>

<?php endwhile; wp_reset_query(); else : ?>
   
<?php endif; ?>
</div>
                
                
                </div>
                    
                </div>
                </div>
            </div>
       
   
	


<?php get_footer(); ?>