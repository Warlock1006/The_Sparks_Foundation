<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People's Bank</title>
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
      <div class="formcontainer" style="margin-top: 4%;">
        <form action="" method="post">
            <h4>Account number of customer to be debited from:</h4>
            <!-- <select name="payee" id="payee">
                <option value="Customer_ID">----------SELECT----------</option> -->
            <input type="number" name="kiskalega" id="kiskalegaid" placeholder="Customer ID to be debited from">
            <h4>How much amount has to be transfered?</h4>
            <input type="number" name="debamount" id="debamountid" placeholder="Enter amount to be transferred">
            <h4>To whom this credit shall be transferred</h4>
            <input type="number" name="kiskodega" id="kiskodegaid" placeholder="Customer ID to be credited to">
            <button type="submit" class="sb">Submit</button>
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
$servername="localhost";
$username="root";
$password="";
$database="customers";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection failed to be established -->".mysqli_connect_error($conn));
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $from=(int)$_POST['kiskalega'];
    $amount=(int)$_POST['debamount'];
    $to=(int)$_POST['kiskodega'];
    // $gettingamnt=(int)"SELECT Bank_Balance FROM details WHERE Customer_ID=$from";
    // $result=mysqli_query($conn,$gettingamnt);
    // if($amount>$gettingamnt){
    //     die("<script>alert('Transaction value exceedes User's Bank Balance');</script>");
    // }else 
    if($from==null||$amount==null||$to==null){
        die("<script>alert('One or more fields are empty please fill the form again');</script>");
    }else{
        $sql = "UPDATE details SET Bank_Balance= Bank_Balance- $amount WHERE Customer_ID=$from";
        $result=mysqli_query($conn,$sql);
        $sql = "UPDATE details SET Bank_Balance= Bank_Balance+ $amount WHERE Customer_ID=$to";
        $result=mysqli_query($conn,$sql);
        echo "<script>alert('Transaction Successful');</script>";
    }
    
}

?>