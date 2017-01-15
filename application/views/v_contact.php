<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Bana Ulaşın</span></h2>
<div class="clr"></div>
<p>Adınız Email Adresinizi ve Mesajınızı Bana Ulaştırmak Üzere yazın</p>
</div>
<div class="article">
<h2><span>Mesaj</span> Gönderin</h2>
<div class="clr"></div>
<form action="<?=  base_url()?>pages/register/" method="post" >
<ol>
<li>
<label for="name">İsim</label>
<input id="typeahead" name="your_name" class="text" />
</li>
<li>
<label for="email">Email</label>
<input id="typeahead" name="your_email" class="text" />
</li>
<li>
<label class="control-label" for="textarea2">Mesaj</label>
<div class="controls">
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<textarea class="ckeditor" name="your_enquiry"></textarea>
</div>
</li>
<li>
<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/gonder.gif" class="send" />
<div class="clr"></div>
</li>
</ol>
</form>
<h2><span>İletişim</span> Bilgilerim</h2>
<p>Aşağıdaki iletişim bilgilerinden bana ulaşabilirsiniz.</p>
<p class="contact_info"> <span>Address:</span> <?=$hakkimizda[1]->adres;?><br />
<span>Telephone:</span><?=$hakkimizda[1]->tel;?><br />
<span>FAX:</span><?=$hakkimizda[1]->fax;?><br />
<span>E-mail:</span> <a href="#"><?=$hakkimizda[1]->email;?></a> </p>
</div>
</div>
<?php include 'sidebar.php' ?>