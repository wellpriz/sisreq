<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Requerimento'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposRequerimento form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposRequerimento) ?>
    <fieldset>
        <legend><?= __('Add Tipos Requerimento') ?></legend>
        <?php
            echo $this->Form->input('tipo_Requerimento_Texto');
            echo $this->Form->input('Tipo_Requerimento_duracao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
