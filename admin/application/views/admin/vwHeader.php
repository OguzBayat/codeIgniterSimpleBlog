<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Oguz - Admin Paneli</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?= base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url()?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
rel="stylesheet">
<link href="<?= base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet">
<link href="<?= base_url()?>assets/admin/css/style.css" rel="stylesheet">
<link href="<?= base_url()?>assets/admin/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

<link href="<?php echo HTTP_CSS_PATH; ?>fam-icons.css" rel="stylesheet">







</head>
<body>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Admin Paneli</a>
<div class="nav-collapse">
<ul class="nav pull-right">
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
class="icon-user"></i>Hesap<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="javascript:;">Profile</a></li>
<li><a href="http://oguzzbayat.com/">Logout</a></li>
</ul>
</li>
</ul>
<form class="navbar-search pull-right">
<input type="text" class="search-query" placeholder="Search">
</form>
</div>
<!--/.nav-collapse -->
</div>
<!-- /container -->
</div>
<!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
<div class="subnavbar-inner">
<div class="container">
<ul class="mainnav">
<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-dashboard"></i><span>Anasayfa</span> </a> </li>
<li><a href="<?php echo base_url(); ?>admin/users"><i class="icon-list-alt"></i><span>Üyeler</span> </a></li>
<li><a href="<?php echo base_url(); ?>admin/cms"><i class="icon-facetime-video"></i><span>Yazılar</span> </a></li>
<li><a href="<?php echo base_url(); ?>admin/gelen"><i class="icon-bar-chart"></i><span>Gelen Mesajlar</span> </a> </li>



<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Ayarlar</span> <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="<?php echo base_url(); ?>admin/hak/cevap/0">Hakkımda Düzenle</a></li>
<li><a href="<?php echo base_url(); ?>admin/hak/icerik/1">İletişim Bilgileri Düzenle</a></li>
<li><a href="<?php echo base_url(); ?>admin/hak/ayar/1">Site Ayarları Düzenle</a></li>

</ul>
</li>
</ul>
</div>
<!-- /container -->
</div>
<!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->