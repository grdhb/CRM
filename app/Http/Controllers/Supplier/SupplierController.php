<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    //供应商
    public function index()
    {
        return view( 'Supplier/add');
    }
    //产品列表
    public function list()
    {
        return view( 'Supplier/list');
    }
}
