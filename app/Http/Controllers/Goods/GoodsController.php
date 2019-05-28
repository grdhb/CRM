<?php

namespace App\Http\Controllers\Goods;

use Illuminate\Http\Request;
use App\model\Goods;
use DB;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //产品添加
    public function index(){
    	$cateInfo=DB::table('cate')->get();
    	// print_r($cateInfo);die;
    	$supplierInfo=DB::table('supplier')->get();
        return view('Goods/add',compact('cateInfo','supplierInfo'));
        
    }
    //执行添加
    public function doadd()
    {
    	// echo '添加';
    	$data=request()->all();
    	// print_r($data);die;
    	$res=Goods::Create($data);
    	if($res){
			$message=[
		    	'font'=>'添加成功',
		    	'code'=>1
		    ];
		    echo json_encode($message);
		}else{
			$message=[
		    	'font'=>'添加失败',
		    	'code'=>2
		    ];
		    echo json_encode($message);exit;
		}
    }
    //产品列表
    public function list()
    {
    	$keywords=request()->keywords;
        $where=[];
        if($keywords){
            $where[]=[
                'g_name','like',"%$keywords%"
            ];
        }

        $goodsInfo=DB::table('goods')
            ->join('cate','goods.c_id','=','cate.c_id')
            ->join('supplier','goods.s_id','=','supplier.s_id')
            ->where($where)
            ->orderBy('g_id','desc')
            ->paginate(3);
        // print_r($goodsInfo);exit;
        return view('Goods/list',compact('goodsInfo','keywords'));
    }
    //删除
    public function del()
    {
    	// echo '删除';die;
        $g_id=request()->g_id;
        // echo $g_id;die;
        $where=[
            ['g_id','=',$g_id]
        ];
        $res=DB::table('goods')->where($where)->delete();
        if($res){
			$message=[
		    	'font'=>'删除成功',
		    	'code'=>1
		    ];
		    echo json_encode($message);
		}else{
			$message=[
		    	'font'=>'删除失败',
		    	'code'=>2
		    ];
		    echo json_encode($message);exit;
		}
    }
}
