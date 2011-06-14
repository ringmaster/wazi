<article>
	<header>
		<time datetime="<?php echo $content->pubdate->format('Y-m-d H:i:s'); ?>" pubdate><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time><h1><a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a></h1>
	</header>

<?php echo $content->content_out; ?>
</article>