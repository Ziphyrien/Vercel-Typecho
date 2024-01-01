<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator'); ?>
</head>
<body>

<div class="sidebar animated fadeInDown">
  <div class="logo-title">
    <div class="title">
      <img src="<?php $this->options->themeUrl('screenshot.png'); ?>" style="width:127px;">
      <h3 title=""><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
      </h3>
      <div class="description">
        <p>
          <?php $this->options->description() ?>
        </p>
      </div>
    </div>
  </div>
  <ul class="social-links">
    <li><a href="<?php $this->options->feedUrl(); ?>"><i class="fa fa-rss"></i></a>
    </li>
    <li><a href="mailto:info@typecho.me"><i class="fa fa-envelope"></i></a>
    </li>
    <li><a href="http://weibo.com/123108800"><i class="fa fa-weibo"></i></a>
    </li>
  </ul>
  <div class="footer">
    <span>Designed by </span><a href="https://www.vpshu.com/">XiaoYe</a>
    <div class="by_farbox">
      Proudly published with <a href="https://typechx.com" target="_blank">Typecho</a>
    </div>
  </div>
</div>



<div class="main">

  <div class="page-top animated fadeInDown">
    <div class="nav">
                    <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>

    </div>
    <div class="information">
      
      <div class="back_btn">
        <?php if($this->is('index')): ?><?php else: ?><li><a onclick="window.history.go(-1)" class="fa fa-chevron-left"></a>
        </li><?php endif; ?>
      </div>
      <div class="avatar_top">
        <img src="https://img.vpsmm.com/avatar/avatar/robot.png">
      </div>
    </div>
  </div>


  <div class="autopagerize_page_element">
    <div class="content">

    
