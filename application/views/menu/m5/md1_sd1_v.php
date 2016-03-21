			<div class="main_start"></div>

			<div class="row">
				<div class="col-md-12" style="<?php if( !$this->agent->is_mobile()) echo 'height: 600px;'; ?>">
					<!-- <div class="center" style="padding-top: 100px;">등록된 데이터가 없습니다.</div> -->
					<div class="row" style="margin: 0 0 20px 0; border-bottom: 1px solid #ddd;">
						<div class="col-md-2" style="background-color: #F4F4F4; height: 40px; padding-top: 10px;">부서별</div>
						<div class="col-md-10" style="height: 40px; padding-top: 10px;">
							<select>
								<option>전 체</option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="row table-responsive" style="margin: 0;">
						<table class="table table-bordered font12">
							<thead>
								<tr>
									<th class="col-md-1 center" style="background-color: #ecf3fe; border-left: 0;"><input type="checkbox"></th>
									<th class="col-md-1 center bo-left" style="background-color: #ecf3fe;">부서코드</th>
									<th class="col-md-2 center bo-left" style="background-color: #ecf3fe;">부서명</th>
									<th class="col-md-4 center bo-left" style="background-color: #ecf3fe;">담당업무</th>
									<th class="col-md-4 center bo-left" style="background-color: #ecf3fe; border-right: 0;">비고</th>
								</tr>
							</thead>
							<tbody>
<?php foreach($com_div as $lt) : ?>
								<tr>
									<td class="center"><input type="checkbox"></td>
									<td class="center bo-left"><?php echo $lt->div_code; ?></td>
									<td class="center bo-left"><?php echo $lt->div_name; ?></td>
									<td class="bo-left" style="padding-left: 15px;"><?php echo $lt->res_work; ?></td>
									<td class="bo-left" style="padding-left: 15px;"><?php echo $lt->note; ?></td>
								</tr>
<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="col-md-12 center" style="margin-top: 0px; padding: 0;">
						<ul class="pagination pagination-sm"><?php echo $pagination; ?></ul>
					</div>
				</div>
				<div class="row" style="margin: 0 15px;">
					<div class="col-md-12" style="height: 70px; padding: 26px 15px; margin: 18px 0; border-width: 0 0 1px 0; border-style: solid; border-color: #B2BCDE;">
						<div class="col-xs-6"><button class="btn btn-success btn-sm">신규등록</button></div>
						<div class="col-xs-6" style="text-align: right;"><button class="btn btn-danger btn-sm">선택삭제</button></div>
					</div>
				</div>

			</div>
