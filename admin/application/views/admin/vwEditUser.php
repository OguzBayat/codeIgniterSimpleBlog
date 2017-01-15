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
 <h1>Üye Düzenle</h1>
<br>
   <?php
    echo form_open(base_url()."admin/users/kayit_guncelle/".$page[0]->user_id);
  
      echo form_label('Kullanıcı Adı:');
      echo form_input(array('id'=>'numara','name'=>'numara', 'value'=>$page[0]->username));
      echo "<br>";
		echo "<br>";
      echo form_label('E-mail Adresi:');
      echo form_input(array('id'=>'adsoy','name'=>'adsoy', 'value'=>$page[0]->email));
      echo "<br>";
echo "<br>";
      echo form_label('Kullanıcı Tipi:');
      echo form_input(array('id'=>'cins','name'=>'cins', 'value'=>$page[0]->user_type));
      echo "<br>";
	  echo "<br>";
       echo form_label('Sifre:');
       echo form_input(array('id'=>'pass','name'=>'pass', 'value'=>$page[0]->password));
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