<?
include_once "inc/connect.php";

//insert / update / select / delete
$writer = "";
if(isset($_POST['writer'])) $writer = $_POST['writer'];

$content = "";
if(isset($_POST['content'])) $content = $_POST['content'];

$email = "";
if(isset($_POST['email'])) $email = $_POST['email'];

$wdate = date("Y-m-d H:i:s");

// $content = "오동규바보";
// $writer = "오호호호호동규";
// $emil = "dk_o@dkdk.com";
// $wdate = "2018-10-10-10:10";

$sql= " insert into guestbook set ";
$sql.=" content = '$content', ";
$sql.=" writer = '$writer', ";
$sql.=" email = '$email', ";
$sql.=" wdate = '$wdate' ";
echo $sql;
mysqli_query($connect, $sql);
?>
<script>
location.href = "gbook.php";
</script>