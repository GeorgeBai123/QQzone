<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function sendMessage(){
    	$data = array('Mcontent' => I('post.Mcontent'),
	    		'Mtime' => time(),
	    		'Mid' => 1);
    	$model = M('qq_message');
    	$model->add($data);
    	echo $model->getLastSql();
        // echo();
    }
}