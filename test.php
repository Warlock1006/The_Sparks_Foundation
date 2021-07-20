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
                    <a href=""style="color: rgb(179, 0, 0)"><p>Customers</p></a>
                </div>
                <div class="homewagera">
                    <a href="support.htm"><p>Support</p></a>
                </div>
            </div>
        </nav>
    </div>
    <div class="tablediv">
        <table>
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                <th>Bank Balance</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","customers");
            if($conn-> connect_error){
                die("Connection Failed:".$conn->connect_error);
            }

            $sql = "SELECT Customer_ID,First_Name,Last_Name,Email_ID,Bank_Balance from details";
            $result= mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                while($row=$result-> fetch_assoc()){
                    echo "<tr><td>".$row["Customer_ID"]."</td><td>". $row["First_Name"]."</td><td>". $row["Last_Name"]. "</td><td>". $row["Email_ID"]."</td><td>". $row["Bank_Balance"]."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }

            $conn -> close();
            ?>
        </table>
    </div>
    <div class="buttonsdiv">
        <div class="transfertab">
            <a href="transaction.php"><button>TRANSFER MONEY</button></a>
        </div>
        <div class="transfertab">
            <a href="signup.php"><button>SIGN UP</button></a>
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