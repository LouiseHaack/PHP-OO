<?php

/**
 * Função que recebe o CREA do Engenheiro
 * @author Louise
 */

/**
 * Classe herdeira da classe Pessoa
 */

class Engenheiro extends Pessoa{
	private $crea;

	/**
	 * Função getter do CREA
	 * @return string crea
	 */
	public function getCrea(){
    	return $this->crea;
	}

	/**
	 * Função setter do CREA
	 * @param string i
	 */
	public function setCrea($i){
    	$this->crea = $i;
	}
 }
 ?>