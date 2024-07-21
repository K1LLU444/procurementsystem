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
    <title>Our-Team - Peaceful Solid Antelope</title>
    <meta property="og:title" content="Our-Team - Peaceful Solid Antelope" />
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
      <link href="./our-team.css" rel="stylesheet" />

      <div class="our-team-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1000h.png"
          class="our-team-allbong-l2oed-f-as-h8unsplash1"
        />
        <img
          alt="Rectangle1795"
          src="public/playground_assets/rectangle1795-84w-1000h.png"
          class="our-team-rectangle"
        />
        <header data-role="Header" class="our-team-header">
          <div class="our-team-menutabs">
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="our-team-line36"
            />
            <span class="our-team-text"><span><?php echo $greeting; ?></span></span>
          </div>
          <a href="products-products.php" class="our-team-navlink">
            <div class="our-team-product">
              <span class="our-team-text02"><span>PRODUCTS</span></span>
            </div>
          </a>
          <a href="record-primary.php" class="our-team-navlink1">
            <div class="our-team-record">
              <span class="our-team-text04">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="our-team-navlink2">
            <div class="our-team-log-out">
              <button class="our-team-buttonbutton" onclick='confirmLogout(event)'>
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="our-team-rectangle6"
                />
                <span class="our-team-text05"><span>Log Out</span></span>
              </button>
            </div>
          </a>
        </header>
        <div class="our-team-ourcompany">
          <span class="our-team-text07">
            <span>
              <span>CO-FOUNDER</span>
              <br />
              <span>DIGITAL ARTIST</span>
            </span>
          </span>
          <div class="our-team-frame1">
            <div class="our-team-group63"></div>
          </div>
          <img
            alt="Rectangle615410"
            src="public/playground_assets/rectangle615410-yvy4.svg"
            class="our-team-rectangle61"
          />
          <span class="our-team-text12"><span>MEET OUR TEAM</span></span>
          <span class="our-team-text14">
            <span>
              <span>
                PROCURIFY WILL LEAD COMPANIES TO SUCCESS, IT WILL BE A GREAT
                TOOL FOR A PROCUREMENT RECORDING SYSTEM.
              </span>
              <br />
              <span></span>
              <br />
              <span></span>
            </span>
          </span>
          <div class="our-team-group72">
            <img
              alt="Rectangle635612"
              src="public/playground_assets/rectangle635612-3sc7.svg"
              class="our-team-rectangle63"
            />
            <img
              alt="Rectangle625610"
              src="public/playground_assets/rectangle625610-qm2j.svg"
              class="our-team-rectangle62"
            />
          </div>
          <div class="our-team-group75">
            <img
              alt="Rectangle625613"
              src="public/playground_assets/rectangle625613-krer.svg"
              class="our-team-rectangle621"
            />
            <img
              alt="Rectangle635613"
              src="public/playground_assets/rectangle635613-j964.svg"
              class="our-team-rectangle631"
            />
          </div>
          <div class="our-team-group721">
            <img
              alt="Rectangle625613"
              src="public/playground_assets/rectangle625613-znwl.svg"
              class="our-team-rectangle622"
            />
            <img
              alt="Rectangle635613"
              src="public/playground_assets/rectangle635613-585r.svg"
              class="our-team-rectangle632"
            />
          </div>
          <div class="our-team-group74">
            <img
              alt="Rectangle625612"
              src="public/playground_assets/rectangle625612-amzp.svg"
              class="our-team-rectangle623"
            />
            <img
              alt="Rectangle635612"
              src="public/playground_assets/rectangle635612-yb0q.svg"
              class="our-team-rectangle633"
            />
            <img
              alt="IMAGE135611"
              src="public/playground_assets/image135611-6e1c-200w.png"
              class="our-team-image13"
            />
          </div>
          <div class="our-team-group71">
            <img
              alt="Ellipse75611"
              src="public/playground_assets/ellipse75611-8f83-200h.png"
              class="our-team-ellipse7"
            />
            <img
              alt="IMAGE315612"
              src="public/playground_assets/image315612-1ph-300w.png"
              class="our-team-image31"
            />
          </div>
          <div class="our-team-group67">
            <img
              alt="Ellipse55610"
              src="public/playground_assets/ellipse55610-mt0l-300h.png"
              class="our-team-ellipse5"
            />
            <img
              alt="Rectangle573145"
              src="public/playground_assets/rectangle573145-11uj-300w.png"
              class="our-team-rectangle57"
            />
          </div>
          <div class="our-team-group76">
            <div class="our-team-group69">
              <img
                alt="Ellipse45610"
                src="public/playground_assets/ellipse45610-fykf-200h.png"
                class="our-team-ellipse4"
              />
              <img
                alt="IMAGE415611"
                src="public/playground_assets/image415611-f8g-300w.png"
                class="our-team-image41"
              />
            </div>
          </div>
          <div class="our-team-group68">
            <img
              alt="Ellipse35610"
              src="public/playground_assets/ellipse35610-imbe-200h.png"
              class="our-team-ellipse3"
            />
            <img
              alt="Rectangle4512"
              src="public/playground_assets/rectangle4512-dyp-300w.png"
              class="our-team-rectangle1"
            />
          </div>
          <span class="our-team-text21"><span>KYLA DE ASAS</span></span>
          <span class="our-team-text23"><span>MARK VINCENT JUNGCO</span></span>
          <span class="our-team-text25">LUKE PHILIP DAIROCAS</span>
          <span class="our-team-text26">
            <span>
              <span>CO-FOUNDER</span>
              <br />
              <span>DIGITAL ARTIST</span>
            </span>
          </span>
          <span class="our-team-text31">
            <span>
              <span>CO-FOUNDER</span>
              <br />
              <span>PROGRAMMING GURU</span>
              <br />
              <span></span>
            </span>
          </span>
          <span class="our-team-text38">
            <span>
              <span>FOUNDER</span>
              <br />
              <span>DIGITAL ARTIST</span>
              <br />
              <span>PROGRAMMING GURU</span>
            </span>
          </span>
          <div class="our-team-group77">
            <div class="our-team-group73">
              <img
                alt="Rectangle625612"
                src="public/playground_assets/rectangle625612-3nne.svg"
                class="our-team-rectangle624"
              />
              <img
                alt="Rectangle635612"
                src="public/playground_assets/rectangle635612-rm1f.svg"
                class="our-team-rectangle634"
              />
            </div>
            <img
              alt="Ellipse65611"
              src="public/playground_assets/ellipse65611-akc4c-200h.png"
              class="our-team-ellipse6"
            />
            <img
              alt="IMAGE145611"
              src="public/playground_assets/image145611-cwqs-300w.png"
              class="our-team-image14"
            />
            <span class="our-team-text45">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp;JEWEL CLARIZ NAVA
            </span>
            <span class="our-team-text46">
              <span>
                <span>CO-FOUNDER</span>
                <br />
                <span>DIGITAL ARTIST</span>
              </span>
            </span>
          </div>
          <span class="our-team-text51">
            <span>
              <span>CO-FOUNDER</span>
              <br />
              <span>DIGITAL ARTIST</span>
            </span>
          </span>
        </div>
        <span class="our-team-text58">PAUL WARREN MALUYA</span>
        <footer class="our-team-footer">
          <a href="contact-us.php" class="our-team-navlink3">
            <div class="our-team-container1">
              <span class="our-team-text59">Contact Us</span>
            </div>
          </a>
          <div class="our-team-container2">
            <span class="our-team-text60">Our Team</span>
          </div>
          <a href="about-us.php" class="our-team-navlink4">
            <div class="our-team-container3">
              <span class="our-team-text61">About Us</span>
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
