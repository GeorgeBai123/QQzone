<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }
    public function register(){

    	$this->display('Login/register');
    }

    public function doajax(){
    	$model=M('lamp_address');
    	$upid = empty($_GET['upid'])?0:$_GET['upid'];
		//查询
		$data = $model->where('upid='.$upid)->select();
		//将结果返回
		echo json_encode($data);
    	
    }
    
    public function  doregister(){
        if(!IS_POST){
                $this->error('非法请求');
            }else{
                var_dump($_POST);
            // $pwd = I('post.password');
            // $rpwd = I('post.rpwd');
            // if($pwd != $pwded){
            //     $this->error('两次密码不一致!');
            // }
            // if(I('post.ver')!=session(I('post.phone'))){
            //     $this->error('验证码输入错误!');
            // }
            $User = D("user_main"); // 实例化User对象  
            if (!$User->create()){  
                 // 如果创建失败 表示验证没有通过 输出错误提示信息  
                 $this->error($User->getError());  
             }else{  
               $data = $User->insert();
               var_dump($data);
               $id=$User->add($data);
               echo $User->getLastSql();
              echo $id;
            DIE;
               if($id){
                 session('uid',$id);
                 $this->success('注册成功，正在为您跳转到首页',U('Index/index'),1);
               }
               
            }  
               
          
        }
    }

    public function  dologin(){
         $user = M('user_main');
        //判断用户是否登陆成功

        if($_POST) {
        
            $bin = $_POST;
            unset($bin['password']);
            $bin['status'] = 1;
            $bin['pasword'] = md5($_POST['password']);
            // 判断这是QQ号码,手机号还是邮箱



            
            $data = $user -> where($bin) -> find();
            echo $user->getLastSql();

        if($data) {
            
             $_SESSION['user'] = $data;
             $_SESSION['islogin'] = 1;

             $this->redirect('Index/index');

             } else {
                die;
             $this->error('用户名或密码不正确!'); 
         }
       }
    }
    public function sjajax(){
        import('Org.Alidayu.top.TopClient');
        import('Org.Alidayu.top.ResultSet');
        import('Org.Alidayu.top.RequestCheckUtil');
        import('Org.Alidayu.top.TopLogger');
        import('Org.Alidayu.top.request.AlibabaAliqinFcSmsNumSendRequest');
       

        $c = new \TopClient;
        $c->appkey = '23465450';  
        $c->secretKey = '78cd45b47623fd5575f6a2443b40bca2';
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req ->setExtend( "123456" );
        $req ->setSmsType( "normal" );
        $req ->setSmsFreeSignName( "安宗奇" );//来源于配置短信签名 下面列表中有签名名称
        $code = rand(1000,9999);
        
        $req ->setSmsParam( "{name:'{$code}'}" ); //变量来源于 配置短信模板 点击列表中的详情 模板内容的变量
        $req ->setRecNum($_GET['sj']); //手机号
        $req ->setSmsTemplateCode("SMS_16300200"); //配置短信模板 列表中有模板id
        $resp = $c ->execute( $req );
        S($_GET['sj'],$code);
        session($_GET['sj'],$code);
        echo $code;
    }
}