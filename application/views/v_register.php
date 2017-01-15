<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Üye Kayıt Sayfası</span></h2>
<div class="clr"></div>
<p>Kayıt İçin Gerekli Yerleri Doldurun</p>
</div>
<div class="article">
<h2><span>Kayıt </span> Ol</h2>
<div class="clr"></div>
<form action="<?=  base_url()?>users/register/" method="post" >
<?php
    if($error)
    {
        echo '<div style="color:red" >Girilen bilgiler eşleşmedi.</div><br>';
    }?>
<ol>
<li>
<label for="name">Kullanıcı</label>
<input id="typeahead" name="username" class="text" />
</li>
<li>
<label for="name">E-Mail</label>
<input id="typeahead" name="email" class="text" />
</li>
<li>
<label for="name">Şifre</label>
<input id="typeahead" name="password" class="text" type="password" />
</li>
<li>
<label for="email">Şifre Tekrar</label>
<input id="typeahead" name="passconf" class="text" type="password"/>
</li>
<li>
<label for="email">Kullanıcı Türü</label>
<select class="form-control" name="user_type">
<option value="author">Yazar</option>
<option value="user" selected>Okuyucu</option>
</select></li>

<li>
<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/kayit.gif" class="send" value="Kayıt Ol"/>
<div class="clr"></div>
</li>
</ol>
</form>
</div>
</div>
<?php include 'sidebar.php' ?>