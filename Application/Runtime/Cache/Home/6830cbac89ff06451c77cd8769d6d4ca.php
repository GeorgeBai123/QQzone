<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
	<style>
		body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td, figure {
		    margin: 0;
		    padding: 0;
		    list-style: none;
		}
		#QZ_Body{
			background-image: url(/think/Public/home/body_bg1.jpg);
		background-repeat: repeat;
		}
		#bg_div{
			background-repeat: no-repeat;
			background-position: center top;
			background-attachment: scroll;
			background-image: url('/think/Public/home/1_top.jpg');
			width: 100%;
			height: 250px;
		}
		#qnav{
			width: 980px;
			margin:0 auto;
		
			height: 50px;
			/*border: 1px solid red;*/
			overflow: hidden;
		}
		#qnav ul{
			width: 700px;
			height: 50px;
			font-size: 14px;
			
			margin:0px auto;
			list-style:none;
			
		}
		#qnav ul li{
			float: left;

			height: 50px;

		}
		#qnav ul li a{
			
			border-bottom-color: transparent;
			border-bottom-style: solid;
			border-bottom-width: 3px;
			height: 47px;
			line-height: 47px;
			padding: 0 15px;
			_border-bottom: none;
			list-style:none;
			color: #333;
			text-decoration: none;
		}
		#container{
			background-image: url(/think/Public/home/bg2.png);
			background-repeat: repeat;
			width: 100%;
			height: 800px;
		}
		#container  .tb{
			width: 910px;
			margin: 0 auto;
		}
		#container  .tb .qz_left{
			float: left;
			width: 290px;
			padding-right: 30px;

		}
		#container  .tb .qz_right{
			display: block;
			overflow: hidden;
			width: 580px;
			float: left;
		}
		.br{
			border: 1px solid red;
		}
	    .ifuck{
	 		margin-top:5px;
			border: 1px #d9d9d9 solid;
			padding: 22px 0 20px;
			width: 288px;
			overflow: hidden;
		}
		.ifuck ul{

			margin-left: 6px;
			overflow: hidden;
		}
		.ifuck ul li{
			margin-left: 6px;
			border-left: 0 !important;
			float: left;
			display: inline;
			width: 85px;
			height: 50px;
			#overflow: hidden;
			font-size: 14px;
			text-align: center;
		 }	
		 .ifuck ul li a{
			display: block;
			color: #333;
		}
		.ifuck ul li  strong{
			display: block;
			margin-top: -5px;
			margin-bottom: 6px;
			line-height: 1.1;
			font-size: 28px;
			font-family: "Segoe UI";
		}
		.head-avatar{
			position: absolute;
			top:147px;
			left: 178px;
			width: 126px;
			height: 126px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			border: #d9d9d9 1px solid;
			font-size: 0;
			border: 1px solid red;
		}
		.head-dress{
			width: 128px;
			height: 128px;
			position: absolute;
			left: -1px;
			top: -1px;
			background-repeat: no-repeat;
		}
		.head-avatar img{
			width: 120px;
			height: 120px;
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			border: #FFF 3px solid;
		}
		.head-avatar .head-edit{
			position: absolute;
			width: 120px;
			top: 97px;
			*top: 101px;
			left: 3px;
			font-size: 12px;
			text-align: center;
			z-index: 2;
			
			display: none;
		}
		.head-avatar .head-edit .title-bg{
			background: #000;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 26px;
			*height: 22px;
			opacity: .65;
		}
		.head-avatar .head-edit span{
		
			z-index: 2;
			height: 26px;
			*height: 22px;
			display: block;
			line-height: 26px;
			*line-height: 22px;
			cursor: pointer;
			color: white;
			text-decoration: none !important;
			display: block;

		}
		.qz_mask{
			background-color: rgb(0, 0, 0);
			opacity: 0.2;
			position: fixed;
			left: 0px;
			top: 0px;
			z-index: 6000;
			width: 100%;
			height: 657px;
			display: none;
		}
		.qz_tou{
			z-index: 9001;
			position: absolute;
			top: 101px;
			left: 434px;
			width: 482px;
			height: 400px;
			border: 1px solid #999;
			position: absolute;
			box-shadow: 0 0 5px #535658;
			font-size: 12px;
			border-radius: 5px;
			display: none;
		}

	</style>
</head>
<script src="/think/Public/home/jquery-1.8.3.min.js"></script>
<body id="QZ_Body" class="bg-body">
	<div id="bg_div">
		<div class="head-avatar">
			<a id="qzh"href="">
				<div class="head-dress"></div>
				<img src="/think/Public/home/1.jpg" alt="">
				<div class="head-edit">
					<div class="title-bg">
						
					</div>
					<span id="edit">修改头像</span>
				</div>
			</a>
		</div>
	</div>
    <div class="qz_tou">
    	
    	 <form id='formFile' name='formFile' method="post" action="<?php echo U('User/uploadtouxiang');?>" target='frameFile'
    enctype="multipart/form-data">
    <input type='file' id='fileUp' name='fileUp' />
    <div id='uploadLog'>
    </div>
    <br />
    <img width='200' src='' height='200' id='imgShow' alt='缩略图' />
    </form>
    <!--
        这个iframe拿到post过来的表单数据后会开始在自身内部访问post过来的页面地址,在内部中它会刷新页面，
        但是这已不重要了，因为当前的iframe已经被我display:none隐藏了！所以这样给用户看起来像是无刷新的
        页面文件上传，其实只是做一个一个小小的技巧！
    -->
    <iframe id='frameFile' name='frameFile' style='display: none;'></iframe>
    <script>
    	    $(function() {
            $('#fileUp').change(function() {
                $('#uploadLog').html('开始上传中....');
                $('#formFile').submit();
            });
        })
        function uploadSuccess(msg) {
            if (msg.split('|').length > 1) {
                $('#imgShow').attr('src', msg.split('|')[1]);
                $('#uploadLog').html(msg.split('|')[0]);
            } else {
                $('#uploadLog').html(msg);
            }
        }
    </script>
       
    </div>
    <div class="qz_mask"></div>
	<script>
	$('#qzh').click(function(){
		return false;
	})
		$('.head-avatar').hover(function(){
			$('.head-edit').slideToggle();
		})
		$('.head-edit').click(function(){
			alert('hi');
			$(".qz_mask").show();
			$(".qz_tou").show();
			return false;
		})
	</script>
	<div id="qnav">
		<ul>
			<li><a href="">主页</a></li>
			<li><a href="">日志</a></li>
			<li><a href="">留言板</a></li>
			<li><a href="">说说</a></li>
			<li><a href="">相册</a></li>
			<li><a href="">个人档</a></li>
			<li><a href="">更多</a></li>
			<div style="clear:both"></div>
		</ul>
	</div>
    <!--结束-->
    
   
	<div id="container">
		<div class="tb"> 
			<div class="qz_left ">
				<div id="prop" class="ifuck">
					<ul>
						<li>
						<a href=""><strong>134</strong>
							<span>照片</span>
						</a>
						</li>
						<li>
							<a href=""><strong>487</strong>
								<span>说说</span>
							</a>
						</li>
						<li>
							<a href=""><strong>3</strong>
								<span>日志</span>
							</a>
						</li>
						<div style="clear:both"></div>
					</ul>
				</div>
			</div>
			<div class="qz_right ">
				<div class="xing">
					
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>