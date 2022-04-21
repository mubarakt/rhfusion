<?php
namespace Phppot;
class DataSource
{

    function getConnection()
    {
        $database_username = 'root';
        $database_password = '';

        $pdo_conn = new \PDO('mysql:host=localhost;dbname=rhh_pcr', $database_username, $database_password);
        return $pdo_conn;
    }
}
?>