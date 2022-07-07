<?php
/**
 * Template file for front page of MonkeeLabs Theme.
 */

get_header();

get_template_part( 'template-parts/under-header-section' );
?>
    </div> <!-- End .content -->
</div> <!-- End .header-block-section -->

<div class="container" id="content">
    <section class="section-gut-content">
        <?php the_content(); ?>
    </section>
</div>

<div class="container-full-width">
    <?php get_template_part( 'template-parts/front-page-contact-form' ); ?>
</div>

<div class="faq-container">
	<?php get_template_part( 'template-parts/faq-container' ); ?>

	<?php get_footer(); ?>
