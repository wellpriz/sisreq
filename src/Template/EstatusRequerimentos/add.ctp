<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estatus Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estatusRequerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($estatusRequerimento) ?>
    <fieldset>
        <legend><?= __('Add Estatus Requerimento') ?></legend>
        <?php
            echo $this->Form->input('Estatus_Requerimento_Nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
