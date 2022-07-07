<?php
/**
 * The template for displaying the header.
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo esc_html(bloginfo('name'));?></title>
	<meta charset="<?php esc_attr(bloginfo( 'charset' )); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<?php
$bg_image_url = '';
$bg_image = get_field('background_image');
if( !empty( $bg_image ) ) {
	$bg_image_url = esc_url( $bg_image['url'] );
}?>


<div id="page" class="site">
    <div class="header-block-section">
        <img class="header-bg-img" src="<?php echo $bg_image_url; ?>" />
        <div class="container" id="content">
        <?php get_template_part( 'template-parts/site-header' ); ?>









