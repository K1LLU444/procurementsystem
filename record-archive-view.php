<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "records";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$ReferenceNo = "";
$ReferenceNo1= "";
$Vendor = "";
$VendorReference = "";
$IssuedDate = "";
$DateReceived = "";
$CompanyName = "";
$ProductReference = "";
$Product = "";
$Description = "";
$Quantity = "";
$Price = "";
$Taxes = "";
$Subtotal = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["id"])) {
        header("location: /html7/record-archive-view.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM record_archive
    WHERE id = '$id'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();


    if (!$row) {
        header("location: /html7/record-archive-view.php");
        exit;
    }

        $ReferenceNo = $row["ReferenceNo"];
        $Vendor = $row["Vendor"];
        $VendorReference = $row["VendorReference"];
        $IssuedDate = $row["IssuedDate"];
        $DateReceived = $row["DateReceived"];
        $CompanyName = $row["CompanyName"];
        $ProductReference = $row["ProductReference"];
        $Product = $row["Product"];
        $Description = $row["Description"];
        $Quantity = $row["Quantity"];
        $Price = $row["Price"];
        $Taxes = $row["Taxes"];
        $Subtotal = $row["Subtotal"]; 
}
else {
    
    $ReferenceNo = $_POST["ReferenceNo"];
    $Vendor = $_POST["Vendor"];
    $VendorReference = $_POST["VendorReference"];
    $IssuedDate = $_POST["IssuedDate"];
    $DateReceived = $_POST["DateReceived"];
    $CompanyName = $_POST["CompanyName"];
    $ProductReference = $_POST["ProductReference"];
    $Product = $_POST["Product"];
    $Description = $_POST["Description"];
    $Quantity = $_POST["Quantity"];
    $Price = $_POST["Price"];
    $Taxes = $_POST["Taxes"];
    $Subtotal = $_POST["Subtotal"];

    do {
        if ( empty($ReferenceNo) || empty($Vendor) || empty($IssuedDate) || empty($DateReceived) || empty($Quantity) || empty($Price)){
          $errorMessage = "Fill out the required fields";
          break;
        }
        

        $sql = "UPDATE record_create AS t1
        INNER JOIN record_create1 AS t2 ON t1.id = t2.id
        SET t1.Vendor = '$Vendor',
            t1.VendorReference = '$VendorReference',
            t1.IssuedDate = '$IssuedDate',
            t1.DateReceived = '$DateReceived',
            t1.CompanyName = '$CompanyName',
            t2.ProductReference = '$ProductReference',
            t2.Product = '$Product',
            t2.Description = '$Description',
            t2.Quantity = '$Quantity',
            t2.Price = '$Price',
            t2.Taxes = '$Taxes',
            t2.Subtotal = '$Subtotal'
        WHERE t1.id = '$id' AND t2.id = '$id'";
        $result = $connection->query($sql);


        if (!$result) {
            $errorMessage = "Invalid query: ".$connection->error;
            break;
        }
    
        $successMessage = "Record added successfully";
    
        header("location: /html7/record-archive-view.php");
        exit;
    
      } while (false);
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Record-Edit - Peaceful Solid Antelope</title>
    <meta
      property="og:title"
      content="Record-Create - Peaceful Solid Antelope"
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
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script language = “javascript” type=“text/javascript”></script>
  </head>



  <body>
    <div>
      <link href="./record-create.css" rel="stylesheet" />

      <div class="record-create-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1500w.png"
          class="record-create-allbong-l2oed-f-as-h8unsplash1"
        />
        <footer class="record-create-footer">
          <a href="contact-us.php" class="record-create-navlink">
            <div class="record-create-container1">
              <span class="record-create-text">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="record-create-navlink01">
            <div class="record-create-container2">
              <span class="record-create-text01">Our Team</span>
            </div>
          </a>
          <a href="our-team.php" class="record-create-navlink02">
            <div class="record-create-container3">
              <span class="record-create-text02">About Us</span>
            </div>
          </a>
        </footer>
        <div class="record-create-purchase-record">
          <img
            alt="Rectangle1763"
            src="public/playground_assets/rectangle1763-ju6e-1600w.png"
            class="record-create-rectangle"
          />
          <div class="record-create-record">
            <a href="record-archive.php" class="record-create-navlink03">
              <img
                alt="Rectangle401783"
                src="public/playground_assets/rectangle401783-p1f9-200w.png"
                class="record-create-rectangle40"
              />
            </a>
            <a href="record-archive.php" class="record-create-navlink04">
              <img
                alt="tablericonarrowleft1783"
                src="public/playground_assets/tablericonarrowleft1783-qw2u.svg"
                class="record-create-tablericonarrowleft"
              />
            </a>
            <img
              alt="Rectangle171784"
              src="public/playground_assets/rectangle171784-pake.svg"
              class="record-create-rectangle17"
            />
            <span class="record-create-text03">
              <span>Purchase Record</span>
            </span>
            
            <img
              alt="Rectangle231785"
              src="public/playground_assets/rectangle231785-c6nd-1400w.png"
              class="record-create-rectangle23"
            />

            <form method="post">
            <input type="hidden" name='id' value="<?php echo $id; ?>">
              <input
                type="text"
                placeholder="Reference No."
                class="record-create-refno input"
                name="ProductReference"
                value="<?php echo $ProductReference; ?>"readonly
              />
              <input
                type="number"
                placeholder="Quantity"
                class="record-create-qty input"
                name="Quantity"
                value="<?php echo $Quantity; ?>"readonly
              />
              <input
                type="text"
                placeholder="Product"
                class="record-create-product input"
                name="Product"
                value="<?php echo $Product; ?>"readonly
              />
              <input
                type="text"
                placeholder="Price"
                class="record-create-price input"
                name="Price"
                value="<?php echo $Price; ?>"readonly
              />
              <input
                type="text"
                placeholder="Description"
                class="record-create-desc input"
                name="Description"
                value="<?php echo $Description; ?>"readonly
              />
              <input
                type="text"
                placeholder="Taxes"
                class="record-create-taxes input"
                name="Taxes"
                value="<?php echo $Taxes; ?>"readonly
              />
              <input
                type="text"
                placeholder="Subtotal"
                class="record-create-stotal input"
                name="Subtotal"
                value="<?php echo (($Quantity * $Price)*($Taxes/100)+($Quantity * $Price)); ?>"
                readonly
              />
              <input
                type="text"
                placeholder="Reference Number"
                class="record-create-rn input"
                name="ReferenceNo"
                value="<?php echo $ReferenceNo; ?>"
                readonly
              />
              <input
                type="text"
                placeholder="Company Name"
                class="record-create-cn input"
                name="CompanyName"
                value="<?php echo $CompanyName; ?>"readonly
              />
              <input
                type="text"
                placeholder="Vendor"
                class="record-create-ven input"
                name="Vendor"
                value="<?php echo $Vendor; ?>"readonly
              />
              <input
                type="text"
                placeholder="Vendor Reference"
                class="record-create-vr input"
                name="VendorReference"
                value="<?php echo $VendorReference; ?>"readonly
              />
              <input
                type="date"
                placeholder="Issued Date"
                class="record-create-idate input"
                name="IssuedDate"
                value="<?php echo $IssuedDate; ?>"readonly
              />
              <input
                type="date"
                placeholder="Date Received"
                class="record-create-dater input"
                name="DateReceived"
                value="<?php echo $DateReceived; ?>"readonly
              />
              <img
                alt="Line151785"
                src="public/playground_assets/line151785-nez.svg"
                class="record-create-line15"
              />

              <div class="record-create-pr">
                
              </div>
              
              <div class="record-create-pr2">
                <img
                  alt="Rectangle20I178"
                  src="public/playground_assets/rectangle20i178-tkui.svg"
                  class="record-create-rectangle202"
                />
                <span class="record-create-text09"><span>DOWNLOAD</span></span>
              </div>
              <div class="record-create-pr3">
                <img
                  alt="Rectangle20I178"
                  src="public/playground_assets/rectangle20i178-5re9.svg"
                  class="record-create-rectangle203"
                />
                <span class="record-create-text11"><span>PRINT</span></span>
              </div>

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
              <?php
                if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <strong>$errorMessage</strong> (Reference Number, Vendor, Issued Date, Date Recieved, Quantity, Price)
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
                }
              ?>
            </form>
            <span class="record-create-text13">
              <span>Purchase Record</span>
            </span>
            <span class="record-create-text15"><span>Vendor:</span></span>
            <span class="record-create-text17"><span>Issued Date</span></span>
            <span class="record-create-text19"><span>Date Received</span></span>
            <span class="record-create-text21">
              <span>Vendor Reference:</span>
            </span>
            <img
              alt="Rectangle151791"
              src="public/playground_assets/rectangle151791-koms.svg"
              class="record-create-rectangle15"
            />
            <span class="record-create-text23"><span>Product</span></span>
            <img
              alt="Rectangle151791"
              src="public/playground_assets/rectangle151791-2z6n.svg"
              class="record-create-rectangle151"
            />
            <span class="record-create-text25"><span>Description</span></span>
            <img
              alt="Rectangle151791"
              src="public/playground_assets/rectangle151791-yz5q.svg"
              class="record-create-rectangle152"
            />
            <span class="record-create-text27"><span>Quantity</span></span>
            <img
              alt="Rectangle151791"
              src="public/playground_assets/rectangle151791-wldn.svg"
              class="record-create-rectangle153"
            />
            <span class="record-create-text29"><span>Price</span></span>
            <img
              alt="Rectangle151792"
              src="public/playground_assets/rectangle151792-y00i.svg"
              class="record-create-rectangle154"
            />
            <span class="record-create-text31"><span>Taxes</span></span>
            <img
              alt="Rectangle151792"
              src="public/playground_assets/rectangle151792-50m.svg"
              class="record-create-rectangle155"
            />
            <span class="record-create-text33"><span>Subtotal</span></span>
            <img
              alt="Rectangle151792"
              src="public/playground_assets/rectangle151792-9tvb.svg"
              class="record-create-rectangle156"
            />
            <span class="record-create-text35"><span>Reference No.</span></span>
            <img
              alt="Rectangle271792"
              src="public/playground_assets/rectangle271792-2qot.svg"
              class="record-create-addbutton"
            />
            <span class="record-create-text37"><span>Add +</span></span>
          
            <img
              alt="Line141795"
              src="public/playground_assets/line141795-i2wf.svg"
              class="record-create-line14"
            />
          </div>
        </div>
        <header data-role="Header" class="record-create-header">
          <div class="record-create-menutabs">
            <img
              alt="Rectangle311711"
              src="public/playground_assets/rectangle311711-kuk-200h.png"
              class="record-create-rectangle31"
            />
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="record-create-line36"
            />
            <span class="record-create-text51"><span>HELLO, KYLA!</span></span>
          </div>
          <a href="products-products.php" class="record-create-navlink07">
            <div class="record-create-product1">
              <span class="record-create-text53"><span>PRODUCTS</span></span>
            </div>
          </a>
          <a href="record-primary.php" class="record-create-navlink08">
            <div class="record-create-record1">
              <span class="record-create-text55">RECORD</span>
            </div>
          </a>
          <a href="are-you-sure.php" class="record-create-navlink09">
            <div class="record-create-log-out">
              <button class="record-create-buttonbutton">
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="record-create-rectangle6"
                />
                <span class="record-create-text56"><span>Log Out</span></span>
              </button>
            </div>
          </a>
        </header>
      </div>
    </div>
  </body>
</html>
