<!-- static-content-starts -->
	<!-- static-banner-starts -->
	<?= $this->element('cms/title'); ?>
<!-- static-banner-ends -->
	<!-- static-content-starts -->
	<section>
		<div class="container">
			<div class="row">
			<div class="flash_div"><?= $this->Flash->render(); ?></div>
				<div class="contact-us-panel">

					<div class="contact-us-box">
						<h1>Contact Us</h1>

						<div class="contact-descp">
							<div class="contact-img">
							<?php echo $this->Html->image('location-icon.png'); ?>
							</div>
							<div class="contact-text">Fastclose Inc.,<br/>494 Broadway, Newport,<br/> RI 02840. United States</div>
						</div>
						<div class="contact-descp">
							<div class="contact-img">
							<?php echo $this->Html->image('mail-icon.png'); ?>
							</div>
							<div class="contact-text">info@fastclose.com <br/> support@fastclose.com</div>
						</div>
						<div class="contact-descp">
							<div class="contact-img">
							<?php echo $this->Html->image('mobile-icon.png'); ?>
							</div>
							<div class="contact-text">(844) 543-5929 <br/></div>
						</div>
						<div class="social-icons">
							<a href="#">
								<?php echo $this->Html->image('fb-icon.png'); ?>
							</a>
							<a href="#">
							<?php echo $this->Html->image('twitter-icon.png'); ?>
							</a>
							<a href="#">
							<?php echo $this->Html->image('google-plus-icon.png'); ?>
							</a>
						</div>
					</div>
					<div class="contact-us-form">
						<h1>Get in touch</h1>
						<?= $this->Form->create('ContactUs',['id'=>'ContactUsId','type' =>'post','novalidate' =>true]) ?>
							<div class="contact-form">
								<div class="form-group">
									<?php echo $this->Form->input('name',['placeholder' => 'Name*','class' => 'form-control lender-cntl','label' => false,'maxLength' => 50,'minLenght' => 1,'onkeypress'=>'return isString(event)']);?>
								</div>
							</div>
							<div class="contact-form">
								<div class="form-group">
									<?php echo $this->Form->input('email',['placeholder' => 'Email ID*','class' => 'form-control lender-cntl stopccp','label' => false,'id'=>'confirm_emailID']);?>
								</div>
							</div>
							<div class="contact-form">
								<div class="form-group">
									<?php echo $this->Form->input('subject',['placeholder' => 'Subject*','class' => 'form-control lender-cntl','label' => false,'maxLength' => 200]);?>
								</div>
							</div>
							<div class="contact-form">
								<div class="form-group">
									<?php echo $this->Form->input('phone',['placeholder' => 'Phone Number','class' => 'form-control lender-cntl','label' => false,'maxLength' => 12,'minLenght' => 12]);?>
								</div>
							</div>
							<div class="contact-textarea">
								<div class="form-group">
									<textarea placeholder="Your Message*" class="form-control lender-cntl" name="message" maxlength="1500"></textarea>
								</div>
							</div>
							<?= $this->Form->submit('Submit',['class' => 'btn contact-submit','id'=>'submitButonId','label'=>false,'div'=>false]); ?>
    						<?= $this->Form->end() ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php echo $this->Html->script('commonjs'); ?>
	<script>
	$(document).ready(function(){
		$('#phone').mask('999-999-9999',{placeholder:'_'});
		$('.form-control').val('');
	});
    $('.stopccp').stopCCP({"clas":"stopccp"});
</script>
<?php echo $this->Html->script('form_validate/contact_us');?>	
<!-- static-content-ends -->
