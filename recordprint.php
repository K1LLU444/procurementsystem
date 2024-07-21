<!DOCTYPE html>
<html>
<head>
    <title>Procurement blahblahblah</title>
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
            <h3 style="margin-top: 30px;">Procurement blahblah</h3>
            <hr>
        </center>
        <table id="ready" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th>Reference Number</th>
                    <th>Company Name</th>
                    <th>Vendor</th>
                    <th>Vendor Reference</th>
                    <th>Issued Date</th>
                    <th>Date Received</th>
                    <th>Product Reference</th>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Taxes</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'createconnection.php';
                    $sql = "SELECT * FROM record_create";
                    $result = $connection->query($sql);
                    $row = $result->fetch_assoc();{
                ?>

                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['ReferenceNo']?></td>
                    <td><?php echo $row['CompanyName']?></td>
                    <td><?php echo $row['Vendor']?></td>
                    <td><?php echo $row['VendorReference']?></td>
                    <td><?php echo $row['IssuedDate']?></td>
                    <td><?php echo $row['DateReceived']?></td>
                    <td><?php echo $row['ProductReference']?></td>
                    <td><?php echo $row['Product']?></td>
                    <td><?php echo $row['Description']?></td>
                    <td><?php echo $row['Quantity']?></td>
                    <td><?php echo $row['Price']?></td>
                    <td><?php echo $row['Taxes']?></td>
                    <td><?php echo $row['Subtotal']?></td>
                <?php } ?>
            </tbody>
        <table>
    </div>
    <div class="container">
        <button type="" class="btn btn-info noprint" style="width:100%" onclick="window.location.replace('record-edit.php'
        );">CANCEL PRINTING</button>
    </div>

</body>
</html>