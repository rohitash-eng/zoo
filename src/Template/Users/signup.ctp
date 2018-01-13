<!-- Signup html OLD CODE-->
<?php //echo $this->element('signup_login/signup')?>
<!-- Signup html -->
<!-- login html -->
<?php //echo $this->element('signup_login/login')?>
<!-- login html OLD CODE -->

<!-- breadcome start NEW CODE-->
<?php echo $this->element('client/breadcome'); ?>
<!-- breadcome start NEW CODE-->
<div class="inner_content_info_agileits">
    <div class="container">
        <div class="tittle_head_w3ls">
            <h3 class="tittle three">Register Now </h3>
        </div>
        <div class="inner_sec_grids_info_w3ls">
            <div class="signin-form">
                <div class="login-form-rec">
                    <?= $this->Form->create($user,['id' =>'signupFormid']) ?>
                    <?php echo $this->Form->input('first_name',['placeholder' => 'First Name',
                                                    'class' => 'required',
                                                    'type'=>'text',
                                                    'label' => false,'maxLength' => 30,
                                                     'minLenght' => 1,
                                                     //'onkeypress'=>'return isString(event)'
                        ]);?>
                    <?php echo $this->Form->input('last_name',['placeholder' => 'Last Name',
                                                    'class' => 'required',
                                                    'type'=>'text',
                                                    'label' => false,'maxLength' => 30,
                                                     'minLenght' => 1,
                                                     //'onkeypress'=>'return isString(event)'
                        ]);?>
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
                    <?php echo $this->Form->input('confirm_password',['placeholder' => 'Confirm Password',
                                                    'class' => 'required',
                                                    'type'=>'password',
                                                    'label' => false,'maxLength' => 255,
                                                     'minLenght' => 5,
                                                     //'onkeypress'=>'return isString(event)'
                        ]);?>           
                        <input type="submit" value="Register" class="">
                    <?= $this->Form->end() ?>
<!--                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="First Name" required="">
                        <input type="text" name="name" placeholder="Last Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" id="password1" placeholder="Password" required="">
                        <input type="password" name="password" id="password2" placeholder="Confirm Password" required="">
                        <select id="country13" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Work Experience</option>
                            <option value="">Fresher</option>
                            <option value="">0</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option> 
                            <option value="">4</option> 
                            <option value="">5</option> 
                            <option value="">6</option> 
                            <option value="">7</option> 
                            <option value="">8</option> 
                            <option value="">9</option> 
                            <option value="">10</option> 
                            <option value="">11</option>
                            <option value="">12</option>  
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>      
                        </select>
                        <select id="country13" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Qualification</option>
                            <option value="">Bsc</option>
                            <option value="">BTech</option>
                            <option value="">Mca</option>
                            <option value="">BCA</option>
                            <option value="">Diploma</option> 
                            <option value="">Other</option> 
                        </select>
                        <input type="submit" value="Register">
                    </form>-->
                </div>
                <p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>

            </div>
        </div>
    </div>
</div>
<?=
$this->Html->script(['form_validate/signup'])
?>