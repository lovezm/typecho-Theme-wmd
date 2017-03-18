<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="content-info">
    <div class="container">
            <div class="left">
            <ol class="post-crumb" itemscope="" itemtype="//data-vocabulary.org/Breadcrumb">
                <li><i class="fa fa-home"></i><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                <li><a href="https://www.wysafe.com/wysafe/othres" rel="category tag"><?php $this->category(','); ?></a></li>
                <li class="active"><a href="<?php $this->permalink() ?>" rel="bookmark" itemprop="url">本页</a></li>
            </ol>
            <h2 id="post-title"><?php $this->title() ?></h2>
            <div class="post-meta">
                    <span><i class="fa fa-list-alt"></i><a href="https://www.wysafe.com/wysafe/othres" rel="category tag"><?php $this->category(','); ?></a></span>
                    
                    <span><i class="fa fa-clock-o"></i><?php $this->date('F j, Y'); ?></span>
                    <div class="post-rating">
                        <div class="rate-holder clearfix" itemtype="//schema.org/AggregateRating" itemscope="" itemprop="aggregateRating"><div class="post-rate"><div class="rating-stars" title="评分 0, 满分 5 星" style="width:0%">评分 <span class="average" itemprop="ratingValue">0</span>, 满分 <span>5 星</span></div></div><div class="piao"><span itemprop="ratingCount">0</span> 票</div><div class="rating-combo" data-post-id="4838"><a class="rating-toggle" href="javascript:;" rel="nofollow"><i class="fa fa-star-half-o"></i>评价</a><ul><li><a data-rating="5" rel="nofollow"><span class="rating-star"><i class="star-5-0"></i></span></a></li><li><a data-rating="4" rel="nofollow"><span class="rating-star"><i class="star-4-0"></i></span></a></li><li><a data-rating="3" rel="nofollow"><span class="rating-star"><i class="star-3-0"></i></span></a></li><li><a data-rating="2" rel="nofollow"><span class="rating-star"><i class="star-2-0"></i></span></a></li><li><a data-rating="1" rel="nofollow"><span class="rating-star"><i class="star-1-0"></i></span></a></li></ul></div><meta content="5" itemprop="bestRating"><meta content="1" itemprop="worstRating"></div>                    </div>                    
            </div>
            </div>            
            <div class="right">
<div id="author-box">
    <img src="<?php $this->options->touxiang(); ?>" class="avatar avatar-180" height="180" width="180">    <div>
        <h3><a href="<?php $this->author->permalink(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a></h3>
        <p><?php $this->options->qianming(); ?></p>
    </div>
</div>        
            </div>
            <div class="clearfix"></div>
              
    </div>            
</div>




<div id="container" class="container">

    <div id="content">
        <div class="content-post">
            <div id="post" class="postbox">
            <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>


            </div>
            <div id="post-control">
                <div class="inner">
                    <div class="post-dashang"><a>赏<span class="code">
					<img alt=" 用<?php $this->options->payfs(); ?>扫描进行打赏" src="<?php $this->options->wxpay(); ?>"><b> 用<?php $this->options->payfs(); ?>扫描进行打赏</b></span></a></div>
                    </div>
            <div class="post-tags">
                <?php $this->tags(', ', true, '懒B博主不加标签'); ?> <div class="clearfix"></div>
            </div> 
<nav class="post-nav-arrow">
    <nav class="navigation post-navigation" role="navigation">
        <div class="nav-links">
            <div class="nav-previous">
                            </div>
            <div class="nav-next">
                            </div>
        </div>
    </nav>
</nav>                                       
        <div class="post-nav">
            <div class="post-previous">上一篇： <?php $this->thePrev('%s','没有了'); ?></div>
            <div class="post-next"> <?php $this->theNext('%s','没有了'); ?>：下一篇</div>
            <div class="clear"></div>
        </div>  
            </div>              
        <div class="clear"></div>
               
        <div class="commentbox">
             
<div id="comments"> 
<?php if($this->allow('comment')): ?>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php $this->options->duoshuo(); ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = '<?php $this->options->themeUrl("js/147953076295031_embed.js"); ?>';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>

		</ol><nav class="navigation post-navigation" role="navigation">
        <div class="nav-links">
            <div class="nav-previous">
                            </div>
            <div class="nav-next">
                            </div>
        </div>
    </nav></div>                    </div>
    </div>
     </div>      





<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
