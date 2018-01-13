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
        <?= $this->Html->css('//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900') ?>
        <?= $this->Html->css('//fonts.googleapis.com/css?family=Poiret+One') ?>
        <?= $this->Html->css('pagenotfound/style.css') ?>    
        <!-- **********CSS *******************-->
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
    </head>

    <body>
         <!-- content html -->
        <?= $this->fetch('content') ?>
        <!-- content html -->
        <!-- **********js *******************-->
        <?=
        $this->Html->script(['pagenotfound/rAF.js',
            'pagenotfound/demo-2.js'])
        ?>
    </body>
</html>
