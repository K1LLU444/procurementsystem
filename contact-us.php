<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$connection = new mysqli($servername, $username, $password, $database);


$Name = "";
$PhoneNumber = "";
$Email = "";
$Message = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD']=='POST'){
  $Name = $_POST["Name"];
  $PhoneNumber = $_POST["PhoneNumber"];
  $Email = $_POST["Email"];
  $Message = $_POST["Message"];

  do {
    if (empty($Name) || empty($Email) || empty($Message) ){
      $errorMessage = "Fill out the required fields";
      break;
    }
    
    $sql = "INSERT INTO `contactusfeedback` (`Name`, `PhoneNumber`, `Email`, `Message`)
            VALUES ('$Name', '$PhoneNumber', '$Email', '$Message')";
    $result = $connection->query($sql);
    

    $Name = "";
    $PhoneNumber = "";
    $Email = "";
    $Message = "";

    $successMessage = "Record added successfully";

    header("location: contact-us.php");
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
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="og:title" content="Contact-Us - Peaceful Solid Antelope" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact-Us - Peaceful Solid Antelope</title>
    <link rel="stylesheet" href="style.css" />
    

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div>
      <link href="contactus.css" rel="stylesheet" />

      <div class="contact-us-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1000h.png"
          class="contact-us-allbong-l2oed-f-as-h8unsplash1"
        />
        <img
          alt="Rectangle1795"
          src="public/playground_assets/rectangle573142-5yx-1500w.png"
          class="contact-us-rectangle"
        />
        <form method="post">
        <div class="contact-us-group78">
          <div class="contact-us-your-email">
            <img
              alt="Rectangle583696"
              src="public/playground_assets/rectangle583696-9hn7-200h.png"
              class="contact-us-rectangle60"
            />
            <input
              type="text"
              placeholder="Your Email"
              class="contact-us-textinput input"
              name="Email"
            />
            <img
              alt="tablericonmailfilled3610"
              src="public/playground_assets/tablericonmailfilled3610-f8ab.svg"
              class="contact-us-tablericonmailfilled"
            />
          </div>
          <div class="contact-us-pr">
            <button type="submit" class="contact-us-button" href="/html7/contact-us.php">
              <img
                alt="Rectangle20I361"
                src="public/playground_assets/rectangle20i361-7856.svg"
                class="contact-us-rectangle20"
              />
              <span class="contact-us-text"><span>SEND</span></span>
            </button>
          </div>
          <div class="contact-us-your-name">
            <img
              alt="Rectangle43694"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/9acee77d-2d93-4c49-b976-23bd2747f92c?org_if_sml=1200"
              class="contact-us-rectangle4"
            />
            <img
              alt="tablericonuser3610"
              src="public/playground_assets/tablericonuser3610-yd1s.svg"
              class="contact-us-tablericonuser"
            />
            <input
              type="text"
              placeholder="Your Name"
              class="contact-us-textinput1 input"
              name="Name"
            />
          </div>
          <div class="contact-us-container1">
            <img
              alt="Rectangle603610"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/300171f4-5360-4974-b39a-a64aca275fe9?org_if_sml=11027"
              class="contact-us-rectangle601"
            />
            <textarea
              placeholder="Your Message"
              class="contact-us-textarea textarea"
              name="Message"
            ></textarea>
            <img
              alt="tablericonmessage3611"
              src="public/playground_assets/tablericonmessage3611-szxp.svg"
              class="contact-us-tablericonmessage"
            />
          </div>
          <div class="contact-us-your-phone-number">
            <img
              alt="Rectangle583696"
              src="public/playground_assets/rectangle583696-9hn7-200h.png"
              class="contact-us-rectangle58"
            />
            <input
              type="text"
              placeholder="Your Phone Number (Optional)"
              class="contact-us-textinput2 input"
              name="PhoneNumber"
            />
            <img
              alt="tablericonphonefilled3610"
              src="public/playground_assets/tablericonphonefilled3610-h6.svg"
              class="contact-us-tablericonphonefilled"
            />
          </div>
          <div class="container my-5">
          <?php
          if ( !empty($errorMessage) ) {
              echo "
              <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong> (Name, Email, Message)
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
          </div>
    </form>
          <div class="contact-us-container2">
            <span class="contact-us-text02">
              <span>
                If you have any questions, we're here to assist you. We look
                forward to hearing from you.
              </span>
            </span>
          </div>
        </div>
        <header data-role="Header" class="contact-us-header">
          <div class="contact-us-menutabs">
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="contact-us-line36"
            />
            <span class="contact-us-text07"><span><?php echo $greeting; ?></span></span>
          </div>
          <a href="products-products.php" class="contact-us-navlink2">
            <div class="contact-us-product">
              <span class="contact-us-text09"><span>PRODUCTS</span></span>
            </div>
          </a>
          <a href="record-primary.php" class="contact-us-navlink3">
            <div class="contact-us-record">
              <span class="contact-us-text11">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="contact-us-navlink4">
            <div class="contact-us-log-out">
              <button class="contact-us-buttonbutton" onclick='confirmLogout(event)'>
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="contact-us-rectangle6"
                />
                <span class="contact-us-text12"><span>Log Out</span></span>
              </button>
            </div>
          </a>
        </header>
        <footer class="contact-us-footer">
          <div class="contact-us-container3">
            <span class="contact-us-text04">Contact Us</span>
          </div>
          <a href="our-team.php" class="contact-us-navlink">
            <div class="contact-us-container4">
              <span class="contact-us-text05">Our Team</span>
            </div>
          </a>
          <a href="about-us.php" class="contact-us-navlink1">
            <div class="contact-us-container5">
              <span class="contact-us-text06">About Us</span>
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
