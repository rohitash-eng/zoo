<!-- mid section starts -->
    <section class="mgtop72">
        <div class="admin-listing-bg">
           <?php echo $this->Html->link($this->Html->image('add-icon.png').'Add Company', array('action' => 'add'), array('escape' => false,'class'=>'btn lender-bttn'));?>
        </div>
        <div class="mid-section">
            <div class="flash_div"><h1><?= $this->Flash->render(); ?></h1></div>
            <div class="listing-table">
                <table class="table table-striped"> 
                    <colgroup>
                        <col width="25%">
                        <col width="20%">
                        <col width="20%">
                        <col width="20%">
                        <col width="15%">
                    </colgroup>
                    <thead> 
                        <tr> 
                            <th>
                            <span class="sortings">
                            <?php echo $this->Paginator->sort('name', 'Company Name',
                                                              ['escape' => false, 'direction' => 'asc']); ?>
                            </span>
                            </th> 
                            <th>Address</th> 
                            <th>Email</th> 
                            <th>Website</th>
                            <th></th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php if(count($companies)>0){?>
                        <?php foreach ($companies as $company): ?>
                        <tr> 
                            <th scope="row" class="contact-name"><?= h($company->name) ?></th> 
                            <td class="comp-name">
                                <?php  
									echo $this->App->get_adrress_in_format($company); 
								?>
                            </td> 
                            <td class="comp-name"><?= h($company->email) ?></td> 
                            <!-- link-style-none-->
                            <td class="comp-name">
                                <?php if(isset($company->website)){?>
                                    <a href="<?php echo $this->App->get_url($company->website);?>" target="_blank"><?php echo $company->website?></a>
                                <?php }?>
                            </td> 
                            <td class="comp-name">
                                
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id],['class'=>'btn comp-edit-buttn']) ?>
                            </td> 
                        </tr> 
                         <?php endforeach; }else{?>
                            <tr><th colspan="5" style="text-align: cen">No Company found.</th></tr>
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
