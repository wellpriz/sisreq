<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $requerimento->idRequerimento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requerimento->idRequerimento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="requerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($requerimento) ?>
    <fieldset>
        <legend><?= __('Edit Requerimento') ?></legend>
        <?php
            echo $this->Form->input('Requerimento_Nome');
            echo $this->Form->input('setor_idSetor');
            echo $this->Form->input('alunos_idAluno');
            echo $this->Form->input('estatus_requerimentos_idEstatus_Requerimento');
            echo $this->Form->input('tipos_requerimento_idTipo_Requerimento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
