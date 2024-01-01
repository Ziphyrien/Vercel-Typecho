<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-page">
	<div class="post animated fadeInDown">
		<div class="post-title"><h3><?php $this->title() ?></h3></div>
		<div class="post-content"><?php $this->content(); ?></div>
	</div>
</div>


</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
