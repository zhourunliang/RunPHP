<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>留言板</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" />
    
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap/3.3.6/bootstrap.min.css">

    <script type="text/javascript" src="/static/js/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap/3.3.6/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="/static/js/common.js"></script>
</head>
<body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/msg/index">留言板</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/msg/register"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
                    <li><a href="/msg/login"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
             
            <div class="row" >
                <div class="col-md-8 col-md-offset-1">

                    <h1 class="text-center">注册</h1>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="id-input-name" class="col-sm-2 control-label">姓名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id-input-name" placeholder="请输入姓名">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id-input-password" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="id-input-password" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id-input-repassword" class="col-sm-2 control-label">密码确认</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="id-input-repassword" placeholder="请输入密码">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id='id-button-submit'>注册</button>
                            </div>
                        </div>
                    </form>
                        <div id="id-div-alert"></div>
                </div>
            </div>


        </div>
</body>
</html>
