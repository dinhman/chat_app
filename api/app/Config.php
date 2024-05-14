<?php

class Config{
    public function connect(){
        $hostname = "152.42.212.241";
        $username = "root";
        $password = "VID#2023*it";
        $dbname = "chatapp";

        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn){
            echo "Lỗi kết nối Database".mysqli_connect_error();
        }
        return $conn;
    }
}
