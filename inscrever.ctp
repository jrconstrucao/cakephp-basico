<?php echo $this->Html->css('formulario'); ?>
<?php echo $this->Html->css('boxes'); ?>
    <div id="div-inscricao">
    <?php echo $this->Form->create('Inscricao', array('type'=>'post', 'class'=>'rounded', 'id'=>'formInscricao'));?>
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
    <div class="field">
    <label for="nome">Nome:</label>
    <?php echo $this->Form->input('nome', array('type'=>'text', 'maxlength' =>'100', 'class'=>'input', 'label'=>false)); ?>
    </div>
    <div class="field">
    <label for="email">Email:</label>
    <?php echo $this->Form->input('email', array('type'=>'text', 'class'=>'input', 'label'=>false));?>
    </div>
    <div class="field">
    <label for="endereco">Endere&ccedil;o:</label>
    <?php echo $this->Form->input('endereco', array('type'=>'text','class'=>'input', 'label'=>false));?>
    </div>
    <div class="field">
    <label for="telefone">Telefone:</label>
    <?php echo $this->Form->input('telefone', array('type'=>'text','class'=>'input', 'label'=>false));?>
    </div>
    <?php echo $this->Form->submit('Enviar', array('class'=>'button'));?>
    <?php echo $this->Form->end();?>  
    </div>
