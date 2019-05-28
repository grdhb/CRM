<?php

namespace App\Http\Controllers\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Register;
use DB;
class RegisterController extends Controller
{
    //注册
    public function index()
    {
        return view('login/register');
    }

    public function addregister()
    {
    	// dd(12);
    	$post=request()->except('_token');
    	$post['pwd']=md5($post['pwd']);
    	$post['repwd']=md5($post['repwd']);
    	
    	$data['username']=request()->username;
    	$data['code']=request()->code;
    	$data['pwd']=request()->pwd;
    	$data['repwd']=request()->repwd;
    	
    	if($post['pwd'] != $post['repwd']){
    		echo json_encode(['code'=>2,'font'=>'密码与确认密码不一致']);die;
    	}
    	if($data['code'] != session('code')){
    		echo json_encode(['code'=>2,'font'=>'验证码不正确']);die;
    	}
    	$res=Db::table('register')->where('username','=',$data['username'])->count();
    	if($res>=1){
    		echo json_encode(['code'=>2,'font'=>'该名称已存在']);die;
    	}

    	$row=Register::create($post);
    	if($row){
    		echo json_encode(['code'=>1,'font'=>'注册成功789']);
    	}

   

    }

    /**
     * 验证码发送
     */
    public function send()
    {
    	$username=request()->username;

    	if(strpos($username,'@') == false){
    		echo json_encode(['code'=>2,'font'=>'邮箱格式不正确']);die;
    	}

    	$res=Db::table('register')->where('username','=',$username)->count();
    	if($res>=1){
    		echo json_encode(['code'=>2,'font'=>'该名称已存在']);die;
    	}
		$code=rand(1000,9999);
     	$this->sendemail($username,$code);
     	// request()->session->forget('code');
     	session(['code'=>$code]);
    	

    }
    /**
	 * 邮件发送类
	 */
	public function sendemail($username,$code)
	{
		// \Mail::send('email',['name'=>"你的验证码为$code"],function($message)use($username){
		// 			  //设置主题
		// 			  $message->subject("798");
		// 			  //设置接收方
		// 			$message->to($username);
					
		// 	 });
		 \Mail::raw('验证码为' . $code, function ($message) use ($username) {
            //设置主题
            $message->subject("您的验证码为");
            //设置接收方
            $message->to($username);
        });	
   // dump($username);
   // dd($code);
	}
}
