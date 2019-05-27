<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
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

</head>

<body>

    <div class="login-boxtitle">
        <a href="home.html"><img alt="logo" src="/static/login/logobig.png" /></a>
    </div>

    <div class="login-banner">
        <div class="login-main">
            <div class="login-banner-bg"><span></span><img src="/static/login/big.jpg" /></div>
            <div class="login-box">

                <h3 class="title">layui后台内部登入</h3>

                <div class="clear"></div>

                <div class="login-form">
                    <form>
                        <div class="user-name">
                            <label for="user_name"><i class="am-icon-user"></i></label>
                            <input type="text" id="user_name" value="" placeholder="手机号/邮箱">
                        </div>
                        <div class="user-pass">
                            <label for="password"><i class="am-icon-lock"></i></label>
                            <input type="password" id="password" value="" placeholder="请输入密码">
                        </div>
                    </form>
                </div>

                <div class="login-links">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox">账号密码记录10天
                    </label>
                    <a href="" class="am-fr">忘记密码</a>
                    <a href="{{url('Login/register')}}" class="zcnext am-fr am-btn-default">注册</a>
                    <br />
                </div>
                <div class="am-cf">
                    <input type="button" name="" value="登 录" id="btn" class="am-btn am-btn-primary am-btn-sm">
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
                <em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="#" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
            </p>
        </div>
    </div>
</body>

</html>