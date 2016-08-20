<?php
 namespace Admin\Controller;
 use Think\Controller;
 class UserController extends Controller{
 	public function manager(){
 		$data=M("vistors")->select();
 		$this->assign('data',$data);
 		$this->display(manager);
 	}

 	public function del(){
 		$user=D('vistors');
         if($user->delete($_GET['id'])){
             $this->success('删除成功');     
         }else{
             $this->error('删除失败');
         }
 	}

 	function edit(){
         $user=M('vistors');
         $id=(int)$_GET['id'];
         $list=$user->where("id=$id")->find();
         $this->assign('data',$list);
         $this->assign('title','显示用户编辑信息'); 
         $this->display();
     }
     function update(){
         $user=M('vistors');
         if($user->create()){
             if($insertid=$user->save()){
                 $this->success('更新成功,受影响的行数为'.$insertid);
             }else{
                 $this->error('更新失败');     
             }
                      
         }
     }



     public function vistor(){
        $re=M('s_vistor');
        $data=$re->select();
        $this->assign('data',$data);
        $this->display();
     }
 }
?>