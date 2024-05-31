<?php 
function theme_register_menus() {
    register_nav_menus(array(
        'main' => 'Menú Principal',
    ));
}
add_action('after_setup_theme', 'theme_register_menus');
function register_footer_menu() {
    register_nav_menu('footer-menu', __( 'Footer Menu' ));
}
add_action('after_setup_theme', 'register_footer_menu');

?>
