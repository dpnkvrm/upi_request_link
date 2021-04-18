<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>UPI Request Money | Utkrasht Solutions</title>
      <link rel="shortcut icon" href="images/fav.ico">
   </head>
   <style type="text/css">
      body{
      background: #2C3335;
      }
      .card{
      background-color: #FFFFFF;
      border: 3px solid #DAE0E2;
      border-radius: 20px;
      width: 350px;
      }
      .text-box{
      padding: 10px 20px;
      margin: 10px 0;
      box-sizing: border-box;
      }
      .btn{
      background-color: #4CAF50; 
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      cursor: pointer;
      font-size: 16px;
      }
      .btn:hover{
      background-color: #019031;
      padding: 12px 22px;
      }
      .card-content{
      padding: 20px;
      }
   </style>
   <?php
      if(isset($_GET["upi"])){
      
      $upi = $_GET["upi"];
      $pay = $_GET["pay"];
              $amt = $_GET["amt"];
              $link = "upi://pay?pn=UPAYI&pa=".$upi."&cu=INR&&am=".number_format((float)$amt, 2, '.', '');
      
      }
      
      ?>
   <body>
      <center>
         <div class="card">
            <div class="card-content">
               <a href="https://utkrashtsolutions.in"><img src="images/logo.png" height="100"></a>
               <h3 style="color: #2C3335; margin: 10px;">Scan Qr or Click on Pay Now :</h3>
               <canvas id="qr" style="margin-top: 5px; margin-bottom: 5px;"></canvas>
               <img src="images/upi.png" height="100">
               <br>
               <hr style="color: #2C333F; width: 90%;">
               <p style="color: #FF3031"><?php echo $pay ?> is requesting money</p>
               <p style="color: #FF3031;">Amount : ₹ <?php echo $amt ?> </p>
               <hr style="color: #2C3335; width: 90%;">
               <br>
               <a href= <?php echo $link ?> class="btn">Pay Now</a>
               <br>
            </div>
            <button class="btn" style="background-color: #0A79DF; color: #fff; margin-bottom: 10px;" onclick="window.location.href='./index.php'">Generate New Link</button>
            <p style="color: #2C3335;">Note: Utkrasht Solutions is not responsible for any payments.</p>
            <p style="color: #2E4053">Developed by: <a href="https://utkrashtsolutions.in" style="color: #0A79DF;">Utkrasht Solutions</a></p>
         </div>
         </div>
      </center>
      <script data-cfasync="false" src="./js/email-decode.min.js"></script>
   </body>
   <script src="./js/qrious.min.js"></script>
   <script>
      (function() {
        var qr = new QRious({
          element: document.getElementById('qr'),
          background: 'white',
          foreground: 'black',
      size: 200,
      value: '<?php echo $link ?>'
        });
      })();
   </script>
</html>
