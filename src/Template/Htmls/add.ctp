<?php

use Cake\Routing\Router;
?>
<section id="home" class="home">
    <div class="home_overlay">
        <div class="container">
            <div class="row">
                <div class="main_slider_area">
                    <div class="slider">
                        <div class="single_slider">
                            <h3>Book Your Business Space</h3>
                            <p>modern  -  fast  -  reliable</p>
                            <div class="single_slider_img_icon">
                                <?php echo $this->Html->image('ii1.png'); ?>
                            </div>
                            <div class="col-sm-12">
                                <div class="home_searce_domain_area">
                                    <div class="main_home_searce_domain_content">
                                        <select class="form-control">
                                            <option>Location</option>
                                            <option>Delhi NCR</option>
                                            <option>.co</option>
                                        </select>
                                        <input type="text" placeholder="Search ..." />

                                        <input type="submit" value="Search" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="feature" class="feature" style="display:none;">
    <div class="feature_overlay">
        <div class="container">
            <div class="row">
                <div class="main_feature_content_area">
                    <div class="col-sm-12">
                        <div class="heading_title text-center">
                            <h2>Our Features</h2>
                            <p>Our Best Features</p>
                        </div>
                    </div>

                    <div class="main_feature_content text-center">
                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_img">
                                    <?php echo $this->Html->image('ft1.png'); ?>
                                </div>
                                <div class="separator"></div>
                                <h3>Live Support</h3>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_img">
                                    <?php echo $this->Html->image('ft2.png'); ?>
                                </div>
                                <div class="separator"></div>
                                <h3>Cloud Technology</h3>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_img">
                                    <?php echo $this->Html->image('ft3.png'); ?>
                                </div>
                                <div class="separator"></div>
                                <h3>Hi Tech Database</h3>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_img">
                                    <?php echo $this->Html->image('ft4.png'); ?>
                                </div>
                                <div class="separator"></div>
                                <h3>Live Monitoring</h3>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>