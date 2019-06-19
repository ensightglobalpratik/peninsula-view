<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peninsula_View
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<header id="header">
		<div class="container">
			<div class="row">
				<a href="#" class="logo" title="Peninsula View"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-peninsula-view-1.svg" alt="Peninsula View"></a>
				<div class="header-right-sec">
					<?php wp_nav_menu(array('menu_class' => 'enumenu_ul menu', 'menu' => 'Main Menu'));
					?>
					<a href="tel:132278" title="Call Us" class="call-btn">CALL 13 BAPTCARE (13 22 78)</a>
					<a href="#" class="btn enq-btn">ENQUIRE</a>
				</div>
			</div>
		</div>
	</header>
