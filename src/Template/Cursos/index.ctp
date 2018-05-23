<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos index large-9 medium-8 columns content">
    <h3><?= __('Cursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idCurso') ?></th>
                <th><?= $this->Paginator->sort('Curso_nome') ?></th>
                <th><?= $this->Paginator->sort('Curso_Coordenador') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->idCurso) ?></td>
                <td><?= h($curso->Curso_nome) ?></td>
                <td><?= h($curso->Curso_Coordenador) ?></td>
                <td><?= h($curso->created) ?></td>
                <td><?= h($curso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curso->idCurso]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->idCurso]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->idCurso], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->idCurso)]) ?>
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
