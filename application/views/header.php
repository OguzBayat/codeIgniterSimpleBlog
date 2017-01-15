<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$hakkimizda[1]->baslik;?>-<?=$hakkimizda[1]->title;?></title>
<meta http-equiv="Content-Type" content="<?=$hakkimizda[1]->firma_adi;?>; charset=utf-8" />
<meta name="keywords" content="<?=$hakkimizda[1]->keywords;?>" />
<link href="<?= base_url()?>public2/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>public2/css/coin-slider.css" />
<script type="text/javascript" src="<?= base_url()?>public2/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?= base_url()?>public2/js/cufon-georgia.js"></script>
<script type="text/javascript" src="<?= base_url()?>public2/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>public2/js/script.js"></script>
<script type="text/javascript" src="<?= base_url()?>public2/js/coin-slider.min.js"></script>
<link rel="stylesheet" href="<?= base_url()?>public2/css/newsStyle.css" type="text/css">

</head>
<body>
<div class="main">
<div class="header">
<div class="header_resize">
<div class="menu_nav">
<ul>
<li class="<?=$home_class;?>" ><a href="<?=base_url()?>blog/">Anasayfa</a></li>
<?php if($this->session->userdata('user_id'))
    {?>
<li class="<?=$login_class;?>" ><a href="<?=  base_url()?>users/logout">Çıkış</a></li>
<?php
    }
    else{ ?>
<li class="<?=$login_class;?>" ><a href="<?=  base_url()?>users/login">Giriş</a></li>
<?php } ?>

<?php if($this->session->userdata('user_id'))
    {?>

<li class="<?=$register_class;?>" ><a href="<?=  base_url()?>blog/editbilgi/<?=$this->session->userdata['user_id']?>" 					class="<?=$register_class;?>">Profilim</a></li>
<?php
    }
    else{ ?>
<li class="<?=$register_class;?>" ><a href="<?=  base_url()?>users/register/" class="<?=$register_class;?>">Kayıt</a></li>
<?php } ?>

<li class="<?=$upload_class;?>" ><a href="<?=  base_url()?>pages/aboutus">Hakkımda</a></li>
<li class="<?=$news_class;?>" ><a href="<?=  base_url()?>pages/news">Haberler</a></li>
<li class="<?=$contact_class;?>" ><a href="<?=  base_url()?>pages/contact">İletişim</a></li>


</ul>
</div>
<div class="logo">
<h1><a href="<?=base_url()?>blog/">Oguz<span> Bayat</span></a></h1>
</div>
<div class="clr"></div>

