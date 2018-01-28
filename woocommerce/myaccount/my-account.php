<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$current_user = wp_get_current_user();
?>
<div class="wc-my-account-content">
	<?php wc_print_notices(); ?>
	<div class="container">
		<div class="col-lg-3">
			<div class="side-bar">
				<div class="media" >
					<img src="<?= get_avatar_url($current_user->ID) ?>" alt="<?= $current_user->display_name?>">
					<h3><?= $current_user->display_name?></h3>
				</div>
				<div class="menu">
					<?php do_action( 'woocommerce_account_navigation' ); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="wc-account-conteudo">
				<?php do_action( 'woocommerce_account_content' );?>
			</div>
		</div>
	</div>
</div>