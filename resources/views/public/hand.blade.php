        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title>layout 后台大布局 - Layui</title>
            <link rel="stylesheet" href="/layui/css/layui.css">
<<<<<<< HEAD
            <link rel="stylesheet" href="/static/page.css">
            <script src="/js/jquery-3.3.1.min.js"></script>
=======

            <link rel="stylesheet" href="/static/page.css">
            <script src="/layui/layui.js"></script>
            <script src='/js/jquery-3.3.1.min.js'></script>

>>>>>>> 32707f455b5449d8bccfaaafd30fd3a99e69b7a4
        </head>

        <body class="layui-layout-body">
            <div class="layui-layout layui-layout-admin">
                <div class="layui-header">
                    <div class="layui-logo">CRM 客户管理系统</div>
                    <!-- 头部区域（可配合layui已有的水平导航） -->
                    <ul class="layui-nav layui-layout-left">
                        <li class="layui-nav-item"><a href="/">首页</a></li>
                        <li class="layui-nav-item"><a href="{{url('Goods/list')}}">产品管理</a></li>
                        <li class="layui-nav-item"><a href="{{url('User/list')}}">用户中心</a></li>
                        <li class="layui-nav-item">
                            <a href="javascript:;">其它系统</a>
                            <dl class="layui-nav-child">
                                <dd><a href="">邮件管理</a></dd>
                                <dd><a href="">消息管理</a></dd>
                                <dd><a href="">授权管理</a></dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="layui-nav layui-layout-right">
                        <li class="layui-nav-item">
                            <a href="javascript:;">
                                <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                                贤心
                            </a>
                            <dl class="layui-nav-child">
                                <dd><a href="">基本资料</a></dd>
                                <dd><a href="">安全设置</a></dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item"><a href="{{url('Login/logout')}}">退了</a></li>
                    </ul>
                </div>