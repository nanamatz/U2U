<?php 
	header('Content-Type: text/html; charset=UTF-8');
?>
<HTML>
	<BODY>
		<!-- 화면구성 -->
		<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<b> - 새 책 등록 - </b>
		<br> 
		<form name = "formm" method = "post" action = "./addItemSQL.php">				
			<br> 아이템 ID:  <INPUT TYPE = "int" name = "item_id" SIZE="60" >
			<br> 아이템 이름 : <INPUT TYPE = "text" NAME = "name" SIZE="60" >
			<br> 카테고리 ID: <INPUT TYPE = "int" NAME = "category_id" SIZE="60" >
			<br> 아이템 이미지 : <INPUT TYPE = "text" NAME = "image" SIZE="60" >
		</form>  
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE="button" value="등록" onClick="javascript:document.formm.submit();"> &nbsp; 
	</BODY>
</HTML>