<?php 
	header('Content-Type: text/html; charset=UTF-8');
?>
<HTML>
	<BODY>
		<!-- 화면구성 -->
		<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<b> - 새 책 등록 - </b>
		<br> 
		<form name = "formm" method = "post" action = "./addSQL.php">				
			<br> 게시글 ID:  <INPUT TYPE = "int" name = "post_id" SIZE="60" >
			<br> 회&nbsp;원 : <INPUT TYPE = "int" NAME = "user_id" SIZE="60" >
			<br> 아이템 ID : <INPUT TYPE = "int" NAME = "item_id" SIZE="60" >
			<br> 제 &nbsp; 목 : <INPUT TYPE = "text" NAME = "title" SIZE="60" >
			<br> 판매&nbsp;금액 : <INPUT TYPE = "int" NAME = "sell_cost" SIZE="60" >
			<br> 상세 &nbsp;설명 : <INPUT TYPE = "text" NAME = "item_option" SIZE="60" >
		</form>  
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE="button" value="등록" onClick="javascript:document.formm.submit();"> &nbsp; 
	</BODY>
</HTML>
