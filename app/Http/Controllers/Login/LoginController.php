<?php

namespace App\Http\Controllers\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登入
    public function index(){
        return view('login/login');
    }
    //退出
    public function logout(){
        echo "别点了自己做";
    }
}
