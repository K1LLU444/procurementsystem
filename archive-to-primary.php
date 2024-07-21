<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "records";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM record_archive WHERE id = '$id'";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $insertSql = "INSERT INTO `record_create` (`ReferenceNo`, `Vendor`, `VendorReference`, `IssuedDate`, `DateReceived`, `CompanyName`,`ProductReference`, `Product`, `Description`, `Quantity`, `Price`, `Taxes`, `Subtotal`) SELECT `ReferenceNo`, `Vendor`, `VendorReference`, `IssuedDate`, `DateReceived`, `CompanyName`,`ProductReference`, `Product`, `Description`, `Quantity`, `Price`, `Taxes`, `Subtotal` FROM record_archive WHERE id = '$id'";
        $insertResult = $connection->query($insertSql);

        $deleteSql = "DELETE FROM record_archive WHERE id = '$id'";
        $deleteResult = $connection->query($deleteSql);

        if (!$insertResult) {
            if ($connection->errno == 1062) { // Check for duplicate entry error
                die("Duplicate entry for primary key. The record already exists in the product_createtrash table.");
            } else {
                die("Error inserting row: " . $connection->error);
            }
        }

        if (!$deleteResult) {
            die("Error deleting row: " . $connection->error);
        }
    } else {
        die("No record found with the provided ID.");
    }

    $connection->close();
}

header("Location: /html7/record-archive.php");
exit;
?>