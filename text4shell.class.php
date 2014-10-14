<?php
/**
 * Arquivo fake para compatibilidade com a vers�o 1.0
 * 
 * Este arquivo traz uma classe fake para manter a compatibilidade de c�digos que migram da vers�o 1.0 para a vers�o 1.1.
 * A classe Text4Shell e seus m�todos s�o considerados deprecated na vers�o 1.1 e ser�o exclu�dos na vers�o seguinte.
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
 * Classe fake para compatibilidade com a vers�o 1.0
 * 
 * Esta � uma classe fake para manter a compatibilidade na migra��o da vers�o 1.0 para 1.1.
 * Os m�todos desta classe s�o considerados deprecated e n�o ser�o mais inclu�dos na vers�o 1.2.
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
     * Cria a inst�ncia desta classe e chama o construtor da classe pai {@inherit Php4Console}.
     * 
     * @param int $cols N�mero de colunas do Console. O valor informado aqui ficar� armazenado em Php4Console::cols.
     * @return object Retorna um objeto que representa a classe
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    public function __construct($cols){
	self::__construct($cols);
	return $this;
    }

    /**
     * Setter do n�mero de colunas
     * 
     * @method set_cols(int $cols) Define o n�mero de colunas que a classe utilizar� para cria��o das telas
     * @param int $cols N�mero de colunas
     * @return boolean Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    public function set_cols($cols){
	return parent::setCols($cols);
    }

    /**
     * Getter do n�mero de colunas
     * 
     * @method get_cols() Retorna o n�mero de colunas armazenado em Php4Console::cols
     * @return int Retorna o n�mero de colunas.
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
     * @param string $align Alinhamento desejado. Admite RIGHT LEFT e CENTER (m�nusculas ou mai�sculas).
     * @return int Retorna o valor da constante STR_PAD_RIGHT, STR_PAD_LEFT OU STR_PAD_BOTH, para $align RIGHT, LEFT ou CENTER, respectivamente.
     * @since 1.1 ~ 1.2
     * @deprecated 1.1
     */
    protected function get_align($align){
	return parent::getAlign($align);
    }
}
?>
