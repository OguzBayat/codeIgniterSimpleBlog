<div class="slider">
<div id="coin-slider">
<a href="http://oguzzbayat.com/blog/post/95"><img src="<?=  base_url()?>wow/data1/images/balon.jpg" width="960" height="360" alt="" /> </a>
<a href="http://oguzzbayat.com/blog/post/98"><img src="<?=  base_url()?>wow/data1/images/road.jpg" width="960" height="360" alt="" /> </a>
<a href="http://oguzzbayat.com/blog/post/96"><img src="<?=  base_url()?>wow/data1/images/isvec.jpg" width="960" height="360" alt="" /> </a>
<a href="http://oguzzbayat.com/blog/post/94"><img src="<?=  base_url()?>wow/data1/images/slide1.jpg" width="960" height="360" alt="" /> </a>
<a href="http://oguzzbayat.com/blog/post/97"><img src="<?=  base_url()?>wow/data1/images/reef.jpg" width="960" height="360" alt="" /> </a> </div>
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>
<div class="content">
<div class="content_resize">
<div class="mainbar">
<?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
    { ?>
<h2><a style="color: green" href="<?=  base_url()?>blog/new_post/"><span class="glyphicon glyphicon-plus"></span>Yeni Bir Yazı Ekleyin</a></h2>
<?php } ?>
<div class="article">


<h2><span>Blogtaki Yazılar</span></h2>
<div class="clr"></div>
<?php foreach($posts as $post)
    { ?>
<p class="p2"><h2><a href="<?=  base_url()?>blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2></p>
<img src="<?=  base_url()?><?=$post['image_path']?>" alt="" class="img-border">
<p><?=  substr(strip_tags($post['post']), 0, 300).'...';?></p>
<a href="<?=  base_url()?>blog/post/<?=$post['post_id']?>">Devamını Oku</a>
<?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
    { ?>
<p>
<a href="<?=  base_url()?>blog/editpost/<?=$post['post_id']?>">Yazıyı Düzenle</a> |
<a href="<?=  base_url()?>blog/deletepost/<?=$post['post_id']?>">Yazıyı Sil</a>
</p>
<?php }?>


<br><br>

<?php
    }?>
<?=$pages?>
</div>
</div>
<?php include 'sidebar.php' ?>
