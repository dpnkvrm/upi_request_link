<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>UPI Request Money | Utkrasht Solutions</title>
      <link rel="shortcut icon" type="image/ico" href="images/fav.ico">
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
   <body>
      <center>
         <div class="card">
            <div class="card-content">
               <a href="https://utkrashtsolutions.in"><img src="images/logo.png" height="100"></a>
               <br>
               <h4 style="color: #2C3335;">Create UPI Payment Request Link </h4>
               <img src="images/upi.png" height="100">
               <br>
	       <form action="">
		  <label style="color: #2C3335;">Enter Payee Name:</label><br>
                  <input type="string" name="pay" class="text-box" placeholder="Enter Payee Name" required><br>
                  <label style="color: #2C3335;">Enter Upi Id:</label><br>
                  <input type="email" name="upi" class="text-box" placeholder="Enter UPI Id" required><br>
                  <label style="color: #2C3335;">Enter Amount (Optional):</label><br>
                  <input type="number" name="amt" class="text-box" placeholder="Enter Amount (Optional)"><br>
                  <input type="submit" value="Create Link" class="btn">
                  <br>
	       </form>
         <?php
            if(isset($_GET["upi"])){

                $upi = $_GET["upi"];
                $pay = $_GET["pay"];
                $amt = $_GET["amt"];
		$link = "https://utkrashtsolutions.in/upi/pay.php?pay=".rawurlencode($pay)."&upi=".$upi."&amt=".$amt;
                echo '<textarea class="text-box" id="upiUrl">'.$link.'</textarea><br>';
                echo '<button onclick="copyUpiUrl()" class="btn" id="btn-copy">Copy Link</button>';
                echo '<a href='.$link.' class="btn" style="background-color: #0A79DF;">Open Link</a>';
            }

            ?>
            </div>
         </div>
      </center>
   </body>
   <script>
      function copyUpiUrl() {
        var copyText = document.getElementById("upiUrl");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        document.getElementById("btn-copy").innerHTML = "Copied";
      }
   </script>
</html>
