<!-- 5. 환경설정 -> 2. 회사정보관리 ->2. 사용자 권한 관리 페이지 -->
<?php
  $attributes = array('name' => 'form1', 'id' => 'mem_auth', 'class' => 'form-inline', 'method' => 'post');
  //echo form_open('/m5/config/2/2/', $attributes);
?>
  <fieldset>
    <div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
		<!-- 신규 사용자 등록자가 있을 때 처리 시작 -->
<?
	// $q = "select request from cms_member_table where request='2' ";
	// $rl=mysql_query($q, $connect);
	// $rs=mysql_fetch_array($rl);
	// if($rs){
?>
		<!-- <form name="form2" method="post" action="com_post.php">
		<input type="hidden" name="mode" value="perm">
		<input type="hidden" name="mem">
		<input type="hidden" name="sf">
		<table border="0" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="6" style="padding: 0 0 0 10px;" height="30"> <b><font color="red">*</font> <font color="black">신규 사용자 등록 신청 건이 있습니다.</font></b></td>
			</tr>
			<tr align="center" bgcolor="#f6f6f6">
				<td width="5%" class="top" height="35"> NO. </td>
				<td width="10%" class="top"> 성 명 </td>
				<td width="15%" class="top"> email </td>
				<td width="15%" class="top"> 등록 신청일시 </td>
				<td width="10%" class="top"> 승인 처리 </td>
			</tr> -->
<?
	// $q1 = " SELECT no, name, is_company, email, mobile, pj_seq, reg_date FROM cms_member_table WHERE request='2' GROUP BY no ORDER BY no";
	// $rl1=mysql_query($q1, $connect);
	// for($i=0; $rs1=mysql_fetch_array($rl1); $i++){
	// 	$q2 = "SELECT pj_name FROM cms_project1_info WHERE seq='$rs1[pj_seq]'";
	// 	$rl2 = mysql_query($q2, $connect);
	// 	$rs2 = mysql_fetch_array($rl2);
	// 	if($rs1[is_company]==1) {$sort=$com_title;} else {$sort="현장 관계직원";}
?>
			<!-- <tr align="center">
				<td height="30"> <?//=$rs1[no]?> </td>
				<td> <?//=$rs1[name]?> </td>
				<td> <?//=$rs1[email]?> </td>
				<td> <?//=$rs1[reg_date]?> </td> -->
<?
	// if($_m5_2_2_row[_m5_2_2]<2){
	// 	$perm_str="alert('승인(거부) 권한이 없습니다!')";
	// }else{
	// 	$perm_str="permition('$rs1[no]',this.value);";
	// }
?>
				<!-- <td>
					<input type="button" class="btn btn-success btn-xs" value="승인" onclick="<?//=$perm_str?>">
					<input type="button" class="btn btn-danger btn-xs" value="거부" onclick="<?//=$perm_str?>">
				</td>
			</tr> -->
			<? //} ?>
			<!-- <tr>
				<td colspan="8" class="bottom" height="10"></td>
			</tr>
		</table>
		</form> -->
<? // } ?>
    <!-- 신규 사용자 등록자가 있을 때 처리 종료 -->

			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 center"> * 권한 설정할 직원 선택</div>
				<div class="col-xs-9 col-sm-9 col-md-9"></div>
			</div>

    </div>
  </fieldset>
</form>



      <div class="row">
        <div class="col-md-12 table-responsive">
          <table class="table auth-table">
            <thead>
              <tr>
                <th class="col-md-1">대분류</th>
                <th class="col-md-1">소분류</th>
                <th class="col-md-10" colspan="4">사용자 권한 관리</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th rowspan="2">분양관리</th>
                <td>계약현황</td>
                <td class="col-md-2">계약현황
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_1" name="_m1_1_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_1" name="_m1_1_1">등록
									</label>
                </td>
                <td class="col-md-2">계약등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_2" name="_m1_1_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_2" name="_m1_1_2">등록
									</label>
                </td>
                <td class="col-md-2">동호수 현황
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_3" name="_m1_1_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_1_3" name="_m1_1_3">등록
									</label>
                </td>
                <td class="col-md-2"></td>
              </tr>
              <tr>
                <!-- <td>2</td> -->
                <td>수납현황</td>
                <td>수납현황
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_1" name="_m1_2_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_1" name="_m1_2_1">등록
									</label>
                </td>
                <td>수납등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_2" name="_m1_2_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_2" name="_m1_2_2">등록
									</label>
                </td>
                <td>요약집계
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_3" name="_m1_2_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m1_2_3" name="_m1_2_3">등록
									</label>
                </td>
                <td></td>
              </tr>
              <tr>
                <th rowspan="2">사업관리</th>
                <td>예산집행 관리</td>
                <td>집행현황
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_1" name="_m2_1_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_1" name="_m2_1_1">등록
									</label>
                </td>
                <td>집행등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_2" name="_m2_1_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_2" name="_m2_1_2">등록
									</label>
                </td>
                <td>사업수지
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_3" name="_m2_1_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_1_3" name="_m2_1_3">등록
									</label>
                </td>
                <td></td>
              </tr>
              <tr>
                <!-- <td>3</td> -->
                <td>프로세스 관리</td>
                <td>진행현황
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_1" name="_m2_2_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_1" name="_m2_2_1">등록
									</label>
                </td>
                <td>일정관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_2" name="_m2_2_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_2" name="_m2_2_2">등록
									</label>
                </td>
                <td>프로세스
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_3" name="_m2_2_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m2_2_3" name="_m2_2_3">등록
									</label>
                </td>
                <td></td>
              </tr>
              <tr>
                <th rowspan="2">프로젝트</th>
                <td>프로젝트 관리</td>
                <td>데이터 등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_1_1" name="_m3_1_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_1_1" name="_m3_1_1">등록
									</label>
                </td>
                <td>데이터 수정
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_1_2" name="_m3_1_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_1_2" name="_m3_1_2">등록
									</label>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <!-- <td>3</td> -->
                <td>신규 프로젝트</td>
                <td>검토 프로젝트
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_2_1" name="_m3_2_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_2_1" name="_m3_2_1">등록
									</label>
                </td>
                <td>프로젝트 등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_2_2" name="_m3_2_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m3_2_2" name="_m3_2_2">등록
									</label>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th rowspan="2">자금회계</th>
                <td>자금현황</td>
                <td>자금일보
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_1" name="_m4_1_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_1" name="_m4_1_1">등록
									</label>
                </td>
                <td>입출금 내역
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_2" name="_m4_1_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_2" name="_m4_1_2">등록
									</label>
                </td>
                <td>입출금 등록
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_3" name="_m4_1_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_1_3" name="_m4_1_3">등록
									</label>
                </td>
                <td></td>
              </tr>
              <tr>
                <!-- <td>3</td> -->
                <td>회계관리</td>
                <td>분개장
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_1" name="_m4_2_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_1" name="_m4_2_1">등록
									</label>
                </td>
                <td>일/월계표
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_2" name="_m4_2_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_2" name="_m4_2_2">등록
									</label>
                </td>
                <td>제무제표
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_3" name="_m4_2_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m4_2_3" name="_m4_2_3">등록
									</label>
                </td>
                <td></td>
              </tr>
              <tr>
                <th rowspan="2">환경설정</th>
                <td>기본정보 관리</td>
                <td>부서정보 관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_1" name="_m5_1_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_1" name="_m5_1_1">등록
									</label>
                </td>
                <td>직원정보 관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_2" name="_m5_1_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_2" name="_m5_1_2">등록
									</label>
                </td>
                <td>거래처정보관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_3" name="_m5_1_3">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_3" name="_m5_1_3">등록
									</label>
                </td>
                <td>은행계좌 관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_4" name="_m5_1_4">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_1_4" name="_m5_1_4">등록
									</label>
                </td>
              </tr>
              <tr>
                <!-- <td>3</td> -->
                <td>회사정보 관리</td>
                <td>회사 기본정보
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_2_1" name="_m5_2_1">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_2_1" name="_m5_2_1">등록
									</label>
                </td>
                <td>사용자권한관리
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_2_2" name="_m5_2_2">조회
									</label>
                	<label class="checkbox-inline">
									  <input type="checkbox" id="_m5_2_2" name="_m5_2_2">등록
									</label>
                </td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
       </div>
       <div class="row btn-wrap">
				<input type="button" class="btn btn-primary btn-sm" onclick="" value="등록하기">
			</div>


















      <!--   <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>계약현황</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2">1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@TwBootstrap</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->


      <!-- <div class="page-header">
        <h1>Panels</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div> --><!-- /.col-sm-4 -->
        <!-- <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div> --><!-- /.col-sm-4 -->
        <!-- <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div> --><!-- /.col-sm-4 -->
      <!-- </div>


      <div class="page-header">
        <h1>Badges</h1>
      </div>
      <p>
        <a href="#">Inbox <span class="badge">42</span></a>
      </p>
      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>


      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div> --><!-- /.col-sm-4 -->
        <!-- <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
        </div> --><!-- /.col-sm-4 -->
        <!-- <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div> --><!-- /.col-sm-4 -->
      <!-- </div> -->