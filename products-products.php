<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id=$id");
  $row = mysqli_fetch_assoc($result);

  if ($row) {
    $greeting = "HELLO, " . $row["name"];
  } else {
    $greeting = "HELLO";
  }
}
else{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products-Products - Peaceful Solid Antelope</title>
    <meta
      property="og:title"
      content="Products-Products - Peaceful Solid Antelope"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div>
      <link href="./products-products.css" rel="stylesheet" />

      <div class="products-products-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1000h.png"
          class="products-products-allbong-l2oed-f-as-h8unsplash1"
        />
        <img
          alt="Rectangle1795"
          src="public/playground_assets/rectangle1795-84w-1000h.png"
          class="products-products-rectangle"
        />
        <div class="products-products-products-products">
          <div class="products-products-products">
            <img
              alt="Rectangle211796"
              src="public/playground_assets/rectangle211796-uhqjr-700h.png"
              class="products-products-rectangle21"
            />
            <div class="record-primary-primary4">
              <table class="table table-hover table-light table-striped">
                <thead class=" thead-dark">
                  <tr>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Product Name</th>
                    <th>Product Specs</th>
                    <th>Bare Price</th>
                    <th>Product Cost</th>
                    <th>Goods Received</th>
                    <th>Goods Issued</th>
                    <th>Reference Number</th>
                    <th>Inventory</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "productsrecords";

                  $connection = new mysqli($servername, $username, $password, $database);

                  if($connection->connect_error){
                    die("Connection failed: ". $connection->connect_error);
                  }

                  $sql = "SELECT * FROM `product_create`;";
                  $result = $connection->query($sql);

                  if(!$result){
                    die("Invalid query: ". $connection->connect_error);
                  }

                  while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                      <td>$row[Category]</td>
                      <td>$row[Vendor]</td>
                      <td>$row[ProductName]</td>
                      <td>$row[ProductType]</td>
                      <td>$row[SalesPrice]</td>
                      <td>$row[ProductCost]</td>
                      <td>$row[ItemsPurchased]</td>
                      <td>$row[IssuedProduct]</td>
                      <td>$row[ReferenceNumber]</td>
                      <td>$row[Qtyonhand]</td>
                      <td>
                        <a class='btn btn-primary btn-sm' href='/html7/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/html7/products_primarytotrash.php?id=$row[id]' onclick='confirmTrash(event)'>Delete</a>
                      </td>
                    </tr>
                    ";
                  }
                  ?>
                </tbody>
              </table>
            </div>
              <img
              alt="Rectangle341796"
              src="public/playground_assets/rectangle341796-r48l-200h.png"
              class="products-products-rectangle34"
            />
            <a href="products-create.php" class="products-products-create">
              <img
                alt="Rectangle6I179"
                src="public/playground_assets/rectangle6i179-mw5n-200h.png"
                class="products-products-rectangle6"
              />
              <span class="products-products-text"><span>+ CREATE</span></span>
            </a>
            <a href="products-trash-bin.php" class="products-products-navlink">
              <div class="products-products-trash-bin">
                <img
                  alt="Rectangle381736"
                  src="public/playground_assets/rectangle381736-oe8s-200h.png"
                  class="products-products-rectangle38"
                />
                <span class="products-products-text02">
                  <span>TRASH BIN</span>
                </span>
                <img
                  alt="tablericontrash1736"
                  src="public/playground_assets/tablericontrash1736-p2u.svg"
                  class="products-products-tablericontrash"
                />
              </div>
            </a>
            <div class="products-products-products1">
              <img
                alt="Rectangle401711"
                src="public/playground_assets/rectangle401711-27tj-200h.png"
                class="products-products-rectangle40"
              />
              <span class="products-products-text04">
                <span>PRODUCTS</span>
              </span>
              <img
                alt="tablericonbuildingstore1711"
                src="public/playground_assets/tablericonbuildingstore1711-b72.svg"
                class="products-products-tablericonbuildingstore"
              />
            </div>
          </div>
        </div>
        <footer class="products-products-footer">
          <a href="contact-us.php" class="products-products-navlink4">
            <div class="products-products-container1">
              <span class="products-products-text13">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="products-products-navlink5">
            <div class="products-products-container2">
              <span class="products-products-text14">Our Team</span>
            </div>
          </a>
          <a href="about-us.php" class="products-products-navlink6">
            <div class="products-products-container3">
              <span class="products-products-text15">About Us</span>
            </div>
          </a>
        </footer>
        <header data-role="Header" class="products-products-header">
          <div class="products-products-menutabs">
            <img
              alt="Rectangle311711"
              src="public/playground_assets/rectangle311711-kuk-200h.png"
              class="products-products-rectangle31"
            />
            <span class="products-products-text06">
              <span><?php echo $greeting; ?></span>
            </span>
          </div>
          <a href="products-products.php" class="products-products-navlink1">
            <div class="products-products-product">
              <span class="products-products-text08">
                <span>PRODUCTS</span>
              </span>
            </div>
          </a>
          <a href="record-primary.php" class="products-products-navlink2">
            <div class="products-products-record">
              <span class="products-products-text10">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="products-products-navlink3">
            <div class="products-products-log-out">
              <button class="products-products-buttonbutton" onclick='confirmLogout(event)'>
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="products-products-rectangle61"
                />
                <span class="products-products-text11">
                  <span>Log Out</span>
                </span>
              </button>
            </div>
          </a>
        </header>
      </div>
    </div>
    <script>
  function confirmTrash(event) {
    // Display the confirmation dialog
    var confirmation = confirm("Are you sure you want to move this row to trash bin?");

    // Prevent the default delete action if the user cancels the deletion
    if (!confirmation) {
      event.preventDefault();
    }
  }
</script>
<script>
  function confirmLogout(event) {
    // Display the confirmation dialog
    var confirmation = confirm("Are you sure you want to logout?");

    // Prevent the default delete action if the user cancels the deletion
    if (!confirmation) {
      event.preventDefault();
    }
  }
</script>
  </body>
</html>
