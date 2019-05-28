<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">
    <!-- 内容主体区域 -->

	<form class="layui-form" action="" method="post">
		
		<div class="layui-form-item" style=margin-top:20px;>
	    	<label class="layui-form-label">产品名称</label>
	    	<div class="layui-input-inline">
	      		<input type="text" name="g_name" lay-verify="required" autocomplete="off" placeholder="请输入名称" class="layui-input">
	    	</div>
	  	</div>

	    <div class="layui-form-item">
	      <div class="layui-inline">
	        <label class="layui-form-label">产品分类</label>
	        <div class="layui-input-inline">
	          <select name="c_id">
	            <option value="">请选择上级分类</option>
	            @if($cateInfo)
         		@foreach($cateInfo as $v)
	              <option value="{{$v->c_id}}">{{$v->c_name}}</option>
	            @endforeach
         		@endif
	          </select>
	        </div>
	      </div>
	    </div>

		<div class="layui-form-item">
	    	<label class="layui-form-label">售价</label>
	    	<div class="layui-input-inline">
	      		<input type="text" name="g_price" lay-verify="required" autocomplete="off" placeholder="请输入售价" class="layui-input">
	    	</div>
	  	</div>

	  	<div class="layui-form-item">
	    	<label class="layui-form-label">库存</label>
	    	<div class="layui-input-inline">
	      		<input type="number" name="g_number" lay-verify="required" autocomplete="off" placeholder="请输入库存" class="layui-input">
	    	</div>
	  	</div>

	  	<div class="layui-form-item">
	      <div class="layui-inline">
	        <label class="layui-form-label">供应商名称</label>
	        <div class="layui-input-inline">
	          <select name="s_id">
	            <option value="">请选择上级分类</option>
	            @if($supplierInfo)
         		@foreach($supplierInfo as $v)
	              <option value="{{$v->s_id}}">{{$v->s_name}}</option>
	            @endforeach
         		@endif
	          </select>
	        </div>
	      </div>
	    </div>

		<div class="layui-form-item layui-form-text">
	    	<label class="layui-form-label">描述</label>
	    	<div class="layui-input-block">
	     		<textarea placeholder="请输入描述品牌内容" name="g_desc" class="layui-textarea"></textarea>
	    	</div>
	  	</div>

	  	<div class="layui-form-item">
	    	<div class="layui-input-block">
	      		<input type="button" class="layui-btn" lay-submit="" lay-filter="*" value="立即提交">
	    	</div>
	  	</div>
	</form>


</div>
<script>
  	layui.use(['form'], function(){
  		var form=layui.form;

		//提交
	    // $('.layui-btn').click(function(){
	    form.on('submit(*)', function(data){
	      $.post(
	          "{{url('/Goods/doadd')}}",
	          data.field,
	          function(res){
	          	// console.log(res);
	            if(res.code==1){
	                layer.open({
	                    content: '添加成功'
	                    ,btn: ['再次添加', '跳转至列表']
	                    ,yes: function(index, layero){
	                        location.href="{{url('/Goods/index')}}";
	                    }
	                    ,btn2: function(index, layero){
	                        location.href="{{url('/Goods/list')}}";
	                    }
	                });
	            }else{
	                layer.msg(res.font,{icon:res.code});
	            }
	          },
	          'json'
	      );
	      //阻止表单跳转。如果需要表单跳转，去掉这段即可。
	      return false;
	    });

	});
</script>
@include('public/foot');