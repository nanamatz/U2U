<?php 
	header('Content-Type: text/html; charset=UTF-8');
	include("./SQLconstants.php");

	$post_id = $_POST['post_id'];
	$user_id = $_POST['user_id'];
	$item_id = $_POST['item_id'];
	$title = $_POST['title'];
	$sell_cost = $_POST['sell_cost'];
	$item_option = $_POST['item_option'];
	$message = "";

	// MySQL 드라이버 연결 
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO post( post_id, user_id, item_id, title, sell_cost, item_option ) VALUES ( '".$post_id."', '".$user_id."', '".$item_id."', '".$title."', '".$sell_cost."', '".$item_option."');"; 
	$resut = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "게시글 (".$title.")을 등록하였습니다"; 
	} 
	else 
	{
		$message = "게시글 (".$title.")을 등록할 수 없습니다"; 
	} 

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $result );
	mysqli_close( $conn );
?>

<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
