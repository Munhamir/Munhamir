<?php
try {
    $db = new PDO("mysql:host=192.168.10.250;dbname=harkespan",'username','');
    //$db = new PDO("mysql:host=127.0.0.1");
    //$db = new PDO("mysql:host=localhost");
}catch(PDOException $e){
    echo "Database gagal dihubungkan";
}

?>
