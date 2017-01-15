


<div class="content">
    <div class="content_resize">
			
			<div class="mainbar">
			  <div class="article">
<h2><span>Yeni Yazı Ekle</span></h2>
<div class="clr"></div>
			    
			        
			   						<?php if($this->session->flashdata("resim_eklendi")){ ?>
			   							<script>
			   								alert("Yazı Eklendi");
			   							</script>
			   							<?php } ?>
			   						<form action="<?php echo  base_url().'blog/new_post/' ?>" method="post" enctype="multipart/form-data" class="form-horizontal" style="background:#eee" >
			   						  <fieldset>
			   							<div class="control-group">
			   							  <label class="control-label" for="typeahead">Yazı Başlığı </label>
			   							  <div class="controls">
			   								<input name="post_title" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead">
			   							  </div>
			   							</div>
										
			   							<div class="control-group hidden-phone">
			   							  <label class="control-label" for="textarea2">Yazı İçeriği</label>
			   							  <div class="controls">
											<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
											<textarea class="ckeditor" name="post"></textarea>
			   							  </div>
			   							</div>
										
			   							
			   							<div class="control-group">
			   							  <label class="control-label" for="fileInput">Resim Ekle</label>
			   							  <div class="controls">
			   								<input name="image_path" class="input-file uniform_on" id="fileInput" type="file">
			   							  </div>
			   							</div>  
							
			   							
							
			   							<div class="form-actions">
			   							  <button type="submit" class="btn btn-primary">Yazıyı Ekle</button>
			   							  <button type="reset" class="btn">Iptal</button>
			   							</div>
							
			   						  </fieldset>
			   						</form>   
			   					
	</div>
	</div>

<?php include 'sidebar.php' ?>