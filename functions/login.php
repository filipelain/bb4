<?php

function b4b_wordpress_login_style(){
    wp_enqueue_style('book4book_login', get_stylesheet_directory_uri() ."/assets/css/login/login.css");
}

function b4b_wordpress_login_redirect(){
    return home_url();
}