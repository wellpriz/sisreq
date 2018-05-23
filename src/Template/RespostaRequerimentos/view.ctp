<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resposta Requerimento'), ['action' => 'edit', $respostaRequerimento->idResposta_Requerimento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resposta Requerimento'), ['action' => 'delete', $respostaRequerimento->idResposta_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $respostaRequerimento->idResposta_Requerimento)]) ?> </li>
        <li><?= $this->Html->link(__('List Resposta Requerimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resposta Requerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="respostaRequerimentos view large-9 medium-8 columns content">
    <h3><?= h($respostaRequerimento->idResposta_Requerimento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Resposta Requerimento Texto') ?></th>
            <td><?= h($respostaRequerimento->resposta_Requerimento_Texto) ?></td>
        </tr>
        <tr>
            <th><?= __('IdResposta Requerimento') ?></th>
            <td><?= $this->Number->format($respostaRequerimento->idResposta_Requerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Requerimentos IdRequerimento') ?></th>
            <td><?= $this->Number->format($respostaRequerimento->requerimentos_idRequerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Funcionarios IdFuncionario') ?></th>
            <td><?= $this->Number->format($respostaRequerimento->funcionarios_idFuncionario) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($respostaRequerimento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($respostaRequerimento->modified) ?></td>
        </tr>
    </table>
</div>
