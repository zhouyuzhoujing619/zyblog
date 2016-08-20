<?php
 namespace Admin\Controller;
 use Think\Controller;
 Class MoodlistController extends Controller{
 	public function index(){
 	   $re = M("moodlist");
        $count = $re->count();
        $page = new \Think\Page($count,5);
        $show = $page->show();
        $data = $re->where($where)->order('id asc')->limit(
            $page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
 	}
 	 function edit(){
         $article=M('moodlist');
         $id=(int)$_GET['id'];
         $list=$article->where("id=$id")->find();
         $this->assign('data',$list);
         $this->display();
     }
     function update(){
         $article=M('moodlist');
         if($article->create()){
             if($insertid=$article->save()){
                 $this->success('更新成功,受影响的行数为'.$insertid,__APP__."/Admin/Moodlist/index");
             }else{
                 $this->error('更新失败');     
             }
                      
         }
     }
    public function del(){

    }
 	public function add(){
 		 if(!empty($_POST)){
            $arr=$_POST;
            $temp=D('moodlist');
            $temp->create();//create添加
            $res=$temp->add();
            if($res){
             $this->success("添加成功",__APP__."/Admin/Moodlist/index");
            }else{
                echo "添加失败";
            }
        }else{
            echo "内容为空";
            $this->display();
        }
 	}

}
?>