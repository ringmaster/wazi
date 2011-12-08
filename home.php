<!DOCTYPE HTML>
<html>
<head>
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="generator" content="Habari">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<link rel="stylesheet/less" href="<?php echo Site::get_url('theme', '/less/style.less'); ?>">
	<?php
		Stack::add('template_header_javascript', Site::get_url('theme', '/less/less-1.1.5.min.js'), 'less');
		//Stack::add('template_stylesheet', Site::get_url('theme', '/less/style.css'), 'less');
	?>
	<link rel="Shortcut Icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.png">
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>">

<div id="wrapper">

	<header id="header">
		<hgroup>
			<h1><a href="/"><?php echo Options::get('title'); ?></a></h1>
			<h2><?php echo Options::get('tagline'); ?></h2>
		</hgroup>
		<?php echo $theme->area('nav'); ?>
		<?php echo $theme->area('header'); ?>
	</header>

	<div id="content">
		<div id="posts">
			<?php Session::messages_out(); ?>

			<?php echo $theme->content($posts); ?>
		</div>

		<aside id="sidebar">
			<?php echo $theme->area('sidebar'); ?>
		</aside>
	</div>

  <footer id="footer"><?php echo $theme->area('footer'); ?><?php echo $theme->footer(); ?></footer>

</div>
</body>
</html>
