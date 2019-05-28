<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">
    <!-- 内容主体区域 -->
    <table class="layui-table">
  <colgroup>
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>id</th>
      <th>供应商名称</th>
      <th>供应商名字</th>
      <th>性别</th>
      <th>手机号</th>
      <th>邮箱</th>
      <th>添加时间</th>
      <th>操作</th>
    </tr> 
  </thead>
  @if($data)
        @foreach($data as $v)
  <tbody>
    <tr>
      <td>{{$v->s_id}}</td>
      <td>{{$v->s_name}}</td>
      <td>{{$v->s_company}}</td>
      <td>{{$v->s_sex}}</td>
      <td>{{$v->a_tel}}</td>
      <td>{{$v->s_email}}</td>
      <td>{{date('Y-m-d H:i:s',$v->created_at)}}</td>
      <td><a href="{{url('/Supplier/del',['s_id'=>$v->s_id])}}">删除</a>
      <a href="/Supplier/edit/{{$v->s_id}}">编辑</a>
      </td>
    </tr>
    @endforeach
        @endif
  </tbody>
</table>
{{$data->links()}}
</div>
@include('public/foot');