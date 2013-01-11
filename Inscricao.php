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
  			'rule' => 'notEmpty',
        'message'=>'Campo vazio'
  			),
      'endereco' => array(			
  			'rule' => 'notEmpty',
        'message'=>'Campo vazio'
  			),
      'telefone' => array(			
  			'rule' => 'notEmpty',
        'message'=>'Campo vazio'
  			)  
		);
}
