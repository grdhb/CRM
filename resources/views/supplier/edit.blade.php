<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<form class="layui-form" action="{{url('/Supplier/update/'.$data->s_id)}}" method='post' enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
        @if ($errors->any())     
        <div class="alert alert-danger">         
        <ul>             
        @foreach ($errors->all() as $error)                
        <li>{{ $error }}</li>            
         @endforeach         
        </ul>     
        </div> 
         @endif

  <div class="layui-form-item">
    <label class="layui-form-label">供应商名称</label>
    <div class="layui-input-block">
      <input type="text" name="s_name"   placeholder="请输入标题" autocomplete="off" class="layui-input" id="s_name" value="{{$data->s_name}}">
    </div>
  </div>

    <div class="layui-form-item">
    <label class="layui-form-label">供应商名字</label>
    <div class="layui-input-block">
      <input type="text" name="s_company"  id="s_company"  placeholder="请输入标题" autocomplete="off" class="layui-input" value="{{$data->s_company}}">
    </div>
  </div>


  <div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      <input type="radio" name="s_sex" value="男" title="男" id="s_sex" {{$data->s_sex=='男'?'checked':''}}>
      <input type="radio" name="s_sex" value="女" title="女" {{$data->s_sex=='女'?'checked':''}}>
    </div>
  </div>

      <div class="layui-form-item">
    <label class="layui-form-label">手机号</label>
    <div class="layui-input-block">
      <input type="text" name="a_tel"  id="a_tel"  value="{{$data->a_tel}}" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

      <div class="layui-form-item">
    <label class="layui-form-label">邮箱</label>
    <div class="layui-input-block">
      <input type="text" name="s_email" id="s_email" value="{{$data->s_email}}" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" id='aa'>立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>

</div>
@include('public/foot');
<script>
//Demo
layui.use(['form','layer'], function(){
  var form = layui.form;
  var layer = layui.layer;

  })

</script>
