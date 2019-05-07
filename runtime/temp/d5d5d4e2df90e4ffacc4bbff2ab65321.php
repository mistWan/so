<?php /*a:1:{s:63:"C:\xampp\htdocs\so\application\admin\view\manager\register.html";i:1543920804;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/public/css/normalize.min.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <link rel="stylesheet" href="/static/admin/css/register.css">
</head>
<body>
<div class="login">
    <img src="/static/index/img/logo.png" alt="logo">
    <form action="<?php echo url('manager/add'); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" class="user" placeholder="请输入用户名" autocomplete>
        <p>用户名2-12字符组成,不能以数字开头</p>
        <input type="text" name="email" class="email" placeholder="请输入邮箱" autocomplete>
        <p>邮箱格式不正确</p>
        <div class="img-upload">
            <input type="button" value="上传头像" id="button" class="button">
            <input type="file" id="upload" accept="image/*" value="" onfocus="this.blur()" name="avatar"/><br>
            <!--多文件上传 multiple="multiple" accept="image/*"-->
            <img id="img" src="/static/public/img/logo.png" alt="logo">
        </div>
        <input type="password" name="password" class="pass" placeholder="请输入密码" autocomplete>
        <p>密码6-20位,不能是纯数字或纯字母</p>
        <input type="password" name="password_confirm" class="pass-c" placeholder="请再次输入密码" autocomplete>
        <p>两次密码不一致</p>
        <div class="captcha">
            <input type="text" name="captcha" class="captcha" placeholder="输入验证码" autocomplete>
            <!--<div>
                <img id="captcha_img" src="<?php echo captcha_src(); ?>"/>
            </div>-->
            <div><?php echo captcha_img(); ?></div>
            <!--<p>验证码输入不正确</p>-->
        </div>
        <a href="<?php echo url('manager/verify'); ?>">已有账号？</a>
        <input type="submit" class="submit" value="注册">
    </form>
</div>
<script charset="utf-8" src="/static/public/js/jquery-1.9.1.min.js"></script>
<script charset="utf-8" src="/static/admin/js/admin.js"></script>
</body>
</html>
