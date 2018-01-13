<!-- OLD CODE login html -->
<?php // echo $this->element('signup_login/login')?>
<!-- login html -->
<!-- Signup html -->
<?php // echo $this->element('signup_login/signup')?>
<!-- Signup html OLD CODE  -->
<!-- breadcome start NEW CODE-->
<?php echo $this->element('client/breadcome');?>
<!-- breadcome start NEW CODE-->
<div class="inner_content_info_agileits">
    <div class="container">
        <div class="tittle_head_w3ls">
            <h3 class="tittle three">LogIn to your Account </h3>
        </div>
        <div class="inner_sec_grids_info_w3ls">
            <div class="signin-form">
                <div class="login-form-rec">
                    <?= $this->Form->create($user) ?>
                    <?php echo $this->Form->input('email',['placeholder' => 'Email Address',
                                                    'class' => 'required',
                                                    'type'=>'text',
                                                    'label' => false,'maxLength' => 80,
                                                     'minLenght' => 5,
                                                     //'onkeypress'=>'return isString(event)'
                        ]);?>
                    <?php echo $this->Form->input('password',['placeholder' => 'Password',
                                                    'class' => 'required',
                                                    'type'=>'password',
                                                    'label' => false,'maxLength' => 255,
                                                     'minLenght' => 5
                        ]);?>
                        <div class="tp">
                            <input type="submit" value="Login">
                        </div>
                    <?= $this->Form->end() ?>                    
                </div>
                <div class="login-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <p><a href="register.html"> Don't have an account?</a></p>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script(['form_validate/login']) ?>