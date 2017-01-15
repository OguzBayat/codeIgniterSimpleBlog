<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Load Page Specific CSS and JS here
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
 <style>
/*     .panel{
       margin-left: 55px;
       float: left;
    width: 500px;}
     */
     </style>





    <div class="container">
<h1>Mesaj Listesi</h1>
<br>
 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading">Gelen Mesajlar</div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              
              <th>Mesaj Gönderen</th>
              <th>Mail Adresi</th>
			  <th>Mesaj</th>
              
              
            </tr>
          </thead>
          <tbody>
            
             
			  <?php
			  				foreach($gonder as $rs)
			  				{
                                echo "<tr>";
                                
                                
                                echo "<td>$rs->your_name </td>";
                                echo "<td>$rs->your_email </td>";
                                echo "<td>$rs->your_enquiry </td>";
                                
                                echo" <td>";
                                
                                if($rs->okundu_id==0){
                                    
                                    echo '<a href="gelen/cevap/'.$rs->id.'"title="Cevap Yaz"<i class="fam-page-edit "></i>';}
                                else{
                                    echo '<a href="gelen/cevap/'.$rs->id.'"title="Cevap Verildi"<i class="fam-tick"></i>';
                                    
                                }
                                echo" <td>";
                                if($rs->okundu_id==0){
                                    echo '<a href="gelen/okundu/'.$rs->id.'"title="Okundu Diye işaretle"<i class=" fam-script-go "></i>';
                                }
                                else {
                                    echo '<a href="gelen/okundu/'.$rs->id.'"title="Okundu"<i class="fam-accept "></i>';
                                    
                                }
                                
                                
                                
												   				             echo " </td>";
                                echo " </td>";
                                
			       
		
			              echo "</tr>";
						  
			  			}
			  		?>
          </tbody>
        </table>
      </div>
 

    </div><!-- /.container -->
     <hr>
<?php
$this->load->view('admin/vwFooter');
