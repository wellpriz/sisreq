<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Setor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="setor index large-9 medium-8 columns content">
    <h3><?= __('Setor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idSetor') ?></th>
                <th><?= $this->Paginator->sort('Setor_nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($setor as $setor): ?>
            <tr>
                <td><?= $this->Number->format($setor->idSetor) ?></td>
                <td><?= h($setor->Setor_nome) ?></td>
                <td><?= h($setor->created) ?></td>
                <td><?= h($setor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $setor->idSetor]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setor->idSetor]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setor->idSetor], ['confirm' => __('Are you sure you want to delete # {0}?', $setor->idSetor)]) ?>
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
