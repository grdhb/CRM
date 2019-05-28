<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    //用户
    public function index(){
    	 //查询省份
        return view('User/add');
    }
    //验证唯一性
    public function checkName(){
    	$u_name = request()->u_name;
        if($u_name){
            $where['u_name'] = $u_name;
            $count = DB::table('user')->where($where)->count();
            return ['code'=>1,'count'=>$count];
        }
    }
    //执行添加
    public function add_do(Request $request){
    	$data=$request->input();
        $validatedData = $request->validate([
            'u_name' => 'required|unique:user',
            'u_tel' => 'required',
            'u_email' => 'required'
        ],[
            'u_name.required' =>'用户名名不能为空',
            'u_name.unique' =>'用户名不能重复',
            'u_tel.required' =>'手机号不能为空',
            'u_email.required' =>'邮箱不能为空'
        ]);
        $data['created_at']=time();
        $data['updated_at']=time();
        $res=DB::table('user')->insert($data);
        if($res){
        	return ['code'=>1,'content'=>'添加成功'];
        }else{
        	return ['code'=>2,'content'=>'添加失败'];
        }
      
    }
    //列表
    public function list()
    {
    	$query=request()->all();
    	$where=[];
        $u_name=$query['u_name']??'';
        $u_email=$query['u_email']??'';
        if($query['u_name']??''){
            $where[]=[
                'u_name','like',"%$u_name%"
            ];
        }
        if($query['u_email']??''){
            $where['u_email']=$u_email;
        }
    	$data=DB::table('user')->where($where)->orderBy('user_id','desc')->get();
        return view('User/list',compact('data','query'));
    }
    //删除
    public function del($id){
    	$delete=DB::table('user')->where('user_id','=',$id)->delete();
    	if($delete){
    		return redirect('/User/list');
    	}
    }
    //修改
    public function update($id){
    	$where=[
    		'user_id'=>$id
    	];
    	$data=DB::table('user')->where($where)->first();
    	return view('User/update',compact('data'));
    }
    //执行修改
    public function update_do($id){
    	$data=request()->input();
        $validatedData = request()->validate([
            'u_name' => 'required|unique:user',
            'u_tel' => 'required',
            'u_email' => 'required'
        ],[
            'u_name.required' =>'用户名名不能为空',
            'u_name.unique' =>'用户名不能重复',
            'u_tel.required' =>'手机号不能为空',
            'u_email.required' =>'邮箱不能为空'
        ]);
        $data['created_at']=time();
        $data['updated_at']=time();
        $res=DB::table('user')->where('user_id',$id)->update($data);
        if($res){
        	return redirect('/User/list');
        }

    }

}
