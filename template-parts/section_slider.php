
<div class="bd-example d-md-block">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      
      <?php if( have_rows('image_slider') ): ?>

<div class="carousel-inner">

	<?php while( have_rows('image_slider') ): the_row(); 

		// vars
		$image = get_sub_field('slider_image');
        $cta_title = get_sub_field('cta_title');
		$cta_info = get_sub_field('cta_info');
		$link1 = get_sub_field('link_1');
        $link2 = get_sub_field('link_2');

		?>

		<div class="carousel-item">
          <?php if( !empty($image) ): ?>

	<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
           <div class="carousel-caption d-none d-md-block">
          <h3><?php echo $cta_title; ?></h3>
          <p><?php echo $cta_info; ?></p>
          <div class="carousel-link">
           <?php 

if( $link1 ): 
	$link_url = $link1['url'];
	$link_title = $link1['title'];
	$link_target = $link1['target'] ? $link1['target'] : '_self';
	?>
	<a class="meet" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>

<?php 

if( $link2 ): 
	$link_url = $link2['url'];
	$link_title = $link2['title'];
	$link_target = $link2['target'] ? $link2['target'] : '_self';
	?>
	<a  href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>

</div>
                        </span>
                        <div class="scroll-down-container" style="margin-top: 70px;">
          <div class="scroll-downs">
  <a title="Scroll Down" href="#welcome"><div class="mousey">
    <div class="scroller"></div>
  </div></a>
</div>
        
      </div>
           </div>
           
           

		</div>

	<?php endwhile; ?>

	</div>

<?php endif; ?>
        
        
        <a class="carousel-control-prev noscroll" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next noscroll" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
        
      </div>
    

    </div>

