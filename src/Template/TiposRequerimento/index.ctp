<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Requerimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposRequerimento index large-9 medium-8 columns content">
    <h3><?= __('Tipos Requerimento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idTipo_Requerimento') ?></th>
                <th><?= $this->Paginator->sort('tipo_Requerimento_Texto') ?></th>
                <th><?= $this->Paginator->sort('Tipo_Requerimento_duracao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposRequerimento as $tiposRequerimento): ?>
            <tr>
                <td><?= $this->Number->format($tiposRequerimento->idTipo_Requerimento) ?></td>
                <td><?= h($tiposRequerimento->tipo_Requerimento_Texto) ?></td>
                <td><?= h($tiposRequerimento->Tipo_Requerimento_duracao) ?></td>
                <td><?= h($tiposRequerimento->created) ?></td>
                <td><?= h($tiposRequerimento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposRequerimento->idTipo_Requerimento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposRequerimento->idTipo_Requerimento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposRequerimento->idTipo_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposRequerimento->idTipo_Requerimento)]) ?>
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
