<?php echo $this->layout('admin_layout');?>
<div class="col-md-12">
	<div class="admin-login-panel">
		<div class="email-sent">
		<?php echo $this->Html->image('email-sent-icon.png',['alt' =>'Icon']);?></div>
		<h2>EMAIL SENT SUCCESSFULLY! <span>An email with password reset instructions has <br/>
		been sent to your email ID.</span></h2>
		<div class="ok-align">
			<?php echo $this->Html->link('OK','/admin/login',['class'=>'btn ok-bttn']);?>
		</div>
		<div class="cls"></div>
	</div>
</div>
