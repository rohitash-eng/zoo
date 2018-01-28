 <section class="mgtop72">
    <div class="mid-section">
        <div class="cmsPages form large-9 medium-8 columns content">
            <?= $this->Form->create($cmsPage) ?>
            <fieldset>
                <legend><?= __('Add Cms Page') ?></legend>
                <?php
                    echo $this->Form->input('title');
                    echo $this->Form->input('slug');
                    echo $this->Form->input('page');
                    echo $this->Form->input('locale');
                    echo $this->Form->input('content');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>