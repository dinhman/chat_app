<?php

class Config{
    public function connect(){
        $hostname = "db-mysql-do-user-16392965-0.c.db.ondigitalocean.com";
        $username = "doadmin";
        $password = "AVNS_qNvXsQk25hDB-_CDp2h";
        $dbname = "chatapp";
        $port = 25060;

        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn){
            echo "Lỗi kết nối Database".mysqli_connect_error();
        }
        return $conn;
    }
}
