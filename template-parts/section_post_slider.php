
<div class="d-md-block">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      
      <?php if( have_rows('post_slider') ): ?>

<div class="carousel-inner">

	<?php while( have_rows('post_slider') ): the_row(); 

		// vars
		$image = get_sub_field('slider_image');


		?>

		<div class="carousel-item car-item-post-slider">
          <?php if( !empty($image) ): ?>

	<img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
          
           
           

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


