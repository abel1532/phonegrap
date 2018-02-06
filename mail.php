<?php

require_once('http://hipocampo.com.ve/contacto/helpers.php');
 
class mail
{
	/*
		$file = ubicación del template HTML
		$to: destinatario
		$from: remitente
		$alt: texto alterno para clientes de correo que no soporten HTML
		$replaces: array kay => value donde 'key' es un template tag que se debe reemplazar dentro del html por 'value'
	*/
	public static function mailFromTemplate( $file, $to, $from, $subject, $alt,$replaces)
	{
		$output = false;
		
		//Leyendo el template HTML	
		if( ( $f = fopen( $file, 'r') ) != false )
		{
			if( ( $html = fread( $f, filesize($file) ) ) != false )
			{
				fclose($f);

				//Reemplazando los tags por la data real
				
				if( is_array($replaces) )
				{
					foreach( $replaces as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}
				/*if( is_array($replaces1) )
				{
					foreach( $replaces1 as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}
				
				if( is_array($replaces2) )
				{
					foreach( $replaces2 as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}
				if( is_array($replaces3) )
				{
					foreach( $replaces3 as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}
				if( is_array($replaces4) )
				{
					foreach( $replaces4 as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}
				if( is_array($replaces5) )
				{
					foreach( $replaces5 as $key => $val )
					{
						$html = str_replace( '{' . $key . '}', utf8_encode($val), $html);
					}
				}*/
				
				
				
				
			}
		}
		
		//Armando la estructura del correo y enviando
		if( $html != false )
		{
			$boundary = uniqid('np');
		  
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "From: {$from}\r\n";
			$headers .= "Subject: {$subject}\r\n";
			$headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
		 
			$message = "This is a MIME encoded message."; 

			$message .= "\r\n\r\n--" . $boundary . "\r\n";
			$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
			$message .= $alt;

			$message .= "\r\n\r\n--" . $boundary . "\r\n";
			$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
			$message .= $html;

			$message .= "\r\n\r\n--" . $boundary . "--";
			
			if( mail( $to, $subject, $message, $headers) )
				$output = $html;
		}
		
		return $output;
	}
}