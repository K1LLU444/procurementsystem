<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: welcome.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Peaceful Solid Antelope</title>
    <meta property="og:title" content="Peaceful Solid Antelope" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: 
        border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
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
      <link href="./log-in.css" rel="stylesheet" />
      <div class="log-in-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1500w.png"
          class="log-in-allbong-l2oed-f-as-h8unsplash1"
        />
        <div class="log-in-box">
          <img
            alt="Rectangle1135"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/a25040ce-c862-4d50-987c-8138f82d8062?org_if_sml=13357"
            class="log-in-rectangle1"
          />
          <span class="log-in-text03"><span>Procurement</span></span>
          <img
            alt="Rectangle2138"
            src="public/playground_assets/rectangle2138-gqnd.svg"
            class="log-in-rectangle2"
          />
          <img
            alt="Rectangle3139"
            src="public/playground_assets/rectangle3139-j0nf.svg"
            class="log-in-rectangle3"
          />
          <span class="log-in-text05"><span>Log In</span></span>
          <img
            alt="Line5442"
            src="public/playground_assets/line5442-0vqu.svg"
            class="log-in-line5"
          />
          <img
            alt="Line6443"
            src="public/playground_assets/line6443-5rkg.svg"
            class="log-in-line6"
          />
          <img
            alt="Rectangle4444"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/f2265cdd-d04f-4b85-81b2-87e69e4baca6?org_if_sml=1739"
            class="log-in-rectangle4"  
          />
          <img
              alt="Rectangle5448"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/bf2762b3-a62c-477d-93d7-fc7d716bdb7b?org_if_sml=1739"
              class="log-in-rectangle5"
          />
          <form class="log-in-textinput" action="" method="post" autocomplete="off">
              <input type="text" for="usernameemail" name="usernameemail" id = "usernameemail" required value="" placeholder="Username"> <br>
              <br>
              <br>
          <form class="log-in-textinput1" action="" method="post" autocomplete="off">
              <input type="password" for="password" name="password" id = "password" required value="" placeholder="Password"> <br>
              <button type="submit" name="submit">
                <img
                  alt="Rectangle6I171"
                  src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/1f00d1d7-d505-4660-912a-c21190adc60f?org_if_sml=1539"
                  class="log-in-rectangle6"
                />
                <span class="log-in-text07"><span>Log In</span></span>  

              </button>
          </form></form>
          <img
            alt="tablericonlock2214"
            src="public/playground_assets/tablericonlock2214-ut3.svg"
            class="log-in-tablericonlock"
          />
          <img
            alt="tablericonuser2214"
            src="public/playground_assets/tablericonuser2214-x3cd.svg"
            class="log-in-tablericonuser"
          />
          <img
            alt="Line72214"
            src="public/playground_assets/line72214-gjds.svg"
            class="log-in-line7"
          />
          <img
            alt="Line82214"
            src="public/playground_assets/line82214-c5sp.svg"
            class="log-in-line8"
          />
          <span class="log-in-text09"><span>PROCURIFY</span></span>
        </div>

        <div class="log-in-create-account">
            <a href="create-account.php" class="log-in-navlink3">
              <img
                alt="Rectangle66815"
                src="public/playground_assets/rectangle66815-xflrn-200h.png"
                class="log-in-rectangle61"
              />
          </a>
          <a href="create-account.php" class="log-in-text11">
            <span>Create Account</span>
        </div>
      </div>
    </div>
  </body>
</html>
