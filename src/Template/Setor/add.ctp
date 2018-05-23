<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Setor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="setor form large-9 medium-8 columns content">
    <?= $this->Form->create($setor) ?>
    <fieldset>
        <legend><?= __('Add Setor') ?></legend>
        <?php
            echo $this->Form->input('Setor_nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
