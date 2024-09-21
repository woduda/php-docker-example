<?php

namespace App;

use App\Database\Connection;

class Example {
     
    public function welcome()
    {
        echo "Welcome!";
    }

    public function showDatabaseTables()
    {
        $db = Connection::getInstance();

        return $db->getPdo()->query("SHOW TABLES;")->fetchAll();
    }
}