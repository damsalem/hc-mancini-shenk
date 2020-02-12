<!-- about us home start -->
<div class="about-home my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-left">
                <div class="d-flex h-100 align-items-center">
                    <div class="purple-bg">
                        <div 
                        class="about-us-img"
                        <?php if( get_field('about_us_image') ): ?>
                            style="background-image:url(<?php the_field('about_us_image'); ?>);"
                        <?php endif; ?>
                        ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-right">
                <?php if( get_field('about_us_title') ): ?>
                    <h2 class="pt-5"><?php the_field( the_field('about_us_title')) ?></h2>
                <?php endif; ?>

                <?php if( get_field('about_us_text') ): ?>
                    <p class=""><?php the_field( the_field('about_us_text')) ?></p>
                <?php endif; ?>

                <?php 
                $link = get_field('about_us_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <div class="button"><?php echo esc_html( $link_title ); ?></div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- about us home end -->