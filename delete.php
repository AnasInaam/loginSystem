<?php
include("db_conection.php");

if (isset($_GET['del'])) {
    $delete_id = $_GET['del'];

    // Ensure the connection is open and valid
    if ($dbcon) {
        $delete_query = "DELETE FROM users WHERE id = '$delete_id'";
        $run = mysqli_query($dbcon, $delete_query);

        if ($run) {
            echo "<script>window.open('view_users.php?deleted=user has been deleted', '_self');</script>";
        } else {
            echo "<script>alert('Failed to delete user.');</script>";
        }
    } else {
        echo "<script>alert('Failed to connect to the database.');</script>";
    }
} else {
    echo "No ID provided for deletion.";
    exit;
}

if ($dbcon) {
    $dbcon->close(); // Close connection
}
