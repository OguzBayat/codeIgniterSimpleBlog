<?php require "fonksiyon.php" ?>
<div class="content">
<div class="content_resize">
<div class="mainbar">

<div class="article">
<h2><span>Haberler</span></h2>
<div class="clr"></div>

<span>
    <div id="main">
		
		<?php 
		
		$Baglan = Baglan("https://news.ycombinator.com/newest");
		preg_match('#<span class="rank">(.*?)<tr class="morespace"#',$Baglan,$haberler);
		preg_match_all('#<td class="title"><a href="(.*?)" class="storylink"(.*?)>(.*?)</a>#',$haberler[1],$haber);			
		preg_match_all('#<span class="score" id="score_(.*?)">(.*?)</span> by <a href="(.*?)" class="hnuser">(.*?)</a> <span class="age"><a href="(.*?)">(.*?)</a></span> <span id="unv#',$haberler[1],$ayrinti);
						
		$haberLink = $haber[1];
		$haberBaslik = $haber[3];
		$puan=$ayrinti[2];
		$yazarLink = $ayrinti[3];
		$yazarAd = $ayrinti[4];
		$saatLink = $ayrinti[5];
		$saatSaat = $ayrinti[6];
		
		
		?>
		<div class="box">
			<ul>
			<?php
			for($i = 0; $i<count($haberBaslik); $i++){
				if($i==20) break;
				$newLink=$haberLink[$i];
				$new=$haberBaslik[$i];
				$authorLink=$yazarLink[$i];
				$author=$yazarAd[$i];
				$timeLink=$saatLink[$i];
				$time=$saatSaat[$i];
				$point=$puan[$i];
			
			?>
				<li>
					<div class="count"><h4><?php echo $i+1 ?></h4></div>
					<h4><a href="<?php echo $newLink?>"><?php echo $new ?></a></h4>
					<div class="detail">
					
					<?php echo $point ?> <?php echo $time ?> by <?php echo $author ?>
					</div>
				</li>
		<?php }
		?>
			</ul>
		</div>
	</div>
</span>
<script language="javascript">

	 $(document).ready(function(){
    $("h3").click(function(){
        $("span").toggle();
    });
});

</script>


</div>
</div>
<?php include 'sidebar.php' ?>
