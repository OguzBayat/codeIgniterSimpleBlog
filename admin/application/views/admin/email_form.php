<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">

<div class="page-header container">
  <h1><small>Cevap Yolla</small></h1>
</div>
    <div class="container">
 
   

<?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('admin/Email_controller/send_mail'); 
      ?> 

      <input type = "email" name = "email" required /> 
      <input type = "submit" value = "SEND MAIL"> 

      <?php 
         echo form_close(); 
      ?>
 

    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
?>