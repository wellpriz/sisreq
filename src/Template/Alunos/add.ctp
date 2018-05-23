<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Add Aluno') ?></legend>
        <?php
            echo $this->Form->input('aluno_nome');
            echo $this->Form->input('aluno_Matricula');
            echo $this->Form->input('aluno_Cpf');
            echo $this->Form->input('aluno_RG');
            echo $this->Form->input('aluno_Endereco');
            echo $this->Form->input('aluno_Telefone');
            echo $this->Form->input('aluno_Email');
            echo $this->Form->input('aursos_idCurso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
