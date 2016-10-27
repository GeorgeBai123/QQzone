<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/home/css/home.login.css">
</head>
<body>
	<div id="bg">
		<img src="/Public/home/imgs/login/1.jpg"   alt="">
		<div id="bg2"></div>
		<div id="login">
			<div class="title">账号密码登录</div>
			<div class="lform">
				 <form action="<?php echo U('login/dologin');?>" method="post">

				   	<input type="text" name="number" placeholder="QQ号/手机号/邮箱登录"><br>
				   	<input type="text" name="password" placeholder="密码"><br>
				    <div class="submit">
				   		<input type="submit" class="ss" value="登录">
				   	</div>	
		  		 </form>
			</div>
		    <ul>
		   		<li><a href="#">忘记密码</a></li>
		   		<li><a href="<?php echo U('register');?>">注册账号</a></li>
		   		<div style="clear:both"></div>
		    </ul>
		</div>
	</div>
<script src="/Public/home/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
 		$('input:first').focus();
		var width = $('#bg img:first').width();
      	var height =$('#bg img:first').height();
        function DrawImage(ImgD) {
          
       		var view_height = document.documentElement.clientHeight;
  	 		var view_width = document.documentElement.clientWidth;

            var nWidth =view_width;
            var nHeight=view_height;
            // console.log(width / height >= nWidth / nHeight);
              
            if (width / height <= nWidth / nHeight) {
            
                if (width > nWidth) {
                    ImgD.width(nWidth); //那么图片就显示要显示的宽度
                    ImgD.height((height * nWidth) / width); 
                   
                } else {
                    ImgD.width(width);
                    ImgD.height(height);
                }
            }else {
              
                if (height > nHeight) {
                    ImgD.height(nHeight);
                    ImgD.width((width * nHeight) / height)  ;
                } else {
                   
                   ImgD.width(width);
                    ImgD.height(height);
                }
            }           
        }
 </script>
 <script>
 	DrawImage($('#bg img:eq(0)'));
    $(window).resize(function(){
  		DrawImage($('#bg img:first'));
	});
</script>
</body>
</html>