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
    <title>Record-Primary - Peaceful Solid Antelope</title>
    <meta
      property="og:title"
      content="Record-Primary - Peaceful Solid Antelope"
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
      <link href="./record-primary.css" rel="stylesheet" />

      <div class="record-primary-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1500w.png"
          class="record-primary-allbong-l2oed-f-as-h8unsplash1"
        />
        <footer class="record-primary-footer">
          <a href="contact-us.php" class="record-primary-navlink">
            <div class="record-primary-container1">
              <span class="record-primary-text">Contact Us</span>
            </div>
          </a>
          <a href="our-team.php" class="record-primary-navlink1">
            <div class="record-primary-container2">
              <span class="record-primary-text01">Our Team</span>
            </div>
          </a>
          <a href="about-us.php" class="record-primary-navlink2">
            <div class="record-primary-container3">
              <span class="record-primary-text02">About Us</span>
            </div>
          </a>
        </footer>
        <div class="record-primary-record-primary">
          <img
            alt="Rectangle1733"
            src="public/playground_assets/rectangle1733-p1vk-1600w.png"
            class="record-primary-rectangle"
          />
          <div class="record-primary-primary">
            <img
              alt="Rectangle211734"
              src="public/playground_assets/rectangle211734-obw9-700h.png"
              class="record-primary-rectangle21"
            />
            <img
              alt="Rectangle341734"
              src="public/playground_assets/rectangle341734-g3a-200h.png"
              class="record-primary-rectangle34"
            />
            <a href="/html7/record-create.php" class="record-primary-buttonbutton" role="button">
              <img
                alt="Rectangle6I173"
                src="public/playground_assets/rectangle6i173-yemm-200h.png"
                class="record-primary-rectangle6"
              />
              <span class="record-primary-text03"><span>+ CREATE</span></span>
            </a>
            <div class="record-primary-primary1">
              <img
                alt="Rectangle401735"
                src="public/playground_assets/rectangle401735-qyvl-200h.png"
                class="record-primary-rectangle40"
              />
              <img
                alt="tablericoninbox1735"
                src="public/playground_assets/tablericoninbox1735-yriq.svg"
                class="record-primary-tablericoninbox"
              />
              <span class="record-primary-text05"><span>PRIMARY</span></span>
            </div>
            <a href="record-archive.php" class="record-primary-navlink3">
              <div class="record-primary-archive">
                <img
                  alt="Rectangle381736"
                  src="public/playground_assets/rectangle381736-oe8s-200h.png"
                  class="record-primary-rectangle38"
                />
                <img
                  alt="tablericonarchive1736"
                  src="public/playground_assets/tablericonarchive1736-g71r.svg"
                  class="record-primary-tablericonarchive"
                />
                <span class="record-primary-text07"><span>ARCHIVE</span></span>
              </div>
            </a>
            <a href="record-trash-bin.php" class="record-primary-navlink4">
              <div class="record-primary-trash-bin">
                <img
                  alt="Rectangle381736"
                  src="public/playground_assets/rectangle381736-oe8s-200h.png"
                  class="record-primary-rectangle381"
                />
                <span class="record-primary-text09">
                  <span>TRASH BIN</span>
                </span>
                <img
                  alt="tablericontrash1736"
                  src="public/playground_assets/tablericontrash1736-p2u.svg"
                  class="record-primary-tablericontrash"
                />
              </div>
            </a>
            <div class="record-primary-primary3">
              <table class="table table-hover table-light table-striped">
                <thead class=" thead-dark">
                  <tr>
                    <th>Reference No.</th>
                    <th>Vendor</th>
                    <th>Issued Date</th>
                    <th>Date Received</th>
                    <th>Total Price (Php.)</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "records";

                  $connection = new mysqli($servername, $username, $password, $database);

                  if($connection->connect_error){
                    die("Connection failed: ". $connection->connect_error);
                  }

                  $sql = "SELECT * FROM `record_create`";
                  $result = $connection->query($sql);

                  if(!$result){
                    die("Invalid query: ". $connection->connect_error);
                  }

                  while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                      <td>$row[ReferenceNo]</td>
                      <td>$row[Vendor]</td>
                      <td>$row[IssuedDate]</td>
                      <td>$row[DateReceived]</td>
                      <td>$row[Subtotal]</td>
                      <td>
                        <a class='btn btn-primary btn-sm' href='/html7/record-edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-primary btn-sm' href='/html7/primary-to-archive.php?id=$row[id]' onclick='confirmArchive(event)'>Archive</a>
                        <a class='btn btn-danger btn-sm' href='/html7/primary-to-delete.php?id=$row[id]' onclick='confirmTrash(event)'>Delete</a>
                      </td>
                    </tr>
                    ";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
        <header data-role="Header" class="record-primary-header">
          <div class="record-primary-menutabs">
            <img
              alt="Rectangle311711"
              src="public/playground_assets/rectangle311711-kuk-200h.png"
              class="record-primary-rectangle31"
            />
            <img
              alt="Line361721"
              src="public/playground_assets/line361721-qe9d.svg"
              class="record-primary-line36"
            />
            <span class="record-primary-text12"><span><?php echo $greeting; ?></span></span>
          </div>
          <a href="products-products.php" class="record-primary-navlink5">
            <div class="record-primary-product">
              <span class="record-primary-text14"><span>PRODUCTS</span></span>
            </div>
          </a>
          <a href="record-primary.php" class="record-primary-navlink6">
            <div class="record-primary-record">
              <span class="record-primary-text16">RECORD</span>
            </div>
          </a>
          <a href="logout.php" class="record-primary-navlink7">
            <div class="record-primary-log-out">
              <button class="record-primary-buttonbutton1" onclick='confirmLogout(event)'>
                <img
                  alt="Rectangle61714"
                  src="public/playground_assets/rectangle61714-8xut-200h.png"
                  class="record-primary-rectangle61"
                />
                <span class="record-primary-text17"><span>Log Out</span></span>
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
  function confirmArchive(event) {
    // Display the confirmation dialog
    var confirmation = confirm("Are you sure you want to archive this row?");

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
