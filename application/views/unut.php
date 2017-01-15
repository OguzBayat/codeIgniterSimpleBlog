<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Yeni Şifre Al</span></h2>
<div class="clr"></div>
<p>Yeni şifre almak için bilgilerinizi girin</p>
</div>
<div class="article">
<h2><span>Şifre</span> Al</h2>
<div class="clr"></div>
<form action="<?=  base_url()?>users/unut/" method="post" >

<ol>
<li>
<label for="name">Email</label>
<input id="typeahead" name="email" class="text" />
</li>
<li>
<label for="email">Email Tekrar</label>
<input id="typeahead" name="" class="text" />
</li>


<li>
<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/gonder.gif" class="send" />
<div class="clr"></div>
</li>
</ol>
</form>
</div>
</div>
<?php include 'sidebar.php' ?>