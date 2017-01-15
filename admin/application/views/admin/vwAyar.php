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
<h1>Site Ayarları</h1>
<br>
<?php
    echo form_open(base_url()."admin/hak/ayar_guncelle/1");
    
    echo form_label('Site Başlığı:');
    echo form_input(array('id'=>'numara','name'=>'numara', 'size'=>'50','value'=>$page[0]->baslik));
    echo "<br>";
    echo "<br>";
    echo form_label('Tittle:&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'title','size'=>'50', 'value'=>$page[0]->title));
    
    
    echo "<br>";
    echo "<br>";
    echo form_label('Bilgi Alanı:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'firma_adi','size'=>'50', 'value'=>$page[0]->firma_adi));
    
    echo "<br>";
    echo "<br>";
    echo form_label('E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'email','size'=>'50', 'value'=>$page[0]->email));
    
    echo "<br>";
    echo "<br>";
    echo form_label('Smpt Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'smtp','size'=>'50', 'value'=>$page[0]->smtp_mail));
    
    echo "<br>";
    echo "<br>";
    echo form_label('Site İçerik Bilgisi:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'adsoy','size'=>'50', 'value'=>$page[0]->icerik));
    
    
    echo "<br>";
    echo "<br>";
    
    
    echo form_label('Anahtar Kelimeler:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
    echo form_input(array('id'=>'adsoy','name'=>'keywords', 'value'=>$page[0]->keywords));
    
    
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