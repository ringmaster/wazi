<?php $theme->display('header'); ?>

		<div id="posts" itemprop="blogPosts">
			<?php echo $theme->content($posts); ?>
		</div>

		<aside id="sidebar">
			<?php echo $theme->area('sidebar'); ?>
		</aside>

<?php $theme->display('footer'); ?>