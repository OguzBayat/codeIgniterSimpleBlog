<?php
$this->load->view('admin/vwHeader');
?>

<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">


    <div class="container">
 <h1>Yazıyı Düzenle</h1>
<br>
   <?php
    echo form_open(base_url()."admin/users/post_guncelle/".$page[0]->post_id);
  
      echo form_label('Yazı Başlığı:');
      echo form_input(array('id'=>'numara','name'=>'numara', 'value'=>$page[0]->post_title));
      echo "<br>";
	  echo "<br>";
      echo form_label('Eklenme Tarihi:');
      echo form_input(array('id'=>'adsoy','name'=>'adsoy', 'value'=>$page[0]->date_added));
      echo "<br>";
	  echo "<br>";
      echo form_label('İçerik:');
      echo form_textarea(array('id'=>'cins','name'=>'cins', 'type'=>'text','maxlength'=>'100','class'=>"ckeditor", 'size'=>'50', 'style'=>'height:200px','value'=>$page[0]->post));
	  
      echo "<br>";
	  echo "<br>";
      echo form_submit(array('id'=>'submit','value'=>'Güncelle'));
    echo form_close();

   ?>
 

    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>