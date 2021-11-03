<?php
namespace DBOnix;

class Connection
{
    public function set_connection($db_server, $db_user, $db_password, $db, $db_port)
    {
        $connection_db = mysqli_connect($db_server, $db_user, $db_password, $db, $db_port);
        return $connection_db;
    }

    // A medida que se van introduciendo datos de distintos productos se van aumentando las filas
    public function update_db($connection_db, $insertion_table, $rows)
    {
        $result = mysqli_query($connection_db, $insertion_table);

        if (! empty($result)) {
            $rows ++;
        } else {
            echo mysqli_error($connection_db);
        }
    }
}

