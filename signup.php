<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Project</title>
    <link rel="icon" href="images/BTC_Logo.svg.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="maindiv">
        <nav class="naver">
          <div class="bankname">
              <p>People's Bank</p>
          </div>
          <div class="homewageramain">
              <div class="homewagera">
                  <a href="index.htm"><p>Home</p></a>
              </div>
              <div class="homewagera">
                  <a href=""><p>About Us</p></a>
              </div>
              <div class="homewagera">
                  <a href="test.php"><p>Customers</p></a>
              </div>
              <div class="homewagera">
                  <a href="support.htm"><p>Support</p></a>
              </div>
          </div>
        </nav>
      </div>
    <div class="screen">
      <h2 style="color:rgba(61, 61, 180, 0.726);">Hello Customer</h2>
      <h4 style="color:rgba(192, 55, 55, 0.671);">Thank You for showing interest in our Bank! We are delighted to have you onboard</h4>
      <h5 style="color:rgba(192, 55, 55, 0.671);">Help us know you better</h5>
      <div class="formcontainer">
        <form action="signup.php" method="post">
            <h4>Please Enter your First Name</h4>
            <input type="text" name="firstname" id="firstnameid" placeholder="First Name">
            <h4>Please Enter your Last Name</h4>
            <input type="text" name="lastname" id="lastnameid" placeholder="Last Name">
            <h4>Please Enter your Email ID</h4>
            <input type="email" name="emailid" id="emailid" placeholder="Valid Email ID">
            <h4>Please Enter your Bank Balance</h4>
            <input type="integer" name="bankb" id="bankb" placeholder="How much funds would you like to start with">
            <button type="submit" class="sb">SUBMIT</button>
        </form>
      </div>
    </div>
    <div class="copyrightdiv">
        <p id="copyrights"></p>
    </div>
</body>
<script>
    var currYear=new Date().getFullYear();
    document.getElementById("copyrights").innerHTML="&copy "+ currYear+ "<b> Akash Ranjan</b> <br> Intern, The Sparks Foundation";
</script>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['emailid'];
    $bankbalance=$_POST['bankb'];
    //getting variables to be stored in database when form gets submitted

    $servername="localhost";
    $username="root";
    $password="";
    $database="customers";

    //Connecting to the database
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Connection was unsuccessful".mysqli_connect_error($conn));
    }
    else{
        // echo "Connection successful";

        
        //check for all fields are filled or not
        if($firstname==null||$lastname==null||$email==null||$bankbalance==null){
            echo "<script>alert('Submission was unsuccessful--> Data field(s) are emtpy');</script>";
        }else{
            //query to insert data into database
            //if any field is empty then the database will not be updated
            $sql="INSERT INTO `details` (`Customer_ID`, `First_Name`, `Last_Name`, `Email_ID`, `Bank_Balance`) VALUES (null, '$firstname', '$lastname', '$email', '$bankbalance')";
            $result=mysqli_query($conn,$sql);
            echo "<script>alert('Submitted Successfully');</script>";
        }
        // if(!$result){
        //     echo "<script>alert('Submission was unsuccessful');</script>".mysqli_error($result);
        // }
    }
}
?>