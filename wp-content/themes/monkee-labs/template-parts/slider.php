<?php

/**
 * Slider Block Template.
 */
?>

<div class="section-our-clients">
    <div class="section-our-clients-content">
        <div class="slider-title">
            <h4 class="center">
				<?php
				$slider_title = get_field( 'slider_title' );
				echo esc_html( $slider_title );
                ?>
            </h4>
        </div>
		<?php
		$images = get_field( 'slides' );
		if ( $images ): ?>
            <div class="carousel" data-flickity='{ "groupCells": true, "pageDots": false, "wrapAround": true, "freeScroll": true, "cellAlign": "left" }'>
				<?php foreach ( $images as $image ): ?>
                    <div class="carousel-cell">
                        <img class="carousel-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</div>