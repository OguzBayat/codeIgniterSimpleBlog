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
<h1>İletişim Ayarları</h1>
<br>
<?php
echo form_open(base_url()."admin/hak/iletisim_guncelle/1");

echo form_label('Telefon:');
echo form_input(array('id'=>'tel','name'=>'tel', 'size'=>'50','value'=>$page[0]->tel));
echo "<br>";
echo "<br>";
echo form_label('Fax');
echo form_input(array('id'=>'fax','name'=>'fax','size'=>'50', 'value'=>$page[0]->fax));


echo "<br>";
echo "<br>";

echo form_label('E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
echo form_input(array('id'=>'adsoy','name'=>'email','size'=>'50', 'value'=>$page[0]->email));

echo "<br>";
echo "<br>";
    
echo form_label('Adres:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
echo form_textarea(array('id'=>'adres','name'=>'adres','size'=>'50','class'=>"ckeditor" ,'value'=>$page[0]->adres));

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