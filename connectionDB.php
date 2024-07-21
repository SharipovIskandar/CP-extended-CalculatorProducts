<?php

class connectionDB
{
    public static function connect(): PDO
    {
        return new PDO("mysql:host=localhost;dbname=cp", "root", "iskan2066");
    }
}