<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
		</div><!-- #main -->
	</div><!-- #page -->
	<div id="footer">
            
          <h2>
            啊噜哈，分享欢乐时光
          </h2>
          <div id="sociallogo">
            <a href="http://weibo.com/lmipen">
              <img src="wp-content/uploads/2014/01/weibo_icon.png" alt="">
            </a>
            <a id="wxlogohover" href="#">
                <img src="wp-content/uploads/2014/01/wechat_icon.png" alt="">
                <div class="weixingTooltip">
                    <img src="wp-content/uploads/2014/01/weixintanchu.png" alt="">
                </div>
            </a>
          </div>
          <p id="copyrightCHN">朗视科技传媒 Starvision 版权所有</p>
          <p id="copyrightEN">Copyright © 2014 Starvision tech-media Co.Ltd All Rights Reserved.</p>
          <p id="beian">网站备案：黔ICP备13004739号</p>
        </div>
	
<script type="text/javascript">
      window.$ = jQuery;
      $(document).ready(function () {
        $('#parallaxWapper img').plaxify();
        $('#parallaxWapper>div').plaxify();
        $.plax.enable({ "activityTarget": $('#parallaxWapper')});
        $(".qs").click(function(e){
          $(this.hash).toggle('fast');
          e.preventDefault();
        });
      })
    </script>
</body>
</html>