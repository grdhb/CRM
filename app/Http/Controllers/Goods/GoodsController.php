<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //产品
    public function index(){
        return view( 'Goods/add');
    }
    //产品列表
    public function list()
    {
        return view('Goods/list');
    }
}
