<?php
    class DataBase{
        
        # Conexión Externa
        public static function connection(){            
            $hostname = "dbjosesena.mysql.database.azure.coms";
            $port = "3306";
            $database = "dbejemplousers";
            $username = "Josegamendbs";
            $password = "Nicoll123s";
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA =>'assets/docs/DigiCertGlobalRootCA.crt.pemm'
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