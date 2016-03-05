<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M1 extends CI_Controller {

	/**
	 * [__construct 이 클래스의 생성자]
	 */
	public function __construct(){
		parent::__construct();
		if(@$this->session->userdata['logged_in'] !== TRUE) {
			echo "<meta http-equiv='Refresh' content='0; URL=".$this->config->base_url()."member/'>";
			exit;
		}
		$this->load->model('main_m'); //모델 파일 로드
	}

	/**
	 * [index 클래스명 생략시 기본 실행 함수]
	 * @return [type] [description]
	 */
	public function index(){
		$this->sales();
	}

	public function _remap($method){
		// 헤더 include
		$this->load->view('cms_main_header');

		if(method_exists($this, $method)){
			$this->{"$method"}();
		}
		// 푸터 include
		$this->load->view('cms_main_footer');
	}

	public function sales($mdi='', $sdi=''){
		//$this->output->enable_profiler(TRUE); //프로파일러 보기//

		if( !$this->uri->segment(3)) $mdi = 1; else $mdi = $this->uri->segment(3);
		if( !$this->uri->segment(4)) $sdi = 1; else $sdi = $this->uri->segment(4);

		$menu['s_di'] = array(
			array('계약 현황', '계약 등록', '동호수 현황'), // 첫번째 하위 메뉴
			array('수납 현황', '수납 등록', '요약집계'),                          // 두번째 하위 메뉴
			array('현장별 계약현황', '현장별 계약등록(수정)', '동호수 계약 현황도'), // 첫번째 하위 제목
			array('고객 상담일지', '현장별 업무일지', '시행사 업무보고')                                  // 두번째 하위 제목
		);



		$this->load->view('menu/m1/sales_v', $menu);



		// 계약현황 1. 계약현황 ////////////////////////////////////////////////////////////////////
		if($mdi==1 && $sdi==1 ){
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_1_1', $this->session->userdata['user_id']);

			if( !$auth['_m1_1_1'] or $auth['_m1_1_1']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md1_sd1_v');
			}







		// 계약현황 2. 계약등록 ////////////////////////////////////////////////////////////////////
		}else if($mdi==1 && $sdi==2) {
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_1_2', $this->session->userdata['user_id']);

			if( !$auth['_m1_1_2'] or $auth['_m1_1_2']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md1_sd2_v');
			}






		// 계약현황 3. 동호수현황 ////////////////////////////////////////////////////////////////////
		}else if($mdi==1 && $sdi==3) {
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_1_3', $this->session->userdata['user_id']);

			if( !$auth['_m1_1_3'] or $auth['_m1_1_3']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md1_sd3_v');
			}






		// 업무현황 1. 상담일지 ////////////////////////////////////////////////////////////////////
		}else if($mdi==2 && $sdi==1) {
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_2_1', $this->session->userdata['user_id']);

			if( !$auth['_m1_2_1'] or $auth['_m1_2_1']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md2_sd1_v');
			}






		// 업무현황 1. 업무일지 ////////////////////////////////////////////////////////////////////
		}else if($mdi==2 && $sdi==2) {
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_2_2', $this->session->userdata['user_id']);

			if( !$auth['_m1_2_2'] or $auth['_m1_2_2']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md2_sd2_v');
			}






		// 업무현황 1. 업무보고 ////////////////////////////////////////////////////////////////////
		}else if($mdi==2 && $sdi==3) {
			// 조회 등록 권한 체크
			$auth = $this->main_m->auth_chk('_m1_2_3', $this->session->userdata['user_id']);

			if( !$auth['_m1_2_3'] or $auth['_m1_2_3']==0) {
				$this->load->view('no_auth');
			}else{

				//본 페이지 로딩
				$this->load->view('/menu/m1/md2_sd3_v');
			}
		}
	}
}
// End of this File