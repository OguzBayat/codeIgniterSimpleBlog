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
        <h1>Üye Ekle</h1>
        <br>
        <?php
		 echo form_open(base_url()."admin/users/ekle/");
		   echo form_label('Kullanıcı Adı:');
		   echo form_input(array('id'=>'numara','name'=>'numara'));
		   echo "<br>";
		   echo form_label('Email:');
		   echo form_input(array('id'=>'adsoy','name'=>'adsoy'));
		   echo "<br>";
		echo form_label('Yetki:');
		   echo form_input(array('id'=>'type','name'=>'type'));
		   
		   echo "<br>";
		echo form_label('Şifre:');
		   echo form_input(array('id'=>'pass','name'=>'pass'));

		   echo "<br>";
		   echo form_submit(array('id'=>'submit','value'=>'KAYIT EKLE'));
		 echo form_close();

		?>
 
    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>