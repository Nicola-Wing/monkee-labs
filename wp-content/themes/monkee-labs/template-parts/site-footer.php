<div class="footer">
	<?php
	$footer_bg_image = get_field( 'footer_bg_image', 'option' );
	if ( ! empty( $footer_bg_image ) ): ?>
        <img class="footer-image"
             src="<?php echo esc_url( $footer_bg_image['url'] ); ?>"
             alt="<?php echo esc_attr( $footer_bg_image['alt'] ); ?>"
        />
	<?php endif; ?>

    <div class="col-info">
        <div class="contacts">
			<?php
			$contact_title = get_field( 'contact_title', 'option' );
			$contact_phone = get_field( 'contact_phone', 'option' );
			$contact_email = get_field( 'contact_email', 'option' );

			if ( $contact_title ) : ?>
                <h3><?php echo esc_html( $contact_title ); ?></h3>
			<?php endif; ?>
			<?php if ( $contact_phone ) : ?>
                <a href="tel:<?php echo esc_attr( $contact_phone ); ?>"><?php echo esc_html( $contact_phone ); ?></a>
			<?php endif; ?>
			<?php if ( $contact_email ) : ?>
                <a class="email" href="mailto:mail@<?php echo esc_attr( $contact_email ); ?>">
                    <?php echo esc_html( $contact_email ); ?>
                </a>
			<?php endif; ?>
        </div>
    </div>
    <div class="col-footer-menu">
		<?php
		// Show header menu.
		$footer_menu_location = get_nav_menu_locations()['footer-menu'];
		$f_menu_items         = wp_get_nav_menu_items( $footer_menu_location );
		if ( isset( $footer_menu_location ) ) {
			if ( isset( $f_menu_items ) ) { ?>
                <div class="footer-menu-title">
                    <h4><?php echo esc_html( 'Menu' ); ?></h4>
                </div>
                <div class="footer-menu-content">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_class'     => 'footer-menu-items',
						)
					); ?>
                </div>
				<?php
			}
		}
		?>

    </div>
</div>
<div class="copy-rights">
    <div class="col-copy-rights">
        <hr>
        <div class="social-info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.png" alt="inst-icon"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.png" alt="fb-icon"/>
            <p><?php echo esc_html( '2021 Infografic. Todos direitos reservados' ); ?></p>
        </div>
    </div>
</div>