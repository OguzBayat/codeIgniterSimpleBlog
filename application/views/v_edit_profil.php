<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Üye Profil Bilgileri</span></h2>
<div class="clr"></div>
<p>Üyelik bilgilerinizi değiştirmek için aşağıdaki bilgileri girin</p>
</div>
<div class="article">
<h2><span>Profil</span> Düzenle</h2>
<div class="clr"></div>
<form action="<?=  base_url()?>blog/editbilgi/<?=$post['user_id']?>" method="post" >

<ol>
<li>
<label for="name">Kullanıcı</label>
<input id="typeahead" name="username" class="text" value="<?=$post['username'];?>"/>
</li>
<li>
<label for="email">Email</label>
<input id="typeahead" name="email" class="text" value="<?=$post['email'];?>"/>
</li>
<li>
<label for="email">Şifre</label>
<input id="typeahead" name="password" class="password" value="<?=$post['password'];?>"/>
</li>

<li>
<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/guncelle.gif" class="send" />
<div class="clr"></div>
</li>
</ol>
</form>
</div>
</div>
<?php include 'sidebar.php' ?>