<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estatus Requerimento'), ['action' => 'edit', $estatusRequerimento->idEstatus_Requerimento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estatus Requerimento'), ['action' => 'delete', $estatusRequerimento->idEstatus_Requerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $estatusRequerimento->idEstatus_Requerimento)]) ?> </li>
        <li><?= $this->Html->link(__('List Estatus Requerimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estatus Requerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estatusRequerimentos view large-9 medium-8 columns content">
    <h3><?= h($estatusRequerimento->idEstatus_Requerimento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estatus Requerimento Nome') ?></th>
            <td><?= h($estatusRequerimento->Estatus_Requerimento_Nome) ?></td>
        </tr>
        <tr>
            <th><?= __('IdEstatus Requerimento') ?></th>
            <td><?= $this->Number->format($estatusRequerimento->idEstatus_Requerimento) ?></td>
        </tr>
    </table>
</div>
