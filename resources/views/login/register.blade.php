<!DOCTYPE html>
<html>

<head lang="en">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>注册</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" href="/static/login/amazeui.css" />
    <link href="/static/login/dlstyle.css" rel="stylesheet" type="text/css">
    <link href="/static/layui/css/layui.css" rel="stylesheet" type="text/css">

    <script src="/static/layui/layui.js"></script>
    <script src="/static/login/jquery-3.2.1.min.js"></script>
    <script src="/static/login/amazeui.min.js"></script>

</head>

<body>

    <div class="login-boxtitle">
        <a href="home/demo.html"><img alt="" src="/static/login/logobig.png" /></a>
    </div>

    <div class="res-banner">
        <div class="res-main">
            <div class="login-banner-bg"><span></span><img src="/static/login/big.jpg" /></div>
            <div class="login-box">

                <div class="am-tabs" id="doc-my-tabs">
                    <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
                        <li class="am-active"><a href="">邮箱注册</a></li>
                    </ul>

                    <div class="am-tabs-bd">
                        <!--邮箱注册-->
                        <div class="am-tab-panel am-active">
                            <form method="post" class="layui-form">

                                <div class="user-email">
                                    <label for="email"><i class="am-icon-envelope-o"></i></label>

                                    <input type="email" name="" id="email"  placeholder="请输入邮箱账号">
                                </div>
                                <div class="verification">
                                    <label for="email_code"><i class="am-icon-code-fork"></i></label>
                                    <input type="text" name=""  id="code" placeholder="请输入验证码">
                                    <a class="btn" href="javascript:void(0);" id="sendEmailCode">
                                        <span class="dyButton" id="span_email">获取</span>
                                    </a>
                                </div>
                                <div class="user-pass">
                                    <label for="email_pwd"><i class="am-icon-lock"></i></label>
                                    <input type="password"  name="" id="pwd" placeholder="设置密码">
                                </div>
                                <div class="user-pass">
                                    <label for="email_pwd1"><i class="am-icon-lock"></i></label>
                                    <input type="password"  name="" id="repwd" placeholder="确认密码">
                                </div>
                                <div class="am-cf">
                                    <input type="button" lay-submit lay-filter="telDemo" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="footer ">
            <div class="footer-hd ">
                <p>
                    <a href="# ">恒望科技</a>
                    <b>|</b>
                    <a href="# ">商城首页</a>
                    <b>|</b>
                    <a href="# ">支付宝</a>
                    <b>|</b>
                    <a href="# ">物流</a>
                </p>
            </div>
            <div class="footer-bd ">
                <p>
                    <a href="# ">关于恒望</a>
                    <a href="# ">合作伙伴</a>
                    <a href="# ">联系我们</a>
                    <a href="# ">网站地图</a>
                    <em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
                </p>
            </div>
        </div>
</body>

</html>
<script src="/static/layui/jquery-3.2.1.min.js" charset="utf-8"></script>
<script src="/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
     layui.use(['form', 'layedit', 'upload'], function(){
        $(".am-btn-sm").click(function(){
            // layer.msg(1);
            // alert(1);
            var username=$("#email").val();
            var code=$("#code").val();
            var pwd=$("#pwd").val();
            var repwd=$("#repwd").val();

            if(username==''){
                layer.msg('邮箱不能为空');
                return false;
            }
            if(code==''){
                layer.msg('验证码不能为空');
                return false;
            }
            if(pwd==''){
                layer.msg('密码不能为空');
                return false;
            }
            if(repwd==''){
                layer.msg('确认密码不能为空');
                return false;
            }
            if(pwd != repwd){
                layer.msg('密码与确认密码不一致');
                return false;
            }
            if(pwd.length<6){
                layer.msg('密码不能小于6位');
                return false;
            }

                //令牌
            $.ajaxSetup({
                 headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
                });
            $.post(
                "/Login/addregister",
                {username:username,code:code,pwd:pwd,repwd:repwd},
                function(msg){
                    if(msg.code==2){
                        layer.msg(msg.font);
                    }else{
                        layer.msg(msg.font);
                        window.location.href="/Login/login";
                    }
                },
                'json'
                );
            
        });
        //点击发送验证码
        $("#span_email").click(function(){
            var username=$("#email").val();
            if(username==''){
                layer.msg('邮箱不能为空');
                return false;
            }
               //令牌
            $.ajaxSetup({
                 headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
                });
             $.post(
                "/Login/send",
                {username:username},
                function(msg){
                    if(msg.code==2){
                        layer.msg(msg.font);
                    }
                },
                'json'
                );

        });
     });
</script>