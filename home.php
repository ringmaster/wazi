<!DOCTYPE HTML>
<html>
<head>
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta charset="UTF-8">
	<meta name="generator" content="Habari">
	<?php
		Stack::add('template_stylesheet', array('http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css', 'screen,projection'), 'reset');
		Stack::add('template_stylesheet', array(Site::get_url('theme', '/style.css'), 'screen,projection'), 'site');
	?>
	<link rel="Shortcut Icon" href="<?php Site::out_url( 'theme' ); ?>/favicon.png">
	<?php $theme->header(); ?>
</head>
<body class="<?php $theme->body_class(); ?>">
<div id="yui-t1" class="yui-t1 doc-center">
	<header id="hd">
		<hgroup>
			<h1><a href="/"><?php echo Options::get('title'); ?></a></h1>
			<h2><?php echo Options::get('tagline'); ?></h2>
		</hgroup>
		<nav>
		<?php $theme->area('nav'); ?>
		</nav>
	</header>
	<div id="bd">
		<?php Session::messages_out(); ?>

		<div id="yui-main">
			<div id="primary" class="yui-b">
				<?php if(isset($posts) && count($posts) > 1): ?>
					<?php foreach($posts as $post) $theme->content($post); ?>
					<div class="pagenav">
						<?php $theme->prev_page_link( _t( '&laquo;&nbsp;Newer&nbsp;Posts' ) ); ?><?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2, 'hideIfSinglePage' => true ) ); ?> <?php $theme->next_page_link( _t( 'Older&nbsp;Posts&nbsp;&raquo;' ) ); ?>
					</div>
				<?php else: ?>
					<?php $theme->content($post); ?>
				<?php endif; ?>
		  </div>
		</div>
		<section id="sidebar" class="yui-b">
			<?php $theme->area('sidebar'); ?>
	  </section>
	</div>
			
  <footer id="ft"><?php $theme->area('footer'); ?></footer>
</div>
</body>
</html>
