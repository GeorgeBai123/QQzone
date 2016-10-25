<?php
namespace Home\Model;
use Think\Model;
header("content-type:text/html;charset=utf-8");
class UserModel extends Model {
	 protected $_validate = array(  
     array('ver','require','验证码必须！'),                     // 默认情况下用正则进行验证  
     array('phone','','帐号名称已经存在！',0,'unique',1),           // 在添加数据时(参6为1)验证name字段是否唯一，参4为0表示可以有存在字段就验证       
     array('sex',array(0,1,2),'sex值的范围不正确！',2,'in'),        // 当(参4)值不是为空的时候就判断是否在一个范围内  
      array('password','require','密码不能为空'),
       array('repwd','pwd','确认密码不正确',1,'confirm'),
   );
    public function getall(){
    	$list = $this->select();
    	$array=['男','女','傻逼'];
    	foreach ($list as $key => $value) {
    		$list[$key]['sex']=$array[$value['sex']];
    	}
    	return $list;
    }

    public function insert(){
	  
    	$year = $_POST['year'];
    	$month = $_POST['month'];
    	$day = $_POST['day'];
    	$address = $_POST['pro'].','.$_POST['city'].','.$_POST['area'];
    	$birth = mktime(0,0,0,$month,$day,$year);
    	 $data = array(
    	 	'name' =>I('post.nick'),
    	 	'password'=>I('post.password'),
    	 	'rgtime'=>NOW_TIME,
    	 	'address'=>$address,
    	 	'birthday'=>$birth,
    	 	'phone'=>I('post.yzm'),
    	  );
    	
       return $data;
    	}
	
}