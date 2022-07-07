<div class="container" id="content">
    <div class="container-front-form">
		<?php
		/*if( $_POST['submit'] ) {
		} else {
		}*/
		?>
        <form id="front-page-contact-form" action="" method="post">
            <h4 class="form-heading">
                <?php echo esc_html( 'Talk with ' ); ?><span><?php echo esc_html( 'us' ); ?></span>
            </h4>
            <div class="front-page-cont-form-inputs">
                <input type="text" name="input-name" value="" placeholder="<?php echo esc_html( 'Digite seu nome' ); ?>"/>
                <input type="email" name="input-email" value="" placeholder="<?php echo esc_html( 'Digite seu email' ); ?>"/>
                <input class="submit-btn" type="submit" name="submit" value="<?php echo esc_attr( 'Enviar' ); ?>"/>
            </div>
            <p class="front-cont-form-afterword">
                <?php echo esc_html( 'Nos envie um email e entraremos em contato' ); ?>
            </p>
        </form>
    </div>
</div>


