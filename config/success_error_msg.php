<?php
$config =array();
//******* this is for success and error message ******
$config['Msg'] = array(
    'loginSuccess' => __('You have logged in successfully.'),
    'emailNotVerify' => __('You have not verify your email address, Please check your mail and click on email verification link then after you can login easily here.Thanks.'),
    'invalidEmailPassword' => __('Your email and password invalid, Please think a few minute and try again.Thanks.'),
    'notRegister' => __('The user could not be registered. Please, try again.'),
    'Registered' => __('The user has been registered.')
);
$config['ModelMsg'] = array(
    'required' => __('This field is required.'),
    'validEmail' =>__('Please enter email id in valid format.')
);
return $config;




