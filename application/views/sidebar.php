<div class="sidebar">
<div class="searchform">
<form id="formsearch" name="formsearch" method="post" action="#">
<span>
<input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
</span>
<input name="button_search" src="<?= base_url()?>public2/images/search.gif" class="button_search" type="image" />
</form>
</div>
<div class="gadget">
<h2 class="star"><span>Blog</span> Yazıları</h2>
<div class="clr"></div>
<ul class="sb_menu">


<li><a href="<?=base_url()?>blog/">Anasayfa</a></li>
<?php if($this->session->userdata('user_id'))
    {?>
<li><a href="<?=  base_url()?>users/logout">Çıkış</a></li>
<?php
    }
    else{ ?>
<li><a href="<?=  base_url()?>users/login">Üye Girişi</a></li>
<?php } ?>

<?php if($this->session->userdata('user_id'))
    {?>

<li><a href="<?=  base_url()?>blog/editbilgi/<?=$this->session->userdata['user_id']?>" 					class="<?=$register_class;?>">Profilim</a></li>
<?php
    }
    else{ ?>
<li><a href="<?=  base_url()?>users/register/" class="<?=$register_class;?>">Üye Ol</a></li>
<?php } ?>

<li><a href="<?=  base_url()?>pages/aboutus">Hakkımda</a></li>
<li class="<?=$news_class;?>" ><a href="<?=  base_url()?>pages/haber">Haberler</a></li>
<li><a href="<?=  base_url()?>pages/contact">İletişim</a></li>
<?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
    { ?>
<li><a href="<?=  base_url()?>blog/new_post/">Yeni Bir Yazı Ekleyin</a></li>
<?php } ?>
</ul>
</ul>
</div>
<div class="gadget">
<h2 class="star"><span>Son</span> Yazılar</h2>
<div class="clr"></div>
<ul class="sb_menu">
<?php foreach($posts as $post)
    { ?>
<li><a  href="<?=  base_url()?>blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2></li>
<?php
    }?>
</ul>

</div>
</div>
<div class="clr"></div>
</div>
</div>
