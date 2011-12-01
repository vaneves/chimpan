<?php
/*
 * Copyright (c) 2011, Valdirene da Cruz Neves J�nior <linkinsystem666@gmail.com>
 * All rights reserved.
 */


/**
 * Classe que implementa os m�todos de criptografia e descriptografia
 * 
 * @author	Valdirene da Cruz Neves J�nior <linkinsystem666@gmail.com>
 * @version	1
 *
 */
class Security
{
	/**
	 * M�todo que executa o algoritmo de criptografia e descriptografia
	 * @param string $a		valor a ser criptografado
	 * @param string $b		chave da criptografia
	 * @return string		retorna o valor criptografado
	 */
	private static function crypt($a,$b) {
        if ($a == '') 
			return '';
        $retorno = ''; 
		$i = strlen($a) - 1; 
		$j = strlen($b);
        do
		{
            $retorno .= ($a{$i} ^ $b{$i % $j});
        } while($i--);
        return strrev($retorno);
    }
    
    /**
     * M�todo de criptografia
     * @param mixed $value		valor a ser criptografado
     * @param string $key		chave utilizada para criptografar
     * @return string			retorna um string da base 64 com o valor criptografado
     */
    public static function encrypt($value, $key)
	{ 
        return base64_encode(self::crypt(json_encode(utf8encode($value)), $key));
    }
    
    /**
     * M�todo de descriptografia
     * @param string $value		valor criptografado
     * @param string $key		chave utilizada para criptogradar
     * @return mixed			retorna o valor descriptogradado
     */
    public static function decrypt($value, $key)
	{
        return utf8decode(json_decode(self::crypt(base64_decode($value), $key)));
    }

}
