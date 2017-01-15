<div class="content">
<div class="content_resize">
<div class="mainbar">
<div class="article">
<h2><span>Blog Yazısı</span></h2>
<div class="clr"></div>
<?php if(!isset($post))
    {echo "Bu sayfaya izinsiz bir şekilde erişildi";}
    else //display the post
    {?>
<h2><?=$post['post_title']?></h2>
<p><?=$post['post']?></p>

<hr>
<h3>Yorumlar</h3>
<?php       //if there is comments then print the comments
    if(count($comments) > 0)
    {
        foreach ($comments as $row)
        {?>
<p><strong><?=$row['username']?></strong> Tarih <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
<?=$row['comment'];?></p><hr>
<?php   }
    }
    else //when there is no comment
    {
        echo "<p>Şuana kadar bu yazıya yorum yapılmamış</p>";
    }
    
    if($this->session->userdata('user_id'))//if user is loged in, display comment box
    {?>
<form action="<?=  base_url()?>comments/add_comment/<?=$post['post_id']?>" method="post">
<div class="form_settings">
<p>
<span>Yorum</span>
<textarea class="textarea" rows="8" cols="100" name="comment"></textarea>
</p>
<p style="padding-top: 15px">
<span>&nbsp;</span>
<input class="submit" type="submit" name="add" value="Yorumu Yolla" />
</p>
</div>
</form>
<?php
    
    }
    else {//if no user is loged in, then show the loged in button
        ?>
<a href="<?=  base_url()?>users/login">Yorum Yapmak İçin Giriş Yapın</a>
<?php    }
    }?>

</div>
</div>
<?php include 'sidebar.php' ?>