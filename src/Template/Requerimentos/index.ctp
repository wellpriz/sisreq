<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requerimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requerimentos index large-9 medium-8 columns content">
    <h3><?= __('Requerimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idRequerimento') ?></th>
                <th><?= $this->Paginator->sort('Requerimento_Nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('setor_idSetor') ?></th>
                <th><?= $this->Paginator->sort('alunos_idAluno') ?></th>
                <th><?= $this->Paginator->sort('estatus_requerimentos_idEstatus_Requerimento') ?></th>
                <th><?= $this->Paginator->sort('tipos_requerimento_idTipo_Requerimento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requerimentos as $requerimento): ?>
            <tr>
                <td><?= $this->Number->format($requerimento->idRequerimento) ?></td>
                <td><?= h($requerimento->Requerimento_Nome) ?></td>
                <td><?= h($requerimento->created) ?></td>
                <td><?= h($requerimento->modified) ?></td>
                <td><?= $this->Number->format($requerimento->setor_idSetor) ?></td>
                <td><?= $this->Number->format($requerimento->alunos_idAluno) ?></td>
                <td><?= $this->Number->format($requerimento->estatus_requerimentos_idEstatus_Requerimento) ?></td>
                <td><?= $this->Number->format($requerimento->tipos_requerimento_idTipo_Requerimento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requerimento->idRequerimento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requerimento->idRequerimento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requerimento->idRequerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimento->idRequerimento)]) ?>
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
