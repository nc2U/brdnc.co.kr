<div class="col-xs-12" style="text-align: center; padding-top: 50px;
<?php if( !$this->agent->is_mobile()) echo 'height: 520px;'?>">
    <div class="page-header">
        <h3>해당 페이지에 대한 조회 / 관리 권한이 없습니다.</h3>
    </div>
    <?php
    $admin_contact = ($this->cbconfig->item('company_admin_email')!=="")
        ? $this->cbconfig->item('company_admin_email')
        : "정보관리책임자";
    ?>
    <p class="lead">관리자(<?php echo $admin_contact; ?>)에게 문의하여 주십시요!</p>
    <p>또는 <a href="javascript:note_list()" class="no_auth">관리자나 해당 직원에게 메세지</a>를 보낼 수 있습니다.</p>
</div>
