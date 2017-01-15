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
<h1>Cevap Yolla</h1>
<br>
<?php
    echo form_open(base_url()."admin/gelen/cevap_bekle/".$page[0]->id);
    
    
    echo form_label('E-Mail:&nbsp;&nbsp;');
    echo form_input(array('id'=>'numara','name'=>'email','class'=>'ckeditor','size'=>'50', 'value'=>$page[0]->your_email));
    echo "<br>";
    echo "<br>";
    
    echo form_label('Konu:&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'numara','size'=>'50','name'=>'adsoyad'));
    echo "<br>";
    echo "<br>";
    
    echo form_label('İçerik:');
    echo form_textarea(array('id'=>'numara','name'=>'icerik','class'=>'ckeditor'));
    echo "<br>";
    
    
    
    echo "<br>";
    echo form_submit(array('id'=>'submit','value'=>'Gönder'));
    
    echo form_close();
    
    ?>


    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>