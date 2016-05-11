<?
	// 데이터베이스 연결 정보와 기타 설정
	include '../php/config.php';
	// 각종 유틸리티 함수
	include '../php/util.php';
	// MySQL 연결
	$connect=dbconn();

	// 이름과 아이디에 해당하는 세션이 있는지 확인
	if(!isset($_SESSION[p_id])||!isset($_SESSION[p_name])){
		err_msg('로그인 정보가 없습니다. 다시 로그인해 주세요.');
	}
	$category= $_REQUEST['category'];
	$fn = $_REQUEST['fn'];
	$frm=$_REQUEST['frm'];

	echo $category." / ".$fn." / ".$frm;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$doc_title?></title>
	<link rel="stylesheet" href="../common/cms.css">
	<script language="JavaScript" src="../common/global.js"></script>
	<script type="text/javascript">
	<!--
		function _inputChk(){

		var form = document.form1;
		
		if(!form.brand.value){
			alert('브랜드명을 입력하세요!');
			form.brand.focus();
			return;
		}

		var a = confirm('브랜드 정보를 등록 하시겠습니까?')
		if(a==true){
			form.submit();
		} else {
			return;
		}
	}
	function to_list(obj1){
			 var category = encodeURIComponent(obj1);
			 var brand = encodeURIComponent('<?=$brand?>');
			 var fn = '<?=$fn?>';
			 location.href='2nd_classify.php?category='+category+'&brand='+brand+'&fn='+fn+'&frm=<?=$frm?>';
	}
	//-->
	</script>
</head>

<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0'>
	<table border='0' cellpadding='0' cellspacing='0' width='100%' height="100%">
	<tr>
		<td align="center" style="border-width: 2 0 0 0; border-color:#C5FAC9; border-style: solid; padding:6 0 0 0px">
			<table border="0" width="96%" height="94%" align="center" valign="middle" bgcolor="#96ABE5">
			<tr height="80" bgcolor="#D9EAF8">
				<td align="center" height="32" background="../img/bg.jpg">
				<font color="#4C63BD" style="font-size:11pt"><b>중분류(BRAND) 등록</b></font>
				</td>
			</tr>			
			<tr bgcolor="ffffff">
				<td style="padding:13 0 0 0px">				
				<table border="0" align="center" width="96%" height="100%" cellspacing="0" cellpadding="0">
				<tr height="10">
					<td></td>
				</tr>
				<tr height="28">
					<td>
					<form name="form1" action="2nd_classify_up_post.php" method="post">
					<input type="hidden" name="category" value="<?=$category?>">
					<input type="hidden" name="fn" value="<?=$fn?>">
					<table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0">
					<tr align="center" height="35">
						<td width="100%" bgcolor="#F4F4F4" style="border-width: 1 0 1 0; border-color:#CFCFCF; border-style: solid;" colspan="2">
							등록할 브랜드 정보를 입력해 주십시요. (<font color="#ff0000">*</font>표시는 필수입력 정보)
						</td>
					</tr>
					<tr>
						<td style="padding:25 0 0 16px"> 카테고리 </td>
						<td style="padding:25 0 0 0px"> <font color="#5f7da3"><b><?=$category?></b></font> </td>
					</tr>
					<tr>					
						<td style="padding:25 0 0 16px"> 브랜드명 <font color="#ff0000">*</font></td>
						<td style="padding:25 0 0 0px">
							<input type="text" name="brand" size="40" class="inputStyle2" style="height:20px" onmouseover="cngClass(this,'inputStyle22')" onmouseout="cngClass(this,'inputStyle2');">
						</td>
					</tr>				
					<tr>					
						<td style="padding:12 0 23 16px; border-width: 0 0 1 0px; border-color:#CFCFCF; border-style: solid;"> 노트(한글명)</td>
						<td style="padding:12 0 23 0px; border-width: 0 0 1 0; border-color:#CFCFCF; border-style: solid;">
							<textarea name="note" rows="8" cols="38" class="inputStyle2" onmouseover="cngClass(this,'inputStyle22')" onmouseout="cngClass(this,'inputStyle2');"></textarea>
						</td>
					</tr>					
					<tr align="center">
						<input type="hidden" name="total_bnum" value="<?=$search_bnum?>">
					</tr>
					</table>					
					</td>
				</tr>									
				<tr>
					<td valign="top" align="center">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="20" align="center"></td>
					</tr>
					<tr>
						<td align="center">
							<input type="button" value=" 등록하기 " onclick="_inputChk()" class="inputstyle1">
							<input type="button" value=" 목록으로 " onclick="to_list('<?=$category?>');" class="inputstyle1">
						</td>
					</tr>
					</table>
					</form>
					</td>
				</tr>
				</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
</body>
</html>