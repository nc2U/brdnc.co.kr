<?
	include '../php/config.php';
	include '../php/util.php';
	$connect=dbconn();


		$del_code=$_REQUEST['del_code'];

		$qry="DELETE FROM cms_accounts WHERE code='$del_code' ";
		$res=mysql_query($qry, $connect);

		echo ("<script>
						window.alert('정상적으로 삭제되었습니다!');
						history.go(-1);
					 </script>");

		// echo ("<meta http-equiv='Refresh' content='0; URL=accounts_in.php'>");
?>