<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //用户
    public function index(){
        return view('User/add');
    }
    //列表
    public function list()
    {
        return view('User/list');
    }
}
