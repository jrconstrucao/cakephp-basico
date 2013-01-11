<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class InscricoesController extends AppController {
    public $name = 'Inscricoes';
    public $uses = array('Inscricao');
    

    public function index() {
   	    $Inscricoes = $this->Inscricao->find('all');
        $this->set('inscricoes', $inscricoes);
    }

  	public function inscrever(){
        //View/Inscricoes/inscrever		
  			$isPost = $this->request->isPost();

  			if($isPost && !empty ($this->request->data)){

  				if($this->Inscricao->save($this->request->data)){					

  					//$this->Session->setFlash('Cadastro com sucesso.');
  						 $this->redirect('/agradecimento');
  
  				}else{
  					$this->Session->setFlash('Erro na inscrição.');
  				}
  			}
  		}
  


}
