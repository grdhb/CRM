<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')
<div class="layui-body">
<script src="\static\jquery-3.2.1.min.js"></script>
<a href="{{url('User/list')}}">展示页面</a>
<form class="layui-form" action="/User/update_do/{{$data->user_id}}" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名称</label>
        <div class="layui-input-block">
        <input type="text" name="u_name" lay-verify="u_name" autocomplete="off" value="{{$data->u_name}}" placeholder="请输入用户名" id="u_name" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">用户邮箱</label>
        <div class="layui-input-block">
        <input type="text" name="u_email" lay-verify="u_email" id="u_email" value="{{$data->u_email}}" autocomplete="off" placeholder="请输入邮箱" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">手机号</label>
        <div class="layui-input-block">
         <input type="text" name="u_tel" lay-verify="u_tel" id="u_tel" value="{{$data->u_tel}}" autocomplete="off" placeholder="请输入手机号" class="layui-input">
        </div>
    </div>
      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">省份</label>
        <div class="layui-input-block">
         <input type="text" name="province" lay-verify="province" id="province" value="{{$data->province}}" autocomplete="off" placeholder="请输入省份" class="layui-input">
        </div>
    </div>
     <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">市</label>
        <div class="layui-input-block">
         <input type="text" name="city" lay-verify="city" id="city" autocomplete="off" value="{{$data->city}}" placeholder="请输入市" class="layui-input">
        </div>
    </div>
     <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">区</label>
        <div class="layui-input-block">
         <input type="text" name="area" lay-verify="area" id="area" autocomplete="off" value="{{$data->area}}" placeholder="请输入区" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
        	<input type="submit" class="layui-btn" lay-submit="" lay-filter="demo1" id="btn" value="修改">
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>

    </form>
    @include('public/foot');
<script>
		layui.use('form',function(){
			var form = layui.form;
			// $('#btn').click(function(){
			// 	var u_name=$('#u_name').val();
			// 	var reg=/^[a-zA-Z0-9_\u4e00-\u9fa5]+$/;
			// 	var reg2=/^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
			// 	if(u_name==''){
			// 		alert('用户名不得为空');
			// 		return false;
			// 	}else if(!reg.test(u_name)){
			// 		alert("标题必须是中文字幕数字下划线");
	  //               return false;
			// 	}
			// 	$.ajax({
   //              method: "POST",
   //              url: "/User/checkName",
   //              dataType:'json',
   //              async:false,
   //              data: {u_name:u_name},
	  //           }).done(function(msg){
	  //               if(msg.count){
	  //                   alert('名称已存在');
	  //                   flag= false
	  //               }
	  //            });
	            
			// 	var u_email=$("#u_email").val();
	  //           if(u_email==''){
	  //               alert('邮箱不得为空');
	  //               return false;
	  //           }else if(!reg2.test(u_email)){
	  //           	alert('邮箱格式不正确');
	  //               return false;
	  //           }
	  //           var u_tel=$('#u_tel').val();
	  //           if(u_tel==''){
	  //           	alert('手机号不得为空');
	  //           	return false;
	  //           }
	  //           var province=$('#province').val();
	  //           if(province==''){
	  //           	alert('省份不得为空');
	  //           	return false;
	  //           }
	  //           var province=$('#province').val();
	  //           if(province==''){
	  //           	alert('省份不得为空');
	  //           	return false;
	  //           }
	  //           var city=$('#city').val();
	  //           if(city==''){
	  //           	alert('市不得为空');
	  //           	return false;
	  //           }
	  //           var area=$('#area').val();
	  //           if(area==''){
	  //           	alert('区不得为空');
	  //           	return false;
	  //           }
	  //           $.post(
	  //           	"{{url('User/add_do')}}",
	  //           	{u_name:u_name,u_email:u_email,u_tel:u_tel,province:province,city:city,area:area},
	  //           	function(res){
	  //           		if(res.code==1){
	  //           			alert(res.content);
	  //           			location.href="{{url('User/list')}}"
	  //           		}else{
	  //           			alert(res.content);
	  //           		}
	  //           	}
	  //           );

			// });
		})
</script>