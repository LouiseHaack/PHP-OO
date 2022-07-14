<?php
/**
 * Funcão que recebe os valores das pessoas
 * @author Louise 
 */

/**
 * Classe Pessoa define parâmetros para as outras pessoas.
 */
class Pessoa{
    
    /** @access private
     *  @name nome
     */
    private $nome; 

    /** @access private
     *  @name data_nasc
     */
    private $data_nasc;

    /** @access private
     *  @name rg
     */
    private $rg;

    /** @access private
     *  @name cpf
     */
    private $cpf;

    /**
	 * Função getter do nome 
     * @return string nome
	 */
    function getNome(){
        return $this->nome;
    }

    /**
	 * Função setter do nome
	 * @param string i
	 */
    function setNome($i){
        $this->nome = $i;
    }
    
    /**
	 * Função getter da data de nascimento
     * @return string dataNasc
	 */
    function getDataNasc(){
        return $this->data_nasc;
    }

    /**
	 * Função setter da data de nascimento
	 * @param string i
	 */
    function setDataNasc($i){
        $this->data_nasc = $i;
    }

    /**
	 * Função getter do RG
     * @return string rg
	 */
    function getRg(){
        return $this->rg;
    }

    /**
	 * Função setter do RG
	 * @param string i
	 */
    function setRg($i){
        $this->rg = $i;
    }
    
    /**
	 * Função getter do CPF
     * @return string cpf
	 */
    function getCpf(){
        return $this->cpf;
    }

    /**
	 * Função setter do CPF
	 * @param string i
	 */
    function setCpf($i){
        $this->cpf = $i;
    }
}
?>
</html>