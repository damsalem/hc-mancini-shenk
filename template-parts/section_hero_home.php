<!-- hero section start -->
<div 
class="hero-home jumbotron-fluid py-5"
<?php if( get_field('hero_image') ): ?>
    style="background-image:url(<?php the_field('hero_image'); ?>);"
<?php endif; ?>
>
    <div class="container py-5 text-ctn">
        <?php if( get_field('hero_text') ): ?>
            <h1 class="text-center my-5 py-5"><?php the_field( the_field('hero_text')) ?></h1>
        <?php endif; ?>
    </div>
</div>
<!-- hero section end -->