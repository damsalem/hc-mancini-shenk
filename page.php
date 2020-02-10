<?php get_header(); ?>

    <?php get_template_part('template-parts/section_hero_tpl_default'); ?> 

<?php get_template_part('template-parts/breadcrumbs'); ?> <!-- Breadcrumbs -->
        
<div id="content" style="float: left; width: 100%;">
        <div class="container interior-content" style="padding-bottom: 40px; padding-top: 20px; ">
        <?php the_content(); ?>
        </div>
</div>
<?php get_footer(); ?>
