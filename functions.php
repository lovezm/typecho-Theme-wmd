<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    $duoshuo=new Typecho_Widget_Helper_Form_Element_Text('duoshuo',NULL,NULL,_t ('多说评论name'),_t ('就是xxx.duoshuo.com的xxx'));
	$form->addInput ($duoshuo);
    $qianming=new Typecho_Widget_Helper_Form_Element_Text('qianming',NULL,NULL,_t ('文章页签名'),_t ('文章页面右上角签名'));
	$form->addInput ($qianming);
	    $touxiang=new Typecho_Widget_Helper_Form_Element_Text('touxiang',NULL,NULL,_t ('文章页头像'),_t ('文章页面右上角头像'));
	$form->addInput ($touxiang);
	    $ft2 = new Typecho_Widget_Helper_Form_Element_Radio('ft2',array('1' => _t('开启footer三栏'),'2' => _t('不开启footer三栏')),'1',_t('footer三栏'),_t("开启后请手动在footer2.php内编辑内容。"));
    $form->addInput($ft2); 
	$payfs=new Typecho_Widget_Helper_Form_Element_Radio('payfs',array ('支付宝'=>_t ('支付宝'),'微信'=>_t ('微信')),'1',_t ('选择支付方式'),_t ("选择你想要的赞助方式只能选其一"));
	$form->addInput ($payfs);
	$wxpay=new Typecho_Widget_Helper_Form_Element_Text('wxpay',NULL,NULL,_t ('赞助二维码'),_t ('输入完整连接'));
	$form->addInput ($wxpay);
	$weibo=new Typecho_Widget_Helper_Form_Element_Text('weibo',NULL,NULL,_t ('微博号码或者微博域名'),_t ('例如输入wangmudu'));
	$form->addInput ($weibo);
	$qq=new Typecho_Widget_Helper_Form_Element_Text('qq',NULL,NULL,_t ('输入QQ号码'),_t ('比如1245240736'));
	$form->addInput ($qq);
	 $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1',NULL, NULL,'置顶文章ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_1->input->setAttribute('class', 'mini');
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2',NULL, NULL,'置顶文章ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_2->input->setAttribute('class', 'mini');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $sticky_3 = new Typecho_Widget_Helper_Form_Element_Text('sticky_3',NULL, NULL,'置顶文章ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_3->input->setAttribute('class', 'mini');
$form->addInput($sticky_3->addRule('isInteger', '请填入数字'));

   $links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,NULL, _t('友情链接'), _t('标准a href输入 用li标签包含'));
    $form->addInput($links->multiMode ());

}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

/** 输出文章缩略图 */
function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    $rand = rand(1,99); // 随机 1-99 张缩略图
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
   // $random = $widget->widget('Widget_Options')->themeUrl . '/img/mr.jpg'; // 若只想要一张默认缩略图请删除本行开头的"//"

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
    
 if ($attach->isImage) {
      echo $attach->url; 
    } else
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
         echo $thumbUrl[1][0];
    } else     {
        echo $random;
    }
}
