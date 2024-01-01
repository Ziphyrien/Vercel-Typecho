<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-page">
    <div class="post animated fadeInDown">
        <div class="post-title"><h3><?php $this->title() ?></h3></div>
        <div class="post-content"><?php $this->content(); ?></div>
        <div class="post-footer">
        <div class="meta">
        <div class="info"><i class="fa fa-sun-o"></i><span class="date"><?php $this->date(); ?></span><i class="fa fa-tag"></i><?php $this->tags('', true, 'none'); ?>
        </div>
    </div>
    </div>
    </div>

    <div class="share">
        <?php $this->need('comments.php'); ?>
    </div>

</div>


</div><!-- end #main-->


<?php $this->need('footer.php'); ?>