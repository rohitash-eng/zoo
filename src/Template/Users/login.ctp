<?php
use Cake\Routing\Router;
?>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <?= $this->Form->create($user,array('id' => 'loginFormValidate')) ?>
        <?php
        echo $this->Form->input('email', ['placeholder' => 'Email Address',
            'class' => 'required ggg',
            'type' => 'text',
            'label' => false, 'maxLength' => 80,
            'minLenght' => 5,
                //'onkeypress'=>'return isString(event)'
        ]);
        ?>
        <?php
        echo $this->Form->input('password', ['placeholder' => 'Password',
            'class' => 'required ggg',
            'type' => 'password',
            'label' => false, 'maxLength' => 255,
            'minLenght' => 5
        ]);
        ?>
        <span><input type="checkbox" />Remember Me</span>
        <h6><a href="<?php echo Router::url('/', true);?>forgot_password">Forgot Password?</a></h6>
        <div class="clearfix"></div>
        <input type="submit" value="Sign In" name="login" class="loginclass">
        <?= $this->Form->end() ?>
        <p>Don't Have an Account ?<a href="<?php echo Router::url('/', true);?>signup">Create an account</a></p>        
    </div>
</div>
<?php echo $this->Html->script(['form_validate/login']); ?>