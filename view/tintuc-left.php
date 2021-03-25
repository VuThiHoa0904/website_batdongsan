<div class="sidebar-left">
	<img style="width:100%; margin-top:20px;" src="images/banner-1.jpg">
	<h3 class="title"><a href="#">Tin Hot</a></h3>
	<ul>
	<?php
		$tintuc2 = $x->get_tintuc();
		$count1 = 0;
		while ($set = $tintuc2 -> fetch()):
			$count1++;
			if ($count1==11) {
				break;
			}
	?>
		<li><a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><?php echo $set[1];?></a></li>
	<?php endwhile;?>
	</ul>
	<img style="width:100%; margin-top:20px;" src="images/banner-2.jpg">
	<h3 class="title"><a href="#">Dự án hot</a></h3>
	<ul>
	<?php
		$duan2 = $x->get_duan();
		$count1 = 0;
		while ($set = $duan2 -> fetch()):
			$count1++;
			if ($count1==11) {
				break;
			}
	?>

		<li><a href="?action=productdetail&brandname=APPLE&productid=<?php echo $set[0] ?>"><?php echo $set[1];?></a></a></li>
	<?php endwhile;?>
	</ul>
</div>