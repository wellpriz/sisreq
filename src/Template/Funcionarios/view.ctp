<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->idFuncionario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->idFuncionario], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->idFuncionario)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->idFuncionario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Funcionario Nome') ?></th>
            <td><?= h($funcionario->Funcionario_Nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Funcionario Cargo') ?></th>
            <td><?= h($funcionario->Funcionario_Cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('IdFuncionario') ?></th>
            <td><?= $this->Number->format($funcionario->idFuncionario) ?></td>
        </tr>
        <tr>
            <th><?= __('Setor IdSetor') ?></th>
            <td><?= $this->Number->format($funcionario->setor_idSetor) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($funcionario->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($funcionario->modified) ?></td>
        </tr>
    </table>
</div>
