<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
	public function _initialize(){
		if(empty($_SESSION['login'])){
			$this->redirect('Login/index');
		}
		echo "通过了权限验证";
	}
}
