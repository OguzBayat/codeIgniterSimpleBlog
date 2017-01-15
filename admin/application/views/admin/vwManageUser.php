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
<h1>Üyeler Listesi</h1>
<br>

<div class="panel panel-default" >
<!-- Default panel contents -->
<div class="panel-heading">Üyeler<span style='float:right; margin-top: -7px;'><a href="users/add_user" class="btn btn-info">Üye Ekle</a></span></div>

<!-- Table -->
<table class="table table-striped table-hover">
<thead>
<tr>
<th>#</th>
<th>Kullanıcı Adı</th>
<th>Email</th>
<th>Yetki</th>

</tr>
</thead>
<tbody>


<?php
    foreach($veri as $rs)
    {
        echo "<tr>";
        
        echo "<td>$rs->user_id </td>";
        echo "<td>$rs->username </td>";
        echo "<td>$rs->email </td>";
        echo "<td>$rs->user_type </td> ";
        
        echo" <td>";
        echo '<a href="users/edit_user/'.$rs->user_id.'" title="Düzenle"><i class="fam-user-edit"></i>';
        
        
        echo '<a href="users/delete_user/'.$rs->user_id.'" title="Sil"><i class="fam-user-delete"></i>';
        
        
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
