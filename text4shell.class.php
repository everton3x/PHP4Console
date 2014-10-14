<?php
/**
 * Arquivo fake para compatibilidade com a versão 1.0
 * 
 * Este arquivo traz uma classe fake para manter a compatibilidade de códigos que migram da versão 1.0 para a versão 1.1.
 * A classe Text4Shell e seus métodos são considerados deprecated na versão 1.1 e serão excluídos na versão seguinte.
 * 
 * @author Everton da Rosa everton3x@gmail.com
 * @version 1.1
 * @license gpl-3.0.txt GPL v3.0
 * @filesource
 * @package Php4Console
 * @subpackage Text4Shell
 * @since 1.1 ~ 1.2
 * @deprecated 1.1
 */

require 'php4console.class.php';

/**
 * Classe fake para compatibilidade com a versão 1.0
 * 
 * Esta é uma classe fake para manter a compatibilidade na migração da versão 1.0 para 1.1.
 * Os métodos desta classe são considerados deprecated e não serão mais incluídos na versão 1.2.
 * 
 * @package Php4Console
 * @subpackage Text4Shell
 * @since 1.1 ~ 1.2
 * @deprecated 1.1
 */
class Text4Shell extends Php4Console{

    /**
     * Construtor da classe
     * 
     * Cria a instância desta classe e chama o construtor da classe pai {@inherit Php4Console}.
     * 
     * @param int $cols Número de colunas do Console. O valor informado aqui ficará armazenado em Php4Console::cols.
     * @return object Retorna um objeto que representa a classe
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    public function __construct($cols){
	self::__construct($cols);
	return $this;
    }

    /**
     * Setter do número de colunas
     * 
     * @method set_cols(int $cols) Define o número de colunas que a classe utilizará para criação das telas
     * @param int $cols Número de colunas
     * @return boolean Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    public function set_cols($cols){
	return parent::setCols($cols);
    }

    /**
     * Getter do número de colunas
     * 
     * @method get_cols() Retorna o número de colunas armazenado em Php4Console::cols
     * @return int Retorna o número de colunas.
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    public function get_cols(){
	return parent::getCols();
    }

    /**
     * Retorna a constante para alinhamento.
     * 
     * @method int get_align(string $align) Retorna o valor da constante de alinhamento para ser utilizada com str_pad().
     * @param string $align Alinhamento desejado. Admite RIGHT LEFT e CENTER (mínusculas ou maiúsculas).
     * @return int Retorna o valor da constante STR_PAD_RIGHT, STR_PAD_LEFT OU STR_PAD_BOTH, para $align RIGHT, LEFT ou CENTER, respectivamente.
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    protected function get_align($align){
	return parent::getAlign($align);
    }
}
?>
