<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
	<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
	<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
	<?php wc_print_notices() ?>
	<div class="wc-login" id="customer_login">
		<div class="login is-active">
			<?php endif; ?>
			<h2 class="wc-titulo">
				<?php echo 'Acesse sua conta'?>
				<?php  if (strpos($_SERVER['REQUEST_URI'], 'minha-conta') == false) 
					?> <i class="fa fa-times" style="cursor: pointer"  data-dismiss="modal" aria-hidden="true"></i><?php
				?>
				
			</h2>
			<form class="wc-form" method="post">
				<?php do_action( 'woocommerce_login_form_start' ); ?>
				<div class="wc-form-item">
					<label for="username">
						<?php _e( 'Username or email address', 'woocommerce' ); ?>
						<span class="required">*</span>
					</label>
					<input type="text" class="wc-input" name="username" id="username" placeholder="Eq-mail" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>"
					/>
				</div>
				<div class="wc-form-item">
					<label for="password">
						<?php _e( 'Password', 'woocommerce' ); ?>
						<span class="required">*</span>
						<a class="wc-lost-password" href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
							<?php _e( 'Lost your password?', 'woocommerce' ); ?>
						</a>
					</label>
					<input class="wc-input" type="password" name="password" id="password" placeholder="Digite Sua Senha" />
					<br>
					<input class="wc-input" name="rememberme" type="checkbox" id="rememberme" value="forever" />
					<span>
						<?php _e( 'Remember me', 'woocommerce' ); ?>
					</span>
				</div>
				<?php do_action( 'woocommerce_login_form' ); ?>
				<div class="wc-form-item bt-action">
					<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					<input class="wc-login-bt" type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>"
					/>
					<a class="flip-card" href="#">
						Novo por aqui? Cadastre-se agora
					</a>
				</div>
				<?php do_action( 'woocommerce_login_form_end' ); ?>
			</form>
		</div>
		<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
		<div class="cadastro not_active">
			<h2 class="wc-titulo">
				<?php _e( 'Register', 'woocommerce' ); ?>
			</h2>
			<form method="post" class="wc-form">
				<?php do_action( 'woocommerce_register_form_start' ); ?>
				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
				<div class="wc-form-item">
					<label for="reg_username">
						<?php _e( 'Username', 'woocommerce' ); ?>
						<span class="required">*</span>
					</label>
					<input type="text" class="wc-input" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>"
					/>
				</div>
				<?php endif; ?>
				<div class="wc-form-item">
					<label for="reg_email">
						<?php _e( 'Email address', 'woocommerce' ); ?>
						<span class="required">*</span>
					</label>
					<input type="email" class="wc-input" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>"
					 placeholder="E-mail"  />
				</div>
				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
				<div class="wc-form-item">
					<label for="reg_password">
						<?php _e( 'Password', 'woocommerce' ); ?>
						<span class="required">*</span>
					</label>
					<input type="password" class="wc-input" name="password" id="reg_password"  placeholder="Digite Sua Senha"/>
				</div>
				<?php endif; ?>
				<?php do_action( 'woocommerce_register_form' ); ?>
				<div class="wc-form-item bt-action">
					<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
					<input type="submit" class="wc-login-bt" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
					<a class="flip-card" href="#">
						Já tem cadastro? entre aqui.
					</a>
				</div>
				<?php do_action( 'woocommerce_register_form_end' ); ?>
			</form>
		</div>
	</div>
	<?php endif; ?>
	<?php do_action( 'woocommerce_after_customer_login_form' ); ?>