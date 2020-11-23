<?php
function wpsm_offerbox_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(
        'title' => '',
        'description' => '',
        'price' => '',
        'price_old' => '',
        'button_text' => 'Buy this item',
        'button_link' => '',
        'thumb' => '',
    ), $atts));

    ob_start();
    ?>
    <div style="clear: both;">
        <div class="offer_container">
            <div class="thumbnail">
                <img src="<?=$atts['thumb']?>" alt="<?=$atts['title']?>" />
            </div>
            <div class="content">
                <h3><?=$atts['title']?></h3>
                <p><?=$atts['description']?></p>
            </div>
            <div class="right">
                <span class="current_price"><?=$atts['price']?></span>
                <span class="old_price"><?=$atts['price_old']?></span>
                <button type="submit" onclick="window.open('<?=$atts['button_link']?>')"><?=$atts['button_text']?></button>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('wpsm_offerbox', 'wpsm_offerbox_shortcode');
?>