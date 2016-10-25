<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin:0;
			padding:0;
			list-style: none;
		}
		body{
			width: 100%;
			height: 100%;
			overflow: hidden;
			
		}
		
		#bg2{
			position:fixed;
			width: 251px;
			height: 98px;
			top:200px;
			left:100px;
			z-index: 10;
			background-image: url('/think/Public/home/index.png');
		}
		#login{
				z-index: 999;
			width: 418px;
			height: 290px;
			position: absolute;
			top:50%;
			left:50%;
			margin-left: -209px;
			margin-top:-158px;
			background-color: #ffff45;
			border-radius: 5px;
			padding-top:30px;
		}
		#login .title{
			
			font-size: 20px;
			color: #333;
			text-align: center;

		}
		#login ul{
			width: 280px;
			margin: 0 auto;
			
		
			margin-top:15px;
		}
		#login ul a{
			text-decoration:none;

		}
		#login ul li{
			float: left;
			margin-left: 40px;
		}
		#login .lform{
			width: 272px;
			margin: 0 auto;
			
		}
		#login .lform input{
			height: 37px;
			width: 272px;
			margin-top: 20px;
			border:1px solid #e6e6e9;
			padding-left: 10px;
		}
		#login .submit{
			width: 284px;
			margin-top: 20px;
			height: 40px;
			background-color: #86ce2f;
			color: #fff;
			padding:0;
		}
		#login .submit input{
			padding:0;
			margin-top: 0px;
			width: 100%;
			height: 40px;
			line-height: 35px;
			border: none;
			font-size: 17px;
			font-weight: 400;
			font-family: "Microsoft Yahei","微软雅黑",SimHei,"黑体","Hiragino Sans GB",STHeiTi,sans-serif;
				color: #fff;
			background: 0 0;
			cursor: pointer;
			border-radius: 3px;
		}
	</style>
</head>
<body>
	<div id="bg">
		<img src="/think/Public/home/1.jpg"   alt="">
		<div id="bg2">
			
		</div>
		<div id="login">
			<div class="title">账号密码登录</div>
			<div class="lform">
				 <form action="">

				   	<input type="text" placeholder="QQ号/手机号/邮箱登录"><br>
				   	<input type="text" placeholder="密码"><br>
				   <div class="submit">
				   <input type="submit" class="ss"value="登录"></div>	
		  		 </form>
			</div>
		   <ul>
		   		<li><a href="">忘记密码</a></li>
		   		<li><a href="<?php echo U('register');?>">注册账号</a></li>
		   		<div style="clear:both"></div>
		   </ul>
		</div>
	</div>
	
	
</body>
<script src="/think/Public/home/jquery-1.8.3.min.js"></script>

<script type="text/javascript">
 		$('input:first').focus();
		var width = $('#bg img:first').width();
      	var height =$('#bg img:first').height();
        function DrawImage(ImgD) {
          
       		var view_height = document.documentElement.clientHeight;
  	 		var view_width = document.documentElement.clientWidth;

            var nWidth =view_width;
            var nHeight=view_height;
            console.log(width / height >= nWidth / nHeight);
              
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
</html>