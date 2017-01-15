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
<h1>Yazılar</h1>
<br>

 <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading">Yazıların Listesi<span style='float:right; margin-top: -7px;'><a href="cms/add_post" class="btn btn-info">Yeni Yazı</a></span></div>

        <!-- Table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              
              <th>Yazı Başlığı</th>
                <th>Eklenme Tarihi</th>
              
              
              
            </tr>
          </thead>
          <tbody>
            
             
			  <?php
			  				foreach($gonder as $rs)
			  				{
			              echo "<tr>";
				
			                echo "<td>$rs->post_title </td>";
                                echo "<td>$rs->date_added </td>";
			                
                                echo" <td>";
                                echo '<a href="users/edit_post/'.$rs->post_id.'" title="Edit"><i class="fam-user-edit"></i>';
                                
                                echo '<a href="cms/delete_post/'.$rs->post_id.'" title="Delete"><i class="fam-user-delete"></i>';
                                
                                
                                
                                
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
