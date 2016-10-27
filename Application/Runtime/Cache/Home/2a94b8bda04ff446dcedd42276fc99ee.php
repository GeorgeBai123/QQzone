<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['user']['name'];?></title>
	<script src="/Public/jQuery/jquery-1.11.1.min.js"></script>
	<link href="/Public/bootstrap/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Public/home/css/home.index.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/home/css/reset.css">
	<script src="/Public/bootstrap/public/js/bootstrap.min.js" ></script>
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
							<!-- <?php echo U(home/User/center);?> -->
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
			<li><a href="<?php echo U('index/index');?>">主页</a></li>
			<li><a href="<?php echo U('user/article');?>">日志</a></li>
			<li><a href="<?php echo U('user/message');?>">留言板</a></li>
			<li><a href="<?php echo U('user/moment');?>">说说</a></li>
			<li><a href="<?php echo U('user/alblum');?>">相册</a></li>
			<li><a href="<?php echo U('user/information');?>">个人档</a></li>
			<li><a href="<?php echo U('user/more');?>">更多</a></li>
			<div style="clear:both"></div>
		</ul>
	</div>
    <!--结束-->



<!-- 空间主体 -->

	<link rel="stylesheet" href="/Public/home/css/user.css">
	<link rel="stylesheet" type="text/css" href="/Public/diyUpload/css/webuploader.css">
	<link rel="stylesheet" type="text/css" href="/Public/diyUpload/css/diyUpload.css">

	<div id="container">
		<div class="index_left">
			<ul id="fuck">
				<li>
					<div class="list_left">
						<i class="friend"></i>
					</div>
					<div class="sb">
						<span class="">好友动态</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="guanzhu"></i>
					</div>
					<div class="sb">
						<span>特别关心</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="ywxg"></i>
					</div>
					<div class="sb">
						<span>与我相关</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="zbgc"></i>
					</div>
					<div class="sb">
						<span>直播广场</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="nnjr"></i>
					</div>
					<div class="sb">
						<span>那年今日</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="yxyy"></i>
					</div>
					<div class="sb">
						<span>游戏应用</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="wdsc"></i>
					</div>
					<div class="sb">
						<span>我的收藏</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="wybf"></i>
					</div>
					<div class="sb">
						<span>微云备份</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="qefm"></i>
					</div>
					<div class="sb">
						<span>企鹅FM</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="qqyd"></i>
					</div>
					<div class="sb">
						<span>QQ阅读</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="smpy"></i>
					</div>
					<div class="sb">
						<span>实名朋友</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="rzkj"></i>
					</div>
					<div class="sb">
						<span>认证空间</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="qqyc"></i>
					</div>
					<div class="sb">
						<span>QQ演出</span>
					</div>
				</li>
				<li>
					<div class="list_left">
						<i class="chwl"></i>
					</div>
					<div class="sb">
						<span>吃喝玩乐</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="index_right">
			<div class="comment">
		        <div class="com_form">
		        	<!-- <textarea class="input" id="saytext" name="saytext">
		        	</textarea> -->
		        	 <div class="input" id="saytext" name="saytext" contentEditable="true"></div>
		        	 <div id="box">
		        	 	<p>	
	        	 			<button class="emotion">表情</button>
			        		<input type="button" class="sub_btn" value="提交">
				        </p>
		        	 	<div id="test" ></div>
		        	</div>	
		       	</div>
		     </div>
		     <div id="feed_friend">
				<div class="friend-nav">
					<div class="con	">
						<div class="tab">
							<a href="#" id="tablist_a">
								<span>全部动态</span>
								<i></i>
							</a>
							<div class="tablist">
								<div class="bull">
									<div class="op-list">
										<a href="<?php echo U('index/index');?>">全部动态</a>
										<a href="<?php echo U('user/alblum');?>">相册</a>
										<a href="<?php echo U('user/article');?>">日志</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="fiend-container">
						<div class="feed">
							<ul id="feed_friend_list">
								<li class="f-single">
									<div class="f-aside">
										<div class="f-user-pto">
											<a href=""></a>
										</div>
										<div class="f-user-info"></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>    
			</div>
			<div style="clear:both"></div>
		</div>

	<script type="text/javascript" src="/Public/home/js/jquery-browser.js"></script>
	<script type="text/javascript" src="/Public/diyUpload/js/webuploader.html5only.min.js"></script>
	<script type="text/javascript" src="/Public/diyUpload/js/diyUpload.js"></script>
	<script>
		var img_mlist = [];
		var  Mid;
		$('.index_left ul li').hover(function(){
			$(this).css('background-color','#e3e3e3').siblings('li').css('background-color','#f0f0f0');
		})

		$(function(){
			$(".sub_btn").bind('click',function(){
			    var fuck = $("#saytext").html();
				console.log(fuck);
			    $.ajax({
				   	type:'post',
				   	async:false,
				    url:'<?php echo U('Index/sendMessage');?>',
				   	data:{Mid:1,Mcontent:fuck,img_mlist:img_mlist},
				   	success:function(e){
				   	   Mid=e;
				   	}
			    });
			   $('.parentFileBox').hide();
			});	
			//上传图片按钮
			$('#test').diyUpload({
				url:'<?php echo U("Common/insertIMG?mid=3");?>',
				
				success:function(data) {
					
					console.log(data);
				},
				error:function( err ) {
					console.info( err );	
				}
			});
			$('.emotion').click(function(){
				$('#saytext').focus();
			});
			$('.emotion').qqFace({
				id : 'facebox', 
				assign:'saytext', 
				path:'/Public/home/arclist/'	//表情存放的路径
			});
		});
		
		$.fn.qqFace = function(options){
			var defaults = {
				id : 'facebox',
				path : 'face/',
				assign : 'content',//saytext
				tip : 'em_'
			};
			var option = $.extend(defaults, options);
			var assign = $('#'+option.assign);
			var id = option.id;
			var path = option.path;
			var tip = option.tip;
			if(assign.length<=0){
				alert('缺少表情赋值对象。');
				return false;
			}
			$(this).click(function(e){
					var strFace, labFace;
		 				
					if($('#'+id).length<=0){
						strFace = '<div id="'+id+'" style="position:absolute;display:none;z-index:1000;" class="qqFace">' +
									  '<table border="0" cellspacing="0" cellpadding="0"><tr>';
						for(var i=1; i<=75; i++){
							labFace = '['+tip+i+']';
							strFace += '<td><img src="'+path+i+'.gif" onclick="insertAtCaret('' + labFace + '');" /></td>';
							if( i % 15 == 0 ) strFace += '</tr><tr>';
						}
						strFace += '</tr></table></div>';
					}
					$(this).parent().append(strFace);
					var offset = $(this).position();
					var top = offset.top + $(this).outerHeight();
					$('#'+id).css('top',top);
					$('#'+id).css('left',offset.left);
					$('#'+id).show();
					e.stopPropagation();
			});
			$(document).click(function(){
					$('#'+id).hide();
					$('#'+id).remove();
				});
		};


	    function replace_em(str){
			str = str.replace(/</g,'&lt;');
			str = str.replace(/>/g,'&gt;');
			str = str.replace(/n/g,'<br/>');
			str = str.replace(/[em_([0-9]*)]/g,'<img src="/Public/home/arclist/$1.gif" border="0" />');
			return str;
	    }

	    var lastEditRange;

	    saytext.onclick = function() {
	        // 获取选定对象
	        var selection = getSelection();
	        // 设置最后光标对象
	        lastEditRange = selection.getRangeAt(0);
	    }

	   
	    saytext.onkeyup = function() {
	        // 获取选定对象
	        var selection = getSelection();
	        // 设置最后光标对象
	        lastEditRange = selection.getRangeAt(0);
	    }

		function insertAtCaret(textFeildValue){
			var ts=replace_em(textFeildValue);
	        $('#saytext').focus();
	        document.execCommand('InsertImage', false, $(ts)[0].src);
	    } 
	</script>
	<script>
		$('#tablist_a').click(function(){
			$('#feed_friend .friend-nav .con .tab .tablist').slideToggle();
		});
		// $('#feed_friend .op-list a').mouseout(function(){
		// 	$('#feed_friend .friend-nav .con .tab .tablist').slideUp();
		// });
	</script>
 

</body>
</html>