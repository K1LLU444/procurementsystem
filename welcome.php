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
    <title>Welcome - Peaceful Solid Antelope</title>
    <meta property="og:title" content="Welcome - Peaceful Solid Antelope" />
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
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div>
      <link href="./welcome.css" rel="stylesheet" />

      <div class="welcome-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1500w.png"
          class="welcome-allbong-l2oed-f-as-h8unsplash1"
        />
        <footer class="welcome-footer">
          <a href="contact-us.php" class="welcome-navlink">
            <div class="welcome-container1">
              <span class="welcome-text">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="welcome-navlink1">
            <div class="welcome-container2">
              <span class="welcome-text01">Our Team</span>
            </div>
          </a>
          <a href="about-us.php" class="welcome-navlink2">
            <div class="welcome-container3">
              <span class="welcome-text02">About Us</span>
            </div>
          </a>
        </footer>
        <div class="welcome-welcome">
          <img
            alt="Rectangle1721"
            src="public/playground_assets/rectangle1721-riaa-1700w.png"
            class="welcome-rectangle"
          />
          <div class="welcome-menutabs">
            <span class="welcome-text03"><span><?php echo $greeting; ?></span></span>
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="welcome-line36"
            />
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="welcome-line361"
            />
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="welcome-line362"
            />
            <a href="products-products.php" class="welcome-navlink3">
              <div class="welcome-product">
                <span class="welcome-text05"><span>PRODUCTS</span></span>
              </div>
            </a>
            <a href="record-primary.php" class="welcome-navlink4">
              <div class="welcome-record">
                <span class="welcome-text07">RECORD</span>
              </div>
            </a>
            <a href="logout.php" class="welcome-navlink5">
              <div class="welcome-log-out">
                <button class="welcome-buttonbutton" onclick='confirmLogout(event)'>
                  <img
                    alt="Rectangle61714"
                    src="public/playground_assets/rectangle61714-8xut-200h.png"
                    class="welcome-rectangle6"
                  />
                  <span href="logout.php" class="welcome-text08"><span>Log Out</span></span>
                </button>
              </div>
            </a>
          </div>
          <div class="welcome-body">
            <span class="welcome-text10">
              <span>
                THE ONLY SOFTWARE YOU NEED TO KEEP YOUR BUSINESS RECORDS ON
                TRACK.
              </span>
            </span>
            <span class="welcome-text12">
              <span>
                <span>TRACK IT</span>
                <br />
                <span>SAVE IT</span>
                <br />
                <span>SECURE IT</span>
              </span>
            </span>
            <img
              alt="Ellipse21721"
              src="public/playground_assets/ellipse21721-pkre-900h.png"
              class="welcome-ellipse2"
            />
            <span class="welcome-text19"><span>Procurement</span></span>
            <img
              alt="Rectangle121722"
              src="public/playground_assets/rectangle121722-kgpi.svg"
              class="welcome-rectangle12"
            />
            <img
              alt="Rectangle131722"
              src="public/playground_assets/rectangle131722-b52z.svg"
              class="welcome-rectangle13"
            />
            <span class="welcome-text21"><span>PROCURIFY</span></span>
          </div>
        </div>
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
