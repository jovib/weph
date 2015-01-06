<?php

public function TestDatabaseConnection(){
    try {
        $database_host = Config::get('127.13.157.2');
        $database_name = Config::get('phone');
        $database_user = Config::get('adminXypxBCH');
        $database_password = Config::get('KubXY-BfBIgJ');

        $connection = mysqli_connect($database_host,$database_user,$database_password,$database_name);

        if (mysqli_connect_errno()){
                return false;
            } else {
                return true;
            }

    } catch (Exception $e) {

        return false;

    }
}