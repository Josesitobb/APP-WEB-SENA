<?php
    class DataBase{
        
        # Conexión Externa
        public static function connection(){            
            $hostname = "senajose.mysql.database.azure.com";
            $port = "3306";
            $database = "dbejemplouser";
            $username = "Josesena";
            $password = "Nicoll123";
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => 'DigiCertGlobalRootG2.crt.pem'
            );
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
        #  Conexión Local
        // public static function connection(){            
        //     $hostname = "localhost";
        //     $port = "3306";
        //     $database = "dbejemplouser";
        //     $username = "root";
        //     $password = "";
		// 	$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
		// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// 	return $pdo;
		// }
	// }
?>