<!-- mid section starts -->
    <section class="mgtop72">
        <div class="admin-listing-bg">
           <?php echo $this->Html->link($this->Html->image('add-icon.png').'Add Template', array('action' => 'add'), array('escape' => false,'class'=>'btn lender-bttn'));?>
        </div>
        <div class="mid-section">
            <div class="flash_div"><h1><?= $this->Flash->render(); ?></h1></div>
            <div class="listing-table">
    <table class="table table-striped"> 
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
				<th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emailTemplates as $emailTemplate): ?>
            <tr>
                <td><?= h($emailTemplate->slug) ?></td>
                <td><?= h($emailTemplate->subject) ?></td>
                <td><?= h($emailTemplate->description) ?></td>
                <td class="actions">
                    <?php //$this->Html->link(__('View'), ['action' => 'view', $emailTemplate->id]); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emailTemplate->id]) ?>
                    <?php //$this->Form->postLink(__('Delete'), ['action' => 'delete', $emailTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailTemplate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <?php echo $this->element('pagination/paginate'); ?>
    </div>
    <div class="cls"></div>
</section>
<!-- mid section ends -->