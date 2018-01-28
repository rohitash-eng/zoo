<?php echo $this->layout('admin_layout');?>
	<div class="col-md-12">
		<div class="admin-login-panel forgot-padding">
			 <?php echo $this->element('forgot_password')?>
		</div>
	</div>
    <?php echo $this->Html->script('form_validate/forgot_validate');?>
			