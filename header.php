<!DOCTYPE HTML>
<html>
<head>
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="generator" content="Habari">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<link rel="stylesheet/less" href="<?php echo $theme->get_url('/less/style.less'); ?>">
	<?php
		Stack::add('template_header_javascript', $theme->get_url('/less/less-1.1.5.min.js'), 'less');
		//Stack::add('template_stylesheet', $theme->get_url('/less/style.css'), 'less');
	?>
	<link rel="Shortcut Icon" href="<?php echo $theme->get_url('/favicon.png'); ?>">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">

<div id="wrapper">

	<header id="header">
		<hgroup>
			<h1 itemprop="name"><a href="/" itemprop="url"><?php echo Options::get('title'); ?></a></h1>
			<h2 itemprop="description"><?php echo Options::get('tagline'); ?></h2>
		</hgroup>
		<?php echo $theme->area('nav'); ?>
		<?php echo $theme->area('header'); ?>
	</header>

	<div id="content">
		<?php Session::messages_out(); ?>
