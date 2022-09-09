<?php
    define('HOST','localhost');
    define('DB','db_teste');
    define('USER','root');
    define('PASS','root');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectionDB();
        }

        function connectionDB(){
            $this->connection = new mysqli(HOST,USER,PASS,DB);

            if(mysqli_connect_error()){
                printf('Erro ao conectar no DB',mysqli_connect_error());
            }
        }
    }
