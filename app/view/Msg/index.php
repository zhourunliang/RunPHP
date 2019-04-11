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
                    <a class="navbar-brand" href="#">留言板</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                                       
                        <li><a href="#"> username </a></li>
                        <li><a href="/msg/logout"><span class="glyphicon glyphicon-log-in"></span> 退出登录</a></li>                        

                        <li><a href="/msg/register"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
                        <li><a href="/msg/login"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>

                </ul>
            </div>
        </nav>

        <div class="container">
             
            <div class="row" >
                <div class="col-md-8 col-md-offset-1">

                    <form class="form-horizontal"  role="form" action="/msg/post_msg" method="post">
                        <div class="form-group">
                            <label for="id-input-title" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id-input-title" name="title" placeholder="请输入标题">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id-input-content" class="col-sm-2 control-label">内容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="id-input-content" rows="3" name="content" placeholder="请输入内容"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" id="id-button-submit">发表</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row" >
                <div class="col-md-8 col-md-offset-1" id="id-div-msg-list">

                    <?php foreach ($msgs as $key => $value) { ?>                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $value["title"] ?>
                            </div>
                            <div class="panel-body">
                                <?php echo $value["content"] ?>
                                <p class="text-right"><span>作者</span>@<time><?php echo $value["created"] ?></time></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>
</body>
</html>
