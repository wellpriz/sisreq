<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estatus Requerimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estatusRequerimentos index large-9 medium-8 columns content">
    <h3><?= __('Estatus Requerimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idEstatus_Requerimento') ?></th>
                <th><?= $this->Paginator->sort('Estatus_Requerimento_Nome') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estatusRequerimentos as $estatusRequerimento): ?>
            <tr>
                <td><?= $this->Number->format($estatusRequerimento->idEstatus_Requerimento) ?></td>
                <td><?= h($estatusRequerimento->Estatus_Requerimento_Nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estatusRequerimento->idEstatus_Requerimento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estatusRequerimento->idEstatus_Requerimento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estatusRequerimento->idEstatus_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $estatusRequerimento->idEstatus_Requerimento)]) ?>
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
