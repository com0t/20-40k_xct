<?php
/**
 * WAH Contribute
 *
 * @package WAH
 */

$wah_hidden_stats = isset( $_POST['wah_hidden_stats'] ) ? sanitize_text_field( $_POST['wah_hidden_stats'] ) : '';
if ( 'Y' === $wah_hidden_stats && ! empty( $wah_hidden_stats ) ) {
	$wah_stats = isset( $_POST['wah_stats'] ) ? 1 : 0;
	update_option( 'wah_stats', $wah_stats );
	if ( $wah_stats == 1 ) {
		stats_collector();
	}
	?>
	<div class="updated">
		<p><strong><?php esc_html_e( 'Options saved.', 'wp-accessibility-helper' ); ?></strong></p>
	</div>
	<?php
} else {
	$wah_stats = get_option( 'wah_stats' );
}
?>

<div class="wrap">

	<?php echo '<h1>' . esc_html__( 'WAH - Contribute', 'wp-accessibility-helper' ) . '</h1>'; ?>
	<?php render_wah_header_notice(); ?>
	<div class="wah-main-admin-row">
		<?php wah_render_admin_sidebar(); ?>
		<form name="oscimp_form" class="wah-main-admin-form clearfix" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
		<input type="hidden" name="wah_hidden_stats" value="Y">

			<div class="form_row">
				<p><?php esc_html_e( 'Hello dear friend!', 'wp-accessibility-helper' ); ?></p>
				<p><?php esc_html_e( 'It is not a secret that creating a new template for WordPress demands significant effort, time and sometimes even money (imagine that!). Please help us make an even more friendly and secure product for you, which you and other users will be able to enjoy absolutely for free.', 'wp-accessibility-helper' ); ?></p>
				<p><?php esc_html_e( 'Would you agree to share with us several details about your site listed below?', 'wp-accessibility-helper' ); ?></p>
				<ol>
					<li><?php esc_html_e( 'WordPress version + theme name', 'wp-accessibility-helper' ); ?></li>
					<li><?php esc_html_e( 'PHP version - for better debugging', 'wp-accessibility-helper' ); ?></li>
					<li><?php esc_html_e( 'Your IP address - for better translations', 'wp-accessibility-helper' ); ?></li>
					<li><?php esc_html_e( 'Website admin email', 'wp-accessibility-helper' ); ?></li>
					<li><?php esc_html_e( 'Website language & url address', 'wp-accessibility-helper' ); ?></li>
				</ol>

				<p>
				<?php
				esc_html_e(
					'If your answer is yes, please tick the checkbox below, this would really help us in further development of the plugin.
                We guarantee that your information will only be used for this internal purpose and will never be given to any third parties.',
					'wp-accessibility-helper'
				);
				?>
				</p>
				<p><?php esc_html_e( 'Thank you in advance for your understanding and contribution!', 'wp-accessibility-helper' ); ?></p>
				<p><?php esc_html_e( 'Cinserely,', 'wp-accessibility-helper' ); ?></p>
				<p><?php esc_html_e( '- WP Accessibility Helper Team', 'wp-accessibility-helper' ); ?></p>
			</div>

			<?php render_switch_element( __( 'Agree', 'wp-accessibility-helper' ), $wah_stats, 'wah_stats' ); ?>

			<p class="submit">
				<input type="submit" name="Submit" class="button button-primary button-large" value="<?php esc_html_e( 'Update Options', 'wp-accessibility-helper' ); ?>" />
			</p>

	</form>
	</div>

</div>
