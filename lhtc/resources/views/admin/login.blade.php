<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png') }}" href="{{ asset('admin/i/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admin/i/app-icon72x72@2x.png') }}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('admin/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

</head>

<body data-type="login">
    <script src="{{ asset('admin/js/theme.js') }}"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->

        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>



                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">
       
                        记住密码
                         </label>

                    </div>






                    <div class="am-form-group">

                        <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>

</html>