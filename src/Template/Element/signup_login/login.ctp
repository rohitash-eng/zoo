<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
    <div class="facts">
        <!--login1-->
        <?= $this->Flash->render() ?>
        <div class="register">
            <?= $this->Form->create('',['url' => ['action' => 'login'],'novalidate' =>'novalidate','id'=>'loginFormValidate','autocomplete'=>'off']); ?>										
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
                <div class="sign-up">
                    <input type="submit" value="Sign in" class="loginclass" />
                </div>
            <?= $this->Form->end() ?>
            <h3><a href="#"> Forgot Password</a></h3>
        </div>
    </div>
</div>
 <?= $this->Html->script(['form_validate/login']) ?>

