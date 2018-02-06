<?php 
//echo '<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/js/jquery.js">';

//			$connection=Yii::app()->db;
			
			
$user = 'mnegocio_royal';
$passwd = 'correoroyal';
//$passwd = 'postgres2013';
$db = 'mnegocio_royal';
//$db = 'control_asistencia_10_03_2014';
$port = 2082;
$host = '67.228.176.138';
//$host = '172.16.0.151';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx_db_mysql= mysql_connect($strCnx)or die ("error EN LA CONEXION");


			$cedula= $_GET['cedula']; 
			$nom_ape= $_GET['nom_ape']; 
			$cel_pas= $_GET['cel_pas']; 
			$tlf= $_GET['tlf']; 
			$email= $_GET['email']; 
			$sexo= $_GET['sexo']; 
			$tipo= $_GET['tipo']; 
			$status= 1; 

			
			$b="select * from royal_form where email='".$email."' or cedula=".$cedula.""; 
			$query = mysql_query($cnx_db_mysql, $b);
			$resutaldos = mysql_fetch_all($query);
            $id=$resutaldos[0]['id'];
            	

            if(!$id){
            $a="INSERT INTO royal_form(nom_ape,cel_pas,tlf,email,sexo,tipo,status) VALUES ('$nom_ape','$cel_pas','$tlf','$email','$sexo',$tipo,$status)";
			$query = mysql_query($cnx_db_mysql, $a);
	            if($query){
				echo "<spam style='font-color:green;'><b>Macht guardada con exito.</b></spam>";	
					
				}else{
					echo "<spam style='font-color:green;'><b>Error al guardar el Macht</b></spam>";	
					
				}	
            	
            }else{
            	
            	echo "ya guardo uno anteriormente";
            }
			
			
			
			
			
			
			
			
			
			
			
			
//			$command=$connection->createCommand($a);
//		    $resultados=$command->queryAll();
			




?>