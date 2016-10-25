<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
   public function  uploadIMG(){
   		   $config = array(
		   				'mimes'         =>  array(), //允许上传的文件MiMe类型
		   				'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
		   				'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
		   				'autoSub'       =>  true, //自动子目录保存文件
		   				'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
		   				'rootPath'      =>  './Public/Upload/', //保存根路径
		   				'savePath'      =>  '',//保存路径
		   			  
		   		);
		   		$upload = new \Think\Upload($config);// 实例化上传类
		   		 
		   		
		   		$info   =   $upload->upload();
		   		
		   		if(!$info) {
		   			 
		   			$this->error($upload->getError());// 上传错误提示错误信息
		   			 
		   		}else{
		   			
		   			return $info;
		   			
		   		}
	}
   public function insertIMG(){
   	$info = $this->uploadIMG();
   	   if($info){
   	   	$data = array('mid' => I('get.mid'),
		'url' =>$info['file']['savename'],
	         );
		$model = M('m_image');
		$model->add($data);
   		echo $model->getLastSql();
   	   }
   		
   }
   //上传头像
    public function uploadtouxiang(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './UploadImg/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        //$upload->thumbRemoveOrigin = true;             //生成缩略图后是否删除原图
        // 采用date函数生成命名规则 传入Y-m-d参数
        $upload->saveName = 'time';
        // 上传文件
        $info   =   $upload->upload();
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
           
            $image->open('./UploadImg/'.$imgurl);
            //将图片裁剪为400x400并保存为corp.jpg
            $image->crop(115, 105)->save('./UploadImg/thumbnail/crop.jpg');
            //$model = M('Photo');
            echo $imgurl;
         
        }
    }
}