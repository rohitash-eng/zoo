<?php
use Cake\Routing\Router;
?>
<div class="services-breadcrumb_w3layouts">
    <div class="inner_breadcrumb">
        <ul class="short_w3ls"_w3ls>
            <li><a href="<?php echo Router::url('/', true);?>">Home</a><span>|</span></li>
            <li>
                <?php if($this->request->params['action'] == 'login'){
                    echo 'Login';
                }else if($this->request->params['action'] == 'signup'){
                    echo 'Register';
                }else{
                    echo 'Login';
                }?>
            </li>
        </ul>
    </div>
</div>
<?= $this->Flash->render() ?>
