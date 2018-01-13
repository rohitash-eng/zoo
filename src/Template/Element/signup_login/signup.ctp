<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
    <div class="facts">
        <!--login1-->
        <?= $this->Flash->render() ?>
        <div class="register">
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
                <div class="sign-up">
                    <input type="submit" value="Sign in" class="signclass" />
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>