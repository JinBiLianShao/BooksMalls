<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="/ttt11/Public/Admin/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="logo">
<h1><img src="/ttt11/Public/Admin/images/logo.gif" />天天书屋管理员登录</h1>
<form action="/ttt11/index.php/Admin/Login/Login" method="post"> 
  <p>用户名：
    <input name="username" type="text" id="yhm" />
  </p>
  <p>
    密　码：
      <input name="password" type="password" id="mm" />
  </p>
  <p>
    验证码：
      <input name="yzm" type="text" style="width:60px;"/><img src="<?php echo U('Login/verify');?>" width="120" height="40"/>
  </p>
  <input name="ok" type="submit" style="background:url(/ttt11/Public/Admin/images/denglu.gif); border:0px; width:61px ; height:29px;  margin-left:30px;" value="登录" />
  <input type="reset" style="background:url(/ttt11/Public/Admin/images/denglu.gif)  ; width:61px ; border:0px;   height:29px; margin-left:30px; " value="重置" />
</form>
</div>

</body>
</html>