<?php
/**
 * <div style="color:rgb(9, 190, 245); font-weight:bold;">WMD主题 : WMD，一款弱鸡新人证出来的模板。<br>有什么功能？我也记不得。<br>各种抄袭样式。<br>支持设置支付宝or微信赞助二维码。<br>支持多说评论且只支持多说评论。<br>更多的请看我主题介绍页面。</div>
 * 
 * @package <div id="blink">WMD</div><script language="javascript"> var i = 1;function changeColor(){ var color="#f00|#0f0|#00f|#880|#808|#088|yellow|green|blue|gray";color=color.split("|");document.getElementById("blink").style.color=color[parseInt(Math.random() * color.length)]; }setInterval("changeColor()",100); </script>
 * @author <font color=#FF0000>WangMuDu</font>
 * @version <font color=#FF0000>1.0</font>
 * @link http://www.9yo.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div id="container" class="wysafe-my-index">
		<div class="homecmsbox wysafetop container"><div class="clearfix"></div></div>		
		<section class="postShorten-group main-content-wrap">
 
<?php /*
	if(is_home() && get_option('sticky_posts')){
    $sticky = get_option('sticky_posts'); 
    rsort( $sticky );//对数组逆向排序，即大ID在前 
    $sticky = array_slice( $sticky, 0, 3);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
    if (have_posts()) :while (have_posts()) : the_post();*/
?>
<?php if($this->_currentPage>1): ?><?php else: ?>
<?php if($this->is('index')): ?> 
<?php
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
$sticky_posts = $db->fetchAll($this->db
	->select()->from($prefix.'contents')
	->orWhere('cid = ?',$this->options->sticky_1)
	->orWhere('cid = ?',$this->options->sticky_2)
	->orWhere('cid = ?',$this->options->sticky_3)
	->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
	rsort( $sticky_posts );//对数组逆向排序，即大ID在前 
	foreach ($sticky_posts as $sticky_posts) {
		$result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
		$post_views = number_format($result['views']);
		$post_title = htmlspecialchars($result['title']);
		$post_date = date('M d,Y', $result['created']);
		$permalink = $result['permalink'];
		/*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
		echo '<article class="postShorten" itemscope="" itemtype="http://schema.org/BlogPosting" id="article">   

                        
                     
      
            <div class="postShorten-wrap">
                <div class="postShorten-header">
                    <h1 class="postShorten-title" itemprop="headline">
                        
                               <span style="color:red">[置顶] </span> <a class="link-unstyled" href="'.$permalink.'">'.$post_title.'</a>
                        
                    </h1>
                
                </div>
                
            </div>
            
                  
          
                             
                
            
        </article>'."\n\r";}
?>
<?php endif; ?>

<?php
/*global $query_string;
  query_posts( $query_string . '&ignore_sticky_posts=1' );*/
?><?php endif; ?>

        <?php while($this->next()): ?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>


     <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">  
<?php else: ?>
  <?php if (isset($this->fields->x)): ?>    
               <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">   

                       <?php else: ?><?php if (isset($this->fields->st)): ?>   <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">  <?php else: ?>
        <article class="postShorten postShorten--thumbnailimg" itemscope itemType="http://schema.org/BlogPosting" id="article">
              <?php endif; ?>  <?php endif; ?> 
                <?php endif; ?>     
      
            <div class="postShorten-wrap">
                <div class="postShorten-header">
                    <h1 class="postShorten-title" itemprop="headline">
                        
                                <a class="link-unstyled"  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?>><?php $this->title() ?></a>
                        
                    </h1>
                    <div class="postShorten-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i'); ?>">
	
		     <?php $this->date('M d,Y'); ?>
    	
    </time>
    
      	  <span>in </span>
        
    <a class="category-link"><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>


<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">Edit</a>
<?php endif;?>
    
</div>
                </div>
                <div class="postShorten-excerpt" itemprop="articleBody">        <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>
<?php else: ?>
                 <?php if (isset($this->fields->st)): ?>   <p><img src="<?php showThumbnail($this); ?>" alt=""></p> <?php endif; ?> <?php endif; ?> 
                        <p>
<?php if (isset($this->fields->d)): ?><?php $this->fields->d(); ?>...
<?php else: ?>
     <?php $this->excerpt(140, '...'); ?> 
                <?php endif; ?> 
</p>
                    
                    
                        
                            <a  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?> class="postShorten-excerpt_link link ">Continue reading</a>
                            
                        

                   
                </div>
            </div>
            
             <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>
<?php else: ?>
 <?php if (isset($this->fields->st)): ?>  <?php else: ?>
<?php if (isset($this->fields->x)): ?>    
          
                       <?php else: ?>
     
          
                <div class="postShorten-thumbnailimg">
                    <img alt="" itemprop="image" src="<?php showThumbnail($this); ?> "/>
                </div>
                <?php endif; ?>    <?php endif; ?> <?php endif; ?> 
                
            
        </article>
    
        
            <?php endwhile; ?> 
        
        
    
        
             

     
           
    
        
        <div class="pagination-bar">

   <ul class="pagination">
        
        <li class="pagination-prev">
    <?php if ($this->options->cdl == '0'): ?>
            <?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>Previous</span>&nbsp;  </b>','prev'); ?> 
<?php endif; ?><?php if ($this->options->cdl == '1'): ?> <?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>上一页</span>&nbsp;  </b>','prev'); ?> <?php endif; ?>

                </li>
 
        <li class="pagination-next">        
  <?php if ($this->options->cdl == '0'): ?>
<?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<span>Next</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</b>','next'); ?>   <?php endif; ?> <?php if ($this->options->cdl == '1'): ?><?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<span>下一页</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</b>','next'); ?> <?php endif; ?>
        </li>
        
            
 <li class="pagination-number">
<?php $this->pageLink('Return'); ?>
[ This <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> Page 
All <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?> Page ]
<?php $this->pageLink('Next','next'); ?>
</li>
    </ul>
</div>
 
</section>

		
		<div class="homecmsbox wysafebottom container"><div class="cmsbox"><div class="diaozhatian-title"><i class="fa fa-link"></i> 友情链接</div><ul class="cb_links">
		<?php $this->options->links() ?>


<div class="clearfix"></div></ul></div><div class="clearfix"></div></div></div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
