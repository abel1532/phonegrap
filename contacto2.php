<?php	 
     	    $nombre= $_POST['nombre']; 
			$telefono= $_POST['telefono']; 
			$correo= $_POST['correo']; 
			$mensaje= $_POST['mensaje']; 
		

   //include("http://hipocampo.com.ve/contacto/mail.php"); // funcion para mandar correo com imagenes 

//require_once('http://hipocampo.com.ve/contacto/helpers.php');
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


	  
				
       		  $file="http://hipocampo.com.ve/contacto/avisar1.html";// correo persona pagina
			  $titulo= "Correo de HipoCampo";
			  
			  $alt=''; // texto adicional
	          $subject="HipoCampo";
	     	  $replaces= array( 	'titulo' => $titulo , 
	     	  						'mensaje' => $mensaje , 
						     	  	'correo' =>   $correo,
						     	    'telefono' =>   $telefono ,
									'nombre' =>   $nombre );  
			
			
			 //mail::mailFromTemplate( $file,$correo, 'hipocampo_salashow@hotmail.com',  $subject, $alt, $replaces);

			  mail::mailFromTemplate( $file,'abelardotorres87@gmail.com', 'abelardotorres87@gmail.com',  $subject, $alt, $replaces);

			  $file="http://hipocampo.com.ve/contacto/avisar2.html";// correo para hipocampo y admin
			
			  mail::mailFromTemplate( $file,'abelardotorres87@gmail.com', 'abelardotorres87@gmail.com',  $subject, $alt, $replaces);
			 // mail::mailFromTemplate( $file,'hipocampo_salashow@hotmail.com', 'hipocampo_salashow@hotmail.com',  $subject, $alt, $replaces);
			  
        if(!mail){
		 //  $result = array( 'status' => false, 'message1' => "Error al enviar la solicitud." );
		  //  echo json_encode($result);
        		header('Location:  http://hipocampo.com.ve/?page_id=164');
		}else{

/*
		$user = 'hipocam_admin';
		$passwd = 'ksw2012+';
		$db = 'hipocam_correo';

		$host = 'localhost';


$link = mysql_connect('localhost', 'hipocam_admin', 'ksw2012+')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('hipocam_correo',$link) or die('No se pudo seleccionar la base de datos');

 $a="INSERT INTO royal_form(nom_ape,cel_pas,tlf,email,sexo,tipo,status) VALUES ('$nombre','$cedula','$telefono','$correo','$sexo',$tipo,1)";
$query = mysql_query($a) or die('Consulta fallida: ' . mysql_error());

	            if($query){
				
				  /*$result = array( 'success' => true, 'message1' => "Registro guardado con exito.");	
		   		echo json_encode($result);*/
		   		/*echo json_encode(array('success'=>true));*/
		   		
		   		
					header('Location:  http://hipocampo.com.ve/?page_id=155');
					
				//}else{
					/* $result = array( 'error' => false, 'message1' => "Error al guardar.");	
		   		echo json_encode($result);*/
		   		/*echo json_encode(array('msg'=>'A ocurrido un error.'));*/
		   	//	 $mensaje="Error interno del servidor, comuníquese con el administrador";
					//header('Location: http://hipocampo.com.ve/contacto/contacto.html?mensaje='.$mensaje);
			//	}	
            	
			

		}
	
?>
