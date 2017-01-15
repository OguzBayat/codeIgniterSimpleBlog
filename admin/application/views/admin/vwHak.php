<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">


    <div class="container">
<h1>Hakkımızda Sayfası Düzenle</h1>
<br>
   <?php
    echo form_open(base_url()."admin/hak/hak_guncelle/".$page[0]->id);
  
      
      echo form_label('Hakkımızda Değiştir:');
      echo form_textarea(array('id'=>'adsoy','name'=>'adsoy','class'=>'ckeditor', 'value'=>$page[0]->icerik));
	  
      echo "<br>";
	  echo "<br>";
      echo form_submit(array('id'=>'submit','value'=>'Değiştir'));
    echo form_close();

   ?>
 

    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>