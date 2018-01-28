<!-- mid section starts -->
    <section class="mgtop72">
        <div class="admin-listing-bg">
           <?php echo $this->Html->link($this->Html->image('add-icon.png').'Add Page', array('action' => 'add'), array('escape' => false,'class'=>'btn lender-bttn'));?>
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
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('page') ?></th>
                <th><?= $this->Paginator->sort('locale') ?></th>
                <th></th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cmsPages as $cmsPage): ?>
            <tr>
                <td><?= h($cmsPage->title) ?></td>
                <td><?= h($cmsPage->slug) ?></td>
                <td><?= h($cmsPage->page) ?></td>
                <td><?= h($cmsPage->locale) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cmsPage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cmsPage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cmsPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cmsPage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
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