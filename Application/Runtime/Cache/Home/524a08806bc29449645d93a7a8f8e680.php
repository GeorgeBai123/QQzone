<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin:0;
			padding:0;
			list-style:none;
		}
		body{
			background: url('/think/Public/home/register/body.png') repeat-x #fff;
			font: 400 12px/14px Geneva,"宋体",Tahoma,sans-serif;
		
			overflow-x: auto;
		}
		#hbg{

			width: 100%;
		

		}
		#hbg .container{
			width: 956px;
			margin: 0 auto;
			background: url('/think/Public/home/register/left.png') left bottom no-repeat;
			
		}

		#hbg .container .hheader{

		background: url(/think/Public/home/register/reg.png) center top no-repeat;
		height: 94px;
		}

		#hbg .container .content .left{
			width: 210px;
			background: url('/think/Public/home/register/left.png') left top no-repeat #f8fdff;
			height: 650px;
			padding-top: 30px;
			float:left;
		}
		#hbg .container .content .right{
			float:left;
		}
		#hbg .container .content .right .haotitle{
			position: relative;
			width: 604px;
			height: 80px;
			margin-left: 63px;
			border-bottom: 1px solid #ddd;
		

		}
		#hbg .container .content .right .haotitle .fuck{
			position: absolute;
			width: 100%;
			height: 25px;
			line-height: 25px;
			font-family: "微软雅黑";
			font-size: 18px;
			text-indent: 6px;
			border-left: 3px solid #59AfE4;
			margin-top: 50px;
			color: #616161;
		}
		form{
			padding-top: 20px;
		}
		.box{
			clear: both;
			height: auto; 
		}
		.box .item{
			    float: left;
			    text-align: right;
			    width: 179px;
			    padding-right: 10px;
			    height: 44px;
			    padding-top: 6px;
			    height: 43px\9;
			    _height: 44px;
			    _padding-top: 8px;
			    line-height: 20px;
			    font-size: 14px;
		
		}
		.box .bg_txt{
			border: none;
			height: 35px;
			width: 300px;
			background: url(/think/Public/home/register/ipt.png) no-repeat;
		
		}
		.box .bg_txt .new_txt{
			width: 284px;
			padding: 8px;
			border: none;
			line-height: 18px;
			font-size: 14px;
			background: 0 0;
		}
		.box .ipt_box{
				float: left;
				width: 306px;
				height: 50px;
				position: relative;
		}
		.box .info {
		    float: left;
		    width: 236px;
		    height: 40px;
		   
		}
		.box .info .new{
			color: red;
			background: url(/think/Public/home/register/pwd_sprite.png) 0 -342px no-repeat;
			padding-left: 16px;
			width: 233px;
			height: 35px;
			vertical-align: middle;
			padding-top:10px;
		}
		.box .info .ok{
		color: #48A309;
		background: url(/think/Public/home/register/ok.png) 0 11px no-repeat;
		padding-left: 14px;
		width: 233px;
		height: 35px;
		vertical-align: middle;
		padding-top:10px;
		}
		#enterBanner {
		    display: block;
		    width: 610px;
		    height: 165px;
		    background: url(/think/Public/home/register/enterBannerC.jpg) no-repeat center;
		    margin-left: 60px;
		    margin-top: 30px;
		    margin-bottom: -5px;

		}
		#nav_1{
			background-position: left bottom;
		
			width: auto;
			margin-left: 2px;
			background: url(/think/Public/home/register/left_2.png) left top no-repeat;
			background-position:0% 0%;
			height: 72px;
			padding: 10px 0 0 20px;
			cursor: pointer;
			display: block;
		}
		#nav_1 .nav_1 {
			background: url(/think/Public/home/register/icon.png) 0 -146px no-repeat;
			font-size: 20px;
			font-family: '微软雅黑';
			line-height: 26px;
			padding-left: 30px;
			height: 26px;
			display: block;
	 	}
	 	#nav_1 .dd{
	 		line-height: 16px;
			height: 16px;
			padding-top: 10px;
			display: block;
	 	}
	 	.clear{
	 		clear: both;
	 	}

	 	#ffooter{
	 		width: 956px;
			margin: 0 auto;
			background: #fff;
			text-align: center;
			color: #a6a6a6;
			padding: 20px 0;
	 	}
	 	#pwd_info{
	 		position:relative;
	 	}
	 	.pwd_tips {
		    width: 158px;
		    height: 71px;
		    padding-top: 6px;
		    position: absolute;
		    top: -18px;
		    background: url(/think/Public/home/register/pwd_sprite.png) no-repeat;
		}
		.pwd_tips div {
		    height: 22px;
		    line-height: 22px;
		    margin-left: 15px;
		    padding-left: 18px;
		}
		.pwd_tips .default{
			background: url(/think/Public/home/register/pwd_sprite.png) 0 -215px no-repeat;
		}
		.pwd_tips .red{
			background: url(/think/Public/home/register/pwd_sprite.png) 0 -281px no-repeat;
		}
		.pwd_tips .yes{
			background: url(/think/Public/home/register/pwd_sprite.png) 0 -247px no-repeat;
		}
		.sex{
			padding-left: 20px;
			display: inline-block;
			height: 18px;
			line-height: 18px;
			padding-top: 10px;
			cursor: pointer;
			color: #84a8c8;
		}
		.sex input{
			margin-left: 5px;
		}
		.box .ipt_box .area_value_bg {
   			 background: url(/think/Public/home/register/ipt.png) -106px -246px no-repeat;
   			 width: 97px;
			height: 23px;
			line-height: 23px;
		}
		#year,#pro{
			 width: 65px;
			 height: 23px;
			 line-height: 23px;
		}
		#month,#city{
			 width: 85px;
			 height: 23px;
			 line-height: 23px;
		}
		#day{
			 width: 50px;
			 height: 23px;
			 line-height: 23px;
		}
		#area{
			 width: 90px;
			 height: 23px;
			 line-height: 23px;
		}
		#verima_bg {
	    	background: url(//6.url.cn/zc/chs/img/ipt.png?v=10090)  no-repeat;
	    	background-position: 0 -597px;
	    	width: 169px;
	    	float: left;
		}
		{
			
		} 
		#verima_rbg {
	    background-color: #f4f9fd;
	    border-color: #d0dae3;
	   	color: #444;
	    display: inline-block;
	    font: 16px/33px "微软雅黑","宋体";
	    height: 31px;
	    text-align: center;
	    width: 119px;
	    padding-bottom: 3px;
	    _padding-bottom: 0;
	    -webkit-border-radius: 3px;
	    -moz-border-radius: 3px;
	    border-radius: 3px;
	    border-style: solid;
	    border-width: 1px;
	   
	    margin-left: 5px;
	    cursor: pointer;
	}
	#sub_box{
		color:yellow;
		background: #69b946;
	}
	</style>
</head>
<body>
	<div id="hbg">
		<div class="container">
			<div class="hheader"></div>
			<div class="content">
				<div class="left">
					<a id="nav_1">
						<span class="nav_1">QQ账号</span>
						<span class="dd">由数字组成，经典通行帐号</span>
					</a>
					<a id="nav_1">
						<span class="nav_1">邮箱账号</span>
						<span class="dd">用于邮箱注册,便于记忆</span>
					</a>
				</div>
				<div class="right">
					<div class="enterA">
						<a id="enterBanner"></a>
						<div class="haotitle">
							<div class="fuck">注册账号</div>
						</div>
						<form action="<?php echo U('doregister');?>" method="post" onsubmit="return check()">
							<div id="forArea">
								<div class="box box_3">
									<label class="item"for="nick">昵称</label>
									<div class="ipt_box">
										<div id="nick_bg" class="bg_txt">
											<input type="text" id="nick" name="nick" maxlength="24" 
											placeholder="请输入您的昵称" 
											class="new_txt">
										</div>
									</div>
									<div class="info" id="nick_info">
										<div class=""></div>
									</div>
								</div>
								<div class="box box_4">
									<label class="item"for="password">密码</label>
									<div class="ipt_box">
										<div id="pwd_bg" class="bg_txt">
											<input type="password" id="password" name="password" maxlength="24" 
											placeholder="请输入您的密码" 
											class="new_txt">
										</div>
									</div>
									<div class="info" id="pwd_info">
										<div class="pwd_tips" id="pwd_tips">
											<div class="default" id="pwd_tip1">长度为6-16个字符</div>
											<div class="default" id="pwd_tip2">不能包含空格</div>
											<div class="default" id="pwd_tip3">不能是9位以下纯数字</div>
										</div>
									</div>
								</div>
								<div class="box box_5">
									<label class="item"for="nick">确认密码</label>
									<div class="ipt_box">
										<div id="nick_bg" class="bg_txt">
											<input type="password" id="rpwd" name="rpwd" maxlength="24" 
											placeholder="请再次输入您的密码" 
											class="new_txt">
										</div>
									</div>
									<div class="info" id="rpwd_info">
										<div class=""></div>
									</div>
								</div>
								<div class="box box_6">
									<label class="item"for="sex">性别</label>
									<div class="ipt_box ">
									    <div class="sex">
									    	<input type="radio" name="sex">男
											<input type="radio" name="sex">女
									    </div>
										
									</div>
									
								</div>
								<div class="box box_7">
									<label class="item"for="birth">生日</label>
									<div class="ipt_box ">
										
										<select name="year" id="year"></select>
										
									 
									  <select name="month" id="month"></select>
									  <select name="day" id="day"></select>
										
									</div>
								</div>
								<div class="box box_8">
									<label class="item"for="birth">地址</label>
									<div class="ipt_box ">
										
									 <select name="pro" id="pro" width="40px"></select>
										
									 
									  <select name="city" id="city"></select>
									  <select name="area" id="area"></select>
										
									</div>
								</div>
								<div class="box box_9">
									<label class="item"for="yzm">手机号码</label>
									<div class="ipt_box ">
										<div id="yzm_bg" class="bg_txt">
											<input type="text" id="yzm" name="yzm" maxlength="24" 
											placeholder="请输入您的手机号" 
											class="new_txt">
										</div>
									
										
									</div>
									<div class="info" id="yzm_info">
										<div class=""></div>
									</div>
								</div>
								<div class="box box_10">
									<label class="item"for="yzm"></label>
									<div class="ipt_box ">
										<div id="verima_bg" class="bg_txt">
											<input type="text" id="yzms" name="ver" maxlength="24" 
											placeholder="请输入您的验证码" 
											class="new_txt">

										</div>
										<div id="verima_rbg" >
											<span>获取短信验证码</span>

										</div>
										
										
									</div>
									<div class="info" id="ver_info">
										<div class=""></div>
									</div>
								</div>
								<div class="box box_9">
									<label class="item"for="yzm"></label>
									<div class="ipt_box ">
										<div id="sub_box" class="bg_txt">
											<input type="submit" id="sub"  
											 value="立即注册"
											class="new_txt">
										</div>
									
										
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
					
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="footer" id="ffooter">
		Copyright <span>©</span> 1998-2016 Tencent All Rights Reserved 腾讯公司 版权所有
	</div>
</body>
<script src="/think/Public/home/jquery-1.8.3.min.js"></script>
<script>


			for (i = 1; i < 13; i++) { 
       			 month.options.add(new Option(i+'月', i)); 
    		}
    		for (i = 1980; i < 2016; i++){ 
       			 year.options.add(new Option(i+'年', i));

    		}
    		year.onchange =function(){
    			month.onchange();
    		}
    		var time_arr=[1,3,5,7,8,10,12];
    		month.onchange = function(){
    			day.options.length=0;
    			var years = year.value;
    			
    			var result =((years%4==0 && years%100!=0)||(years%400==0))?1:2;
    			
    			var time_day;
    		
    			var mv = parseInt(month.value);
    		
    			
    			if(time_arr.indexOf(parseInt(month.value))>-1){

    				time_day=32;
    			}else if(mv==2){
    				if(result==1){
    					time_day=30;
    				}else{
    					time_day=29;
    				}
    			}else{
    				time_day =31;
    			}
    			for (i = 1; i < time_day; i++) { 
       			 day.options.add(new Option(i+'日', i)); 
    			}
    		}
    		month.onchange();
			/* 取得长度为length的字符串，一个汉字算两个字符*/
		 
		function getStringLength(field) {
		
		    var str = field;
		    var strLong=str.length;
		   for (var i = 0; i < str.length; i++) {
		   var charCode = str.charCodeAt(i);
		            if(charCode > 255){
		                   strLong += 1;
		               }
		   }
		   return strLong; 
		}; 
		$('#nick').focus();
		// 邮箱注册和普通注册切换
		$('.content .left a:first').css('background-position','0% 100%');
		$('.content .left a').click(function(){
			$(this).css('background-position','0% 100%').siblings('a').css('background-position','0% 0%');
		});
		//表单验证
		//昵称验证
		var nick_status = false;
		nick.oninput =function(){
			if(this.value!=''){
				if( getStringLength(this.value)>24){
				$(this).val(this.value.substr(0,this.value.length-1));
				$('#nick_info div').html('不能超过24个字母或12个汉字');
				$('#nick_info div').attr({class:'new'});
				nick_status = false;
			}else{
				nick_status = true;
				$('#nick_info div:eq(0)').html('');
				$('#nick_info div:eq(0)').removeAttr('class');
			}
		}else{
			nick_status = false;
		}
			
			
		};
		nick.onblur = function(){
			if(this.value==""){
				$('#nick_info div').html('昵称不能为空');
				$('#nick_info div').attr({class:'new'});
			}else{
				nick_status=true;
				if(nick_status==true){
					$('#nick_info div').html('');
					$('#nick_info div').attr({class:'ok'});
				}
				
			}
		};
		//密码验证
		var pwd_status = false;
		var pwd_st1= false;
		var pwd_st2= false;
		var pwd_st3=false;
		password.oninput =function(){
			if(this.value.length<6||this.value.length>16){
					$('#pwd_tip1').attr('class','red');
					pwd_st1=false;
			}else{
				pwd_st1=true;
				 $('#pwd_tip1').attr('class','yes');
			}
			if(this.value.indexOf(' ')>=0){
				pwd_st2= false;
				$('#pwd_tip2').attr('class','red');
			}else{
				pwd_st2=true;
				 $('#pwd_tip2').attr('class','yes');
			}
			if((/^\d{0,8}$/.test(this.value))){
				 pwd_st3=false;
				$('#pwd_tip3').attr('class','red');
			}else{
				pwd_st3=true;
				 $('#pwd_tip3')	.attr('class','yes');
			}
			if(pwd_st1&&pwd_st2&&pwd_st3){
				pwd_status=true;
			}
		};
		//密码确认
		 var rpwd_stats = false;
		 rpwd.oninput = function(){
		 	if(this.value!=''){

		 		if(this.value!=(password.value)){
			 		$('#rpwd_info div').html('密码不一致');
					$('#rpwd_info div').attr({class:'new'});
						rpwd_stats=false;
		 		}else{
			 		$('#rpwd_info div').html('');
					$('#rpwd_info div').attr({class:'ok'});
					rpwd_stats=true;
		 		}
		 	}else{
		 		$('#rpwd_info div').html('请再次输入密码');
		 	}
		 	
		 };

		 //地址
		$.ajax({
	        type:'get',
	        url:'<?php echo U('doajax');?>',
	        success:function(data){
	             console.log(data);
	            //先清空原先的数据
	            //遍历省份数据
	            for (var i = 0; i < data.length; i++) {
	                $('<option value="'+data[i].id+'">'+data[i].name+'</option>').appendTo('#pro');
	            }
	        },
	        dataType:'json',
	        async:false,//同步!!!!!!
	    });


    //绑定事件
    $('#pro,#city').change(function(){

        //获取当前的vale值
        var upid = $(this).val();
        console.log(upid);
        //一触发change事件,就清空后面所有的数据
        $(this).nextAll('select').show().empty();
        //保留$(this)变量
        var _this = $(this);
        // console.log($(this));

        //请求下一级数据
        $.ajax({
            type:'get',
            url: '<?php echo U('doajax');?>',
            data:"upid="+upid,
            success:function(data){
                //如果下一级没数据,就隐藏后面的下拉框
                if (!data) {
                    _this.nextAll('select').hide();
                    return;
                };
                // console.log(data);
                // console.log($(this).constructor);
                //填充下一级的数据
                for (var i = 0; i < data.length; i++) {
                    $('<option value="'+data[i].id+'">'+data[i].name+'</option>').appendTo(_this.next('select'));
                }
                //自动触发后面的select的change事件
                _this.next('select').trigger('change');
            },
            dataType:'json',
        });
    });

   
    $('#pro').trigger('change');

   //验证码
    var yzm_status=false;
	yzm.onblur = function(){
	    var phone = this.value;
	    if(!(/^1(3|4|5|7|8)\d{9}$/.test(phone))){ 
	       $('#yzm_info div').html('请输入正确的手机号码');
		  $('#yzm_info div').attr({class:'new'});
		  return false;
	    }else{
	    	 $('#yzm_info div').html('');
	    	 $('#yzm_info div').removeAttr('class');
	    	 return true;
	    } 
	    yzm_status=true;
	};
	verima_rbg.onclick =function(){
		  	yzm_status=yzm.onblur();
		  	if(yzm_status){
		  		alert('hi');
		  		$.ajax({
		  			 type:'get',
			         url:'<?php echo U('sjajax');?>',
			         data:{sj:yzm.value},
			         success:function(data){
			         	alert('系统已发送验证码请正确填写');

			         }
		  		});
		  	}else{
		  	
		  		 $('#yzm_info div').html('请输入正确的手机号码');
			  	$('#yzm_info div').attr({class:'new'});
			  	return false;
		  	}
	};
	
 function check(){
 	  nick.oninput();
 	  if(yzms.value.length!=4){
        
         console.log(yzms.value);
 	  }else{
 	  	yzm_status=true;

 	  }
 	  console.log(nick_status);
	  if(yzm_status&&rpwd_stats&&nick_status){
	  	return true;
	  }
	  if(!yzm_status){
	     alert('验证码不能为空');
	     return false;
	  }
	  if(!rpwd_stats){
	  	alert('请正确输入密码');
	  	return false;
	  }
	  if(!nick_status){
	  	alert('昵称输入失败');
	  	return false;
	  }
	  return false;
 }
 
		
		
</script>
</html>