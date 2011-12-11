<article id="post-<?php echo $content->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">

	<header>
		<h1 itemprop="name"><a href="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></h1>
		<details>
			<summary>
				Created on <time datetime="<?php echo $content->pubdate->format('Y-m-d\TH:i:s\Z'); ?>" pubdate itemprop="datePublished"><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time>
				by <?php echo $content->author->username; ?>.
			</summary>
			<label>Published on: <time datetime="<?php echo $content->pubdate->format('Y-m-d\TH:i:s\Z'); ?>" pubdate><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time></label>
			<label>Created by: <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->username; ?></span></span></label>
			<ul itemprop="about">
			<?php foreach($content->tags as $tag): ?>
				<li itemscope itemtype="http://schema.org"><span itemprop="name"><?php echo $tag->term_display; ?></span></li>
			<?php endforeach; ?>
			</ul>
		</details>
	</header>

	<section class="content" itemprop="articleBody">
		<?php echo $content->content_out; ?>
	</section>

	<?php if($request->display_entry): ?>
	<section class="comments" itemprop="comment">
		<h1 id="comments">Comments</h1>
		<?php foreach($content->comments->moderated->comments as $comment): ?>
			<?php echo $theme->content($comment); ?>
		<?php endforeach; ?>
		<?php $post->comment_form()->out(); ?>
	</section>
	<?php endif; ?>

</article>
