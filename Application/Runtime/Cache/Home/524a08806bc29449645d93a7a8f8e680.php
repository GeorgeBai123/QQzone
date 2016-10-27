<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/home/css/home.register.css">
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
											<input type="text" id="yzms" name="ver" maxlength="24"placeholder="请输入您的验证码" 
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
<script src="/Public/jQuery/jquery-1.8.3.min.js"></script>
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