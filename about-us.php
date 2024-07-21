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
    <title>About-Us - Peaceful Solid Antelope</title>
    <meta property="og:title" content="About-Us - Peaceful Solid Antelope" />
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
  </head>
  <body>
    <div>
      <link href="./about-us.css" rel="stylesheet" />

      <div class="about-us-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1000h.png"
          class="about-us-allbong-l2oed-f-as-h8unsplash1"
        />
        <img
          alt="Rectangle1795"
          src="public/playground_assets/rectangle1795-84w-1000h.png"
          class="about-us-rectangle"
        />
        <img
          alt="Rectangle211734"
          src="public/playground_assets/rectangle211734-obw9-1500w.png"
          class="about-us1-rectangle21"
        />
        <div class="about-us-aboutus">
          <span class="about-us-text">
            <span>KEEPING YOUR RECORDS ON TRACK</span>
          </span>
          <span class="about-us-text02">
            <span>
              Our mission is to give you the best record keeping tool. Here you can
              build your receipts, your records and your data with no
              complications.
            </span>
          </span>
          <span class="about-us-text04">
            <span>
              Procurify makes your procurement on track, it helps companies to
              secure and keep their receipts safe.
            </span>
          </span>
          <span class="about-us-text06">
            <span class="about-us-text07">What makes</span>
            <span class="about-us-text08">Procurify</span>
            <span>different?</span>
          </span>
        </div>
        <header data-role="Header" class="about-us-header">
          <div class="about-us-menutabs">
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="about-us-line36"
            />
            <span class="about-us-text10"><span><?php echo $greeting; ?></span></span>
          </div>
          <a href="products-products.php" class="about-us-navlink">
            <div class="about-us-product">
              <span class="about-us-text12"><span>PRODUCTS</span></span>
            </div>
          </a>
          <a href="record-primary.php" class="about-us-navlink1">
            <div class="about-us-record">
              <span class="about-us-text14">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="about-us-navlink2">
            <div class="about-us-log-out"></div>
          </a>
          <a href="logout.php" class="about-us-navlink3">
            <div class="about-us-log-out1" onclick='confirmLogout(event)'>
              <button class="about-us-buttonbutton">
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="about-us-rectangle6"
                />
                <span class="about-us-text15"><span>Log Out</span></span>
              </button>
            </div>
          </a>
        </header>
        <footer class="about-us-footer">
          <a href="contact-us.php" class="about-us-navlink4">
            <div class="about-us-container1">
              <span class="about-us-text17">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="about-us-navlink5">
            <div class="about-us-container2">
              <span class="about-us-text18">Our Team</span>
            </div>
          </a>
          <div class="about-us-container3">
            <span class="about-us-text19">About Us</span>
          </div>
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
