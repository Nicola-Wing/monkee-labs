<?php
$accordion_header = get_field( 'accordion_header', 'option' );
if ( $accordion_header ) : ?>
    <div class="faq-container-header">
        <div class="col-faq-container-header">
            <h4 class="center"><?php echo esc_html( $accordion_header ); ?></h4>
        </div>
    </div>
<?php endif; ?>

<?php
if ( have_rows( 'accordion_content', 'option' ) ) : ?>
    <div class="faq-section">
        <div class="col-faq-section">
            <div class="accordion-container">
				<?php
				$faq_number = 0;
				while ( have_rows( 'accordion_content', 'option' ) ) :
					the_row();
					$question = get_sub_field( 'question' );
					$answer   = get_sub_field( 'answer' );
					if ( $question && $answer ) :
						?>
                        <div class="accordion-item">
                            <div class="accordion-question-container">
                                <h6><?php echo esc_html( $question ) ?></h6>
                            </div>
                            <div class="accordion-answer-container">
                                <p><?php echo esc_html( $answer ) ?></p>
                            </div>
                        </div>
					<?php endif; ?>

				<?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
