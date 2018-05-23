<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->idCurso]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->idCurso], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->idCurso)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->idCurso) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Curso Nome') ?></th>
            <td><?= h($curso->Curso_nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Curso Coordenador') ?></th>
            <td><?= h($curso->Curso_Coordenador) ?></td>
        </tr>
        <tr>
            <th><?= __('IdCurso') ?></th>
            <td><?= $this->Number->format($curso->idCurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($curso->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($curso->modified) ?></td>
        </tr>
    </table>
</div>
