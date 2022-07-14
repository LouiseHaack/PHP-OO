<?php
/**
 * Funcão que recebe a CRM do Médico
 * @author Louise 
 */

/**
 * Classe herdeira da classe Pessoa
 */
class Medico extends Pessoa{
	private $crm;

	/**
	 * Função getter da CRM
	 * @return string crm
	 */
	public function getCrm(){
    	return $this->crm;
	}

	/**
	 * Função setter da CRM
	 * @param string i
	 */
	public function setCrm($i){
    	$this->crm = $i;
	}
 }
 ?>