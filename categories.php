<?php 
/**
 * categories
 * 
 * @package custom 
 * 
 */
 
?>  <header id="header">


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                href="#about">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

 <nav id="sidebar">

<div id="main" class="hasCoverMetaIn">
                <div id="categories-archives" class="main-content-wrap">
 按分类归档
    <h4 class="archive-result text-color-base text-xlarge"></h4>
    <section>


<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
    <?php while ($category->next()): ?>

<a class="category category--small category--primary" href="#posts-list-<?php $category->name(); ?>" data-category="<?php $category->count(); ?>篇文章"><?php $category->name(); ?>(<?php $category->count(); ?>)</a>

 <?php endwhile; ?>

        
    </section>
    <section class="boxes" id="disqus_thread">

        
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>


<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?>  <div id="posts-list-Themia" class="archive box" data-category="themia">

            
                    <h4 class="archive-title">
                        <a href="<?php $categories->permalink(); ?>" class="link-unstyled" id="posts-list-<?php $categories->name(); ?>"><?php $categories->name(); ?></a>
                    </h4>


                    <ul class="archive-posts">
<?php while ($posts->next()): ?> 
                            <li class="archive-post">
                                <a class="archive-post-title" href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a>
                                <span class="archive-post-date">-<?php $posts->date('M d,Y'); ?></span>
                            </li>
                        
                        
                           
<?php endwhile; ?>
                        
                    </ul>
                </div>
         <?php endwhile; ?>
        
    </section>
</div>

  
