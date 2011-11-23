<!DOCTYPE HTML>
<html>
<head>
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="generator" content="Habari">
	<?php
		//Stack::add('template_stylesheet', array('http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css', 'screen,projection'), 'reset');
		Stack::add('template_stylesheet', array('https://raw.github.com/twitter/bootstrap/master/bootstrap-1.2.0.min.css', 'screen,projection'), 'bootstrap');
		Stack::add('template_stylesheet', array(Site::get_url('theme', '/style.css'), 'screen,projection'), 'site');
	?>
	<link rel="Shortcut Icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.png">
	<?php echo $theme->header(); ?>
</head>
<body class="<?php $theme->body_class(); ?>">

<div id="wrapper">

	<header id="hd">
		<hgroup>
			<h1><a href="/"><?php echo Options::get('title'); ?></a></h1>
			<h2><?php echo Options::get('tagline'); ?></h2>
		</hgroup>
		<nav>
		<?php echo $theme->area('nav'); ?>
		</nav>
	</header>
	<div id="bd">
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
		<?php $theme->area('sidebar'); ?>
	</aside>

  <footer id="ft"><?php $theme->area('footer'); ?></footer>

</div>
</body>
</html>
