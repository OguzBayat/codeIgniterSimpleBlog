<?php
    $this->load->view('admin/vwHeader');
    ?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">


<div class="container">




<form action="<?php echo  base_url().'admin/cms/haberekle/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
<fieldset>


<div class="control-group hidden-phone">
<label class="control-label" for="textarea2">Haber Veya Duyuru:</label>
<div class="controls">
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<textarea class="ckeditor" name="haber"></textarea>
</div>
</div>






<div class="form-actions">
<button type="submit" class="btn btn-primary">Yolla</button>

</div>

</fieldset>
</form>

</div><!-- /.container -->
<hr>
<?php
    $this->load->view('admin/vwFooter');
    ?>


