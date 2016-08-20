<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
     private $db;
     private $viewDb;


    public function index(){
       $re = M("articlelist");
        $count = $re->count();
        $page = new \Think\Page($count,5);
        $show = $page->show();
        $data = $re->where($where)->order('id asc')->limit(
            $page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
        
	}


    public function add(){
        if(!empty($_POST)){
            $arr=$_POST;
            $temp=D('articlelist');
            $temp->create();//create添加
            $res=$temp->add();
            if($res){
             $this->success("添加成功",__APP__."/Admin/Article/index");
            }else{
                echo "添加失败";
            }
        }else{
            echo "内容为空";
            $this->display();
        }
    
    }

    public function delete(){
        $article=D('articlelist');
         if($article->delete($_GET['id'])){
             $this->success('删除成功');     
         }else{
             $this->error('删除失败');
         }
    }

    function edit(){
         $article=M('articlelist');
         $id=(int)$_GET['id'];
         $list=$article->where("id=$id")->find();
         $this->assign('data',$list);
         $this->display();
     }
     function update(){
         $article=M('articlelist');
         if($article->create()){
             if($insertid=$article->save()){
                 $this->success('更新成功,受影响的行数为'.$insertid,__APP__."/Admin/Article/index");
             }else{
                 $this->error('更新失败');     
             }
                      
         }
     }




}
  

   

