<?php if ( !function_exists( 'elementor_theme_do_location' ) || !elementor_theme_do_location( 'footer' ) ) { ?>

			<?php global $page_id, $woocommerce; ?>

			<?php

			$page_footer_option = "on";

			if (get_post_meta( $page_id, 'footer_meta_box_check', true )) {
				$page_footer_option = get_post_meta( $page_id, 'footer_meta_box_check', true );
			}

			if ( SHOPKEEPER_WOOCOMMERCE_IS_ACTIVE ) {
				if (is_shop() && get_post_meta( get_option( 'woocommerce_shop_page_id' ), 'footer_meta_box_check', true )) {
					$page_footer_option = get_post_meta( get_option( 'woocommerce_shop_page_id' ), 'footer_meta_box_check', true );
				}
			}

			?>

			<?php if ( $page_footer_option == "on" ) : ?>

				<footer id="site-footer" class="site-footer">

				<div class="custom-footer">
					<figure class="figure-logo">
					<img
						src="https://kokoro-shop.fr/wp-content/uploads/2022/10/Rouge.png"
						alt="logo"
						class="logo"
					/>
					</figure>
					<div class="nav-footer">
					<p class="text-footer">Made with ❤️ by Kokoro</p>
					<div class="social-media">
						<p class="follow-us">Suivez-nous :</p>
						<a href="https://www.instagram.com/kokoro.cst/?hl=en" class="insta" target="_blank">
						<img
							src="https://kokoro-shop.fr/wp-content/uploads/2022/12/instagram.png"
							alt="insta"
						/>
						</a>
					</div>
					</div>
          		</div>

				</footer>

			<?php endif; ?>

			</div><!-- #page_wrapper -->

		</div><!--</st-content -->

	</div><!-- .st-container -->

<?php } ?>

<?php do_action( 'wp_footer_components' ); ?>

<?php wp_footer(); ?>

</body>

</html>
