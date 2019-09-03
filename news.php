<div style="height:32px; display:block;"></div>
<!--正中央-->
<h4>更多最新消息顯示區</h4>
<hr>

<ul class="ssaa" style="list-style-type:none;">
	<?php
							$all=nums("news","");
							$div=5;
							$pages=ceil($all/$div);
							$now=(!empty($_GET['p']))?$_GET['p']:1;
							$start=($now-1)*$div;
							$news=q("select * from news where sh='checked' limit $start,$div");
							foreach($news as $k =>$n){
						?>
	<li><?=($start+1+$k);?>.<?=mb_substr($n['text'],0,20,'utf8');?><div class="all" style='display:none'><?=$n['text'];?></div></li>

	<?php
							}

						?>
</ul>
<div id="altt"
	style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".ssaa li").hover(
		function () {
			$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
			$("#altt").show()
		}
	)
	$(".ssaa li").mouseout(
		function () {
			$("#altt").hide()
		}
	)

	$("#altt").hover(
		function () {
			$("#altt").show()
		},
		function () {
			$("#altt").hide()
		}

	)
</script>

<div style="text-align:center;">
	<?php
				if (($now - 1) > 0) {
						echo "<a href='?do=news&p=" . ($now - 1) . "' > < </a>";
				}
				for ($i = 1; $i <= $pages; $i++) {
						if ($now == $i) {
								echo "<span style='font-size:24px'> $i </span>";
						} else {
								echo "<a href='?do=news&p=$i' > $i </a>";
						}
				}
				if (($now + 1) <= $pages) {
						echo "<a href='?do=news&p=" . ($now + 1) . "' > > </a>";
				}
				?>
</div>