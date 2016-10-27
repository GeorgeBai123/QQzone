<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    // 页面跳转  
    public function index(){
    	$this->display();
    }
    public function information(){
        $user_intr['uid']=$_SESSION['user']['id'];
        // 查兴趣表
        $interesting=M('user_intr');
        $data[1] = $interesting->where($user_intr)->select();
        // 查信息详情表
        $information=M('user_inf');
        $data[2] = $information->where($user_inf)->select();

        // $data=jion
        // $data=$Model->jion($data1)->jion($data2)->select();
        // var_dump($data);
        // exit;

        // $this->ajaxReturn($data);
        $this->assign('list',$data);
    	$this->display('User/information');
    }
    public function article(){
        $this->display('User/article');
    }
    public function alblum(){
        $this->display('User/alblum');
    }
    public function moment(){
        $this->display('User/moment');
    }
    public function more(){
        $this->display('User/more');
    }

    // 头像上传
    public function uploadtouxiang(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './public/upload/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        //$upload->thumbRemoveOrigin = true;             //生成缩略图后是否删除原图
        // 采用date函数生成命名规则 传入Y-m-d参数
        $upload->saveName = 'time';
        // 上传文件
        $info   =  $upload->upload();

        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //$this->success('上传成功！');
            //裁剪
            import('ORG.Util.Image');
            $image = new \Think\Image();
            foreach($info as $file){
                $imgurl=$file['savepath'].$file['savename'];
            }
          	echo $imgurl;
            // $image->open('./UploadImg/'.$imgurl);
            // //将图片裁剪为400x400并保存为corp.jpg
            // $image->crop(115, 105)->save('./UploadImg/thumbnail/crop.jpg');
            //$model = M('Photo');

            //$data['photo'] = $info[0]['savename'];
           // $data['create_time'] = NOW_TIME;
           // $model->add($data);
        }
    }
    // 注销登录
    public function logout(){
        session_destroy();
        $this->display('login/index');
    }
}