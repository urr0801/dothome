<?
include_once "inc/connect.php";
include_once "inc/head.php";
?>
<!-- //select = (가져와라) * from guestbook = (guestbook 으로부터) order by = (정렬방식은) id dese = (id 값이 높은순서로) -->
<ul class="lists">
	<?
	$sql = " select * from guestbook order by id desc "; 
	$result = mysqli_query($connect, $sql);
	while($rs = mysqli_fetch_array($result)) {
	?>
	<li>
		<div><?=$rs['writer']?> | <?=$rs['wdate']?></div>
		<p><?=$rs['content']?></p>
		<i onclick="delData(<?=$rs[id]?>);"></i>
	</li>
	<?
	}
	?>
</ul>
<section class="write">
<form name="g_form" method="post" action="gbook_ok.php">
<div>
	<input type="text" name="writer" di="writer" class="w3-input w3-border" placeholder="작성자">
</div>
<div>
	<input type="text" name="email" di="email" class="w3-input w3-border" placeholder="이메일">
</div>
	<div>
		<textarea name="content" id="content" placeholder="방명록을 작성해주세요"></textarea>
		</div>
		<div>
		<button type="button" class="w3-button w3-red" id="bt_save">저장</button>
		<button type="reset" class="w3-button w3-red">취소</button>
		</div>	
		</form>
</section>>

<?
include_once "inc/foot.php";
?>