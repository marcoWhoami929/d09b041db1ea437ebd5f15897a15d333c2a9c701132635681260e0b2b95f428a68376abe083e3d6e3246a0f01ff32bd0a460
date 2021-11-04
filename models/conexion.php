<?php

class Conexion
{

    static public function conectar()
    {
        //bandasju_bandasjuga
        //bandasju_admin
        //Whoami929
        $link = new PDO(
            "mysql:host=localhost;dbname=bandasju_bandasjuga",
            "bandasju_admin",
            "Whoami929",
            array(
                PDO::ATTR_ERRMODE
                => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )

        );

        return $link;
    }
}
