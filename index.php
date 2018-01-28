<?php get_header() ?>
<div id="content" class="site-content" tabindex="-1">
    <?php if ( have_posts() ) : get_template_part( 'partials/loop' ); else : get_template_part( 'content', 'none' ); endif; ?>
    <?php if(is_front_page()){ 
            get_template_part( 'partials/vitrine');
            get_template_part( 'partials/propaganda/interna/propinterna');
            get_template_part( 'partials/vitrine');
           } ?>
</div>
<?php get_footer() ?>