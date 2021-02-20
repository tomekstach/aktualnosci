<?php

/**
 * Popup Simple Html
 * 
 * @package WP Modal Popup with Cookie Integration
 * @since 1.0.0 
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// AstoSoft - Start - Add params to the link from $_GET 
if (isset($_GET['sid'])) {
  $prg  = intval($_GET['prg']);
  $nl   = strip_tags($_GET['nl']);
  $nw   = strip_tags($_GET['nw']);

  $wmpci_options['wmpci_popup_cnt'] = str_replace('{prg}', $prg, $wmpci_options['wmpci_popup_cnt']);
  $wmpci_options['wmpci_popup_cnt'] = str_replace('{nl}', $nl, $wmpci_options['wmpci_popup_cnt']);
  $wmpci_options['wmpci_popup_cnt'] = str_replace('{nw}', $nw, $wmpci_options['wmpci_popup_cnt']);
  // AstoSoft - End
?>

<div class="splash wmpci-popup-wrp design1" id="wmpci-popup-wrp">
  <div class="wmpci-popup-body">

    <?php if (empty($wmpci_options['hide_close_btn'])) { ?>
    <a href="javascript:void(0);" class="wmpci-popup-close" title="<?php _e('Close', 'wmpci'); ?>"></a>
    <?php } ?>

    <div class="wpmci-popup-cnt-wrp">
      <div class="wpmci-popup-cnt-inr-wrp wmpci-clearfix">
        <?php if (!empty($wmpci_options['wmpci_mainheading'])) { ?>
        <h2><?php echo $wmpci_options['wmpci_mainheading']; ?></h2>
        <?php } ?>

        <?php if (!empty($wmpci_options['wmpci_subheading'])) { ?>
        <h4><?php echo $wmpci_options['wmpci_subheading']; ?></h4>
        <?php } ?>
        <?php echo do_shortcode(wpautop($wmpci_options['wmpci_popup_cnt'])); ?>
      </div>
    </div>
  </div>
</div>
<?php
  // AstoSoft 
} ?>