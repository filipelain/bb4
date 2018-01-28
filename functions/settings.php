<?php
function b4b_theme_setup(){
    add_theme_support('menus'); 
    register_nav_menu( 'primary', __( 'Menu Pricipal', 'book4book' ) );
    register_nav_menu('second',   __('Menu Secundario','book4book'));
 
}