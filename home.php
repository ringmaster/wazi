<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo Options::get('title'); ?></title>
	<?php
		Stack::add('template_stylesheet', array('http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css', 'screen,projection'), 'reset');
		Stack::add('template_stylesheet', array(Site::get_url('theme', '/style.css'), 'screen,projection'), 'site');
	?>
	<?php $theme->header(); ?>
</head>
<body id="body">
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
				<?php foreach($posts as $post) $theme->content($post); ?>
		  </div>
		</div>
		<section id="sidebar" class="yui-b">
			<?php $theme->area('sidebar'); ?>
	  </section>
	</div>
			
  <footer id="ft">My footer stuff</footer>
</div>
</body>
</html>
