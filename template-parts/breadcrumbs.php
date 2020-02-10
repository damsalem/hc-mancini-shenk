<?php if(function_exists('yoast_breadcrumb') ) { ?>

<?php
global $md_theme_options;

if(is_home()):
	
	if(get_option('page_for_posts')){
		$page_id = get_option('page_for_posts');
	}
	else return;

else:

	if(is_404() || is_search() || is_archive()){ return; }
	$page_id = get_the_id();

endif;

$page_options = get_post_custom($page_id);

if( isset($page_options['show-breadcrumb']) && !filter_var($page_options['show-breadcrumb'][0], FILTER_VALIDATE_BOOLEAN)){

} else { ?> 
    <div id="breadcrumbs" class="visible-lg visible-md">
    
            
        		
        			<div style="padding: 20px; background: #2c2d32; float: left; width: 100%; margin-bottom: 50px;">
                    <div class="container">
						<?php yoast_breadcrumb(); ?>
                        </div>
                    </div>
        		
        	
	
	</div>
<?php } ?>
<?php } ?>