<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign Up Now</h2>
        <?= $this->Form->create($user,['id' =>'signupFormid']) ?>
        <?php echo $this->Form->input('first_name',['placeholder' => 'First Name',
                                        'class' => 'required ggg',
                                        'type'=>'text',
                                        'label' => false,'maxLength' => 30,
                                         'minLenght' => 1,
                                         //'onkeypress'=>'return isString(event)'
            ]);?>
        <?php echo $this->Form->input('last_name',['placeholder' => 'Last Name',
                                        'class' => 'required ggg',
                                        'type'=>'text',
                                        'label' => false,'maxLength' => 30,
                                         'minLenght' => 1,
                                         //'onkeypress'=>'return isString(event)'
            ]);?>
        <?php echo $this->Form->input('email',['placeholder' => 'Email Address',
                                        'class' => 'required ggg',
                                        'type'=>'text',
                                        'label' => false,'maxLength' => 80,
                                         'minLenght' => 5,
                                         //'onkeypress'=>'return isString(event)'
            ]);?>
        <?php echo $this->Form->input('password',['placeholder' => 'Password',
                                        'class' => 'required ggg',
                                        'type'=>'password',
                                        'label' => false,'maxLength' => 255,
                                         'minLenght' => 5
            ]);?>
        <?php echo $this->Form->input('confirm_password',['placeholder' => 'Confirm Password',
                                        'class' => 'required ggg',
                                        'type'=>'password',
                                        'label' => false,'maxLength' => 255,
                                         'minLenght' => 5,
                                         //'onkeypress'=>'return isString(event)'
            ]);?> 
        <div class="clearfix"></div>
        <input type="submit" value="Sign Up" name="Sign Up" class="">
        <?= $this->Form->end() ?>        
    </div>
</div>

<?=
$this->Html->script(['form_validate/signup'])
?>