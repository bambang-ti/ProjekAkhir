<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <style>
    body {
       background: -webkit-linear-gradient(bottom, #42ADF5, #16BBE2);
       background-repeat: no-repeat;
    }
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    #card-content {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #1ACDF7, #16BBE2);
      height: 2px;
      margin: -0.5rem auto 0 auto;
      width: 167px;
    }
    label {
    font-family: "Montserrat", sans-serif;
    font-size: 11pt;
    }
    #forgot-pass {
      color: #2dbd6e;
      font-family: "Montserrat", sans-serif;
      font-size: 10pt;
      margin-top: 3px;
      text-align: right;
    }
    .formAdmin {
      align-items: left;
      display: flex;
      flex-direction: column;
      padding: 1em 1em;
    }
    .form-border {
      background: -webkit-linear-gradient(right, #1ACDF7, #16BBE2);
      height: 1px;
      width: 100%;
    }
    .form-content {
      background: #fbfbfb;
      border: none;
      outline: none;
      padding-top: 14px;
    }
    #sign-up {
      color:#2dbd6e;
      font-family: "Montserrat", sans-serif;
      font-size: 10pt;
      margin-top: 16px;
      text-align: center;
    }
    #submit-btn {
      background: -webkit-linear-gradient(right, #1ACDF7, #16BBE2);
      border: none;
      border-radius: 21px;
      box-shadow: 0px 1px 8px #1ACDF7;
      cursor: pointer;
      color: white;
      font-family: "Montserrat", sans-serif;
      height: 42.3px;
      margin: 0 auto;
      margin-top: 50px;
      transition: 0.25s;
      width: 153px;
    }
  #submit-btn:hover {
    box-shadow: 0px 1px 18px #16BBE2;
  }
  </style>
 </head>
 <body>
    <?php
      if(isset($info)){
          echo '<h5 style="color:red">'.$info.'</h5>';
      }
    ?>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN ADMIN</h2>
          <div class="underline-title"></div>
        </div>
      </div>
      <?php echo form_open('user/login');?>
        <div class="formAdmin">
        <label for="username" style="padding-top:13px">Username</label> 
        <input id="username" class="form-content" name="username" type="text">
        <div class="form-border"></div>
        <br>
        <label for="pass" style="padding-top:22px">Password</label> 
        <input id="pass" class="form-content" name="pass" type="password">
        <div class="form-border"></div>
          <button id="submit-btn" name="submit" type="submit" id="sign-up">LOGIN</button>
        </div>
      <?php echo form_close(); ?>
    </div>
 </body>
</html>



