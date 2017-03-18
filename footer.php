<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div id="footer">
<?php if ($this->options->ft2 == '2'): ?>
<?php else:?><?php $this->need('footer2.php'); ?> <?php endif;?>
<div class="bottom-footer">
本站原创内容请勿转载，版权所有。本站所有未注明出处或未写明来源的内容均来源于互联网，仅供学习和研究，如有问题请联系。
<p>
	© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.版权所有 [ <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?> ]
	</p>
</div>
</div>


<script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('g(0).h(e(){e d(){0.9=0[b]?"死鬼人呢 - ( ゜- ゜)つロ":a}f b,c,a=0.9;"2"!=4 0.8?(b="8",c="k"):"2"!=4 0.5?(b="5",c="j"):"2"!=4 0.6&&(b="6",c="l"),("2"!=4 0.7||"2"!=4 0[b])&&0.7(c,d,!1)});',22,22,'document||undefined||typeof|mozHidden|webkitHidden|addEventListener|hidden|title|||||function|var|jQuery|ready|Hi|mozvisibilitychange|visibilitychange|webkitvisibilitychange'.split('|'),0,{}))</script>




<?php $this->footer(); ?>
</div>
</body>
</html>
