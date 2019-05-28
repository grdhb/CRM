<!-- 头部 -->
@include('public/hand')
<!-- 左侧 -->
@include('public/left')

<div class="layui-body">
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<form class="layui-form" action="">

  <div class="layui-form-item">
    <label class="layui-form-label">供应商名称</label>
    <div class="layui-input-block">
      <input type="text" name="s_name"   placeholder="请输入标题" autocomplete="off" class="layui-input" id="s_name">
    </div>
  </div>

    <div class="layui-form-item">
    <label class="layui-form-label">供应商名字</label>
    <div class="layui-input-block">
      <input type="text" name="s_company"  id="s_company"  placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>


  <div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      <input type="radio" name="s_sex" value="男" title="男" id="s_sex">
      <input type="radio" name="s_sex" value="女" title="女" checked id="s_sex">
    </div>
  </div>

      <div class="layui-form-item">
    <label class="layui-form-label">手机号</label>
    <div class="layui-input-block">
      <input type="text" name="a_tel"  id="a_tel"  placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>

      <div class="layui-form-item">
    <label class="layui-form-label">邮箱</label>
    <div class="layui-input-block">
      <input type="text" name="s_email" id="s_email"  placeholder="请输入标题" autocomplete="off" class="layui-input">
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
  $("#aa").click(function(){
    $.ajaxSetup({     
        headers: 
        {         
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
            } 
            });
      var s_name=$("#s_name").val();
      var s_company=$("#s_company").val();
      var s_sex=$("#s_sex").val();
      var a_tel=$("#a_tel").val();
      var s_email=$("#s_email").val();
      if(s_name == ''){
          alert('供应商名称不能为空');
          return false;
        }
      if(s_company == ''){
        alert('供应商名字不能为空');
        return false;
      }
      if(a_tel == ''){
        alert('电话不能为空');
        return false;
      }
      if(s_email == ''){
        alert('邮箱不能为空');
        return false;
      }
      $.post(
          "checkname",
          {s_name:s_name},
          function(res){
           if(res.count){
             alert('名字已存在');
             return false;
           }else{
            $.post(
            "add",
            {s_name:s_name,s_company:s_company,s_sex:s_sex,a_tel:a_tel,s_email:s_email},
            function(msg){
                if(msg.code==1){
                    layer.msg(msg.font,{icon:msg.code,time:2000});
                    location.href="{{url('Supplier/list')}}"
                }else{
                    layer.msg(msg.font,{icon:msg.code,time:2000});
                }
            },'json'
            
        )
        return false;
           }
          });
    })
  })

</script>
