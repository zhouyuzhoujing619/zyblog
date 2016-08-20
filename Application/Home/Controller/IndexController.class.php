<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $data=M("articlelist")->select();
       $this->assign('data',$data);
       $this->display("index");
    }
    public function about(){
        $this->display();
    }
     public function knowledge(){
      $re = M("articlelist");
        $count = $re->where(fenlei==学习)->count();
        $page = new \Think\Page($count,5);
        $show = $page->show();
        $data = $re->where($where)->order('id asc')->limit(
            $page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
        
    }
    public function moodlist(){
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
    public function newlist(){
      $re = M("articlelist");
        $count = $re->where(fenlei==生活)->count();
        $page = new \Think\Page($count,5);
        $show = $page->show();
        $data = $re->where($where)->order('id asc')->limit(
            $page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
        
    }
     public function share(){
        $this->display();
    }

    public function show(){
         $article=M('articlelist');
         $id=(int)$_GET['id'];
         $list=$article->where("id=$id")->find();
         $this->assign('data',$list);
         $this->display();
    }
}