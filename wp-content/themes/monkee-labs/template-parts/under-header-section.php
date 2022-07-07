<?php if ( 'enabled' == get_field('enable_under_header_section') ): ?>

    <section class="under-header-section">

        <div class="under-header-left-content">

            <?php
            if( have_rows( 'uh_text_content' ) ) :
                while( have_rows( 'uh_text_content' ) ) :
                    the_row();
                    $uh_label = get_sub_field( 'uh_label' );
                    $uh_title = get_sub_field( 'uh_title' );
                    $uh_description = get_sub_field( 'uh_description' );

                    if ( $uh_label ) : ?>
                        <p class="uh-introduction"><?php echo esc_html( $uh_label ); ?></p>
                    <?php endif;?>

                    <?php if ( $uh_title ) : ?>
                        <h3 class="uh-heading"><?php echo esc_html( $uh_title ) ?></h3>
                    <?php endif;?>

                    <?php if ( $uh_description ) : ?>
                        <p class="uh-description"><?php echo esc_html( $uh_description ) ?></p>
                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

	        <?php
	        //Show header button.
	        $uh_button = get_field( 'uh_button' );
	        if( $uh_button ) :
		        $uh_button_url = $uh_button['url'];
		        $uh_button_title = $uh_button['title'];
		        $uh_button_target = $uh_button['target'] ? $uh_button['target'] : '_self';
		        ?>
                <div class="under-header-btn">
                    <a href="<?php echo esc_url( $uh_button_url ); ?>" class="uh-btn" target="<?php echo esc_attr( $uh_button_target ); ?>">
                        <span><?php echo esc_html( $uh_button_title ) ?></span>
                    </a>
                </div>
	        <?php endif; ?>

        </div>

        <div class="under-header-right-content">

            <?php
            $image = get_field('uh_image');
            if( !empty( $image ) ): ?>
                <img class="uh-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>