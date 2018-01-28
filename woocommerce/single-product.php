<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	<div class="wc-product-page">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			    <?php  $product_obj = wc_get_product(intval( get_the_ID()));
			 	    //	var_dump($product_obj);
			     ?>
		 
			<?php //wc_get_template_part( 'content', 'single-product' ); ?>
			<div class="wc-single-product">
				<div class="product-left">
					<figure class="media">
						<img class="wc-img-tumb" src="<?php the_post_thumbnail_url(); ?>" alt="">
					</figure>
					<p class="info-img">
						Imagens ilustrativas: As imagens do livro podem variar de acordo com o ano da edição e o estado de conservação do livro.
					</p>
				</div>
				<div class="info">
					<div class="primary">
						<div class="titulo">
							<h1>
								<?php the_title(); ?>
							</h1>
						</div>
						<div class="sub">
							<div class="autor">
							</div>
							<div class="categoria">
							</div>
						</div>
					</div>
					<div class="action">
						<?php ?>
						<div class="comprar">
							<?php do_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 ); ?>
						</div>
						<div class="vender">
						</div>
						<div class="desejo">
						</div>
					</div>
					<div class="secondary">
						<?php   the_content() ?>
					</div>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>

			<div class="vendors">
				<div class="info">
					<div class="qtd-info"></div>
					<div class="filter"></div>
				</div>
				<div class="list">
				</div>
			</div>
		</div>
	</div>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	?>
    <?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
	//	do_action( 'woocommerce_after_main_content' );
	?>
    <?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>


    <?php   get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */