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
            <img src="img/slogan_small.png" alt="">
          </h2>
          <div id="sociallogo">
            <a href="http://weibo.com/lmipeng">
              <img src="wp-content/uploads/2014/01/weibo_icon.png" alt="">
            </a>
            <a id="wxlogohover" href="#">
                <img src="wp-content/uploads/2014/01/wechat_icon.png" alt="">
                <div class="weixingTooltip">
                    <img src="img/weixintanchu.png" alt="">
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
        $(".qs").click(function(e){
          $(this.hash).toggle('fast');
          e.preventDefault();
        });
      })
    </script>
</body>
</html>