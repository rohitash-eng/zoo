 <section class="mgtop72">
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

    <?= $this->Html->link('Clear',['controller' => 'lenders', 'action' => 'rejectrequest'],['class'=>$enablebtn]);?>
    
    </div>
</div>
        <div class="mid-section">
            <div class="listing-table">
                <table class="table table-striped"> 
                    <colgroup>
                       <col width="25%">
                        <col width="25%">
                        <col width="25%">
                        <col width="25%">
                    </colgroup>
                        <thead> 
                        <tr> 
                           <tr> 
                            <!--<th><?= $this->Paginator->sort('Contact Name') ?></th> -->
                            
                             <th><?php echo $this->Paginator->sort('Users.firstname', '<span class="">Contact Name</span>', ['escape' => false, 'direction' => 'asc']); ?></th>

                             <th><?php echo $this->Paginator->sort('Companies.name', '<span class="">Company Name</span>', ['escape' => false, 'direction' => 'asc']); ?></th>
                            <th>Email Id</th> 
                            <th>Phone Number</th> 
                            
                            
                        </tr> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php if(count($users)>0){?>
                         <?php foreach ($users as $user): ?>
                        <tr> 
                            <th scope="row" class="contact-name"><?= h($user->firstname) ?> <?= h($user->lastname) ?></th> 
                            <td class="comp-name"><?= h($user->company->name) ?></td> 
                             <td class="comp-name"><?= h($user->email) ?></td> 
                             <td class="comp-name"><?= h($user->contact_no) ?></td> 
                           
                        </tr>
                        <?php endforeach; }else{?>
                            <th colspan="4" style="text-align: center;">There is no data in reject list.</th>
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
            <?php } ?>
        </div>
        <div class="cls"></div>
    </section>
    <!-- mid section ends -->