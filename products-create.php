<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "productsrecords";

$connection = new mysqli($servername, $username, $password, $database);


$ProductName = "";
$ProductType = "";
$Remarks = "";
$SalesPrice = "";
$ProductCost = "";
$Taxes = "";
$ReferenceNumber = "";
$Vendor = "";
$ItemsPurchased = "";
$IssuedProduct = "";
$Qtyonhand = "";
$Category ="";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD']=='POST'){
  $ProductName = $_POST["ProductName"];
  $ProductType = $_POST["ProductType"];
  $Remarks = $_POST["Remarks"];
  $SalesPrice = $_POST["SalesPrice"];
  $ProductCost = $_POST["ProductCost"];
  $Taxes = $_POST["Taxes"];
  $ReferenceNumber = $_POST["ReferenceNumber"];
  $Vendor = $_POST["Vendor"];
  $ItemsPurchased = $_POST["ItemsPurchased"];
  $IssuedProduct = $_POST["IssuedProduct"];
  $Qtyonhand = $_POST["Qtyonhand"];
  $Category = $_POST["Category"];



  do {
    if (empty($ProductName) || empty($SalesPrice) || empty($ReferenceNumber) || empty($Vendor) || empty($ItemsPurchased) ){
      $errorMessage = "Fill out the required fields";
      break;
    }
    
    $sql = "INSERT INTO `product_create` (`ProductName`, `ProductType`, `Remarks`, `SalesPrice`, `ProductCost`, `Taxes`, `ReferenceNumber`, `Vendor`, `ItemsPurchased`, `IssuedProduct`, `Qtyonhand`, `Category`)
            VALUES ('$ProductName', '$ProductType', '$Remarks', '$SalesPrice', '$ProductCost', '$Taxes', '$ReferenceNumber', '$Vendor', '$ItemsPurchased', '$IssuedProduct', '$Qtyonhand', '$Category')";
    $result = $connection->query($sql);
    

    $ProductName = "";
    $ProductType = "";
    $Remarks = "";
    $SalesPrice = "";
    $ProductCost = "";
    $Taxes = "";
    $ReferenceNumber = "";
    $Vendor = "";
    $ItemsPurchased = "";
    $IssuedProduct = "";
    $Qtyonhand = "";
    $Category ="";

    $successMessage = "Record added successfully";

    header("location: products-products.php");
    exit;

  } while (false);
}

?>
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
    <title>Products-Create - Peaceful Solid Antelope</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <meta
      property="og:title"
      content="Products-Create - Peaceful Solid Antelope"
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div>
      <link href="./products-create.css" rel="stylesheet" />

      <div class="products-create-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1000h.png"
          class="products-create-allbong-l2oed-f-as-h8unsplash1"
        />
        <img
          alt="Rectangle1795"
          src="public/playground_assets/rectangle1795-84w-1000h.png"
          class="products-create-rectangle"
        />
        <div class="products-create-products-record">
          <div class="products-create-products-record1">
            <a href="products-products.php" class="products-create-navlink">
              <img
                alt="Rectangle401713"
                src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/8d9fde22-15e8-4804-95e8-439b9a174a3b?org_if_sml=12180"
                class="products-create-rectangle40"
              />
            </a>
            <a href="products-products.php" class="products-create-navlink1">
              <img
                alt="tablericonarrowleft1713"
                src="public/playground_assets/tablericonarrowleft1713-l8ut.svg"
                class="products-create-tablericonarrowleft"
              />
            </a>
            <img
              alt="Rectangle171713"
              src="public/playground_assets/rectangle171713-zvl.svg"
              class="products-create-rectangle17"
            />
            <span class="products-create-text"><span>Products</span></span>
            <img
              alt="Rectangle231713"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/171c0dee-3506-41c6-8663-34736e6e3776?org_if_sml=15471"
              class="products-create-rectangle23"
            />
            <img
              alt="Line151713"
              src="public/playground_assets/line151713-ha19.svg"
              class="products-create-line15"
            />
            <span class="products-create-text10">
              <span>Product Name</span>
            </span>
            <span class="products-create-text12">
              <span>Product Specs.:</span>
            </span>
            <span class="products-create-text14">Remarks</span>
            <span class="products-create-text15">
              <span>Bare Price:</span>
            </span>
            <span class="products-create-text17">Category:</span>
            <span class="products-create-text18">Product Cost:</span>
            <span class="products-create-text19">Taxes:</span>
            <span class="products-create-text20">Reference Number:</span>
            <span class="products-create-text21">Vendor:</span>
            <span class="products-create-text22">Items Purchased:</span>
            <span class="products-create-text23">Inventory:</span>
            <span class="products-create-text24">Goods Issued:</span>
          </div>
          <div class="container my-5">
          <header data-role="Header" class="products-create-header">
          <div class="products-create-menutabs">
            <img
              alt="Rectangle311711"
              src="public/playground_assets/rectangle311711-kuk-200h.png"
              class="products-create-rectangle31"
            />
            <span class="products-create-text25">
              <span><?php echo $greeting; ?></span>
            </span>
          </div>
          <a href="products-products.php" class="products-create-navlink2">
            <div class="products-create-product">
              <span class="products-create-text27"><span>PRODUCTS</span></span>
              </div>
          </a>
          <a href="record-primary.php" class="products-create-navlink3">
            <div class="products-create-record">
              <span class="products-create-text29">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="products-create-navlink4">
            <div class="products-create-log-out">
              <button class="products-create-buttonbutton" onclick='confirmLogout(event)'>
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="products-create-rectangle6"
                />
                <span class="products-create-text30"><span>Log Out</span></span>
              </button>
            </div>
          </a>
        </header>
    <form method="post">
          <input
            type="text"
            placeholder="Product Name"
            class="products-create-product-name input"
            name="ProductName"
            value="<?php echo $ProductName; ?>"
          />
          <textarea
            placeholder="Product Specifications"
            class="products-create-product-type textarea"
            name="ProductType"
            value="<?php echo $ProductType; ?>"></textarea>
          <textarea
            placeholder="Remarks"
            class="products-create-remarks textarea"
            name="Remarks"
            value="<?php echo $Remarks; ?>"></textarea>
          <input
            type="text"
            placeholder="Bare Price"
            class="products-create-sales-price input"
            name="SalesPrice"
            value="<?php echo $SalesPrice; ?>"
          />
          <input
            type="text"
            placeholder="Product Cost"
            class="products-create-product-cost input"
            name="ProductCost"
            value="<?php echo $ProductCost; ?>"
          />  
          <input
            type="text"
            placeholder="Taxes"
            class="products-create-taxes input"
            name="Taxes"
            value="<?php echo $Taxes; ?>"
          />
          <input
            type="text"
            placeholder="Reference Number"
            class="products-create-reference-number input"
            name="ReferenceNumber"
            value="<?php echo $ReferenceNumber; ?>"
          />
          <input
            type="text"
            placeholder="Vendor"
            class="products-create-vendor input"
            name="Vendor"
            value="<?php echo $Vendor; ?>"
          />
          <input
            type="text"
            placeholder="Goods Received"
            class="products-create-item-purchased input"
            name="ItemsPurchased"
            value="<?php echo $ItemsPurchased; ?>"
          />
          <input
            type="text"
            placeholder="Goods Issued"
            class="products-create-issued-product input"
            name="IssuedProduct"
            value="<?php echo $IssuedProduct; ?>"
          />
          <input
            type="text"
            placeholder="Inventory"
            class="products-create-quantity-on-hand input"
            name="Qtyonhand"
            value="<?php echo $Qtyonhand; ?>"
          />
          <input
            type="text"
            placeholder="Category"
            class="products-create-category input"
            name="Category"
            value="<?php echo $Category; ?>"
          />  
          <div class="products-create-pr">
            <button type="submit" href="/html7/products-products.php">
              <img
                alt="Rectangle20I171"
                src="public/playground_assets/rectangle20i171-4gus.svg"
                class="products-create-rectangle20"
              />
              <span class="products-create-text02"><span>SAVE</span></span>
            </button>   
          </div>
          <?php
          if ( !empty($errorMessage) ) {
              echo "
              <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong> (Product Name, Sales Price, Reference Number, Vendor, Items Purchased)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
              ";
          }
          ?>
          <?php
          if (!empty($successMessage)) {
            echo "
            <div class='row mb=3'>
              <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissable fade show' role='alert'>
                 <strong>$successMessage</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
              </div>  
            </div>
           ";
          }
          ?>
          
          </form>
    </div>
          <div class="products-create-container1"></div>
        </div>
        <footer class="products-create-footer">
          <a href="contact-us.php" class="products-create-navlink5">
            <div class="products-create-container2">
              <span class="products-create-text32">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="products-create-navlink6">
            <div class="products-create-container3">
              <span class="products-create-text33">Our Team</span>
            </div>
          </a>
          <a href="about-us.php" class="products-create-navlink7">
            <div class="products-create-container4">
              <span class="products-create-text34">About Us</span>
            </div>
          </a>
        </footer>
      </div>
    </div>
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
