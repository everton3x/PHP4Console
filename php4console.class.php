<?php

/**
 * Arquivo da classe Php4Console
 * @author Everton da Rosa everton3x@gmail.com
 * @version 1.1
 * @license gpl-3.0.txt GPL v3.0
 * @filesource
 * @package Text4Shell
 * @since 1.0
 * @example teste.php
 */

/**
 * Classe para exibição de texto em ambiente Console (modo texto)
 * A classe Php4Console possibilita ao desenvolvedor uma maneira fácil e elegante de exibir conteúdo em modo texto.
 * Se você utiliza o PHP CLI (PHP Command Line Interface), Php4Console é a solução ideal para exibir conteúdo.
 * @package Php4Console
 * @since 1.0
 */

class Php4Console {
    /** Número de colunas do Console
     * @var int $cols Número de colunas do Console
     * @since 1.0
     */
    protected $cols;
    
    /** Tamanho da última string usada nos métodos de carregamento
     * @var int $strlen tamanho da última string utilizada nos métodos de carregamento.
     * @since 1.1
     */
    protected $strlen;
    
    /** Início da linha de etapas do método openLoadStepLine
     * @var string $stepindicator Início da linha de etapas do método openLoadStepLine
     * @since 1.1
     */
    protected $stepindicator = '  ->';
    
    /** Número de etapas da última barra de progresso iniciada
     * @var ind $steps Número de etapas da última barra de progrsso inicada
     * @since 1.1
     */
    protected $steps;
    
    /** Número da última etapa iniciada na barra de progresso
     * @var int $laststep Número da última etapa iniciada na barra de progresso
     * @since 1.1
     */
    protected $laststep;
    
    /**
     * Construtor da classe
     * @method __construct(int $cols) Construtor da classe
     * @param int $cols Número de colunas do Console. O valor informado aqui ficará armazenado em Php4Console::cols.
     * @return object Retorna um objeto que representa a classe
     * @since 1.0
     */
    public function __construct($cols) {
        $this->setCols($cols);
        return $this;
    }
    
    /**
     * Setter do número de colunas
     * @method setCols(int $cols) Define o número de colunas que a classe utilizará para criação das telas
     * @param int $cols Número de colunas
     * @return boolean Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
     * @since 1.0
     */

    public function setCols($cols){
        if(!is_int($cols) || $cols <= 0){
            trigger_error("Número de colunas inválido!\n", E_USER_ERROR);
            return false;
        }else{
            $this->cols = $cols;
            return true;
        }
    }
    
    /**
     * Getter do número de colunas
     * @method getCols() Retorna o número de colunas armazenado em Php4Console::cols
     * @return int Retorna o número de colunas.
     * @since 1.0
     */
    public function getCols(){
        return $this->cols;
    }
    
    /**
     * Prepara o texto para a exibição
     * @method paragraph(string $text, int $cols) Quebra o texto em linhas com o tamanho máximo do número de colunas especificado em $cols.
     * @param string $text O texto a ser exibido
     * @param int $cols Número de colunas de quada linha
     * @param string $align Alinhamento do text. Aceita LEFT (padrão), RIGHT ou CENTER (mínuscula/maiúscula).
     * @return boolean|array Retorna FALSE em caso de falha ou um array contendo as linhas do texto.
     * @since 1.0
     */
    protected function paragraph($text, $cols = 0, $align = 'left'){
        if($cols == 0){
            $cols = $this->getCols();
        }
        if(!is_string($text)){
            trigger_error("Texto inválido!\n", E_USER_ERROR);
            return false;
        }else{
            $arr = str_split($text, $cols);
        }
	
	$output = array();
	
	foreach($arr as $line){
	    $output[] = str_pad($line, $cols, ' ', $this->getAlign($align));
	}
	
	return $output;
    }
    
    /**
     * Quebra um texto em linhas.
     * @method write(string $text, string $align) Quebra um texto em linhas de acordo com o número de colunas em Php4Console::cols.
     * @param string $text O texto a ser escrito.
     * @param string $align [Opcional] O alinhamento do texto. O padrão é LEFT, porém aceita RIGHT e CENTER (maipusculas ou minúsculas).
     * @return string Texto quebrado em linhas.
     * @since 1.0
     */
    public function write($text, $align = ''){
        $str = '';
	if(strlen($align) == 0){
	    $align = 'left';
	}
        foreach($this->paragraph($text, 0, $align) as $lines){
            $str .= "$lines".PHP_EOL;
        }
        return $str;
    }
    
    /**
     * Quebra um texto em linhas e coloca dentro de um Box.
     * @method box(string $box, string $title, string $align) Quebra um texto em linhas de acordo com o número de colunas em Php4Console::cols e coloca dentro de um Box.
     * @param string $text O texto a ser exibido
     * @param string $title [Opcional] Se definido, exibe um título para a caixa.
     * @param string $align [Opcional] O alinhamento do texto do box. O padrão é LEFT, porém aceita RIGHT e CENTER (maipusculas ou minúsculas).
     * @return string O Box com o texto quebrado em linhas;
     * @since 1.0
     */
    public function box($text, $title = '', $align = ''){
        $box = '';
        $cols = $this->getCols() - 4;
	if(strlen($align) == 0){
	    $align = 'left';
	}
        if(strlen($title) > 0){
            $box .= $this->hline();
            $title = str_pad($title, $cols, ' ', STR_PAD_BOTH );
	    $box .= "| $title |".PHP_EOL;
        }
        $box .= $this->hline();
        $lines = $this->paragraph($text, $cols, $align);
        foreach($lines as $ln){
            if(strlen($ln) < $cols){
                $ln = str_pad($ln, $cols, ' ');
            }
	    $box .= "| $ln |".PHP_EOL;
        }
        $box .= $this->hline();
        return $box;
    }
    
    /**
     * Cria uma linha divisória horizontal.
     * @method hline() Método auxiliar que cria uma linha divisória horizontal.
     * @return string Retorna a linha criada.
     */
    protected function hline(){
        $line = '';
        $pad_length = $this->getCols() - 2;
        $line .= '+';
        $line .= str_pad('-', $pad_length, '-');
	$line .= '+'.PHP_EOL;
        return $line;
    }
    
    /**
     * Cria uma linha divisória horizontal para tabelas.
     * @method tblline() Método auxiliar que cria uma linha divisória horizontal para tabela.
     * @param array $colmodel O modelo de coluna da tabela.
     * @return string Retorna a linha criada.
     * @since 1.0
     */
    protected function tblline($colmodel){
        $line = '';
        foreach($colmodel as $col){
            $len = $col['len'];
            if($len <= 0){
                trigger_error('Falha no modelo de coluna', E_USER_ERROR);
                return false;
            }else{
                $pad_length = $len;
                $line .= str_pad('+', $pad_length, '-');
            }
        }
        $minus = $this->getCols() - 1;
        $line = substr($line, 0, $minus);
        $line .= '+'.PHP_EOL;
        return $line;
    }

    /**
     * Cria uma tabela com os dados recebidos.
     * @method table(array $data, array $colmodel, string $title) Cria uma tabela os dados contidos em $data. $data precisa estar no formato:
     * $data = array(
     *      0 => array('coluna1' => 'valor1', 'coluna2' => 'valor2')
     *      ,1 => array('coluna1' => 'valor1', 'coluna2' => 'valor2')
     *      ,2 => array('coluna1' => 'valor1', 'coluna2' => 'valor2')
     * );
     * @param array $data Um array multidimensional com os dados de linhas e colunas par exibir.
     * @param array $colmodel Um array especificando os rótulos das colunas, a largura de cada coluna e o alinhamento de cada coluna. Observe que a soma das larguras das colunas deve ser igual ao valor de Php4Console::cols. Se um rótulo não for especificado, o id da coluna será utilizado. Os alinhamentos válidos são LEFT, RIGHT e CENTER (em maiúsculas ou minúsculas). Se nenhum for especificado, LEFT é adotado. O array segue a estrutura: array( 'campo1' => array('label' => 'Rótulo', 'len' => 10, 'align' => 'LEFT'), 'campo2' => array([...]), [...])
     * @param string $title [Opcional] Se definido, mostra o texto com título da tabela.
     * @return string Retorna a tabela criada.
     * @since 1.0
     */
    public function table($data, $colmodel, $title = ''){
        if(count($data) == 0){
            trigger_error('Dados para tabela inválidos!\n', E_USER_ERROR);
            return false;
        }
        if(count($colmodel) == 0){
            trigger_error('Modelo de coluna da tabela inválido!\n', E_USER_ERROR);
            return false;
        }
        
        //configurando colmodel
        foreach($data[0] as $k => $v){
            if(!isset($colmodel[$k]['label'])){
                $colmodel[$k]['label'] = $k;
            }
            if(!isset($colmodel[$k]['align'])){
                $colmodel[$k]['align'] = 'left';
            }
        }
        unset($k, $v);
        
        $table = '';
        //título
        if(strlen($title) >0){
            $cols = $this->getCols() - 4;
            if(strlen($title) > 0){
                $table .= $this->hline();
                $title = str_pad($title, $cols, ' ', STR_PAD_BOTH );
                $table .= "| $title |".PHP_EOL;
            }
        }
        //cabeçalho
        $table .= $this->tblline($colmodel);
        
        foreach($colmodel as $cmk => $cm){
            $len = $cm['len'] - 2;
            $id = $cmk;
            $labels[$id] = $this->paragraph($cm['label'], $len);
        }
        unset($cm, $len, $id);
        
        $maxsize = 0;
        foreach($labels as $label){
            $size = count($label);
            if($maxsize < $size){
                $maxsize = $size;
            }
        }
        unset($label);
        
        $last = count($labels) - 1;
        $j = 0;
		$rows = array();
		for($i = 0; $i < $maxsize; $i++){
			@$rows[$i] .= "|";
		}
		foreach($labels as $id => $arr){
			if(count($arr) <= $maxsize){
				$arr = array_pad($arr, $maxsize, ' ');
			}
			if($j == $last){
				$len = $colmodel[$id]['len'] -2;
			}else{
				$len = $colmodel[$id]['len'] -1;
			}
			$j++;
			
			for($i = 0; $i < $maxsize; $i++){
				if(!isset($colmodel[$id]['align'])){
					$align = 'center';
				}else{
					$align = $colmodel[$id]['align'];
				}
				$align = $this->getAlign($align);
				$label = str_pad($arr[$i], $len, ' ', $align);
				$rows[$i] .= "$label|";
			}
		}
		foreach($rows as $line){
			$table .= "$line\n";
		}
		
        $table .= $this->tblline($colmodel);
		
		//corpo com os dados
		$lens = array();
		foreach($colmodel as $k => $v){
			$lens[$k] = $v['len'] - 2;
		}
		
		$tmp = array();
		foreach($data as $id => $line){
			foreach($line as $fldname => $fldvalue){
				$tmp[$id][$fldname] = $this->paragraph($fldvalue, $lens[$fldname]);
			}
		}
		$data = $tmp;
		unset($tmp);
		
		foreach($data as $line){
			$maxsize = 0;
			foreach($line as $row){
				if($maxsize < count($row)){
					$maxsize = count($row);
				}
			}
			unset($row);
			$last = count($line) - 1;
			$j = 0;
			$rows = array();
			for($i = 0; $i < $maxsize; $i++){
				@$rows[$i] .= "|";
			}
			
			foreach($line as $id => $arr){
				if(count($arr) <= $maxsize){
					$arr = array_pad($arr, $maxsize, ' ');
				}

				if($j == $last){
					$len = $colmodel[$id]['len'] -2;
				}else{
					$len = $colmodel[$id]['len'] -1;
				}
				$j++;
				
				for($i = 0; $i < $maxsize; $i++){
					if(!isset($colmodel[$id]['align'])){
						$align = 'center';
					}else{
						$align = $colmodel[$id]['align'];
					}
					$align = $this->getAlign($align);
					$label = str_pad($arr[$i], $len, ' ', $align);
					$rows[$i] .= "$label|";
				}
			}
			foreach($rows as $line){
				$table .= "$line\n";
			}
			$table .= $this->tblline($colmodel);
		}
		
        return $table;
    }
	
	/**
	* Retorna a constante para alinhamento.
	* @method int getAlign(string $align) Retorna o valor da constante de alinhamento para ser utilizada com str_pad().
	* @param string $align Alinhamento desejado. Admite RIGHT LEFT e CENTER (mínusculas ou maiúsculas).
	* @return int Retorna o valor da constante STR_PAD_RIGHT, STR_PAD_LEFT OU STR_PAD_BOTH, para $align RIGHT, LEFT ou CENTER, respectivamente.
	* @since 1.0
	*/
	protected function getAlign($align){
		$align = strtolower($align);
		switch($align){
			case 'center':
				return STR_PAD_BOTH;
				break;
			case 'right':
				return STR_PAD_LEFT;
				break;
			case 'left':
				return STR_PAD_RIGHT;
				break;
			default:
				trigger_error("Alinhamento desconhecido\n", E_USER_ERROR);
				return false;
		}
	}
	
	/** Inicia a exibição de uma linha de log de carregamento
	 * @method void openLoadLine(string $str) inicia a exibição de uma linha de carregamento
	 * @param string $str A mensagem de carregamento
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	
	public function openLoadLine($str){
	    if(strlen($str) == 0) {
		trigger_error('Nenhuma mensagem de carregamento definida.', E_USER_ERROR);
		return;
	    }else{
		$maxlen = $this->getCols() - 8;
		$str = substr($str, 0, $maxlen);
		$strlen = strlen($str);
		$this->strlen = $strlen;
		echo $str;
		return;
	    }
	}
	
	/** Termina uma linha de carregamento
	 * @method void closeLoadLine(bool $success) Fecha a última linha de carregamento aberta por openLoadLine()
	 * @param bool $success [Opcional] Se TRUE (padrão), a linha termina com [OK], senão, termina com[FAIL]
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	public function closeLoadLine($success = true){
	    $pad = $this->getCols() - $this->strlen;
	    if($success){
		echo str_pad('[OK]', $pad, '.', STR_PAD_LEFT);
	    }else{
		echo str_pad('[FAIL]', $pad, '.', STR_PAD_LEFT);
	    }
	    echo PHP_EOL;
	    return;
	}
	
	/** Inicia um grupo de linhas de carregamento
	 * @method void openLoadGroupLine(string $str) Inicia um grupo de linhas de carregamento
	 * @param string $str Uma mensagem da linha de início do grupo
	 * @return void Nenhum retorno
	 * @since 1.1
	 */
	public function openLoadGroupLine($str){
	    if(strlen($str) == 0) {
		trigger_error('Nenhuma mensagem de carregamento definida.', E_USER_ERROR);
		return;
	    }else{
		$maxlen = $this->getCols();
		$str = substr($str, 0, $maxlen);
		$str = str_pad($str, $maxlen, '.', STR_PAD_RIGHT);
		echo $str.PHP_EOL;
		return;
	    }
	}
	
	/** Inicia uma linha de um grupo de linhas de carregamento
	 * @method void openLoadStepLine(string $str) Inicia uma linha de um grupo de linhas de carregamento
	 * @param string $str O texto para ser exibido na linha
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	public function openLoadStepLine($str){
	    if(strlen($str) == 0) {
		trigger_error('Nenhuma mensagem de carregamento definida.', E_USER_ERROR);
		return;
	    }else{
		$maxlen = $this->getCols() - 8;
		$str = $this->stepindicator.$str;
		$str = substr($str, 0, $maxlen);
		$strlen = strlen($str);
		$this->strlen = $strlen;
		echo $str;
		return;
	    }
	}
	
	/** Termina uma linha de um grupo de linhas de carregamento
	 * @method void closeLoadStepLine(bool $success) Fecha a última linha de um grupo de carregamento aberta por openLoadStepLine()
	 * @param bool $success [Opcional] Se TRUE (padrão), a linha termina com [OK], senão, termina com[FAIL]
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	public function closeLoadStepLine($success = true){
	    $pad = $this->getCols() - $this->strlen - 4;
	    if($success){
		echo str_pad('[OK]', $pad, '.', STR_PAD_LEFT);
	    }else{
		echo str_pad('[FAIL]', $pad, '.', STR_PAD_LEFT);
	    }
	    echo PHP_EOL;
	    return;
	}
	
	/** Termina um grupo de linhas de carregamento
	 * @method void closeLoadGroupLine(string $str, bool $success) Fecha um grupo linhas de carregamento aberto por openLoadGroupLine()
	 * @param string $str Uma mensagem para ser exibida ao final
	 * @param bool $success [Opcional] Se TRUE (padrão), a linha termina com [OK], senão, termina com[FAIL]
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	public function closeLoadGroupLine($str, $success = true){
	    if(strlen($str) == 0) {
		trigger_error('Nenhuma mensagem de carregamento definida.', E_USER_ERROR);
		return;
	    }else{
		echo $str;
		$pad = $this->getCols() - strlen($str);
		if($success){
		    echo str_pad('[OK]', $pad, '.', STR_PAD_LEFT);
		}else{
		    echo str_pad('[FAIL]', $pad, '.', STR_PAD_LEFT);
		}
		echo PHP_EOL;
		return;
	    }
	}
	
	/** inicia uma barra de progresso
	 * @method void initProgressBar(int $steps) inicia uma barra de progresso e carrega a primeira etapa dela
	 * @param int $steps Número total de etapas da barra de progresso
	 * @return void Nenhum retorno
	 * @since 1.1
	 */
	public function initProgressBar($steps){
	    if($steps == 0){
		trigger_error('Etapas da barra de progresso são inválidas.', E_USER_ERROR);
		return;
	    }
	    $this->steps = $steps;
	    
	    $this->runProgressBar();
	    return;
	}
	
	/** Executa uma etapa da última barra de progresso
	 * @method void runProgressBar() Executa uma etapa da última barra de progresso
	 * @return void Nada é retornado
	 * @since 1.1
	 */
	public function runProgressBar(){
	    $percent = floor($this->getCols() / $this->steps);
	    $module = $this->getCols() % $this->steps;
	    if($this->laststep < ($this->steps - 1)){
		echo str_pad('', $percent, '|');
		$this->laststep++;
		return;
	    }elseif($this->laststep < $this->steps){
		$percent = $percent + $module;
		echo str_pad('', $percent, '|');
		$this->laststep = 0;
		$this->steps = 0;
		echo PHP_EOL;
		return;
	    }
	}
	
	/** Emula um prompt de comando retornando o resultado digitado pelo usuário.
	 * @method string prompt(string $prompt) Emula um prompt de comando retornando o resultado digitado pelo usuário.
	 * @param string $prompt [Opcional] Texto do prompt. O padrão é [diretório atual> ].
	 * @return string Retorna uma string contendo o que foi digitado pelo usuário.
	 * @since 1.1
	 */
	public function prompt($prompt = ''){
	    if(strlen($prompt) == 0){
		$prompt = getcwd().'>';
	    }
	    echo "$prompt ";
	    $stdin = fgets(STDIN);
	    
	    return rtrim($stdin, PHP_EOL);
	}
}

?>
