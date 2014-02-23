<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <title>Aluha啊噜哈</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Loading Flat UI -->
        <link href="css/flat-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="css/charge.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div id="navbar-wapper">
							<div class="navbar-header">
									<a class="navbar-brand" href="/">
											<img src="img/aluha_logo.png" alt="">
									</a>
							</div>
		 
							<div class="collapse navbar-collapse pull-right">
									<ul class="nav navbar-nav">
										<li><a href="/">首页</a></li> 
                                        <li><a href="index.php?cat=9">Aluha Girls</a></li>
										<li><a href="index.php?cat=2">产品动态</a></li>
                                        <li><a href="index.php?cat=3">关于我们</a></li>
                                        <li><a href="index.php?page_id=2">帮助中心</a></li> 
                                        <li><a href="charge.php">充值中心</a></li>          
									</ul>    
							</div>
            </div>
        </nav>
        
        <div id="container">
        	<div class="row" id="pageTitle">
        		<H1>充值中心</H1>
        	</div>
        	
        	
            <div id="pageone" class="row">
            	<h1 style="text-align:center">coming soon</h1>
            </div>

            <div id="pagetwo" class="row">
                <div id="gotoChargeWapper">
                    <section>
                        <figure>
                            <img src="img/gotoCharge_icon.png" alt="">
                        </figure>
                        <p>请在新打开的支付宝页面进行付款，付款完成前请不要关闭该窗口。</p>
                    </section>
                    <section>
                        <a href="index.php?page_id=2" class="btn btn-default">付款遇到问题</a>
                        <a href="#" id="chargeCompleted" class="btn btn-info">已完成付款</a>
                    </section>
                </div>
            </div>

            <div id="pagethree" class="row">
                <div id="chargeSuccessWapper">
                    <section>
                        <figure>
                            <img src="img/chargesuccess.png" alt="">
                        </figure>
                        <h6>您已成功充值 <u></u></h6>
                        <p>请进入Aluha查看到账情况</p>
                        <p>如有疑问请联系客服：</p>
                        <p>010-11111111</p>
                    </section>
                    <div>
                        <a href="/" class="btn btn-info">返回</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">确定信息</h4>
              </div>
              <div class="modal-body">
                <p>您的Aluha ID是： <u class="aluhaId"></u></p>
                <p>昵称为：<u class="aluhaName"></u></p>
                <p>购买金币：<u class="chargeCoinsNum"></u></p>
                <p>共需花费：<u class="chargeRMBNum"></u></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">返回修改</button>
                <button type="button" id="submitCharge" class="btn btn-info">确认并付款</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div id="footer">
            
          <h2>
            啊噜哈，分享欢乐时光
          </h2>
          <div id="sociallogo">
            <a href="http://weibo.com/lmipeng">
                <img src="img/weibo_icon.png" alt="">
            </a>
            <a id="wxlogohover" href="#">
                <img src="img/wechat_icon.png" alt="">
                <div class="weixingTooltip">
                    <img src="img/weixintanchu.png" alt="">
                </div>
            </a>
          </div>
          <p id="copyrightCHN">
            <img src="img/copyright.png" alt="">
          </p>
        </div>
        

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flatui-radio.js"></script>
        <script src="js/plugins.js"></script>
        
        <script src="js/charge.js"></script>
    </body>
</html>