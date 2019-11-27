<?php


class db_helper
{
    public static function createConnection(){
        $conn = new mysqli("localhost","root","","pwl_movie",3306);

    }
}