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
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <?= $this->Html->meta('icon') ?>
        <!-- ************CSS ********-->
        <?= $this->Html->css('admin/bootstrap.min.css') ?>
        <?= $this->Html->css('admin/style.css') ?>
        <?= $this->Html->css('admin/style-responsive.css') ?>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <?= $this->Html->css('admin/font.css') ?>
         <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('admin/morris.css') ?>
        <?= $this->Html->css('admin/monthly.css') ?>
        <?= $this->Html->css('admin_css.css') ?>

        <?=
        $this->Html->script(['admin/jquery2.0.3.min', 'admin/raphael-min.js'])
        ?>
        
    </head>

    <body>
        <section id="container">
            <?php echo $this->element('admin/header'); ?>
            <?php echo $this->element('admin/sidebar'); ?>
            <!-- content html -->
            
            <?php echo $this->fetch('content') ?>
            <!-- content html -->
            <?php echo $this->element('admin/footer'); ?>            
        </section>
        
        <?= $this->Html->script(['admin/bootstrap']) ?>
        <?= $this->Html->script(['admin/jquery.dcjqaccordion.2.7.js']) ?>
        <?= $this->Html->script(['admin/scripts.js']) ?>
        <?= $this->Html->script(['admin/jquery.slimscroll']) ?>
        <?= $this->Html->script(['admin/jquery.nicescroll']) ?>
        <?= $this->Html->script(['admin/jquery.scrollTo.js']) ?>
        <?= $this->Html->script(['admin/morris.js']) ?>
        
        <script>
            $(document).ready(function () {
                //BOX BUTTON SHOW AND CLOSE
                jQuery('.small-graph-box').hover(function () {
                    jQuery(this).find('.box-button').fadeIn('fast');
                }, function () {
                    jQuery(this).find('.box-button').fadeOut('fast');
                });
                jQuery('.small-graph-box .box-close').click(function () {
                    jQuery(this).closest('.small-graph-box').fadeOut(200);
                    return false;
                });

                //CHARTS
                function gd(year, day, month) {
                    return new Date(year, month - 1, day).getTime();
                }

                graphArea2 = Morris.Area({
                    element: 'hero-area',
                    padding: 10,
                    behaveLikeLine: true,
                    gridEnabled: false,
                    gridLineColor: '#dddddd',
                    axes: true,
                    resize: true,
                    smooth: true,
                    pointSize: 0,
                    lineWidth: 0,
                    fillOpacity: 0.85,
                    data: [
                        {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                        {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                        {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                        {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                        {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                        {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                        {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                        {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                        {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                    ],
                    lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                    xkey: 'period',
                    redraw: true,
                    ykeys: ['iphone', 'ipad', 'itouch'],
                    labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                    pointSize: 2,
                    hideHover: 'auto',
                    resize: true
                });


            });
        </script>
        <!-- calendar -->
        <?=
        $this->Html->script(['admin/monthly'])
        ?>
        <script type="text/javascript">
            $(window).load(function () {

                $('#mycalendar').monthly({
                    mode: 'event',

                });

                $('#mycalendar2').monthly({
                    mode: 'picker',
                    target: '#mytarget',
                    setWidth: '250px',
                    startHidden: true,
                    showTrigger: '#mytarget',
                    stylePast: true,
                    disablePast: true
                });

                switch (window.location.protocol) {
                    case 'http:':
                    case 'https:':
                        // running on a server, should be good.
                        break;
                    case 'file:':
                        alert('Just a heads-up, events will not work when run locally.');
                }

            });
        </script>
    </body>
</html>
