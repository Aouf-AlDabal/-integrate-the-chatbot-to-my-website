<?php


if (isset($_POST['delete'])) {

    global $connection;

    $id = $_GET['ID'];

    $query = "DELETE FROM remote_control WHERE ID = '$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('QUERY FAILED' . mysqli_error($connection));
    }
}