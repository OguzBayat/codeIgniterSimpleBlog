<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Login - Admin Paneli</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?= base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?= base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

<link href="<?= base_url()?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= base_url()?>assets/admin/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="navbar navbar-fixed-top">

<div class="navbar-inner">

<div class="container">

<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>

<a class="brand" href="index.html">
Admin Paneli
</a>

<div class="nav-collapse">
<ul class="nav pull-right">



<li class="">
<a href="http://oguzzbayat.com/" class="">
<i class="icon-chevron-left"></i>
Anasayfaya Dön
</a>

</li>
</ul>

</div><!--/.nav-collapse -->

</div> <!-- /container -->

</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div class="account-container">

<div class="content clearfix">

<form action="<?php echo base_url(); ?>admin/home/do_login" method="post">

<h1>Admin Girişi</h1>

<div class="login-fields">

<p>Bilgileri Girin</p>

<div class="field">
<label for="username">Kullanıcı Adı:</label>
<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
</div> <!-- /field -->

<div class="field">
<label for="password">Şifre:</label>
<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
</div> <!-- /password -->

</div> <!-- /login-fields -->

<div class="login-actions">

<span class="login-checkbox">
<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
<label class="choice" for="Field">Beni Hatırla</label>
</span>

<button class="button btn btn-success btn-large">Giriş</button>

</div> <!-- .actions -->



</form>

</div> <!-- /content -->

</div> <!-- /account-container -->



<div class="login-extra">
<a href="#">Reset Password</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>