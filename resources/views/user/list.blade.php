<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">用户列表</div>
    	<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
    <div class="layui-form">
        <table class="layui-table">
          <colgroup>
            <col width="150">
            <col width="150">
            <col width="200">
            <col>
          </colgroup>
          <form>
            <input type="text" name="u_name" value="{{$query['u_name']??''}}" placeholder="请输入用户名关键字">
            <input type="text" name="u_email" value="{{$query['u_email']??''}}" placeholder="请输邮箱入关键字">
            <button>搜索</button>
        </form>
        @if($data)
		@foreach($data as $v)
		<tr>
				<td><b>ID</b>:{{$v->user_id}}</td>
				<td><b>用户名称</b>:{{$v->u_name}}</td>
				<td><b>用户邮箱</b>:{{$v->u_email}}</td>
				<td><b>用户手机号</b>:{{$v->u_tel}}</td>
				<td><b>用户地址</b>:{{$v->province}}{{$v->city}}{{$v->area}}</td>
				<td>
					<a href="{{url('User/del',['user_id'=>$v->user_id])}}">删除</a>
					<a href="{{url('User/update',['user_id'=>$v->user_id])}}">修改</a>
				</td>
		</tr>
		@endforeach
		@endif
        </table>
      </div>
</body>
</html>
</div>
@include('public/foot');