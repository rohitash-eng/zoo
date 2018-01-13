<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        header('X-Frame-Options: SAMEORIGIN'); // THIS IS USED FOR "Prevent rendering your page inside an iframe"
        $meta_tags = $this->App->meta_tags();
        ?>
        <title><?php echo __($meta_tags['page_title']); ?>
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- META TAGES START FROM HERE  -->
        <meta name="keywords" content="<?php echo __($meta_tags['meta_copy_write']); ?>">
        <meta name="description" content="<?php echo __($meta_tags['meta_desc']); ?>">
        <meta name="copyright" content="<?php echo __($meta_tags['meta_copy_write']); ?>">			
        <!-- META TAGES START FROM HERE  -->

        <?= $this->Html->meta('icon') ?>
        <!-- ************CSS ********-->
        <?= $this->Html->css('login_signup_css/style.css') ?>    
        <!-- **********CSS *******************-->
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
    </head>

    <body>
        <h1> Choice is yours, weather Signup or login?</h1>
        <div class="main-content">
            <div class="sap_tabs">	
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

                    <ul>
                        <li class="<?php echo $this->request->params['action']=='signup'?'resp-tab-active':'';?> resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
                        <li class="<?php echo $this->request->params['action']=='login'?'resp-tab-active':'';?> resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>

                    </ul>		
                    <!-- content html -->
                    <?= $this->fetch('content') ?>
                    <!-- content html -->
                </div>	

            </div>
        </div>
        <!--start-copyright-->
        <div class="copy-right">
            <div class="wrap">
                <p>&copy; 2016 Alley Signup & Signin Form.  All Rights  Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!--//end-copyright-->

        <!-- **********js *******************-->
        <?=
        $this->Html->script(['login_signup_js/jquery.min.js',
            'login_signup_js/easyResponsiveTabs.js',
            'validate/jquery.validate.min.js',
            'validate/jquery-ui.js','form_validate/isAlphNumValidate','form_validate/signup'])
        ?>
        <!-- **********js *******************--> 
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>
    </body>
</html>
