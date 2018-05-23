<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Requerimento'), ['action' => 'edit', $tiposRequerimento->idTipo_Requerimento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Requerimento'), ['action' => 'delete', $tiposRequerimento->idTipo_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposRequerimento->idTipo_Requerimento)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Requerimento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Requerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposRequerimento view large-9 medium-8 columns content">
    <h3><?= h($tiposRequerimento->idTipo_Requerimento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo Requerimento Texto') ?></th>
            <td><?= h($tiposRequerimento->tipo_Requerimento_Texto) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Requerimento Duracao') ?></th>
            <td><?= h($tiposRequerimento->Tipo_Requerimento_duracao) ?></td>
        </tr>
        <tr>
            <th><?= __('IdTipo Requerimento') ?></th>
            <td><?= $this->Number->format($tiposRequerimento->idTipo_Requerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tiposRequerimento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tiposRequerimento->modified) ?></td>
        </tr>
    </table>
</div>
