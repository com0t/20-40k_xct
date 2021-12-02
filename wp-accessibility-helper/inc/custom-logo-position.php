<?php
    $wah_custom_logo_position = get_option('wah_custom_logo_position');
    if($wah_custom_logo_position) :
        $wah_logo_top    = get_option('wah_logo_top');
        $wah_logo_right  = get_option('wah_logo_right');
        $wah_logo_left   = get_option('wah_logo_left');
        $wah_logo_bottom = get_option('wah_logo_bottom');
?>
    <style media="screen" type="text/css">
        body #wp_access_helper_container button.aicon_link {
            <?php if( $wah_logo_top || ( $wah_logo_top == '0' ) ): ?>top:<?php echo $wah_logo_top; ?>px !important;<?php endif; ?>
            <?php if( $wah_logo_right || ( $wah_logo_right == '0' ) ): ?>right:<?php echo $wah_logo_right; ?>px !important;<?php endif; ?>
            <?php if( $wah_logo_left || ( $wah_logo_left == '0' ) ): ?>left:<?php echo $wah_logo_left; ?>px !important;<?php endif; ?>
            <?php if( $wah_logo_bottom || ( $wah_logo_bottom == '0' ) ): ?>bottom:<?php echo $wah_logo_bottom; ?>px !important;<?php endif; ?>
        }
    </style>
<?php endif; ?>
