 
    <!-- patners-area start -->
    <div class="patners-area">
		<h2 style="color: #666; padding-bottom: 60px; font-size: 28px">Providing Hospitality Services to Some of the Biggest Names in the Industry</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="patner-logo">
                    <?php 

$image = get_field('client_1');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                       
                    </div>
                    <div class="patner-logo">
                       <?php 

$image = get_field('client_2');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="patner-logo">
                      <?php 

$image = get_field('client_3');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                    </div>
                    <div class="patner-logo">
                        <?php 

$image = get_field('client_4');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="patner-logo">
                       <?php 

$image = get_field('client_5');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                    </div>
                    <div class="patner-logo">
                     <?php 

$image = get_field('client_6');

if( !empty($image) ): ?>

	<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- patners-area end -->
    