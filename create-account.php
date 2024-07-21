<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: log-in.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create-Account - Peaceful Solid Antelope</title>
    <meta
      property="og:title"
      content="Create-Account - Peaceful Solid Antelope"
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
  </head>
  <body>
    <div>
      <link href="./create-account.css" rel="stylesheet" />

      <div class="create-account-container">
        <img
          alt="allbongL2oedF1AsH8unsplash1130"
          src="public/playground_assets/allbongl2oedf1ash8unsplash1130-mi7-1500w.png"
          class="create-account-allbong-l2oed-f-as-h8unsplash1"
        />
        <div class="create-account-box">
          <img
            alt="Rectangle16912"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/a377813c-90a6-451a-9568-ca04824e8f52?org_if_sml=13357"
            class="create-account-rectangle1"
          />
          <span class="create-account-text3"><span>Procurement</span></span>
          <img
            alt="Rectangle26912"
            src="public/playground_assets/rectangle26912-fdlw.svg"
            class="create-account-rectangle2"
          />
          <img
            alt="Rectangle36912"
            src="public/playground_assets/rectangle36912-fn8f.svg"
            class="create-account-rectangle3"
          />
          <span class="create-account-text5">Create Account</span>
          <img
            alt="Line56912"
            src="public/playground_assets/line56912-r2ol.svg"
            class="create-account-line5"
          />
          <img
            alt="Line66912"
            src="public/playground_assets/line66912-zahv.svg"
            class="create-account-line6"
          />
          <img
            alt="Rectangle46912"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/048225a2-3417-4e17-954b-e0a4594dddc3?org_if_sml=1739"
            class="create-account-rectangle4"
          />
          <img
            alt="Rectangle56913"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/5d46e53c-8414-4346-a363-f1dc85116eb6?org_if_sml=1739"
            class="create-account-rectangle5"
          />
          <img
            alt="Rectangle66914"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/43c4f41e-8e79-49bb-b4b3-101dff9d6ea9?org_if_sml=1739"
            class="create-account-rectangle6"
          />
          <img
            alt="Rectangle66914"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/43c4f41e-8e79-49bb-b4b3-101dff9d6ea9?org_if_sml=1739"
            class="create-account-rectangle61"
          />
          <img
            alt="Rectangle66914"
            src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/43c4f41e-8e79-49bb-b4b3-101dff9d6ea9?org_if_sml=1739"
            class="create-account-rectangle62"
          />
          <form class="create-account-textinput" action="" method="post" autocomplete="off">
            <input type="text" name="name" id = "name" required value="" placeholder="Name"> <br>
            <br><br>
          <form class="create-account-textinput1" action="" method="post" autocomplete="off">
            <input type="text" name="username" id = "username" required value="" placeholder="Username"> <br>
            <br><br>
          <form class="create-account-textinput2" action="" method="post" autocomplete="off">
            <input type="email" name="email" id = "email" required value="" placeholder="Email"> <br>
            <br><br>
          <form class="create-account-textinput3" action="" method="post" autocomplete="off">
            <input type="password" name="password" id = "password" required value="" placeholder="Password"> <br>
            <br><br>
          <form class="create-account-textinput4" action="" method="post" autocomplete="off">
            <input type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder="Confirm Password"> <br>
            <br><br>
            <button href="create-account.php" type="submit" name="submit">
              <img
                alt="Rectangle6I691"
                src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/99a3b031-9931-4988-bb49-dd77c170cb12?org_if_sml=1539"
                class="create-account-rectangle63"
              />
              <span class="create-account-text6"><span>Register</span></span> 
              </button>
            <button href="log-in.php">
              <img
                alt=""
                src=""
                class=""
              /> 
            </button>

          </form></form></form></form></form>
          <br>
                
          <img
            alt="tablericonlock6914"
            src="public/playground_assets/tablericonlock6914-g79q.svg"
            class="create-account-tablericonlock"
          />
          <img
            alt="tablericonlock6913"
            src="public/playground_assets/tablericonlock6913-yvfh.svg"
            class="create-account-tablericonlock1"
          />
          <img
            alt="tablericonuser6913"
            src="public/playground_assets/tablericonuser6913-2bfy.svg"
            class="create-account-tablericonuser"
          />
          <img
            alt="tablericonuser6913"
            src="public/playground_assets/tablericonuser6913-2bfy.svg"
            class="create-account-tablericonuser1"
          />
          <img
            alt="Line76914"
            src="public/playground_assets/line76914-vov.svg"
            class="create-account-line7"
          />
          <img
            alt="Line86914"
            src="public/playground_assets/line86914-gzyn.svg"
            class="create-account-line8"
          />
          <img
            alt="Line96915"
            src="public/playground_assets/line96915-f2ne.svg"
            class="create-account-line9"
          />
          <span class="create-account-text7">PROCURIFY</span>
          <img
            src="public/playground_assets/vector3301-3iyf.svg"
            alt="Vector3301"
            class="create-account-tablericonat"
          />
        </div>
        <div class="create-account-box1">
          <a href="log-in.php" class="welcome-navlink3">
            <button href="log-in.php">
              <img
                alt="Rectangle6I691"
                src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/4619e9b4-8b19-45a8-8580-22d3e32dccb9/99a3b031-9931-4988-bb49-dd77c170cb12?org_if_sml=1539"
                class="create-account-rectangle633"
              />
              <span class="create-account-text66" href="log-in.php"><span>Login</span></span> 
            </button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
