<?php echo $this->layout('admin_layout');?>
	<div class="col-md-12">
		<div class="admin-login-panel">
			<h1>SIGN IN <span>Get started by filling up the below details.</span></h1>
			<?= $this->Form->create($user,['novalidate' =>'novalidate','id'=>'loginFormValidate']); ?>
			  <div class="form-group">
			    <?= $this->Form->input('email',['class'=>'form-control','placeholder'=>'Email ID*','label'=>false,'id'=>'email']) ?>
			    <span id="emailError"></span>
			  </div>
			  <div class="form-group">
			    <?= $this->Form->input('password',['class'=>'form-control','placeholder'=>'Password*','label'=>false,'id'=>'password']) ?>
			  	<span id="passwordError"></span>
			  </div>
			  <div class="col-xs-12 padding-zero mgtop-25">
			  	<div class="col-xs-8 padding-zero">
			  		<div class="forgot-pass">
			  			<a href="forgot_password">Forgot Password?</a>
			  		</div>
			  	</div>
			  	<div class="col-xs-4 padding-zero">
			  		<?= $this->Form->submit('Sign in',['class'=>'btn sign-in-bttn','id'=>'submitButon','label'=>false,'div'=>false]); ?>
			  		<?= $this->Form->end() ?>
			  	</div>
			  </div>
			  	<div class="cls"></div>
			
		</div>
	</div>
    <?php echo $this->Html->script('form_validate/login_validate');?>