<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alunos index large-9 medium-8 columns content">
    <h3><?= __('Alunos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idAluno') ?></th>
                <th><?= $this->Paginator->sort('aluno_nome') ?></th>
                <th><?= $this->Paginator->sort('aluno_Matricula') ?></th>
                <th><?= $this->Paginator->sort('aluno_Cpf') ?></th>
                <th><?= $this->Paginator->sort('aluno_RG') ?></th>
                <th><?= $this->Paginator->sort('aluno_Endereco') ?></th>
                <th><?= $this->Paginator->sort('aluno_Telefone') ?></th>
                <th><?= $this->Paginator->sort('aluno_Email') ?></th>
                <th><?= $this->Paginator->sort('aursos_idCurso') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->idAluno) ?></td>
                <td><?= h($aluno->aluno_nome) ?></td>
                <td><?= h($aluno->aluno_Matricula) ?></td>
                <td><?= h($aluno->aluno_Cpf) ?></td>
                <td><?= h($aluno->aluno_RG) ?></td>
                <td><?= h($aluno->aluno_Endereco) ?></td>
                <td><?= h($aluno->aluno_Telefone) ?></td>
                <td><?= h($aluno->aluno_Email) ?></td>
                <td><?= $this->Number->format($aluno->aursos_idCurso) ?></td>
                <td><?= h($aluno->created) ?></td>
                <td><?= h($aluno->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->idAluno]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->idAluno]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->idAluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->idAluno)]) ?>
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
