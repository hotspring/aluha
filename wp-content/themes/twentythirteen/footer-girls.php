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
  <div class="scrollLoading"></div>
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
          <p id="copyrightCHN">
            <img src="img/copyright.png" alt="">
          </p>
        </div>
	

<script type="text/javascript">
      window.$ = jQuery;
      $(document).ready(function () {
        $('#parallaxWapper img').plaxify();
        $('#parallaxWapper>div').plaxify();
        $.plax.enable({ "activityTarget": $('#parallaxWapper')});

        var $container = $('#main');
        // initialize
        $container.masonry({
          columnWidth: 250,
          itemSelector: '.girlsArticle',
          gutter:20
        });
      })
    </script>
</body>
</html>