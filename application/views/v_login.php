<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Üye Giriş Sayfası</span></h2>
<div class="clr"></div>
<p>Giriş Yapmak İçin Gerekli Yerleri Doldurun</p>
</div>
<div class="article">
<h2><span>Giriş </span> Yap</h2>
<div class="clr"></div>
<form action="<?=  base_url()?>users/login/" method="post" >
<?php
    if($error)
    {
        echo '<div style="color:red" >Hatalı şifre veya kullanıcı adı girişi yapıldı</div><br>';
    }?>
<ol>
<li>
<label for="name">Kullanıcı</label>
<input id="typeahead" name="username" class="text" />
</li>
<li>
<label for="password">Şifre</label>
<input id="typeahead" name="password" class="text" type="password" />
</li>
<li>
<label for="email">Kullanıcı Türü</label>
<select class="form-control" name="user_type">
<option value="author">Yazar</option>
<option value="user" selected>Okuyucu</option>
</select></li>
<br>
<p><a href="<?=  base_url()?>users/unut_form">Şifremi Unuttum</a></p>
<li>
<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/giris.gif" class="send" />
<div class="clr"></div>
</li>
</ol>
</form>
</div>
</div>
<?php include 'sidebar.php' ?>