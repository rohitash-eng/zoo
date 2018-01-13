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