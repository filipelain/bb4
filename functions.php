<?php  
include( get_template_directory().'/functions/login.php' );
include( get_template_directory().'/functions/woocomerce.php' );
include(get_template_directory().'/functions/settings.php');

// login screen
add_action( 'login_enqueue_scripts', 'b4b_wordpress_login_style');
add_filter('login_headerurl', 'b4b_wordpress_login_redirect');

//themer settings
add_action('after_setup_theme','b4b_theme_setup');
// woocomece 
add_action( 'after_setup_theme', 'b4b_woocomerce_theme_support' );
remove_action( 'woocommerce_sidebar','woocommerce_get_sidebar',10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20);
//testes

remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );



//contador de resultado
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// formulario que ordena
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//Não faço ideia 
//remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10);

//remove_action( 'woocommerce_shop_loop', 'WC_Structured_Data::generate_product_data()', 10 );

//remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
