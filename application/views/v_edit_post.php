


<div class="content">
<div class="content_resize">

<div class="mainbar">
<div class="article">
<h2><span>Yazıyı Güncelle</span></h2>
<div class="clr"></div>



<form action="<?=  base_url()?>blog/editpost/<?=$post['post_id']?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="background:#eee" >
<fieldset>
<div class="control-group">
<label class="control-label" for="typeahead">Yazı Başlığı </label>
<div class="controls">
<input name="post_title" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" value="<?=$post['post_title'];?>">
</div>
</div>

<div class="control-group hidden-phone">
<label class="control-label" for="textarea2">Yazı İçeriği</label>
<div class="controls">
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<textarea class="ckeditor" name="post"><?=$post['post'];?></textarea>
</div>
</div>

<input type="image" name="imageField" id="imageField" src="<?= base_url()?>public2/images/guncelle.gif" class="send" />



</fieldset>
</form>

</div>
</div>

<?php include 'sidebar.php' ?>