<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requerimento'), ['action' => 'edit', $requerimento->idRequerimento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requerimento'), ['action' => 'delete', $requerimento->idRequerimento], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimento->idRequerimento)]) ?> </li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requerimentos view large-9 medium-8 columns content">
    <h3><?= h($requerimento->idRequerimento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Requerimento Nome') ?></th>
            <td><?= h($requerimento->Requerimento_Nome) ?></td>
        </tr>
        <tr>
            <th><?= __('IdRequerimento') ?></th>
            <td><?= $this->Number->format($requerimento->idRequerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Setor IdSetor') ?></th>
            <td><?= $this->Number->format($requerimento->setor_idSetor) ?></td>
        </tr>
        <tr>
            <th><?= __('Alunos IdAluno') ?></th>
            <td><?= $this->Number->format($requerimento->alunos_idAluno) ?></td>
        </tr>
        <tr>
            <th><?= __('Estatus Requerimentos IdEstatus Requerimento') ?></th>
            <td><?= $this->Number->format($requerimento->estatus_requerimentos_idEstatus_Requerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipos Requerimento IdTipo Requerimento') ?></th>
            <td><?= $this->Number->format($requerimento->tipos_requerimento_idTipo_Requerimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($requerimento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($requerimento->modified) ?></td>
        </tr>
    </table>
</div>
