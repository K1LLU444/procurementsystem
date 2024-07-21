<!DOCTYPE html>
<html>
<head>
    <title>Procurement Monitoring System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <meta
        property="og:title"
        content="Products-Create - Peaceful Solid Antelope"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <style type="text/css" media="print">
            @media print{
                .noprint, .noprint *{
                    display: none; !important;
                }
            }
        </style>
</head>
<body onload="print()">
    <div class="container">
        <center>
            <h3 style="margin-top: 30px;">Procurement Monitoring Report</h3>
            <hr>
        </center>
        <table id="ready" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Product Name</th>
                    <th>Product Specs</th>
                    <th>Bare Price</th>
                    <th>Product Cost</th>
                    <th>Taxes</th>
                    <th>Goods Received</th>
                    <th>Goods Issued</th>
                    <th>Reference Number</th>
                    <th>Inventory</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'productsconnection.php';
                    $sql = "SELECT * FROM product_create";
                    $result = $connection->query($sql);
                    $row = $result->fetch_assoc();{
                ?>

                <tr>
                    <td><?php echo $row['Category']?></td>
                    <td><?php echo $row['Vendor']?></td>
                    <td><?php echo $row['ProductName']?></td>
                    <td><?php echo $row['ProductType']?></td>
                    <td><?php echo $row['SalesPrice']?></td>
                    <td><?php echo $row['ProductCost']?></td>
                    <td><?php echo $row['Taxes']?></td>
                    <td><?php echo $row['ItemsPurchased']?></td>
                    <td><?php echo $row['IssuedProduct']?></td>
                    <td><?php echo $row['ReferenceNumber']?></td>
                    <td><?php echo $row['Qtyonhand']?></td>
                    
                <?php } ?>
            </tbody>
        <table>
    </div>
    <div class="container">
        <button type="" class="btn btn-info noprint" style="width:100%" onclick="window.location.replace('edit.php'
        );">CANCEL PRINTING</button>
    </div>

</body>
</html>