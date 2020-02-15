<!-- hero section start -->
<div 
class="hero-home jumbotron-fluid"
<?php if( get_field('hero_image') ): ?>
    style="background-image:url(<?php the_field('hero_image'); ?>);"
<?php endif; ?>
>
    <div class="overlay"></div>
    <div class="text-ctn h-100 d-flex align-items-center justify-content-center">
        <?php if( get_field('hero_text') ): ?>
            <h1><?php the_field( the_field('hero_text')) ?></h1>
        <?php endif; ?>
    </div>
</div>
<!-- hero section end -->