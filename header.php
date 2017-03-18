<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN" class="pc">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
   
 <link rel="apple-touch-icon" href="http://9yo.cc/favicon.png">

<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<link rel='stylesheet' href="<?php $this->options->themeUrl('style.css'); ?>" >
<link rel='stylesheet' href="<?php $this->options->themeUrl('css/style.min.css'); ?>" 
<link rel='stylesheet' href="<?php $this->options->themeUrl('css/flexslider.css'); ?>" >
<link rel='stylesheet' href="<?php $this->options->themeUrl('css/font-awesome.css'); ?>" >
<link rel='stylesheet' href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>" >


    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="wysafe">
<div class="header">
	  	<div id="topnav">
	  		<div class="container">
	  		<div class="navnotice">
	  		<p><i class="fa fa-bell"></i>  本站正在制作模板 无视排版.</p>			</div>
			<div class="snsns">
			<a class="snsbtn weibobtn shake btn btn-sm" href="http://weibo.com/<?php $this->options->weibo(); ?>" target="_blank"><i class="fa fa-weibo"></i> 微博</a><a class="snsbtn qqbtn shake btn btn-sm" href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->qq(); ?>&site=qq&menu=yes" target="_blank"><i class="fa fa-qq"></i> QQ</a>
			<a class="snsbtn rssbtn shake btn btn-sm" href="<?php $this->options->siteUrl(); ?>rss" target="_blank"><i class="fa fa-rss-square"></i> RSS</a>
			<a class="snsbtn rssbtn shake btn btn-sm" href="https://github.com/lovezm" target="_blank"><i class="fa fa-github"></i> GitHub</a>

 			</div>

			</div>
	  	</div>
		<div id="banner">
			<div class="container">
			<div id="bannerlogo">
								<a class="shake" href="<?php $this->options->siteUrl(); ?>" title=""><img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"></a>
							</div>
			<div class="menu-button"><i class="menu-ico"></i></div>
			<div id="bannersearch">
				<form method="get" action="./" class="search-form">
							<input class="search_input" type="text" value="输入内容搜索" name="s" onfocus="if (this.value == '输入内容搜索') this.value =  '';" onblur="if (this.value ==  '') this.value = '输入内容搜索';">
							<input type="hidden" name="z" value="12450290991558529186">
							<input type="hidden" name="entry" value="1">
							<button class="search_button" type="submit"><i class="fa fa-search"></i></button>
					</form>			</div>	
			</div>	
		</div>	
		<div id="navcontent">	
			<div class="mainnav">	
			<div class="container">
			<div class="navbar">
				<div class="menu-button"><i class="menu-ico"></i></div>
				<ul id="menu-all-pages" class="menu">
					<li id="menu-item-4485" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-4485"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?> <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
</li>

				</ul>
			</div>
			<div class="navuser">
											 			
	 				<a rel="nofollow" class="btn btn-default btn-sm" id="navbar_signin" href="<?php $this->options->siteUrl(); ?>admin"><i class="fa fa-user"></i>后台</a>
					 
			</div>			
			</div>
			</div>
		</div>
		<div class="beautiful"></div>
	</div>
    
    
