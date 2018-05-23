<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Setor'), ['action' => 'edit', $setor->idSetor]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setor'), ['action' => 'delete', $setor->idSetor], ['confirm' => __('Are you sure you want to delete # {0}?', $setor->idSetor)]) ?> </li>
        <li><?= $this->Html->link(__('List Setor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="setor view large-9 medium-8 columns content">
    <h3><?= h($setor->idSetor) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Setor Nome') ?></th>
            <td><?= h($setor->Setor_nome) ?></td>
        </tr>
        <tr>
            <th><?= __('IdSetor') ?></th>
            <td><?= $this->Number->format($setor->idSetor) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($setor->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($setor->modified) ?></td>
        </tr>
    </table>
</div>
