<!-- litigation areas section start -->
<div class="litigation-areas py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">

            <h2 class="text-center"><?php the_field( the_field('litigation_areas_title')) ?></h2>
            <p class="text-center my-5"><?php the_field( the_field('litigation_areas_description')) ?></p>
            </div>
        </div>
        <?php if( have_rows('litigation_areas_blurb') ): ?>

            <div class="row">

            <?php while( have_rows('litigation_areas_blurb') ): the_row(); 

                // vars
                $image = get_sub_field('blurb_thumbnail');
                $title = get_sub_field('blurb_title');
                $content = get_sub_field('blurb_description');

                ?>

                <div class="col-md-6">
                    <div class="blurb mx-4 my-4">
                        <?php if( $image ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <?php endif; ?>
                        <?php if( $title ): ?>
                            <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if( $content ): ?>
                            <p><?php echo $content; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endwhile; ?>

            </div>

        <?php endif; ?>
        <div class="row">
            <div class="col mt-4 d-flex justify-content-center">
            <?php 
                $link = get_field('litigation_areas_button');
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
<!-- litigation areas section end -->