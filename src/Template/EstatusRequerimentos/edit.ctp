<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estatusRequerimento->idEstatus_Requerimento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estatusRequerimento->idEstatus_Requerimento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estatus Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estatusRequerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($estatusRequerimento) ?>
    <fieldset>
        <legend><?= __('Edit Estatus Requerimento') ?></legend>
        <?php
            echo $this->Form->input('Estatus_Requerimento_Nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
