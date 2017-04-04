<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azcods_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php // icons & favicons
$favicon_img = get_field('favicon_site', option);

if( !empty($favicon_img) ): ?>

	<link rel="apple-touch-icon" href="<?php echo $favicon_img['url']; ?>">
	<link rel="icon" href="<?php echo $favicon_img['url']; ?>">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo $favicon_img['url']; ?>">
	<![endif]-->

<?php endif; ?>



<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

<?php skh_get_header_template(v2) ?>

	<div id="content" class="site-content">
