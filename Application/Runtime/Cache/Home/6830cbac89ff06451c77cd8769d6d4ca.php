<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['user']['name'];?></title>
	<script src="/Public/jQuery/jquery-1.11.1.min.js"></script>
	<link href="/Public/bootstrap/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Public/home/css/home.index.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/home/css/reset.css">
</head>
<body id="QZ_Body" class="bg-body">
	<!-- 顶部导航 -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu-nav">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">切换导航</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">个人中心</a>
	        </div>
	        <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">我的主页 <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu">
	                        <li><a href="#feature-tab" data-tab="tab-chrome">1</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-firefox">2</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-safari">3</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-opera">4</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-ie">5</a></li>
	                    </ul>
	                </li>
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">好友 <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu">
	                        <li><a href="#feature-tab" data-tab="tab-chrome">1</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-firefox">2</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-safari">3</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-opera">4</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-ie">5</a></li>
	                    </ul>
	                </li>	                
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">游戏 <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu">
	                        <li><a href="#feature-tab" data-tab="tab-chrome">1</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-firefox">2</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-safari">3</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-opera">4</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-ie">5</a></li>
	                    </ul>
	                </li>
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">装扮 <span class="caret"></span></a>
	                    <ul class="dropdown-menu" role="menu">
	                        <li><a href="#feature-tab" data-tab="tab-chrome">1</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-firefox">2</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-safari">3</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-opera">4</a></li>
	                        <li><a href="#feature-tab" data-tab="tab-ie">5</a></li>
	                    </ul>
	                </li>
	                <li class="navabar-right"id="n-r">
		                <form class="navbar-form navbar-right" role="search">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="用户/游戏/动态">
							</div>
							<button type="submit" class="btn btn-default">搜索</button>
						</form>
						<li>
							
							<?php if($_SESSION['user']['name']): ?><a href="<?php echo U(home/User/center);?>">
							<?php echo U(home/User/center);?>
							<?php echo $_SESSION['user']['name'];?></a>
							<?php else: ?><a href="<?php echo U('login/index');?>">登录</a><?php endif; ?>
							
						</li>
						<li>
							<?php if($_SESSION['user']): ?><a href="<?php echo U('user/logout');?>">退出</a>
							<?php else: ?><a href="<?php echo U('login/register');?>">注册</a><?php endif; ?>
						</li>
						<!-- <img src="/Public/home/imgs/icon.png" style="width:10px;height:10px"> -->
						<li><a href="#">头像</a></li>
					</li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!-- 顶部导航 -->

	<div id="bg_div">
		<div class="head-avatar">
			<a id="qzh"href="">
				<div class="head-dress"></div>
				<img src="/Public/upload/<?php echo ($touxiang); ?>" id="qztouxiang"alt="">
				<div class="head-edit">
					<div class="title-bg">
						
					</div>
					<span id="edit">修改头像</span>
				</div>
			</a>
		</div>
	</div>
   
<!-- 头像插件 -->
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />
	<script type="text/javascript" src="/Public/Home/js/cropbox.js"></script>
	<form action="" method="post" id="myForm" enctype="multipart/form-data">
		<div class="contai">
		    <div class="imageBox">
		        <div class="thumbBox"></div>
		        <div class="spinner" style="display: none">Loading...</div>
		    </div>

		    <div class="action">
	        	<div class="new-contentarea tc">
		            <a href="javascript:void(0)" class="upload-img">
		            	<label for="upload-file">上传图像</label>
		        	</a>
		            <input type="file" class="" name="upload-file" id="upload-file" />
		        </div>
		        <input type="button" id="btnCrop"  class="Btnsty_peyton" value="裁切">
		        <input type="button" id="btnZoomIn" class="Btnsty_peyton" value="+"  >
		        <input type="button" id="btnZoomOut" class="Btnsty_peyton" value="-" >
		    </div>
	    	<div class="cropped"></div>
		</div>
	</form>

<script src="/Public/home/js/jquery.form.min.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        var options =
        {
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: '__uploadImg/avatar.png'
        }
        var cropper = $('.imageBox').cropbox(options);

        $('#upload-file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = $('.imageBox').cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })

        $('#btnCrop').on('click', function(){
            var img = cropper.getDataURL();
            $('.cropped').html('');
            $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:115px;height:105px;margin-top:4px;border-radius:20px;box-shadow:0px 0px 12px #7E7E7E;" ><p>预览头像</p><input type="submit" value="确定"/>');
        })

  		var optionss = { 
			type:'post', 
			url: "<?php echo U('User/uploadtouxiang');?>", 
			beforeSubmit:showRequest,  
			success:function(data){
			  	$("#qztouxiang").attr('src','/Public/upload/'+data);
			  	$(".qz_mask").hide();
			  	$('.contai').hide();
			},
			error:function(err){
			  	console.log(err);
			},
			clearForm:true ,
		}; 


	    $('#myForm').ajaxForm(optionss);
	        function showRequest() {
	         
	    }
	 	function showResponse(data){
	    	alert(data);
	 	}
        $('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        $('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    });
</script>
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
		$(".contai").show();
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



<!-- 空间主体 -->

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
				<div class="xing"></div>
			</div>
		</div>
	</div>
 

</body>
</html>