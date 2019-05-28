<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">

    
	<div class="layui-form" style=margin-left:30px;margin-top:20px;>
	  <form>
	    <div class="layui-form-item">
	      <div class="layui-input-inline">
	        <input type="text" name="keywords" value="{{$keywords??''}}" placeholder="请输入产品名称" class="layui-input">
	      </div>
	      <!-- <input type="button" value="搜索" id="button" class="layui-btn layui-btn-primary"> -->
	      <button class="layui-btn sousou">搜索</button>
	    </div>  
	  </form>
	</div>
	  <script>
	    
	  </script>
	  <div class="layui-form" id="content" style=margin-left:30px;>
	    <table border="1" class="layui-table">
	      <tr align="center" style=color:pink;font-weight:bold;>
	        <td>ID</td>
	        <td>产品名称</td>
	        <td>产品分类</td>
	        <td>产品数量</td>
	        <td>单价</td>
	        <td>供应商名称</td>
	        <td>产品介绍</td>
	        <td>添加时间</td>
	        <td>修改时间</td>
	        <td>操作</td>
	      </tr>  
	      @if($goodsInfo)
          @foreach($goodsInfo as $v)
	        <tr align="center" g_id={{$v->g_id}}>
	          <td>{{$v->g_id}}</td>
	          <td>{{$v->g_name}}</td>
	          <td>{{$v->c_name}}</td>
	          <td>{{$v->g_number}}</td>
	          <td>{{$v->g_price}}</td>
	          <td>{{$v->s_name}}</td>
	          <td>{{$v->g_desc}}</td>
	          <td>{{$v->created_at}}</td>
	          <td>{{$v->updated_at}}</td>
	          <td> 
	              <a href=""><button class="layui-btn">编辑</button></a>
	              <a href="javascript:;"><button class="layui-btn layui-btn-danger" id="del">删除</button></a>
	          </td>
	        </tr>
		  @endforeach
          @endif
	    </table>
	    {{ $goodsInfo->appends(['keywords'=>$keywords])->links() }}
	  </div>
	
</div>
<script>
  $(function(){
  	layui.use(['form'], function(){
      	var form = layui.form;

		//点击删除
		$(document).on('click','#del',function(){
		  var _this=$(this);
		  var g_id=_this.parents('tr').attr('g_id');
		  // alert(g_id);

		  //把商品id传给控制器
		  $.post(
		      "{{url('/Goods/del')}}",
		      {g_id:g_id},
		      function(res){
		          // console.log(res);
		          layer.msg(res.font,{icon:res.code});
		          if(res.code==1){
		              //把当前一行元素移除
		              _this.parents('tr').remove();
		          }
		      },
	          'json'
		  );   
		});

  	});
  });
</script>
@include('public/foot');