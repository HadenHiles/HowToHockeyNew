<?php
add_shortcode('popup_offer', 'popup_offer');
function popup_offer($atts = [], $content = null, $tag = '') {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    // override default attributes with user attributes
    $atts = shortcode_atts(
        array(
            'title' => 'Limited Offer!',
            'link' => "/",
            "button" => null,
            "background_url" => null
        ),
        $atts,
        $tag
    );

    ob_start();
?>
    <div class="popup-offer-wrapper hide" id="popup-offer">
        <div class="popup-offer <?= (!empty($atts['background_url'])) ? "background" : "" ?>" style="background-image: url('<?= $atts['background_url'] ?>')">
            <div class="header">
                <h2><?= $atts['title'] ?></h2>
                <a href="#" id="popup-offer-close-btn"><i class="fas fa-times"></i></a>
            </div>
            <div class="body"><?= do_shortcode($content) ?></div>
            <?php
            if (!empty($atts['button'])) {
                ?>
                <div class="footer">
                    <a href="<?= $atts['link'] ?>" class="BTN" id=""><?= $atts['button'] ?></a>
                </div>
                <?php
            }

            if (!empty($atts['background_url'])) {
                ?>
                <div class="background-overlay"></div>
                <?php
            }
            ?>
        </div>
        <div class="popup-offer-overlay"></div>
    </div>

    <div class="popup-offer-button-holder">
        <a href="#" id="open-popup-offer" class="popup-offer-button">
            <img src="/wp-content/uploads/2021/02/THEPOND_WHITE_WORDMARK_RAW.png" alt="The Pond" />
        </a>
    </div>
<?php
    return ob_get_clean();
}
?>