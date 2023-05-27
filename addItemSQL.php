<?php 
	header('Content-Type: text/html; charset=UTF-8');
	include("./SQLconstants.php");

	$item_id = $_POST['item_id'];
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$message = "";

	// MySQL 드라이버 연결 
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO item( item_id, category_id, name, image ) VALUES ( '".$item_id."', '".$category_id."', '".$name."', '".$image."');"; 
	$resut = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "아이템 (".$name.")을 등록하였습니다"; 
	} 
	else 
	{
		$message = "아이템 (".$name.")을 등록할 수 없습니다"; 
	} 

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $result );
	mysqli_close( $conn );
?>

<form name = "frm" method = "post" action = "./item.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
