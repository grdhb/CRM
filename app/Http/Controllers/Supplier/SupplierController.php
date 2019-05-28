<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SupplierController extends Controller
{
    //供应商
    public function index()
    {
        echo 456;
        return view( 'Supplier/add');

    }
    //添加
    public function add(Request $request)
    {
        echo 45666;
       $data = $request->all();
       $data['created_at'] = time();
       $res = DB::table('admin_supplier')->insert($data);
       if($res){
        echo json_encode(['font'=>'添加成功','code'=>1]);
       }else{
        echo json_encode(['font'=>'添加失败','code'=>2]);
       }
    }
  
    //产品列表
    public function list()
    {
        $pageSize = config('app.pageSize');
        $data = DB::table('admin_supplier')->paginate($pageSize);
        return view( 'Supplier/list',['data'=>$data]);
    }

    //删除
    public function del($s_id){
        $res = DB::table('admin_supplier')->where(['s_id'=>$s_id])->delete();
        if($res){
            return redirect('Supplier/list');
        }
    }

    //修改
    public function edit($s_id)
    {
        $data = DB::table('admin_supplier')->where('s_id',$s_id)->first();

        return view('Supplier/edit',['data'=>$data]);
    }
    //修改执行
    public function update(Request $request, $s_id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = time();
             $validatedData = $request->validate([         
            's_name' => 'required|unique:admin_supplier|max:255',         
            's_company' => 'required',   
            's_sex' => 'required',
            'a_tel' => 'required',
            's_email' => 'required',     
        ],[
            's_name.required'=>'供应商名称不能为空',
            's_name.unique'=>'供应商名称已存在',
            's_company.required'=>'供应商名字不能为空',
            'a_tel.required'=>'电话不能为空',
            's_email.required'=>'邮箱不能为空',
        ]);
        $res = DB::table('admin_supplier')->where('s_id',$s_id)->update($data);
        if($res){
            return redirect('/Supplier/list');
        }
    }
      //验证唯一性
      public function checkname()
      {
        $s_name = request()->s_name;
        if($s_name){
            $where['s_name']=$s_name;
            $count = DB::table('admin_supplier')->where($where)->count();
;            return ['code'=>1,'count'=>$count];
        }
      }
      
}
