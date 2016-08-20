<?php
 namespace Admin\Controller;
 use Think\Controller;
 Class LoginController extends Controller{
 	public function index(){
	$this->display();
	}
	public function checklog(){
		if(isset($_POST['name'])){ 
			$name = $_POST['name'];
		}
		$pwd = $_POST['pwd'];
		$m = M("vistors");
		$msg = $m->where("name = '$name'")->find();
		if($msg['pwd'] == $pwd){
			cookie("username",$name);
			$this->success("登录成功",__APP__."/Admin/Index/index");
			//redirect(__APP__."/Home/Board/index",2,'登录成功');
		}else{
			$this->error("用户名或密码错误");
		}
				
	}
 		public function register(){
		$this->display();
	}
	public function checkreg(){
			$data['name'] = $_POST['name'];
			$data['password'] = $_POST['password'];
			$data['email'] = $_POST['email'];
			$m = M("vistors");
			$msg = $m->create($data);
			$result = $m->add();
			if($result == true){
				cookie("name",$data['name']);
				$this->success("注册成功",__APP__."/Admin/Login/login");
			}else{
				$this->error("注册失败,用户名已被占用");
			}
	}
 }
?>