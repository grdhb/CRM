        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll">
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree" lay-filter="test">
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">客户管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="{{url('User/index')}}">客户添加</a></dd>
                            <dd><a href="{{url('User/list')}}">客户列表</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">产品管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="{{url('Goods/index')}}">产品添加</a></dd>
                            <dd><a href="{{url('Goods/list')}}">产品展示</a></dd>
                            <dd><a href="#">产品分类</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">供应商</a>
                        <dl class="layui-nav-child">
                            <dd><a href="{{url('Supplier/index')}}">供应商添加</a></dd>
                            <dd><a href="{{url('Supplier/list')}}">供应商列表</a></dd>
                            <dd><a href="javascript:;">供应商展示</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>