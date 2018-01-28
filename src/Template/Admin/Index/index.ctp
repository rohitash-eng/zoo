 <section class="mgtop72">
<!--<?= $this->Form->create('searchLender',['url'=>['param' => 'search'],'id'=>'searchLenderForm','novalidate'=>'novalidate']); ?>
<?= $this->Form->input('contactname',['class'=>'form-control lender-cntl','placeholder'=>'Search*','label'=>false,'id'=>'contactname']) ?>
<?= $this->Form->input('companyname',['class'=>'form-control lender-cntl','placeholder'=>'Search*','label'=>false,'id'=>'companyname']) ?>
<?= $this->Form->submit('Save',['class'=>'btn save-add-bttn']); ?>
<?= $this->Form->end() ?>-->
 <?= $this->element('admin_nav'); ?>

 <div class="filter-panel">
    <div class="form-inline">
        <div class="filer-text">Filter By</div>
      <?= $this->Form->create('searchLender',['type'=>'GET','url'=>['param' => 'search'],'id'=>'searchLenderForm','novalidate'=>'novalidate']); ?>
      <div class="form-group fl-left">
        <div class="input-group new-search-panel"> 
           <?php (isset($this->request->query['search']) && $this->request->query['search'] != '') ? $search = $this->request->query['search'] : $search = '' ?>

              <?= $this->Form->input('search',['class'=>'form-control input-filtersearch-input','placeholder'=>'Search by Contact Name / Company Name','label'=>false,'id'=>'search','default'=>$search]) ?>
              
              <span class="input-group-btn new-search-panel-bttn"> 
                 <button id="admin-search-icon" type="submit" class="btn btn-default closing-search-icon"></button>
                  <? //$this->Form->button('search',['class'=>'btn btn-default']); ?> 
              </span>
        </div>



      <?= $this->Form->submit('Save',['class'=>'btn save-add-bttn','style'=>"display: none;"]); ?>
        <?= $this->Form->end() ?>
      
        
    </div>

    <?php if(isset($this->request->query['search']) && $this->request->query['search'] != ''){$enablebtn = 'btn clear-bttn-abled';}else{$enablebtn = 'btn clear-bttn';}?>

    <?= $this->Html->link('Clear',['controller' => 'Index', 'action' => 'index'],['class'=>$enablebtn]);?>
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
                        <col width="15%">
                    </colgroup>
                    <thead> 
                        <tr> 
                            <!--<th><?= $this->Paginator->sort('Contact Name') ?></th> -->

                            <th class="lender-th">
                            <?php echo $this->Paginator->sort('Users.firstname', '<span class="">Contact Name</span>', ['escape' => false, 'direction' => 'asc',]); ?>
                            </th>
                            <th><?php echo $this->Paginator->sort('Companies.name', '<span class="">Company Name</span>', ['escape' => false, 'direction' => 'asc']); ?></th>
                            </th>
                            
                            <th>Email Id</th> 
                            <th>Phone Number</th> 
                            <th>Status</th> 
                            
                        </tr> 
                    </thead> 
                    <tbody> 
                         <?php 
                         if(count($users)>0){
                         foreach ($users as $user): 
                         ?>
                         
                        <tr> 
                            <th scope="row" class="contact-name"><?= h($user->firstname) ?> <?= h($user->lastname) ?></th> 
                            <td class="comp-name"><?=h($user->company->name) ?></td> 
                            <td class="comp-name"><?=h($user->email) ?></td> 
                            <td class="comp-name"><?=h($user->contact_no) ?></td> 
                            <!--<td class="comp-name"><?= h($user->contact_no) ?></td> 
                            <td class="comp-name">

                                 <?php if($user->status==0) {
                                              echo'Inactive';
                                    } 
                                    else if($user->status==1)
                                    {
                                      echo'Active';
                                    }else{
                                        echo'Suspended';
                                    }
                                    ?>
                            </td> -->
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
                        </tr>
                       <?php endforeach; 
                       }else{?>
                             <th colspan="5" style="text-align: center;">No Lender found.</th>
                       <?php }?>
                    </tbody> 
                </table>
            </div>
            <?php if(count($users)>0){?>
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