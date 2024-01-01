<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

 <?php while($this->next()): ?>

<div class="post animated fadeInDown">
        <div class="post-title">
          <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
          </h3>
        </div>
        <div class="post-content">
          <div class="p_part">
            <p>
              <?php $this->excerpt(130, '。'); ?>
            </p>
          </div>

        </div>
        <div class="post-footer">
          <div class="meta">
            <div class="info">
              <i class="fa fa-sun-o"></i><span class="date"><?php $this->date(); ?></span><i class="fa fa-comment-o"></i><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a><i class="fa fa-tag"></i><?php $this->category(''); ?>
            </div>
          </div>
        </div>
</div>


<?php endwhile; ?>

<div class="pagination">
        <ol>
        <li><?php $this->pageLink('<x aria-label="Previous">上一页</x>'); ?></li>
        <li><?php $this->pageLink('<x aria-label="Next">下一页</x>','next'); ?></li>
        </ol>
</div>


<?php $this->need('footer.php'); ?>