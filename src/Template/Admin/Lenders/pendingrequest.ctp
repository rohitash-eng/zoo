 <section class="mgtop72">

       <?= $this->element('admin_nav'); ?>

 <div class="filter-panel">
    <div class="flash_div"><?= $this->Flash->render(); ?></div>
    <div class="form-inline">
        <div class="filer-text">Filter By</div>
      <?= $this->Form->create('searchLender',['type'=>'GET','url'=>['param' => 'search'],'id'=>'searchLenderForm','novalidate'=>'novalidate']); ?>
      <div class="form-group fl-left">

        
        <?php (isset($this->request->query['search']) && $this->request->query['search'] != '') ? $search = $this->request->query['search'] : $search = '' ?>
      <?= $this->Form->input('search',['class'=>'form-control filter-cntl','placeholder'=>'Request Date','readonly'=>true,'label'=>false,'default'=>$search,'id'=>'searchbydate']) ?>

        
       

      <?= $this->Form->submit('Save',['class'=>'btn save-add-bttn','style'=>"display: none;"]); ?>
        <?= $this->Form->end() ?>
    </div>
    <?php 
    if(isset($this->request->query['search']) && $this->request->query['search'] != ''){
      $options = ['class'=>'btn clear-bttn-abled'];
    }else{
      $options = ['class'=>'btn clear-bttn', 'onclick'=> 'return false;'];
    }
    echo $this->Html->link('Clear',['controller' => 'lenders', 'action' => 'pendingrequest'],$options);?>
    </div>
</div>

        <div class="mid-section">
            <div class="listing-table">
                <table class="table table-striped"> 
                    <colgroup>
                        <col width="15%">
                        <col width="18%">
                        <col width="20%">
                        <col width="15%">
                        <col width="32%">
                    </colgroup>
                    <thead> 
                        <tr> 
                            
                            <th class="date-th">
                            <span class="sortings"> 
                            <?php echo $this->Paginator->sort('Users.created', 'Date',
                                                              ['escape' => false, 'direction' => 'asc']); ?>
                            </span>
                    
                            </th>
                            <th>
                            <span class="sortings"> 
                            <?php echo $this->Paginator->sort('Users.firstname', 'Contact Name',
                                                              ['escape' => false, 'direction' => 'asc']); ?>
                            </span>                                  
                            </th>
                            <th>
                            <span class="sortings"> 
                            <?php echo $this->Paginator->sort('Companies.name', 'Company Name',
                                                              ['escape' => false, 'direction' => 'asc']); ?>
                            </span>                                  
                            </th>
                            <th>Email Id</th> 
                            <th>Phone Number</th> 
                            
                        </tr> 
                    </thead> 
                    <tbody> 
                         <?php
                         if(count($users)>0){
                         foreach ($users as $user): 
                         ?>
                        <tr> 
                            <th scope="row" class="contact-name"><?= h(date('M d, Y ',strtotime($user->created))) ?></th> 
                            <td class="comp-name"><?= h($user->firstname) ?> <?= h($user->lastname) ?></td>
                            <td class="comp-name"><?php echo isset($user->company->name) ? ($user->company->name):''; ?></td> 
                            <td class="comp-name"><?= h($user->email) ?></td> 
                            <td class="comp-name">
                                <?php if(isset($user->contact_no)){
                                        echo $this->App->phoneFormat($user->contact_no,$user->country_code);
                                    }    
                                ?>
                                <span class="admin-phone-number">
                                  <?php 
                                  echo $this->Html->link($this->Html->image('tick-icon.png'), array('prefix' => 'admin', 'controller' => 'Lenders', 'action' => 'acceptrequest',base64_encode($user->id)), array('escape' => false));

                                  echo $this->Html->link($this->Html->image('cross-icon.png'), array('prefix' => 'admin', 'controller' => 'Lenders', 'action' => 'rejectrequest',base64_encode($user->id)), array('escape' => false));
                                  ?>
                                </span>
                            </td> 
                            
                            
                            
                        </tr>
                       <?php endforeach; }else{?>
                             <th colspan="5" style="text-align: center;">There is no Lender request.</th>
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
<!--	
  <script>
    $(function(){
        var dateToday = new Date();
        $("#searchdate").datepicker({
            numberOfMonths: 1,
            //minDate: dateToday,
            beforeShow: function(input, inst) {
                $(document).off('focusin.bs.modal');
            },
            onClose:function(){
                $(document).on('focusin.bs.modal');
            },
            changeYear: true,
            changeMonth: true,
            dateFormat: 'yy-mm-dd'
        });
    });
    </script>  -->
	
	
<?php echo $this->Html->script(['moment.min','daterangepicker']);?>
<?php echo $this->Html->css('daterangepicker');?>
<script type="text/javascript">
$(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();
        var label = 'Select Date';
        function cb(start, end, label) {
            $('#searchbydate').html(label);
        }
        $('#searchbydate').daterangepicker({
            autoUpdateInput: false,
            locale: {format: 'YYYY-MM-DD'},
            startDate: start,
            endDate: end,
            opens: 'left',
            cancelClass: 'hidecancle1',
            /*ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }*/
        }, cb);
        cb(start, end, label);
       
    });
	$('#searchbydate').on('apply.daterangepicker', function (ev, picker) {
        $('#searchbydate').html(picker.chosenLabel);
        $('#searchbydate').val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
        $('#searchbydate + i').removeClass('fa glyphicon-calendar fa-calendar');
        $('#searchbydate + i').addClass('glyphicon-remove-sign');
        $('#searchbydate').trigger('change');
    });
</script>