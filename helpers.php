<?php
class helpers
{	
	/*
		$n: número de elementos
		$p: número de página actual
		$r: número de elementos por página
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
		$limit: Número máximo de caracteres permitido
		$último caracter permitido
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