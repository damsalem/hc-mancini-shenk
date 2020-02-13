 <!-- our attorneys start -->
    <div class="our-attorneys my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center"><?php the_field('our_attorneys_title') ?></h2>
                </div>
            </div>
            <?php if( have_rows('our_attorneys_thumbnails') ): ?>

                <div class="row">

                <?php while( have_rows('our_attorneys_thumbnails') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $link = get_sub_field('profile_link');

                    ?>

                    <div class="col-12 col-md-4">
                        <div class="an-attorney">
                            <div class="attorney-info">
                                <?php if( $title ): ?>
                                    <p class="title mb-2"><?php echo $title ?></p>
                                <?php endif; ?>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link ?>"><p class="link">Read More ></p></a>
                                <?php endif; ?>
                            </div>
                            <div class="overlay"></div>
                            <div 
                            class="attorney-img"
                            style="background-image: url(<?php echo $image ?>);"
                            >
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

                </div>

            <?php endif; ?>
            <div class="row mt-5">
                <div class="col mt-5 d-flex justify-content-center">
                <?php 
                $link = get_field('our_attorneys_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><div class="button"><?php echo esc_html( $link_title ); ?></div></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- our attorneys end -->

