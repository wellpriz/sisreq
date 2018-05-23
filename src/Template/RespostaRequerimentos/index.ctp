<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resposta Requerimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="respostaRequerimentos index large-9 medium-8 columns content">
    <h3><?= __('Resposta Requerimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idResposta_Requerimento') ?></th>
                <th><?= $this->Paginator->sort('resposta_Requerimento_Texto') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('requerimentos_idRequerimento') ?></th>
                <th><?= $this->Paginator->sort('funcionarios_idFuncionario') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($respostaRequerimentos as $respostaRequerimento): ?>
            <tr>
                <td><?= $this->Number->format($respostaRequerimento->idResposta_Requerimento) ?></td>
                <td><?= h($respostaRequerimento->resposta_Requerimento_Texto) ?></td>
                <td><?= h($respostaRequerimento->created) ?></td>
                <td><?= h($respostaRequerimento->modified) ?></td>
                <td><?= $this->Number->format($respostaRequerimento->requerimentos_idRequerimento) ?></td>
                <td><?= $this->Number->format($respostaRequerimento->funcionarios_idFuncionario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $respostaRequerimento->idResposta_Requerimento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $respostaRequerimento->idResposta_Requerimento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $respostaRequerimento->idResposta_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $respostaRequerimento->idResposta_Requerimento)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
