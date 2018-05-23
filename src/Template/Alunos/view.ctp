<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->idAluno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->idAluno], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->idAluno)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-9 medium-8 columns content">
    <h3><?= h($aluno->idAluno) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Aluno Nome') ?></th>
            <td><?= h($aluno->aluno_nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno Matricula') ?></th>
            <td><?= h($aluno->aluno_Matricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno Cpf') ?></th>
            <td><?= h($aluno->aluno_Cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno RG') ?></th>
            <td><?= h($aluno->aluno_RG) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno Endereco') ?></th>
            <td><?= h($aluno->aluno_Endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno Telefone') ?></th>
            <td><?= h($aluno->aluno_Telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Aluno Email') ?></th>
            <td><?= h($aluno->aluno_Email) ?></td>
        </tr>
        <tr>
            <th><?= __('IdAluno') ?></th>
            <td><?= $this->Number->format($aluno->idAluno) ?></td>
        </tr>
        <tr>
            <th><?= __('Aursos IdCurso') ?></th>
            <td><?= $this->Number->format($aluno->aursos_idCurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($aluno->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($aluno->modified) ?></td>
        </tr>
    </table>
</div>
