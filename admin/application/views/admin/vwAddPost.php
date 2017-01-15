<?php
$this->load->view('admin/vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
 

    <div class="container">
   



<form action="<?php echo  base_url().'admin/cms/ekle/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
<fieldset>
<div class="control-group">
<label class="control-label" for="typeahead">Yazı Başlığı </label>
<div class="controls">
<input name="numara" type="text" class="span6 typeahead" id="numara" >
</div>
</div>

<div class="control-group hidden-phone">
<label class="control-label" for="textarea2">Yazı İçeriği</label>
<div class="controls">
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<textarea class="ckeditor" name="adsoy"></textarea>
</div>
</div>


<div class="control-group">
<label class="control-label" for="fileInput">Resim Ekle</label>
<div class="controls">
<input name="image_path" class="input-file uniform_on" id="fileInput" type="file">
</div>
</div>



<div class="form-actions">
<button type="submit" class="btn btn-primary">Yazıyı Ekle</button>
<button type="reset" class="btn">Iptal</button>
</div>

</fieldset>
</form>

    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>


