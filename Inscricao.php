<?php

class Inscricao extends AppModel {
    public $useTable = 'inscricoes';
    public $order = array('nome' => 'ASC');

    public $validate = array(
  		'nome' => array(
  			'rule' => 'notEmpty',
        'message'=>'Campo vazio'	
  			),
  		'email' => array(			
  			'rule' => 'email',
        'message'=>'Email incorreto'
  			),
      'endereco' => array(
            	'notempty' => array( 
                            'rule' => array('minLength', '10'), 
                           	'required' => true, 
                           	'allowEmpty' => false, 
                           	'message' => 'Endereco deve ter no minimo 10 caracteres' 
              ) 
        ),
      'telefone' => array(			
  			'rule' => 'notEmpty',
        'message'=>'Campo vazio'
  			)  
		);
}
?>
