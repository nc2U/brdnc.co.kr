				<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="15%" class="d2_sub2"></td>
						<td align="center" width="162" class="d2_sub1">
							<a href="<?=$_SERVER['PHP_SELF']?>?m_di=1"><img src="../images/sub_menu_2_1.png" border="0" alt=""><!-- <font size="2" color=""><b>전도금 관리</b></font> --></a></td>
						<td align="center" width="162" class="d2_sub2">
							<a href="<?=$_SERVER['PHP_SELF']?>?m_di=2"><img src="../images/sub_menu_2_2_.png" border="0" alt=""><!-- <font size="2" color=""><b>투입자원 관리</b></font> --></a></td>
						<td width="55%" class="d2_sub2"></td>
					</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td class="main_content" valign="top">
					<!-- ============== sub menu start ============== -->
					<div style="height:25px; padding-top:9px;" class="bottom">
						<div style="float:left; text-align:center; width:120px;">
							<b><a href="<?=$_SERVER['PHP_SELF']?>?m_di=<?=$m_di?>&amp;s_di=1" class="menu1">전도금 내역</a></b>
						</div>
						<div style="float:left;">|</div>
						<div style="float:left; text-align:center; width:120px;">
							<b><a href="<?=$_SERVER['PHP_SELF']?>?m_di=<?=$m_di?>&amp;s_di=2" class="menu1">전도금 입출등록</a></b>
						</div>
						<div style="float:left;">|</div>
						<div style="float:left; text-align:center; width:120px;">
							<b><a href="<?=$_SERVER['PHP_SELF']?>?m_di=<?=$m_di?>&amp;s_di=3" class="menu1">전체 전도금 현황</a></b>
						</div>
					</div>
					<!-- ============== sub menu end ============== -->
					<div>
						<?
							if(!$s_di||$s_di==1)include "advance_m1.php";
							if($s_di==2) include "advance_m2.php";
							if($s_di==3) include "advance_m3.php";
						?>
					</div>
					<!-- ============== template end ============== -->
					</td>
				</tr>
				</table>