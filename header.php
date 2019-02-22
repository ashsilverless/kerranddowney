<?php
/**
 *
 * @package SLMaster === SITE HEADER
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/cky6efi.css">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div class="top-grad <?php the_field('top_gradient'); ?>"></div>
<div class="master-border top"></div>
<div class="master-border left"></div>

<div id="page" class="site <?php the_field('position_of_camp_navigator'); ?>">
	
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'slmaster' ); ?></a>

	<header>
		
		<div class="nav-trigger">
			<button class="hamburger hamburger--spin" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
				<span class="hamburger-label">Close The Menu</span>
			</button>
		</div>
	
		<a class="logo" href="<?php echo get_site_url(); ?>">

			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 313.5 141.4" style="enable-background:new 0 0 313.5 141.4;" xml:space="preserve">
			<style type="text/css">
				.lst0{display:none;}
				.lst1{display:inline;}
				.lst2{fill:#FFFFFF;}
				.lst3{fill:none;stroke:#12100B;stroke-width:4.900000e-02;stroke-miterlimit:3.864;}
				.lst4{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
			</style>
			<g id="Layer_2" class="lst0">
				<rect x="-106.3" y="-188.8" class="lst1" width="568.9" height="495.6"/>
			</g>
			<g id="Layer_1">
				<polygon class="lst2" points="149.6,1 149.6,2.5 150.5,2.5 150.5,2.1 150.5,1 149.7,0.9 	"/>
				<polyline class="lst3" points="149.6,1 149.6,2.5 150.5,2.5 150.5,2.1 150.5,1 149.7,0.9 	"/>
				<path class="lst4" d="M172.5,23.9l1-0.1l0.1-0.2l0.5,0l0,0.6l-0.2,0.3l-1,0l-0.1-0.2l-0.5-0.1l0-0.3L172.5,23.9z M172.6,18.5h-0.5
					l-0.1,0.2h-0.6l-0.1,0.2l-0.4,0.1l-0.3,0.2l-0.2,0l-0.1,0.1l0,0.1v0.3l0.3,0.1h0.4l0-0.3h0.6v0.3h0.5l0,0.3l-0.9,0.1l-0.1,0.2h-0.3
					l-0.3,0.3l0.1,0.4h0.6l0.1-0.2l0.5,0l0.1,0.2l0.4,0l-0.1,0.3l-0.7,0.2l-0.6,0.2l0,0.7l0.3-0.1c0,0,0.2-0.2,0.3-0.2
					c0.1,0,1.4,0.1,1.4,0.1l-0.1,0.4l-0.8,0l-0.3,0.4l-0.6,0l0,0.4l1.5,0.1c0,0-0.1-0.3,0-0.3h0.5l0.1,0.2h0.4l0.4-0.1l0.3,0l0.1-0.6
					l-0.6-0.1l-0.1-0.5l0.3-0.2l0-0.6l-0.7,0v-0.6l0.2-0.1l0-0.6l-0.6-0.2l0-0.6l0.3-0.2l0-0.4L172.6,18.5z M169.7,16.8l-0.2,0.4
					l0.2,0.2l0.2-0.2l0.6-0.1l0.5,0l0,0.1l-0.2,0.2l-0.5,0.1l-0.2,0.2l-0.1,0.1l-0.1,0.5l0.6,0l0.1-0.2l1.5-0.1l0.4-0.5l0.1-0.6
					l-0.2-0.3H172l-0.1-0.4l0.3,0v-0.6l-0.5,0.1l-0.5,0.2l-0.6,0.1l-0.3,0.2L169.7,16.8z M168.5,14.4l0,0.5l0.9,0l0-0.2l0.6,0l0.1,0.3
					l-0.2,0.3l-0.6,0.1l-0.3,0.3l0.2,0.3l0.5-0.1l0.4-0.3l0.6-0.1l0.6,0l0.2-0.3l0.3-0.3v-0.4l-0.2-0.2l-0.6-0.1l-0.1-0.5l0.2-0.1
					l0.2-0.1l-0.1-0.4l-0.8-0.1l-0.1,0.2l-0.6,0.2l-0.4,0.3l-0.4,0.1L168.5,14.4z M166.1,6.4l-0.7,0.7l-0.6,0.6l0,0.4l0.4,0l0.5-0.4
					l0.7,0l0,0.4l-0.4,0.2l-0.7,0.5l0.1,0.3l0.4,0.1l0.2-0.1h0.5l0.1,0.2l-0.6,0.5l0,0.2l0.6,0.1l0.3-0.5l1,0.1l0,0.4l-0.6,0.1
					l-0.4,0.4l-0.1,0.6l0.8,0.1l0.3-0.3l0.3-0.3l0.7,0l0.3,0l-0.3,0.3l-0.6,0.3l-0.4,0.3l-0.3,0.3l-0.2,0.2l0.2,0.1l0.1,0.2h0.5
					l0.1-0.2l0.3,0v-0.2l0.6,0l0,0.4l-0.6,0.3l-0.1,0.3H168l-0.1,0.5l0.6,0.1l0.1-0.2h1.6l0.6-0.8l-0.1-0.5l-0.7,0l-0.1-0.6h0.2v-0.9
					l-0.7-0.1l-0.1,0.2l-0.3-0.2l0.2-0.2l-0.1-0.9l-0.4,0l-0.1,0.1l-0.4,0.1l0.1-0.5l0.2-0.2l0-0.6l-0.3,0l-0.5,0.2l-0.3-0.1l0-0.3
					l0.3-0.1l0-0.6l-0.3,0L167,7.6l-0.5-0.1c0,0,0.1,0.1,0.2-0.2c0.1-0.3,0-1,0-1L166.1,6.4z M165.1,5.5l-1.5,1.6l0.3,0.3l0.7-0.2
					l0.2-0.4l0.5-0.3l0.4-0.1l0-1L165.1,5.5z M163.9,4.4l-0.1,0.4l-0.6,0.6l-0.4,0.5v0.4l0.5,0l0.6-0.5l0.6-0.4l0.2-0.7l-0.1-0.4
					L163.9,4.4z M162.9,3.2l-0.4,0.7L161.8,5l-0.2,0.2v0.4l0.6,0l0.2-0.5l0.6-0.3l0.3-0.2V3.4L162.9,3.2z M161.5,2.9l-0.6,0.7l-0.1,0.6
					l-0.3,0.5l0.3,0.2l0.9-0.7l0.3-0.4l0-1.1L161.5,2.9z M160.3,2.2l-0.6,1.1l-0.2,0.6h0.6l0.6-0.5l0-1l-0.2-0.3L160.3,2.2z M159.4,1.6
					l-0.7,1l-0.2,0.8l0.2,0.2l0.6-0.4l0.3-0.4l0.1-0.9l0-0.5L159.4,1.6z M158,1.3L157.6,2l-0.3,0.6v0.5l0.3,0l0.3-0.5l0.4-0.6l0.3-0.4
					l-0.2-0.5l-0.3-0.2L158,1.3z M156.6,1.1L156.1,2l0,0.6l0.5,0l0.6-0.6l0.1-0.7L157,1L156.6,1.1z M155,0.9v1.4c0,0,0.4-0.4,0.5-0.4
					c0.1,0,0.3-0.5,0.3-0.5l-0.2-0.7l-0.3-0.1l-0.2,0L155,0.9z M153.7,0.8v1.7l0.4-0.1l0.3-0.4l0.3-0.4l0-0.7l-0.2-0.2l-0.3-0.2
					l-0.3,0.1L153.7,0.8z M152.5,0.8v1.5l0.5,0.1l0.4-0.4l0.1-0.6l-0.4-0.6L152.5,0.8z M151.1,0.5l0.1,1.8l0.3,0.3l0.4-0.1l0.2-0.4V0.9
					l-0.3-0.5l-0.4,0L151.1,0.5z M147.5,1.3l0.2,1.2l0.1,0.1L148,3l0.3-0.1l0.5-0.5L149,2l-0.1-0.6l-0.3-0.3h-0.2L148.2,1l-0.4,0
					L147.5,1.3z M146,2l0.1,0.3l0.2,0.1l0.1,0.6l0.3,0.2l0.4-0.4l0.4-0.3l-0.1-0.3L147.1,2l-0.3-0.2l-0.1-0.1h-0.6L146,2z M144.7,2.3
					l-0.2,0.1l0,0.6l0.2,0.5l0.3,0.2l0.6-0.5l0-1l-0.3-0.1l-0.1-0.2l-0.5,0L144.7,2.3z M137.6,6.1l-0.1,0.3h0.7l1.3-0.7l1.5-0.8l1-0.6
					l0.2-0.4l0.3,0l0,0.5l0.6,0.3l0.8-0.7V3.2l-1.5,0l-2.4,1.3l-1.7,1.2L137.6,6.1z M134.6,7.5c1-0.9,2-0.8,2-0.8l0.1,0.2
					c0,0-1.2,0.3-2,0.8C134.7,7.8,134.6,7.5,134.6,7.5 M169.2,24v0.8l0.8,0l-0.1-0.6l-0.2-0.3L169.2,24z M169,22.7l0.1,0.5l0.2,0.2
					l0.3,0.1l0.3-0.2l-0.2-0.6l-0.3-0.3L169,22.7z M168.7,21.2l0.1,0.7l0.3,0.2l0.1-0.8L168.7,21.2z M168.3,19.7l0,0.7l0.6,0.2l0.2-0.7
					l-0.1-0.3L168.3,19.7z M167.9,17.9l0,0.7l0.4,0.2l0.3-0.3l0-0.5L167.9,17.9z M167.4,16.3h0.5l0.2,0.2v0.8l-0.3,0.1l-0.3-0.1
					l-0.1-0.3l-0.2-0.1L167.4,16.3z M166.8,15.3l0,0.4l0.6,0.1l0-0.7L167,15L166.8,15.3z M165.6,12.9l0.2,0.6l0.1,0.6l0.3,0.5h0.3
					l0.3-0.2l-0.1-0.6l-0.3-0.4l-0.4-0.1l-0.2-0.4L165.6,12.9z M164.5,11.3v0.6h0.6v-0.7L164.5,11.3z M163.6,10.3l0.1,0.4l0.8,0v-0.3
					L164,9.9L163.6,10.3z M162.5,9.1l0.1,0.6l0.5,0.2l0.3-0.2l-0.1-0.6H162.5z M161.7,8l-0.4,0.5l0.3,0.3l0.3-0.1l0.2-0.4l-0.1-0.2
					L161.7,8z M160.2,7.5v0.4l0.6,0l0.3-0.2l0.2-0.4L161,6.9l-0.5,0L160.2,7.5z M157.8,4.8l-0.6,0.4l0,0.9l0.6,0l0.4-0.1l0.2,0.2
					l0.1,0.3l0.3,0.3h0.2l0.2-0.2h0.4l0,0.6l0.6-0.1l0-0.8l-0.5-0.1l-0.2-0.7l-0.6-0.2L158.6,5L157.8,4.8z M155.7,4.4v0.8l0.8,0
					l0.4-0.5l-0.1-0.5L155.7,4.4z M154.2,4l-0.4,0.2l0.1,0.6l1.1,0.2l0.1-0.7l-0.4-0.1L154.2,4z M152,3.9l0.1,1l0.5-0.2l0.3-0.2
					l0.3-0.1l0.2-0.2V3.7l-1.1-0.1l-0.1,0.3L152,3.9z M150.6,3.7v0.6l0.4,0.4l0.4-0.3l0.3-0.1l-0.1-0.6L150.6,3.7z M148.9,3.8l0.1,0.9
					l0.6,0l0.3-0.3l0.2,0V3.9L150,3.7l-0.4-0.1L148.9,3.8z M147.4,4.2v1.1l0.7,0l0-0.4l0.3-0.2l0.1-0.2l0-0.3l-0.2-0.3l-0.7,0
					L147.4,4.2z M145.3,4.5l0,1l0.4,0.1l0.2-0.3l0-0.3l0.4,0l0.1-0.2l0.2-0.1V4.4l-0.2-0.1l-0.6-0.1l-0.2,0.2L145.3,4.5z M142,5.5
					L141.8,6l0.1,0.4l0.3,0.2l0.3-0.3l0.4-0.5h0.5l0.3,0.1l0.5,0l0.5-0.3l0.1-0.3l-0.1-0.3l-1,0l-0.4,0.3l-1,0L142,5.5z M137.8,8.2
					l1.3-1l0.9-0.7l0.9-0.6l0.4,0.1l-0.3,0.5l-0.6,0.1l-0.7,0.6l-1.3,0.9L137.8,8.2z M166.1,26.6l0.4,0.4c0,0,0.5,1.2,0.2,1.5
					c-0.3,0.3-0.6,0.7-0.6,0.7s-0.1,0-0.2-0.4c-0.2-0.4-0.3-1.1-0.3-1.1l0.3-0.7L166.1,26.6z M157.4,22.3c0,0,0.8,0.5,1.4,0.7
					c0.6,0.2,1.2,0.5,1.5,0.8c0.2,0.3,0.6,0.9,0.9,0.9c0.3,0,0.6,0.2,0.6,0.2l0.2,0.3c0,0,0.4,0.1,0.6,0.3c0.2,0.2,0.2,0.6,0.2,0.6
					l0.3,0.4c0,0,0.3,0.4,0.5,0.4c0.2,0,0.5,0.3,0.5,0.3s0.4,0.4,0.4,0.7c0,0.3,0.1,1.1-0.2,1.1c-0.3,0.1-0.9,0.2-0.9,0.2
					s-0.5,0.7-0.7,0.7c-0.2,0-0.7-0.5-0.7-0.5s-0.6-0.7-0.8-0.9c-0.2-0.1-0.7-0.4-0.7-0.4l-0.6-0.5l-0.7-1.4l-0.6-1
					c0,0-0.5-0.6-0.6-0.9c-0.1-0.4-0.3-1.2-0.3-1.2L157.4,22.3z M173.3,28.8l-0.5,0v0.6h0.3l0-0.2l0.3,0V28.8L173.3,28.8z M171.3,24.8
					c0,0,1.2-0.2,1.7,0.1c0.6,0.3,1.3,0.2,1.3,0.2s0,6.3,10.4,13.6c0,0,2.4,0.1,2.4,0.7c0,0.6-0.1,0.6-0.4,0.7
					c-0.3,0.1-0.8,0.2-0.7,0.5c0.1,0.3,0.4,1,0.8,1.2c0.4,0.2,0.7-0.1,0.8,0.2c0.1,0.3,0,0.7-0.3,0.9c-0.3,0.1-1.2,0.2-1.5,0.1
					c-0.3-0.2-1.7-0.9-2.2-1.1c-0.5-0.1-1.8-0.5-2-0.2c-0.2,0.2,0.1,0.5,1,0.8c0.9,0.2,1.6,0.4,1.6,0.7c0,0.3,0.2,0.5-0.4,0.6
					c-0.5,0.1-1.3-0.1-1.9-0.6c-0.6-0.5-1.6-0.4-2-0.4c-0.4-0.1-4.1,0.1-4.8-0.1c-0.6-0.1-4.1-0.8-4.2-1.4c-0.2-0.7-0.2-2.4,0.4-2.5
					c0.6-0.1,1.1-0.1,1.7,0.1c0.5,0.2,1.4,0.5,1.5,0.2c0.1-0.3,0.1-0.7-0.4-1.1c-0.5-0.4-1-0.6-1-1.5c0-0.9-0.2-1.2,0.4-1.4
					c0.5-0.2,1-0.2,1.5,0c0.5,0.2,1,0.2,1.5,0.8c0.5,0.6,3.4,2.8,4,3.1c0.6,0.3,0.8,0.4,1.4,0.8c0.6,0.4,1.4,0.8,1.8,0.9
					c0.4,0.1,0.7,0,0.7-0.3c-0.1-0.3-0.7-0.9-0.9-1.1c-0.2-0.2-0.7-0.4-1.2-0.7c-0.5-0.3-1.2-1.1-1.2-1.1l-0.3-0.1l-0.2-0.6l-1-0.9
					l-0.6-0.2l-0.5-0.3c0,0-0.2-0.1-0.4-0.4c-0.2-0.2-0.7-0.5-0.7-0.5l-0.2-0.8c0,0-0.5-0.5-0.8-0.6c-0.3-0.1-0.6-0.2-0.8-0.5
					c-0.2-0.3-0.8-1.1-0.8-1.1l-0.2-0.5l-0.5,0.2h-0.4l-0.2-0.5l-0.5-0.3l-0.1-0.7l0.6-0.1l0.3,0.2h0.2l-0.1-0.6l-0.5-0.4v-0.6
					l-0.2-0.2l-0.7,0.1l-0.4,0.2l-0.6-0.1l0.3-0.6l0.5-0.5l0.2-0.5l-0.1-0.7l-0.3-0.3l-0.8-0.1l-0.3-0.1l-0.2-0.3L171.3,24.8z
					 M174.7,22.4v-0.7l-0.2-0.4l-0.2-0.4l-0.5-0.3l0.1-1l-0.2-0.1l0.1-0.8l-0.2-0.2l-0.1-0.3l-0.3-0.2v-0.9l-0.2-0.4h-0.2v-1l-0.2-0.1
					v-0.7l-0.2-0.1l-0.2-0.7l-0.4-0.3v-0.6l-0.3-0.4l-0.1-0.4l-0.2-0.6l-0.3-0.4l-0.2-0.7l-0.1-0.3l-0.6-0.7l-0.1-0.6l-0.5-0.4
					l-0.2-0.6l-0.4-0.2l-0.4-0.3l-0.1-0.3l-0.1-0.3L167.9,7l-0.4-0.1l-0.2-0.4L167,6.1l-1.1-1l-0.5-0.2L165,4.5l-0.5-0.4L164,3.9
					l-0.5-0.6l-1.2-0.8l-0.5-0.3L161,1.8l-0.9-0.6l-0.9-0.4l-1.9-0.2L156,0.3h-1L153.4,0l-2.3,0.1h-0.6l-1.2,0.3l-1.2,0.3l-1.6,0.6
					l-0.8,0.5l-1.3,0.1l-2.8,1.5l-1.3,0.7l-1.6,1l-0.9,0.6l-1.6,0.8l-0.9,0.3l-1.1,0.6l-1.5,1.1l-1.6,1.2l-0.7,0.8l0.2,0.2l2.4-1.4
					l2.6-1.2l0.9-0.2l-0.1,0.3L134,10l-2.4,1.6l-1.7,1.4l0.1,0.4l2.2-1.2l1.9-1.1l2.1-1.1l2.6-1.3l2-1.2l1.6-0.7l0.6,0.3l0.4-0.6h1.6
					l1.3-0.5l1.5-0.1l0.7-0.3l0.8-0.1l0.4-0.3h0.7l0.2,0.3l0.8-0.3l0.5-0.1l0.6,0.3l1.3,0.3l1.2,0.2l0.9,0.3l1.2,0.2l0.6,0.6l0.9,0.2
					l1.1,0.7l0.4,0.4l0.5,0.4l1.1,0.7l1.2,1.1l0.3,0.6l0.7,0.2l0.3,0.6l0.7,1.8l0.3,0.4l0.4,0.8l0.1,0.6l0.6,0.6l0.1,1l0.2,0.3l0.2,1.2
					l0.4,0.2c0,0,0,0.6,0.2,0.8c0.1,0.3,0.3,0.7,0.3,0.7l0.1,1.1l0.3,0.3V23l-0.2,0.2l0.1,0.3l0.3,0.3l0.2,1.1l-0.8,0.4l-0.9,0.5
					l-1.1,0.3l-0.5-0.2l-0.3-0.7l-0.5-0.4l-0.8-0.7l-1.5-1.1c0,0-1.2-0.7-1.7-1c-0.5-0.3-1.8-0.8-1.8-0.8s-0.5-0.2-0.8-0.2
					c-0.3,0-1.8-0.9-2.1-1.2c-0.3-0.3-1-0.6-1-0.6s0.2,1.3,0.4,1.5c0.2,0.2,1.4,1.5,1.4,1.5l0.1,0.8c0,0,0.5,0.8,0.8,1.3
					c0.3,0.5,2.1,3.9,2.1,3.9l-0.4,0.6l-1.8,0.1l-1.2,0.5l-0.9,0.5l-0.5,0.7l-0.8,0.3l-1.7,0.4l-1.1,0.9l-1.8,0.9l-0.3,1
					c0,0-0.8,0.1-1.3,0.5c-0.5,0.4-0.7,0.9-0.8,1.2c-0.2,0.3-1.6,1.9-1.8,2.2c-0.2,0.3-0.8,0.2-1.2,0.2c-0.4,0.1-1.8,1.3-2.1,1.6
					c-0.2,0.3-0.1,0.6-0.1,0.6l-2,1.7c0,0-0.4,0.5-0.8,0.9c-0.5,0.4-0.8,1.2-0.8,1.2s-0.5,0.1-0.9,0.3c-0.3,0.2-0.5,0.6-0.9,0.5
					c-0.4-0.1-0.5,0.2-0.8,0.5c-0.3,0.3-0.2,1-0.5,1c-0.3,0-0.9,1.1-0.9,1.1s16.7-2.7,26.4,9.1h8.8c0,0-0.2-3,0.7-4.2
					c0.9-1.2,1.3-2.9,0.6-4.4c-0.7-1.5-1.5-4.1-0.9-4.9c0.6-1,1.6-0.2,2.5-0.2c0.9,0.1,6.6,0.7,7.1,0.5c0.5-0.2,1.1-0.5,2.9,0.4
					c1.8,0.9,2.4,0,2.8-0.1c0.4-0.1,2.5-0.1,2.8-0.5c0.3-0.3,1-0.8,1.1-1.2c0.1-0.4-0.1-1.7-0.6-2c-0.6-0.3,0-0.9-0.3-1.4
					c-0.3-0.5-3.5-2.4-4-2.8c-0.5-0.5-7-5.5-7.6-7c-0.6-1.5-1.2-2.3-1.4-4.3C174.7,22.7,174.7,22.4,174.7,22.4"/>
				<rect x="0.2" y="132.9" class="lst2" width="80.5" height="1.2"/>
				<rect x="227.2" y="132.9" class="lst2" width="80" height="1.2"/>
				<path class="lst4" d="M13.5,77.9c-0.3,0.3-0.6,0.4-0.8,0.4c-0.2,0-0.4-0.3-0.4-0.8V60.6c0-5.3,4.4-5.1,4.4-6.8
					c0-0.5-0.2-0.7-0.6-0.7c-2.3,0-4.6,0.3-7.8,0.3c-2.5,0-4.9-0.3-7.3-0.3c-0.7,0-1,0.2-1,0.8c0,2,6.3,0.7,6.3,6.9v38.5
					c0,6.4-5.3,6.2-5.3,7.4c0,1.1,1.1,1.2,1.9,1.2c1.2,0,3.5-0.3,7.4-0.3c5.8,0,7.2,0.3,7.4,0.3c0.5,0,2,0,2-0.7c0-2.7-7.4-0.3-7.4-8.6
					V83c0-0.5,0.3-0.8,0.7-0.8c0.4,0,0.9,0.2,1.4,0.8l21.2,22.1c0.7,0.7,8,6.3,11.9,7.9c1.5,0.6,4.8,1,6.4,1c1.5,0,3-0.5,4.9-0.9
					c0.5-0.1,4.6-2.7,4-2.6c-14.6,1.9-17-4-23-9.2L18.7,79.3c-0.5-0.6-0.8-1-0.8-1.4c0-0.4,0.5-0.8,1.1-1.4l17.6-15.7
					c8.6-7,10.3-4.7,10.3-7.1c0-0.5-0.9-0.6-1.4-0.6c-2.4,0-3,0.3-6.9,0.3c-4,0-5.2-0.3-8-0.3c-0.6,0-1,0.3-1,0.9
					c0,1.4,4.2,1.7,4.2,4.1c0,1.9-3.9,4.8-5.3,6.1L13.5,77.9z"/>
				<path class="lst4" d="M43.3,70.1c0-3.5-0.1-3.3,4.9-3.3c2.1,0,7.5-0.3,8.9,1.5c0.8,1.2,0,3.7,1.2,3.7c0.3,0,1-0.4,1-6.2
					c0-0.6-0.1-1.1-0.5-1.1c-1.6,0-6.4,0.2-7.4,0.2c-2.2,0-4.9-0.2-14.7-0.2c-1.5,0-1.8,0.2-1.8,0.6c0,0.6,1.1,0.7,1.6,0.8
					c2.8,0.4,2.8,2.9,2.8,5.3v23.8c0,2.4-0.1,3.9-1.5,4.5c-1.7,0.8-2.2,0.7-2.3,1.4c0,0.4,0.3,0.5,0.8,0.5c2.1,0,4.3-0.1,6.4-0.2
					c4-0.1,7.9,0.2,11.9,0.2c2.3,0,3.4,0.1,5.1-1.8c1.3-1.4,2.6-3.2,2.6-5.1c0-0.1,0-0.6-0.4-0.6c-0.7,0-2.5,5.4-14.5,5.4
					c-4.4,0-4-1.2-4-4.3v-9.6c0-0.8-0.1-1.7,0.9-1.7H52c4.4,0,2.6,4.6,4.2,4.6c0.4,0,0.6-0.2,0.6-0.7c0-1.4-0.1-2.8-0.1-4.1
					c0-1.7,0.1-3.4,0.1-5.3c0-0.4-0.2-1-0.6-1c-1.2,0,0.2,4.2-5.3,4.2h-5.6c-2.1,0-2,0-2-1.8V70.1z"/>
				<path class="lst4" d="M99.8,94.7c-4.7,0-9.4-4.1-9.4-9c0-2.1,1.7-5,4-5c1.3,0,4.1,4.9,11.9,11.6C104.6,93.9,102.2,94.7,99.8,94.7
					 M103.6,72.4c0-0.3,0.1-1-0.4-1c-0.3,0-0.5,0.3-0.7,0.3c-0.2,0-1.6-1-3.9-1c-3,0-5.9,1.6-5.9,5c0,1.5,0.7,3,1.7,4.2
					c-3.9,0.8-5.8,3.8-5.8,7.8c0,5.7,4.7,9.2,10.1,9.2c3.6,0,6.4-1.2,9-3.7c2,1.6,4,3.7,6.8,3.7c1.2,0,3-0.6,3-1.2c0-0.1,0-0.3-0.3-0.3
					c-0.3,0-0.6,0.2-1.4,0.2c-1.6,0-5.1-3.5-6.5-4.6c1.2-2.1,1.5-4.4,1.7-6.7c0.2-1.6,1.6-1.2,1.6-1.8c0-0.4-0.2-0.4-0.5-0.4
					c-1.2,0-1.9,0.1-2.3,0.1c-0.5,0-1.8-0.1-3.2-0.1c-0.3,0-0.8-0.1-0.8,0.3c0,1.2,3.4-0.3,3.4,4c0,1.5-0.1,2.9-1.1,3.9
					c-7.9-7.3-13.3-13.1-13.3-15.5c0-1.8,1.4-3,3-3c2.2,0,4.1,1.9,5,3.8c0.1,0.2,0.2,0.7,0.6,0.7c0.1,0,0.4-0.1,0.4-0.3L103.6,72.4z"/>
				<path class="lst4" d="M196,97.2c1.5,3.6,1.8,5.1,2.6,5.1c0.6,0,0.9-0.3,1.3-1.3l5.8-14.5c0.2-0.4,0.4-0.4,0.5-0.4
					c0.2,0,0.3,0.2,0.4,0.5l5.7,13.7c0.7,1.7,0.9,2,1.4,2c0.8,0,1.2-1,1.5-1.7l13.4-31.6c1.7-4.1,3-2.7,3-3.8c0-0.6-0.3-0.6-0.6-0.6
					c-1.2,0-2.8,0.2-4.3,0.2c-1.2,0-2.4-0.2-3.6-0.2c-0.4,0-0.6,0.4-0.6,0.8c0,1,3.4,0.7,3.4,2.9c0,0.6-0.1,1.1-0.4,1.7L216,93.4
					c-0.5,1.1-0.8,1.9-1.2,1.9c-0.3,0-0.6-0.4-1.1-1.6l-4.4-10.8c-0.3-0.8-0.7-2-0.7-2.5c0-0.5,0.1-0.9,0.5-2l3.7-8.5
					c2.3-5.5,3.6-3.5,3.6-5c0-0.2-0.2-0.3-0.4-0.3c-0.9,0-1.5,0.2-3.8,0.2c-1.1,0-2.2-0.2-3.4-0.2c-0.3,0-1,0-1,0.5
					c0,1.1,3.1,0.8,3,3.1c0,0.5-0.3,1.4-0.5,1.9l-2.5,6.1c-0.3,0.7-0.6,1.3-0.7,1.3c-0.1,0-0.3-0.4-0.7-1.4l-2.7-6.9
					c-0.3-0.6-0.4-0.9-0.4-1.6c0-1.7,2.1-1.6,2.1-2.4c0-0.3-0.1-0.6-0.3-0.6c-1.2,0-2.6,0.2-5.1,0.2c-0.7,0-3.5-0.2-5.3-0.2
					c-0.5,0-0.8,0.1-0.8,0.6c0,1.8,3.7-0.1,5.1,3.3l5.2,12.6c0.3,0.7,0.5,1.3,0.5,1.6c0,0.3-0.2,1.1-0.6,2.1l-3.9,9.2
					c-0.2,0.6-0.5,0.9-0.7,0.9c-0.3,0-0.7-0.8-0.9-1.4l-9.9-24.5c-0.2-0.5-0.3-1-0.3-1.3c0-1.8,2.2-1.8,2.2-2.6c0-0.4-0.1-0.6-0.4-0.6
					c-1.3,0-2.5,0.2-3.8,0.2c-1.5,0-3.1-0.2-4.6-0.2c-0.5,0-1.2,0.2-1.2,0.8c0,1,2.5,0.4,3.7,3.4L196,97.2z"/>
				<path class="lst4" d="M268.2,70.1c0-3.5-0.1-3.3,4.9-3.3c2.1,0,7.5-0.3,8.9,1.5c0.8,1.2,0,3.7,1.3,3.7c0.3,0,1-0.4,1-6.2
					c0-0.6-0.1-1.1-0.5-1.1c-1.6,0-6.4,0.2-7.5,0.2c-2.2,0-4.9-0.2-14.7-0.2c-1.5,0-1.8,0.2-1.8,0.6c0,0.6,1.1,0.7,1.6,0.8
					c2.8,0.4,2.8,2.9,2.8,5.3v23.8c0,2.4-0.1,3.9-1.4,4.5c-1.7,0.8-2.2,0.7-2.3,1.4c0,0.4,0.3,0.5,0.8,0.5c2.1,0,4.3-0.1,6.4-0.2
					c4-0.1,7.9,0.2,11.9,0.2c2.3,0,3.4,0.1,5.1-1.8c1.2-1.4,2.6-3.2,2.6-5.1c0-0.1-0.1-0.6-0.4-0.6c-0.7,0-2.5,5.4-14.5,5.4
					c-4.4,0-4-1.2-4-4.3v-9.6c0-0.8-0.2-1.7,0.9-1.7h7.7c4.4,0,2.6,4.6,4.2,4.6c0.4,0,0.6-0.2,0.6-0.7c0-1.4-0.1-2.8-0.1-4.1
					c0-1.7,0.1-3.4,0.1-5.3c0-0.4-0.2-1-0.6-1c-1.3,0,0.2,4.2-5.3,4.2h-5.6c-2.1,0-2,0-2-1.8V70.1z"/>
				<path class="lst4" d="M295.4,81.8c0.4,0.6,1.2,1.7,1.2,2.7v12.6c0,3.7-4,2.3-4,3.8c0,0.6,0.3,0.6,0.8,0.6c0.5,0,2.3-0.2,4.7-0.2
					c1.9,0,4.9,0.2,5.7,0.2c0.7,0,1.2,0,1.2-0.5c0-1.6-4.3-0.2-4.3-4.7V83.6c0-0.8,0.4-1,1.3-2.3l7.3-11.3c0.8-1.3,1.5-2.8,2.9-3.6
					c0.4-0.2,1.3-0.4,1.3-1c0-0.3-0.3-0.6-0.6-0.6c-1.5,0-3,0.2-4.5,0.2c-1.3,0-2.6-0.2-3.8-0.2c-0.6,0-1.1,0.1-1.1,0.8
					c0,1.3,3.9,0.2,3.9,2.7c0,1.4-0.7,2.3-1.1,2.9l-5.4,8.7c-0.4,0.7-0.7,1-1,1c-0.3,0-0.6-0.3-1-0.9l-6.3-10.1
					c-0.3-0.5-0.9-1.3-0.9-2.1c0-1.5,2.5-1.6,2.5-2.4c0-0.5-0.6-0.5-1-0.5c-0.5,0-1.9,0.2-3.6,0.2c-3.5,0-4.5-0.2-5.9-0.2
					c-0.4,0-0.7,0.4-0.7,0.8c0,0.9,2.5,0.3,3.9,2.5L295.4,81.8z"/>
				<path class="lst4" d="M77.1,82.7c3.6-1.5,6.6-4.9,6.6-9c0-10-11.5-9-12.3-9c-2.7,0-5.7,0.2-8.7,0.2c-2.6,0-2.4-0.2-3.3-0.2
					c-0.6,0-1,0.3-1,0.6c0,1.8,4.5-0.4,4.5,4.6v26.5c0,4-3.8,3.2-3.8,4.5c0,0.3,0.2,0.6,0.5,0.6c2,0,4-0.2,5.9-0.2c4.3,0,5.5,0.2,6,0.2
					c0.4,0,0.9,0.1,0.9-0.4c0-1.8-5.4-0.2-5.4-4.6v-11c0-0.5-0.3-1.5,1.4-1.5c5.8,0,5-0.2,6.9,2.8l5.8,9.1c2,3,11,17.6,19.8,18.6
					c4.7,0.5,10.7-3.5,10.7-4.1c0-1.3-11,11-25.5-14.5L77.1,82.7z M66.8,68.3c0-2,1.1-1.9,3-1.9c5.1,0,9.9,2.1,9.9,8.5
					c0,6.5-5,7.4-7.2,7.4c-2.4,0-5.7,0.3-5.7-0.7V68.3z"/>
				<path class="lst4" d="M228.8,94.1c0,7.3-4.6,5-4.6,6.8c0,0.3,0,0.6,0.7,0.6c0.4,0,3.1-0.2,4.9-0.2c2.6,0,4,0.2,5.3,0.2
					c0.5,0,0.6-0.4,0.6-0.7c0-1.4-4.6,0.4-4.6-4.3V75.3c0-1,0.2-1.2,0.4-1.2c0.4,0,1,0.9,1.1,1l22.4,25.2c1.1,1.2,1.6,1.5,2,1.5
					c0.4,0,0.5-0.7,0.5-2.2V69.3c0-3.8,3.1-2.9,3.1-4.2c0-0.3-0.2-0.5-0.5-0.5c-1.2,0-3.5,0.2-5.3,0.2c-1.7,0-3.2-0.2-4.7-0.2
					c-0.3,0-0.6,0.2-0.6,0.5c0,1.7,5.8-0.3,5.8,6.6v21.8c0,0.4-0.1,0.6-0.2,0.6c-0.1,0-0.3-0.2-0.6-0.6l-24.8-27.7
					c-0.3-0.4-0.8-1.2-1.3-1.2c-0.8,0-1.6,0.2-2.4,0.2c-0.8,0-1.6-0.2-2.4-0.2c-0.3,0-0.8,0.2-0.8,0.5c0,1.9,6.3-1.1,6.3,9.7V94.1z"/>
				<path class="lst4" d="M252.5,97.8c2.3,2.8,12.8,15.8,21.6,16.4c4.7,0.3,10-3.8,9.9-4.4c-0.1-1.2-9.2,10.2-26.7-13.1L252.5,97.8z"/>
				<path class="lst4" d="M127.8,60.8c0-3.5,0.3-4.7,7.4-4.7c14.3,0.1,25.5,9.6,25.5,26.3c0,17.4-10.2,23.1-20.9,23.1
					c-3.4,0-9.1-0.9-11.6-3.4c-0.7-0.7-0.5-4.3-0.5-5.5V60.8z M121.9,99.8c0,7.2-5.4,5.3-5.4,7c0,0.5,0.2,0.8,0.8,0.8
					c0.5,0,7.8-0.3,8.4-0.3c3.8,0,7.7,0.3,11.5,0.3c20.9,0,29.1-12,29.1-29.3c0-13.9-13.1-24-26.4-24c-6.5,0-11.4,0.3-16.3,0.3
					c-2.3,0-4.4-0.3-6.8-0.3c-0.5,0-1.1,0.2-1.1,0.7c0,2,6.2-0.4,6.2,7.3V99.8z"/>
				<path class="lst4" d="M166.5,65.9c10.2,0,16.6,9.2,16.6,18.7c0,9.6-6.1,15.7-13.7,15.7c-10.3,0-16.6-9.3-16.6-19
					C152.8,73.1,157.8,65.9,166.5,65.9 M167.2,101.9c11.6,0,19.7-7.5,19.7-19.3c0-10.8-8.2-18.4-18.8-18.4c-10.7,0-19.1,7.9-19.1,18.7
					C149,93.9,155.9,101.9,167.2,101.9"/>
				<g>
					<path class="lst2" d="M94,127h4.1c1.9,0,3.3,0.3,4.1,0.9s1.3,1.5,1.3,2.7c0,0.8-0.2,1.5-0.7,2.1s-1.1,0.9-2,1.1v0.1
						c1.1,0.2,1.9,0.6,2.4,1.1s0.8,1.3,0.8,2.3c0,1.3-0.4,2.3-1.3,3s-2.1,1.1-3.7,1.1h-5V127z M95.8,133h2.6c1.1,0,1.9-0.2,2.4-0.5
						s0.8-1,0.8-1.8c0-0.8-0.3-1.3-0.8-1.7s-1.4-0.5-2.6-0.5h-2.4V133z M95.8,134.5v5.2h2.9c1.1,0,2-0.2,2.5-0.7s0.8-1.1,0.8-2
						c0-0.9-0.3-1.5-0.9-1.9s-1.5-0.6-2.6-0.6H95.8z"/>
					<path class="lst2" d="M121.4,134.1c0,2.3-0.6,4.1-1.7,5.4s-2.8,2-4.8,2c-2.1,0-3.7-0.6-4.9-1.9s-1.7-3.1-1.7-5.4
						c0-2.3,0.6-4.1,1.7-5.4c1.1-1.3,2.8-1.9,4.9-1.9c2.1,0,3.7,0.6,4.8,1.9S121.4,131.8,121.4,134.1z M110.2,134.1
						c0,1.9,0.4,3.3,1.2,4.3s2,1.5,3.5,1.5c1.5,0,2.7-0.5,3.5-1.5s1.2-2.4,1.2-4.3c0-1.9-0.4-3.3-1.2-4.3s-1.9-1.5-3.5-1.5
						c-1.5,0-2.7,0.5-3.5,1.5S110.2,132.2,110.2,134.1z"/>
					<path class="lst2" d="M130.8,141.2H129v-12.7h-4.5V127h10.7v1.6h-4.4V141.2z"/>
					<path class="lst2" d="M147.5,137.4c0,1.2-0.4,2.2-1.3,2.9s-2.1,1.1-3.8,1.1c-1.7,0-3-0.2-3.9-0.7V139c0.6,0.3,1.3,0.5,2,0.6
						s1.4,0.2,2,0.2c1.1,0,1.9-0.2,2.4-0.6s0.8-1,0.8-1.7c0-0.5-0.1-0.9-0.3-1.2s-0.5-0.6-1-0.9s-1.2-0.6-2.1-0.9
						c-1.3-0.5-2.3-1-2.8-1.7s-0.8-1.5-0.8-2.5c0-1.1,0.4-2,1.3-2.7s1.9-1,3.3-1c1.4,0,2.7,0.3,3.9,0.8l-0.6,1.5
						c-1.2-0.5-2.4-0.8-3.4-0.8c-0.8,0-1.5,0.2-2,0.5s-0.7,0.9-0.7,1.5c0,0.5,0.1,0.9,0.3,1.2s0.5,0.6,0.9,0.8s1.1,0.5,1.9,0.9
						c1.1,0.4,1.9,0.8,2.4,1.1s0.9,0.8,1.2,1.3S147.5,136.8,147.5,137.4z"/>
					<path class="lst2" d="M165,141.2h-1.8l-2.8-9.4c-0.4-1.4-0.7-2.3-0.7-2.8c-0.1,0.7-0.3,1.7-0.7,2.9l-2.7,9.3h-1.8l-3.8-14.3h1.9
						l2.2,8.7c0.3,1.1,0.5,2.3,0.7,3.4c0.1-1.1,0.4-2.2,0.8-3.5l2.5-8.6h1.9l2.6,8.7c0.3,1.1,0.6,2.3,0.8,3.4c0.1-0.9,0.3-2,0.7-3.4
						l2.2-8.7h1.9L165,141.2z"/>
					<path class="lst2" d="M181.6,141.2l-1.7-4.4h-5.7l-1.7,4.4h-1.8l5.6-14.3h1.6l5.6,14.3H181.6z M179.3,135.2l-1.6-4.3l-0.7-2.1
						c-0.2,0.8-0.4,1.5-0.6,2.1l-1.6,4.3H179.3z"/>
					<path class="lst2" d="M198.7,141.2h-2.1l-7.6-11.9h-0.1l0,0.8c0.1,1.2,0.1,2.2,0.1,3.1v8h-1.7V127h2.1l0.4,0.7l4.7,7.2l2.5,3.9h0.1
						c0-0.2,0-0.7-0.1-1.7s-0.1-1.7-0.1-2.1V127h1.7V141.2z"/>
					<path class="lst2" d="M213.6,141.2l-1.7-4.4h-5.7l-1.7,4.4h-1.8l5.6-14.3h1.6l5.6,14.3H213.6z M211.3,135.2l-1.6-4.3l-0.7-2.1
						c-0.2,0.8-0.4,1.5-0.6,2.1l-1.6,4.3H211.3z"/>
				</g>
			</g>
			</svg>

		</a>
	 
		 <div class="nav-wrapper">

		 <div class="custom-menu-class">

		<?php if( have_rows('main_menu', 'option') ): ?>	
	
			<ul id="menu-main" class="menu">
	
				<?php while ( have_rows('main_menu', 'option') ) : the_row(); ?>
				
				<li><a href="<?php the_sub_field('page_target'); ?>">
						<span><img src="<?php the_sub_field('icon'); ?>"/></span>
						<span><?php the_sub_field('navigation_label'); ?></span>
					</a>
				</li>
				
				<?php   endwhile;?>
	
			</ul>
	
		<?php   endif;?>
			 
		 </div>

			<!--<?php
			wp_nav_menu( array( 
			    'theme_location' => 'my-custom-menu', 
			    'container_class' => 'custom-menu-class' ) ); 
			?>-->   
			
			<div class="channels">
				<p>Our Channels</p>
				<?php get_template_part( 'template-parts/social', 'links' );?>	
			</div>
		
		 </div>
	
	</header>

