 <section class="mgtop72">
 <?= $this->element('admin_nav'); ?>

 <div class="filter-panel">
<div class="flash_div"><h1><?= $this->Flash->render(); ?></h1></div> 
    <div class="form-inline">
        <div class="filer-text">Filter By</div>
      <?php
      if(isset($status)){
        echo $this->Form->create('searchLender',['type'=>'GET','url'=>['controller' => 'Lenders', 'action' => 'index', $status],'id'=>'searchLenderForm','novalidate'=>'novalidate']);
      }else{
        echo $this->Form->create('searchLender',['type'=>'GET','url'=>['controller' => 'Lenders', 'action' => 'index'],'id'=>'searchLenderForm','novalidate'=>'novalidate']);
      }
 

      ?>
      <div class="form-group fl-left">
        <div class="input-group new-search-panel"> 
           <?php (isset($this->request->query['search']) && $this->request->query['search'] != '') ? $search = $this->request->query['search'] : $search = '' ?>

              <?= $this->Form->input('search',['class'=>'form-control input-filtersearch-input','placeholder'=>'Search by Contact Name / Company Name','label'=>false,'id'=>'search','default'=>$search]) ?>
              
              <span class="input-group-btn new-search-panel-bttn"> 
                 <button id="admin-search-icon" type="submit" class="btn btn-default closing-search-icon"></button>
                  <? //$this->Form->button('search',['class'=>'btn btn-default']); ?> 
              </span>
        </div>
        <?= $this->Form->end() ?>
      
        
    </div>

    <?php 
    if(isset($this->request->query['search']) && $this->request->query['search'] != ''){
      $options = ['class'=>'btn clear-bttn-abled'];
    }else{
      $options = ['class'=>'btn clear-bttn', 'onclick'=> 'return false;'];
    }?>

    
    
        <?php
        $disabled = true;
        $enablebtn = "btn clear-bttn";
        if(isset($this->request->query['search']) && $this->request->query['search'] != ''){
            $disabled = false;
            $enablebtn = "btn clear-bttn-abled";
        }
		if($this->request->params['controller'] =='Lenders' && $this->request->params['action'] =='index' && isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'rejected')
		{
			echo $this->Form->create('',['url'=>['controller'=>'lenders','action'=>'index/rejected']]);
		}else 
			if($this->request->params['controller'] =='Lenders' && $this->request->params['action'] =='index' && isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'approved')
			{
				echo $this->Form->create('',['url'=>['controller'=>'lenders','action'=>'index/approved']]);
			}else{
				echo $this->Form->create('',['url'=>['controller'=>'lenders','action'=>'index']]);
			}
		echo $this->Form->submit('Clear',['class'=>$enablebtn,
                                          'disabled'=>$disabled]);
        echo $this->Form->end();
        ?>
    </div>
</div>


        <div class="mid-section">
            <div class="listing-table">
                <table class="table table-striped"> 
                    <colgroup>
                        <col width="25%">
                        <col width="25%">
                        <col width="20%">
                        <col width="15%">
                        <?php if(isset($status) && ($status != 'approved' && $status != 'rejected')) { ?>
                        <col width="30%">
                        <?php } ?>
                    </colgroup>
                    <thead> 
                        <tr> 
                            <!--<th><?= $this->Paginator->sort('Contact Name') ?></th> -->

                            <th class="lender-th">
                            <span class="sortings">    
                            <?php echo $this->Paginator->sort('Users.firstname', 'Contact Name',
                                                              ['escape' => false, 'direction' => 'asc',]); ?>
                            </span>
                            </th>
                            <th>
                            <span class="sortings"> 
                            <?php echo $this->Paginator->sort('Companies.name', 'Company Name',
                                                                  ['escape' => false, 'direction' => 'asc']); ?>
                            </span>
                            
                            </th>
                            </th>
                            
                            <th>Email Id</th> 
                            <th>Phone Number</th>
							<?php if(isset($status) && ($status != 'approved' && $status != 'rejected')) { ?>
                            <th>Status</th>
                            <?php } ?>
                        </tr> 
                    </thead> 
                    <tbody> 
                         <?php 
                         if(count($users)>0){
                         foreach ($users as $user): 
                         ?>
                         
                        <tr> 
                            <th scope="row" class="contact-name"><?= h($user->firstname) ?> <?= h($user->lastname) ?></th> 
                            <td class="comp-name"><?php echo isset($user->company->name) ? ($user->company->name):''; ?></td> 
                            <td class="comp-name"><?=h($user->email) ?></td> 
                            <td class="comp-name">
                                <?php if(isset($user->contact_no)){
                                        echo $this->App->phoneFormat($user->contact_no,$user->country_code);
                                    }    
                                ?>
                                </td>

<?php if(isset($status) && ($status != 'approved' && $status != 'rejected')) { ?>								
                            <td class="comp-name">
                                <?php if($user->approved==ACCEPTED) {
                                                echo $this->Html->image("approved-icon.png", ["alt" => "fastClose","class"=>"approved-img"]);
                                                echo 'Approved';
                                    } 
                                    else if($user->approved==REJECTED)
                                    {
                                       echo $this->Html->image("rejected-icon.png", ["alt" => "fastClose","class"=>"approved-img"]);
                                       echo 'Rejected';
                                    }else{
                                        echo'Suspended';

                                    }
                                    ?>
                             </td> 
<?php } ?>
                        </tr>
                       <?php endforeach; 
                       }else{?>
                             <th colspan="5" style="text-align: center;">No Lender found.</th>
                       <?php }?>
                    </tbody> 
                </table>
            </div>
            <?php if($this->Paginator->numbers()){?>
             <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
            <?php }?>
        </div>
        <div class="cls"></div>
    </section>
    <!-- mid section ends -->