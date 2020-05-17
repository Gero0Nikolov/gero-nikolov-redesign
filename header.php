<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gero\'s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php wp_head(); ?>
<script type="text/javascript">
jQuery( document ).ready(function(){
	setTimeout( function(){ jQuery( "#sbi_load .sbi_load_btn" ).trigger( "click" ); }, 1000 );
});
</script>
</head>

<body <?php body_class( wp_is_mobile() ? "mobile" : "desktop" ); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
