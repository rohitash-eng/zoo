<?php
use Cake\Routing\Router;
?>
<header id="main_menu" class="header navbar-fixed-top">
    <div class="main_menu_bg">
        <div class="container">
            <div class="row">
                <div class="nave_menu">
                    <nav class="navbar navbar-default" id="#navmenu">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand logo" href="<?php echo Router::url('/', true);?>">
                                    Cappro
                                </a>
                                
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo Router::url('/', true);?>">Home</a></li>
                                    <li><a href="<?php echo Router::url('/', true);?>">Blog</a></li>
                                    <li><a href="<?php echo Router::url('/', true);?>">Become a advertiser</a></li>
                                    <li><a href="<?php echo Router::url('/', true);?>">Login / Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>	
            </div>
        </div>
    </div>
</header> 