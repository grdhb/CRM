<?php

namespace App\Http\Controllers\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
    //登入
    public function index(){
    	// echo "1111";
    	
        return view('login/login');
    }
    //登录执行
    public function aaa_do()
    {
    	// echo "1111";
        $username = request()->username;
        $pwd = request()->pwd;
        $pwd=md5($pwd);
        // dump($username);
        // dd($pwd);
        // ffff
        $res=DB::table('register')->where('username','=',$username)->where('pwd','=',$pwd)->first();
        // dd($res);
        if($res){
            session(['username'=>$username]);
            echo json_encode(['code'=>1,'font'=>'登录成功']);
        }else{
            echo json_encode(['code'=>2,'font'=>'登录失败']);
            //sdddddd
        } 
    }




    //退出
    public function logout(){
        // echo "别点了自己做";
        request()->session()->forget('username');
        return redirect('/Login/login');
    }
}
