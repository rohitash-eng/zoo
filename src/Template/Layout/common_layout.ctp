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
        <?= $this->Html->css('fonticons.css') ?>
        <?= $this->Html->css('dev_common_css.css') ?>
         <?= $this->Html->css('font-awesome.min.css') ?>
         <?= $this->Html->css('bootstrap.min.css') ?>
         <?= $this->Html->css('plugins.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('responsive.css') ?>
        
        <?=
        $this->Html->script(['modernizr-2.8.3-respond-1.4.2.min'])
        ?>
    </head>

    <body data-spy="scroll" data-target="#navmenu">
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--start-header end-->
        <?php echo $this->element('client/header'); ?>
        <!-- header end -->
        
        <!-- content html -->
        <?= $this->fetch('content') ?>
        <!-- content html -->
                    
                    
        <!--start-footer end-->
        <?php echo $this->element('client/footer'); ?>
        <!-- footer end -->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <?= $this->Html->script(['jquery-1.11.2.min']) ?>
        <?= $this->Html->script(['bootstrap.min']) ?>
        <?= $this->Html->script(['isotope.min.js']) ?>
        <?= $this->Html->script(['jquery.easypiechart.min.js']) ?>
        <?= $this->Html->script(['jquery.mixitup.min.js']) ?>
        <?= $this->Html->script(['jquery.easing.1.3.js']) ?>
        <?= $this->Html->script(['plugins.js']) ?>
        <?= $this->Html->script(['main.js']) ?>
    </body>
</html>
