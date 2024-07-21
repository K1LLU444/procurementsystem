<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the deletion here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "records";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $deleteSql = "DELETE FROM record_delete WHERE id = '$id'";
    $deleteResult = $connection->query($deleteSql);

    if ($deleteResult) {
        // Deletion successful
        header("Location: record-trash-bin.php"); // Replace "products-trash-bin.php" with the URL of the page you want to redirect to
        exit();
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}
?>