<?php echo $this->layout('admin_layout');?>
	<div class="col-md-12">
		<div class="admin-login-panel">
				<!-- @call element for view form og reset password-->
                <?php echo $this->element('reset_password',['action_url'=>'/admin/reset_password/?email='.$email.'&token='.$token]);?>
		</div>
	</div>
