<header class="header">
    <div class="header-row">

        <div class="header-logo">
			<?php
			// Show header title.
			$header_title = get_field( 'header_title', 'option' );
			if ( $header_title ) { ?>
                <div class="logo-text"><h1><?php echo esc_html( $header_title ); ?></h1></div>
				<?php
			} else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
			<?php } ?>
        </div>

        <nav class="header-nav">
			<?php
			// Show header menu.
			$menu_location = get_nav_menu_locations()['header-menu'];
			$menu_items    = wp_get_nav_menu_items( $menu_location );
			if ( isset( $menu_location ) ) {
				if ( isset( $menu_items ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'header-menu'
						)
					);
				}
			}
			?>
        </nav>

		<?php
		//Show header button.
		$header_button = get_field( 'header_button', 'option' );
		if ( $header_button ) :
			$link_url    = $header_button['url'];
			$link_title  = $header_button['title'];
			$link_target = $header_button['target'] ? $header_button['target'] : '_self';
			?>
            <div class="header-button">
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            </div>
		<?php endif; ?>

    </div>
</header>
