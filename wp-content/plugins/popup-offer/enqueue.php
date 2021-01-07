<?php
function load_popup_offer_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'popup_offer_style', $plugin_url . 'css/style.css' );
    wp_enqueue_script( 'popup_offer_script', $plugin_url . 'js/popup-offer.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_popup_offer_scripts' );
?>