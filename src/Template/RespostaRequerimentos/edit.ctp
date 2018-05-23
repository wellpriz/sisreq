<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $respostaRequerimento->idResposta_Requerimento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $respostaRequerimento->idResposta_Requerimento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resposta Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="respostaRequerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($respostaRequerimento) ?>
    <fieldset>
        <legend><?= __('Edit Resposta Requerimento') ?></legend>
        <?php
            echo $this->Form->input('resposta_Requerimento_Texto');
            echo $this->Form->input('requerimentos_idRequerimento');
            echo $this->Form->input('funcionarios_idFuncionario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
