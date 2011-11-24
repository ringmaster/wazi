<!DOCTYPE HTML>
<html>
<head>
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="generator" content="Habari">
	<link rel="stylesheet/less" href="<?php echo Site::get_url('theme', '/less/style.less'); ?>">
	<?php
		Stack::add('template_header_javascript', Site::get_url('theme', '/less/less-1.1.5.min.js'), 'less');
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
		<nav>
		<?php echo $theme->area('nav'); ?>
		</nav>
		<?php echo $theme->area('header'); ?>
	</header>

	<div id="content">
		<div id="posts">
			<?php Session::messages_out(); ?>

			<?php if(isset($posts) && count($posts) > 1): ?>
				<?php foreach($posts as $post) echo $theme->content($post); ?>
				<div class="pagenav">
					<?php echo $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;Posts' ) ); ?>
					<?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?>
					<?php echo $theme->next_page_link( _t( 'Older&nbsp;Posts&nbsp;&raquo;' ) ); ?>
				</div>
			<?php else: ?>
				<?php echo $theme->content($post); ?>
			<?php endif; ?>
		</div>

		<aside id="sidebar">
			<?php echo $theme->area('sidebar'); ?>
		</aside>
	</div>

  <footer id="footer"><?php echo $theme->area('footer'); ?></footer>

</div>
</body>
</html>
