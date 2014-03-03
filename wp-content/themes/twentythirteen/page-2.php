<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?> 		
	<header id="masthead" class="site-header" role="banner">
<?php
	if(!strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0")):
	
?>
		<div id="parallaxWapper">
			<section id="parallaxLeft">
	    		<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help1.png" alt="" data-xrange="20" data-yrange="20" id="help1" />
				
			</section>
			<section id="parallaxRight">
				
	    		<div id="help2" data-xrange="20" data-yrange="20" data-invert="true">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help2.png" alt="" data-xrange="40" data-yrange="40" />
	    		</div>
	    		<div id="help3" data-xrange="20" data-yrange="20" data-invert="true">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help3.png" alt="" data-xrange="40" data-yrange="40" />
	    		</div>
	    		<div id="help4" data-xrange="20" data-yrange="20" data-invert="true">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help4.png" alt="" data-xrange="40" data-yrange="40" />
	    		</div>
			</section>
    	</div>
<?php else : ?>
		<div id="noplax">
			<img src="images/helpbanner.jpg" alt="">
		</div>
<?php endif ?>
	</header><!-- #masthead -->
	<section id="breadcrumbs">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</section>
	<style>
		#primary{width:100%;}
		#content{margin-top:40px;padding-left:20px;padding-right: 20px}
		.qs{margin-top:20px;font-size:24px;display:block;width:100%;line-height:40px;height:40px;background-color: #f3f3f3;border:1px solid #ccc;border-left:3px solid #ea4294;text-indent:20px;}
		.as{display: none}
		.as h6{margin:12px 0px;color:#ff7f00;font-size: 18px}
		.as p{margin:2px 0px;text-indent: 2em;font-size: 14px;color:#666;}
	</style>
	<div id="page" class="hfeed site">
		

		<div id="main" class="site-main">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<a class="qs" href="#a1">
				注册/登录
			</a>
			<div class="as" id="a1">
				<h6>1.1	如何注册？</h6>
				<p>首先，欢迎您进入Aluha的世界，</p>
				<p>Aluha账号注册流程：</p>
				<p>点击屏幕下方最右侧“登录”——“使用Aluha账号登录”——屏幕右上方“注册”，输入您的常用邮箱并且设置密码，阅读并同意《啊噜哈用户协议》即可创建账号。</p>
				<p>同时，Aluha支持第三方账号注册，注册流程为：</p>
				<p>点击屏幕下方最右侧“登录”---“QQ账号/新浪微博账号登录”---输入您的相关账号信息---授权成功，即可成功创建Aluha账号。</p>
				<p>接下来您只需要完善您的用户资料就可以开始Aluha的开心旅程啦。</p>
				<h6>1.2	忘记密码怎么办？</h6>
				<p>
					如果您在使用Aluha账号登录时忘记密码，请在“Aluha账号登录”界面点击“忘记密码”，进入“找回密码”界面，按照提示进行操作，您即可找回您的密码。
				</p>
				<p>
					如果您使用第三方账号登录Aluha时提示密码错误，您需要向第三方软件所属公司申请“密码找回”，详细操作按照第三方软件提示进行。					
				</p>
			</div>

			<a class="qs" href="#a2">
				功能相关问题
			</a>
			<div class="as" id="a2">
				<h6>1.3	怎么发布视频？</h6>
				<p>点击“广场”左上<img src="img/help/file0001.png" alt="">		，进入拍摄视频界面，您即可发布视频。</p>
				<h6>1.4	怎么发布图片？</h6>
				<p>点击底部栏<img src="img/help/file0002.png" alt="">，点击第一栏<img width="250px" src="img/help/file0003.png" alt="">，进入您的空间，点击“时光”中<img width="60px" src="img/help/file0004.png" alt="">，在弹出的选项中选择“拍照”或“手机相册”，您都可以发布图片。</p>
				<h6>
					1.5	什么是出售图片、出售视频？
				</h6>
				<p>在聊天中您可以使用“出售图片”“出售视频”插件对想发送的视频和照片设定价格进行出售，聊天对象需要付费才可以观看这些照片、视频。您可以通过出售图片或者视频赚取金币，出售图片和视频也可以意外地获得幸运星。</p>
				<h6>
					1.6	如何出售图片、出售视频？
				</h6>
				<p>此功能只能在单人聊天的“普通模式”和“群发”中使用，“聊天”中出售给聊天对象，“群发”出售给所选择的群发对象。</p>
				<p>点击<img width="60px" src="img/help/file0005.png" alt="">，打开聊天插件，选择“出售图片”/“出售视频”。</p>
				<p>选择“出售图片”：点击“出售图片”后进入相册，选择要出售的图片（一次只能出售一张照片），选择之后设定价格，点击“发送”即可。</p>
				<p>选择“出售视频”：点击“出售视频”后进入拍摄视频界面，拍摄完成后点击绿色的“勾”自动进入预览界面,点击“完成”即可进入“设定价格”，点击“发送”即可。</p>
			</div>

			<a class="qs" href="#a3">
				个人资料使用技巧
			</a>
			<div class="as" id="a3">
				<h6>1.7	如何改签名？</h6>
				<p>点击底部栏<img width="60px" src="img/help/file0002.png" alt="">，点击<img width="250px" src="img/help/file0003.png" alt="">，进入您的空间即可修改您自己的个人签名，点击“编辑个性签名”进入到“个性签名”修改界面，点击“保存”按钮保存所修改的个性签名。</p>
				<h6>
					1.8	如何修改头像？
				</h6>
				<p>点击底部栏<img width="60px" src="img/help/file0002.png" alt="">，点击屏幕右上方的<img width="60px" src="img/help/file0006.png" alt="">，进入“个人资料设置”界面，点击“头像”，根据弹出框中选择的更换方式（“拍照”或者“手机相册”）选择图片，在选择合适的剪切位置之后点击“确定”即可修改您的头像；修改后点击“个人资料设置”右上角“保存”，您所进行的更改保存成功之后完成修改。</p>
				<h6>
					1.9	如何修改空间形象照？
				</h6>
				<p>点击底部栏<img width="60px" src="img/help/file0002.png" alt="">，点击<img width="250px" src="img/help/file0003.png" alt="">，进入您的空间，空间中的形象照可以通过点击的方式更换。点击形象照，根据弹出框中所选择的更换方式（“拍照”或者“手机相册”）选择图片，选择合适的剪切位置之后点击“确定”，您的空间形象照即可修改成功。</p>
				<h6>1.10 如何修改个人资料？</h6>
				<p>点击底部栏<img width="60px" src="img/help/file0002.png" alt="">，屏幕右上方的<img width="60px" src="img/help/file0006.png" alt="">点击后进入“个人资料设置”界面， 在“个人资料设置”界面点击相应的条目进入相应条目的“编辑”状态，您可以修改您的个人资料（性别不可修改）。</p>
				
			</div>

			<a class="qs" href="#a4">
				寻找好友相关问题
			</a>
			<div class="as" id="a4">
				<h6>1.11 如何搜索其他用户？</h6>
				<p>Aluha提供两种搜索方式：通过ID查找和通过用户昵称查找，点击“发现”后继续点击“查找用户”，在搜索框中输入用户昵称或ID号，点击<img width="70px" src="img/help/file0007.png" alt="">，即可查找到相应的搜索结果。</p>
				<h6>1.12 怎么查找ID，ID在哪显示？</h6>
				<p>用户的ID显示在对应用户空间 的“档案”——“基本资料”中。</p>
			</div>

			<a class="qs" href="#a5">
				金币/幸运星相关问题
			</a>
			<div class="as" id="a5">
				<h6>1.13 什么是金币?</h6>
				<p>金币是啊噜哈中的一种虚拟货币，可用于赠送礼物给好友。</p>
				<h6>1.14 如何获得金币？</h6>
				<p>获得金币的方式有以下四种：</p>
				<p>方式1：可免费领取5次金币，每天1次，每次100。</p>
				<p>方式2：使用幸运星兑换金币</p>
				<p>方式3：通过苹果商店充值购买；</p>
				<p>方式4：别人购买了你出售的照片或者视频；</p>
				<h6>1.15 什么是幸运星?</h6>
				<p>幸运星是啊噜哈中一种虚拟道具，可以用来兑换等量的金币。</p>
				<h6>1.16 如何获得幸运星?</h6>
				<p>获得幸运星的方式有以下两种：</p>
				<p>方式1：收到别人赠送的礼物时，会意外获得一些幸运星。</p>
				<p>方式2：别人购买你的出售的照片或视频的时候，你也可以意外的获得一些幸运星。</p>
				<h6>1.17 当遇见被错误扣掉金币如何处理？</h6>
				<p>请您及时通过反馈与我们联系，告诉我们您被错误扣费时的使用场景、消费项目、扣费金额和发现错误扣费原因。例如：使用场景：送礼；消费项目：玫瑰花；扣费金额：50金币；发现错误扣费原因：扣费后礼物没显示出来。</p>
			</div>

			<a class="qs" href="#a6">
				聊天相关问题
			</a>
			<div class="as" id="a6">
				<h6>1.18 怎么加入黑名单？</h6>
				<p>在“聊天”界面顶部，选择<img src="img/help/file0008.png" width="70px" alt="">，点击弹出框的“加入黑名单”即可将聊天对象加入黑名单。</p>
				<h6>1.19 怎么将用户移出黑名单？</h6>
				<p>点击“我”---“设置”---“黑名单管理”，点击被拉黑用户条目的“删除”按钮，即可将用户移出黑名单。</p>
				<h6>1.20 无痕信息有什么用？</h6>
				<p>无痕信息旨在实现信息接收方在规定时间内查看信息后立刻被删除，再也无法查看的目的。</p>
				<p>点击“聊天”界面右上角<img src="img/help/file0008.png" width="70px" alt="">即可切换“无痕模式”，在“无痕模式”中您发送的信息都会做“无痕信息”处理，对方查看后立即销毁，最大可能保护您聊天的私密性。</p>
			</div>

			<a class="qs" href="#a7">
				影响使用的相关问题
			</a>
			<div class="as" id="a7">
				<h6>1.21 总出现网络不给力怎么办？</h6>
				<p>在您的使用过程中，常常出现“网络不给力”提示时，请检查您的使用环境以及网络条件。Aluha建议您尝试转换到网络相对稳定的Wifi环境下使用，若问题依旧存在，请您反馈给我们，我们会及时处理您所遇到的情况。</p>
				<h6>1.22 视频播放不了、视频加载太慢或卡怎么办？</h6>
				<p>视频加载与网络速度有关，请检查您的使用环境以及网络条件。Aluha建议您尝试转换到网络相对稳定的Wifi环境下使用，同时我们也在努力对啊噜哈进行优化，感谢您对啊噜哈的支持！</p>
				<h6>1.23 关于清理缓存的解释：</h6>
				<p>Aluha“清理缓存”功能暂时只支持安卓（Android）系统，暂不支持苹果（IOS）系统。</p>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
<!--[if lt IE 8]>
        <script src="js/vendor/pie.js"></script>
        
        <![endif]-->
<?php get_footer(); ?>