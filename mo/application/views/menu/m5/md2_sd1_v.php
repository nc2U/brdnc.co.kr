<!-- 5. 환경설정 -> 2. 회사정보관리 ->1. 회사정보 페이지 -->
<form class="form-inline" id="com_reg_form" name="form1">
	<fieldset>
		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="co_name">
					회사명<span class="red">*</span>
				</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<input type="text" class="form-control input-sm" id="co_name" name="co_name" maxlength="30">
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="co_no1">사업자번호 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="co_no1" name="co_no1" maxlength="3"></div>
				<div class="col-xs-2">
          <label for="co_no2" class="sr-only">사업자번호2 </label>
          <input type="text" class="form-control input-sm wid-90" id="co_no2" name="co_no2" maxlength="2">
        </div>
				<div class="col-xs-3">
	        <label for="co_no3" class="sr-only">사업자번호3 </label>
	        <input type="text" class="form-control input-sm wid-90" id="co_no3" name="co_no3" maxlength="5">
        </div>
				<div class="col-xs-4">
        	<label for="co_form" class="sr-only">사업자종류 </label>
					<select class="form-control input-sm wid-90" id="co_form" name="co_form">
						<option value="">선택</option>
						<option value="1">법인</option>
						<option value="2">개인(일반)</option>
						<option value="3">개인(간이)</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="ceo">
					대표자 <span class="red">*</span>
				</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<input type="text" class="form-control input-sm" id="ceo" name="ceo" maxlength="30">
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="or_no1">법인(주민)등록번호 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-95" id="or_no1" name="or_no1" maxlength="6"></div>
      	<div class="col-xs-4">
      		<label for="or_no2" class="sr-only">법인(주민)등록번호2 </label>
      		<input type="text" class="form-control input-sm wid-90" id="or_no2" name="or_no2" maxlength="7">
      	</div>
      	<div class="col-xs-5">
      		<label for="sur" class="sr-only">부가세신고주기</label>
					<select class="form-control input-sm wid-90" id="sur" name="sur">
						<option value="">선택</option>
						<option value="1">부가세 분기 신고</option>
						<option value="2">부가세 반기 신고</option>
						<option value="3">부가세 월별 신고</option>
					</select>
				</div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="biz_cond">업태 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
					<input type="text" class="form-control input-sm" id="biz_cond" name="biz_cond" maxlength="30">
			</div>

			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="biz_even">종목 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<input type="text" class="form-control input-sm" id="biz_even" name="biz_even" maxlength="30">
			</div>
		</div>
		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="co_phone1">대표전화 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="co_phone1" name="co_phone1" maxlength="3"></div>
				<div class="col-xs-3">
					<label for="co_phone2" class="sr-only">대표전화2</label>
					<input type="text" class="form-control input-sm wid-90" id="co_phone2" name="co_phone2" maxlength="4">
				</div>
				<div class="col-xs-3">
					<label for="co_phone3" class="sr-only">대표전화3</label>
					<input type="text" class="form-control input-sm wid-90" id="co_phone3" name="co_phone3" maxlength="4">
				</div>
				<div class="col-xs-3"></div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="co_hp1">  휴대전화(비상) <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3">
					<select class="form-control input-sm wid-90" id="co_hp1" name="co_hp1">
						<option>선택</option>
						<option>010</option>
						<option>011</option>
						<option>016</option>
						<option>017</option>
						<option>018</option>
						<option>019</option>
					</select>
				</div>
				<div class="col-xs-3">
					<label for="co_hp2" class="sr-only">휴대전화2</label>
					<input type="text" class="form-control input-sm wid-90" id="co_hp2" name="co_hp2" maxlength="4">
				</div>
				<div class="col-xs-3">
					<label for="co_hp3" class="sr-only">휴대전화2</label>
					<input type="text" class="form-control input-sm wid-90" id="co_hp3" name="co_hp3" maxlength="4">
				</div>
				<div class="col-xs-3"></div>
			</div>
		</div>

		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap"><label for="co_fax1">FAX</label></div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="co_fax1" name="co_fax1" maxlength="4"></div>
				<div class="col-xs-3">
					<label for="co_fax2" class="sr-only">FAX2</label>
					<input type="text" class="form-control input-sm wid-90" id="co_fax2" name="co_fax2" maxlength="4">
				</div>
				<div class="col-xs-3">
					<label for="co_fax3" class="sr-only">FAX3</label>
					<input type="text" class="form-control input-sm wid-90" id="co_fax3" name="co_fax3" maxlength="4">
				</div>
				<div class="col-xs-3"></div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap"><label for="co_div1">기업구분</label></div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-4">
					<select class="form-control input-sm wid-90" id="co_div1" name="co_div1">
						<option value="0">선택</option>
						<option value="1">중소기업</option>
						<option value="2">비중소기업</option>
					</select>
				</div>
				<div class="col-xs-4">
					<label for="co_div2" class="sr-only">기업구분2</label>
					<select class="form-control input-sm wid-90" id="co_div2" name="co_div2">
						<option value="0">선택</option>
						<option value="1">중소기업</option>
						<option value="2">일반</option>
						<option value="3">상장</option>
						<option value="4">비상장기업</option>
						<option value="5">공공</option>
						<option value="6">비영리</option>
					</select>
				</div>
				<div class="col-xs-3">
					<label for="co_div3" class="sr-only">기업구분3</label>
					<select class="form-control input-sm wid-90" id="co_div3" name="co_div3">
						<option value="0">선택</option>
						<option value="1">내국</option>
						<option value="2">외국</option>
						<option value="3">외투</option>
					</select>
				</div>
				<div class="col-xs-1"></div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="es_date">설립일자 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-6">
					<input type="text" class="form-control input-sm wid-100" id="es_date" name="es_date" maxlength="10" readonly onClick="cal_add(this); event.cancelBubble=true">
				</div>
				<div class="col-xs-6 glyphicon-wrap">
					<a href="javascript:" onclick="cal_add(document.getElementById('es_date'),this); event.cancelBubble=true"><span class="glyphicon glyphicon-calendar" aria-hidden="true" id="glyphicon"></span></a>
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="op_date">개업일자 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-6">
					<input type="text" class="form-control input-sm wid-100" id="op_date" name="op_date" maxlength="10" readonly onClick="cal_add(this); event.cancelBubble=true">
				</div>
				<div class="col-xs-6 glyphicon-wrap">
					<a href="javascript:" onclick="cal_add(document.getElementById('op_date'),this); event.cancelBubble=true"><span class="glyphicon glyphicon-calendar" aria-hidden="true" id="glyphicon"></span></a>
				</div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="carr_y">기초잔액 입력월 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="carr_y" name="carr_y"></div>
				<div class="col-xs-1 text-wrap">년</div>
				<div class="col-xs-2">
					<label for="carr_m" class="sr-only">기초잔액 입력월2</label>
					<input type="text" class="form-control input-sm wid-90" id="carr_m" name="carr_m">
				</div>
				<div class="col-xs-6 text-wrap">월</div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="m_wo_st">업무개시월 <span class="red">*</span>/ 결산주기 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3">
					<select class="form-control input-sm wid-90" id="m_wo_st" name="m_wo_st">
						<option>선택</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
				</div>
				<div class="col-xs-1 text-wrap">월/</div>
				<div class="col-xs-3">
					<label for="bl_cycle" class="sr-only">결산주기</label>
					<select class="form-control input-sm wid-90" id="bl_cycle" name="bl_cycle">
						<option>선택</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>06</option>
						<option>12</option>
					</select>
				</div>
				<div class="col-xs-5 text-wrap">개월</div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="email1">E-mail(비상) <span class="red">*</span>	</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="email1" name="email1"></div>
				<div class="col-xs-1 text-wrap">@</div>
				<div class="col-xs-3">
						<label for="email2" class="sr-only">이메일2</label>
						<input type="text" class="form-control input-sm wid-90" id="email2" name="email2">
				</div>
				<div class="col-xs-5">
					<label for="email3" class="sr-only">이메일3</label>
					<select class="form-control input-sm wid-70" id="email3" name="email3">
						<option value="">직접입력</option>
						<option value="naver.com">네이버</option>
						<option value="hanmail.net">한메일</option>
						<option value="daum.net">다음</option>
						<option value="gmail.com">지메일</option>
					</select>
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="calc_mail1">전자세금계산서 Email</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="calc_mail1" name="calc_mail1"></div>
				<div class="col-xs-1 text-wrap">@</div>
				<div class="col-xs-3">
						<label for="calc_mail2" class="sr-only">세금계산서이메일2</label>
						<input type="text" class="form-control input-sm wid-90" id="calc_mail2" name="calc_mail2">
				</div>
				<div class="col-xs-5">
					<label for="calc_mail3" class="sr-only">세금계산서이메일3</label>
					<select class="form-control input-sm wid-70" id="calc_mail3" name="calc_mail3">
						<option value="">직접입력</option>
						<option value="naver.com">네이버</option>
						<option value="hanmail.net">한메일</option>
						<option value="daum.net">다음</option>
						<option value="gmail.com">지메일</option>
					</select>
				</div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="tax_off1_code">세무서[1] <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id="tax_off1_code" name="tax_off1_code"></div>
				<div class="col-xs-4">
					<label for="tax_off1_name" class="sr-only">세무서1 이름</label>
					<input type="text" class="form-control input-sm wid-90" id="tax_off1_name" name="tax_off1_name">
				</div>
				<div class="col-xs-5"></div>
			</div>
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="tax_off2_code">세무서[2]</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-4 form-wrap">
				<div class="col-xs-3"><input type="text" class="form-control input-sm wid-90" id=tax_off2_code"" name="tax_off2_code"></div>
				<div class="col-xs-4">
					<label for="tax_off2_name" class="sr-only">세무서2 이름</label>
					<input type="text" class="form-control input-sm wid-90" id="tax_off2_name" name="tax_off2_name">
				</div>
				<div class="col-xs-5"></div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="zipcode">회사주소 <span class="red">*</span></label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-10 form-wrap">
				<div class="col-md-1 col-sm-2 col-xs-3"><input type="button" class="btn btn-default btn-sm wid-90" value="우편번호"></div>
				<div class="col-md-1 col-sm-5 col-xs-3">
					<input type="text" class="form-control input-sm wid-95" id="zipcode" name="zipcode">
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<label for="address1" class="sr-only">회사주소1</label>
					<input type="text" class="form-control input-sm wid-98" id="address1" name="address1">
				</div>
				<div class="col-md-3 col-sm-6 ol-xs-12">
					<label for="address2" class="sr-only">회사주소2</label>
					<input type="text" class="form-control input-sm wid-98" id="address2" name="address2">
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12 glyphicon-wrap">나머지 주소</div>
			</div>
		</div>


		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?>">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="en_co_name">회사 영문명</label>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-10 form-wrap">
				<div class="col-md-6 col-xs-12"><input type="text" class="form-control input-sm wid-99" id="en_co_name" name="en_co_name"></div>
				<div class="col-md-6 col-xs-12 text-wrap">기타소득 지급조서 신고가 있는 경우 입력</div>
			</div>
		</div>
		<div class="row <?php if( !is_mobile()) echo 'no-mobile';?> foot_form">
			<div class="form-group col-xs-12 col-sm-4 col-md-2 label-wrap">
				<label for="en_address">회사 영문주소</label>
				<div class="col-xs-12">&nbsp;</div>
			</div>
			<div class="form-group col-xs-12 col-sm-8 col-md-10 form-wrap">
				<div class="col-md-10 col-xs-12"><input type="text" class="form-control input-sm wid-100" id="en_address" name="en_address"></div>
				<div class="col-md-2">&nbsp;</div>
				<div class="col-xs-12">번지(number), 거리(street), 시(city), 도(state), 우편번호(postal code), 국가(country) 순으로 기재</div>
			</div>
		</div>
<?php if($auth<2) {$submit_str="alert('등록 권한이 없습니다!')";} else {$submit_str="com_submit('$mode');";} ?>


		<div class="row btn-wrap">
			<input type="button" class="btn btn-primary btn-sm" onclick="<?=$submit_str?>" value="입력하기">
		</div>

	</fieldset>
</form>