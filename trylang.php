<!DOCTYPE html>
<html>
<head>
    <title>Dynamically Add Items</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Add Items</h2>

    <form id="itemForm">
        <label for="itemName">Item Name:</label>
        <input type="text" id="itemName" name="itemName">
        <br><br>
        <label for="itemDescription">Item Description:</label>
        <textarea id="itemDescription" name="itemDescription"></textarea>
        <br><br>
        <label for="itemPrice">Item Price:</label>
        <input type="text" id="itemPrice" name="itemPrice">
        <br><br>
        <input type="button" value="Add Item" onclick="addItem()">
    </form>

    <h2>Added Items</h2>
    <ul id="itemList">
        <?php
        // Database connections
        $database1 = new mysqli("your_servername1", "your_username1", "your_password1", "your_dbname1");
        $database2 = new mysqli("your_servername2", "your_username2", "your_password2", "your_dbname2");

        if ($database1->connect_error || $database2->connect_error) {
            die("Connection failed: " . $database1->connect_error . " or " . $database2->connect_error);
        }

        // Retrieve items from database1
        $sql1 = "SELECT * FROM items";
        $result1 = $database1->query($sql1);

        if ($result1->num_rows > 0) {
            // Display each item from database1
            while($row = $result1->fetch_assoc()) {
                echo '<li><b>'.$row['name'].'</b><br>'.$row['description'].'<br>Price: '.$row['price'].'</li>';
            }
        } else {
            echo "No items found in database1.";
        }

        // Retrieve items from database2
        $sql2 = "SELECT * FROM items";
        $result2 = $database2->query($sql2);

        if ($result2->num_rows > 0) {
            // Display each item from database2
            while($row = $result2->fetch_assoc()) {
                echo '<li><b>'.$row['name'].'</b><br>'.$row['description'].'<br>Price: '.$row['price'].'</li>';
            }
        } else {
            echo "No items found in database2.";
        }

        $database1->close();
        $database2->close();
        ?>
    </ul>

    <script>
        function addItem() {
            // Retrieve item information from the form
            var itemName = document.getElementById('itemName').value;
            var itemDescription = document.getElementById('itemDescription').value;
            var itemPrice = document.getElementById('itemPrice').value;

            // AJAX request to save the item in database1
            $.ajax({
                url: 'save_item.php',
                method: 'POST',
                data: {
                    dbName: 'database1',
                    itemName: itemName,
                    itemDescription: itemDescription,
                    itemPrice: itemPrice
                },
                success: function(response) {
                    // Create a new list item element
                    var li = document.createElement('li');
                    li.innerHTML = response;

                    // Append the new list item to the item list
                    document.getElementById('itemList').appendChild(li);

                    // Clear the form fields
                    document.getElementById('itemName').value = '';
                    document.getElementById('itemDescription').value = '';
                    document.getElementById('itemPrice').value = '';
                }
            });

            // AJAX request to save the item in database2
            $.ajax({
                url: 'save_item.php',
                method: 'POST',
                data: {
                    dbName: 'database2',
                    itemName: itemName,
                    itemDescription: itemDescription,
                    itemPrice: itemPrice
                },
                success: function(response) {
                    // Do something with the response if needed
                }
            });
        }
    </script>
</body>
</html>
