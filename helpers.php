<?php
class helpers
{	
	/*
		$n: n�mero de elementos
		$p: n�mero de p�gina actual
		$r: n�mero de elementos por p�gina
	*/
	public static function paginar( $n, $p, $r)
	{
		$paginas =  (int) $n / $r;
		
		if( ( $n % $r ) > 0 )
			$paginas = (int) $paginas + 1;
		
		$inicio = (int) ( $p * $r ) - $r;
		$fin = (int) $r;

		return array( 'total' => $n, 'pagina' => $p, 'paginas' => $paginas, 'inicio' => $inicio, 'fin' => $fin );		
	}
	
	/*
		$s: Texto a Recortar
		$limit: N�mero m�ximo de caracteres permitido
		$�ltimo caracter permitido
	*/
	public static function recortarTexto( $s, $limit )
	{

		if( strlen($s) > $limit )
		{
			$s = substr( $s, 0, $limit);
		}
		
		return $s;
	
	}
}