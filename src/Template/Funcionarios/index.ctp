<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios index large-9 medium-8 columns content">
    <h3><?= __('Funcionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idFuncionario') ?></th>
                <th><?= $this->Paginator->sort('Funcionario_Nome') ?></th>
                <th><?= $this->Paginator->sort('Funcionario_Cargo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('setor_idSetor') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= $this->Number->format($funcionario->idFuncionario) ?></td>
                <td><?= h($funcionario->Funcionario_Nome) ?></td>
                <td><?= h($funcionario->Funcionario_Cargo) ?></td>
                <td><?= h($funcionario->created) ?></td>
                <td><?= h($funcionario->modified) ?></td>
                <td><?= $this->Number->format($funcionario->setor_idSetor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->idFuncionario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->idFuncionario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->idFuncionario], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->idFuncionario)]) ?>
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
