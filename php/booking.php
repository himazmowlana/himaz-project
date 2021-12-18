<html>
<head>
<title>Project</title>
<link rel="short icon" type="image/png" href="../Images/favicon.png">
<meta name="viewport" content="width =device, initial-scale=1.0">
<link rel="stylesheet" href="../Css/Booking%20Style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
<!-----Background Image----->
<style>
body {
  background-image: url('Images/F6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<section>
    <div class="header">
    <h1>Payments</h1>
    </div>
</section>
<div class="payment-address">
<div class="left-box">
<form action="booking.php" method="post">
<h2>Billing Address</h2>
            <label>Full Name</label>
            <input type="text" name="full_name" placeholder="John Martin"> <br>
            <label>Email</label>
            <input type="text" name="email" placeholder="jhonny@gmail.com"> <br>
            <label>Address</label>
            <input type="text" name="address" placeholder="03/2 Newton Garden"> <br>
            <label>City</label> 
            <input type="text" name="city" placeholder="Colombo"> <br>
            <label>State</label> 
            <input type="text" name="state" placeholder="Western"> 
            Zip : <input type="text" name="zip" placeholder="02031"> <br>
            <label>Trainer Name</label> 
            <input type="text" name="trainer_name" placeholder="Will Holand"> <br>
            <label>My Class</label> <select name="classes">
                <option value="ZB"> Zumba </option>
                <option value="PT"> Personal Training </option>
                <option value="CF"> Crossfit </option>
                <option value="MS"> Membership </option>
            </select>
            <br>            
</div>

<div class="right-box">
<h2>Payment</h2>
<label for="fname">Accepted Cards</label>
<div class="icon-container">
    <i class="fa fa-cc-visa" style="color:navy;"></i>
    <i class="fa fa-cc-amex" style="color:blue;"></i>
    <i class="fa fa-cc-mastercard" style="color:red;"></i>
    <i class="fa fa-cc-discover" style="color:orange;"></i>
</div>
    <label>Name on Card</label> 
    <input type="text" name="name_on_card" placeholder="J. MARTIN"> <br>
    <label>Card Number</label>
    <input type="text" name="card_number" placeholder="XXXX-XXXX-XXXX-XXXX"> <br>
    <label>Exp Month</label> 
    <input type="text" name="exp_month" placeholder="10"> <br>
    <label>Exp Year</label> 
    <input type="text" name="exp_year" placeholder="2020"> 
    <label>Cvv</label> 
    <input type="text" name="cvv" placeholder="Cvv"> <br>                                                     
</div>  
      <input type="submit" name="submit"></button> 
</div>   
    </form>                                               
</body>
</html>


<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Iron_Paradise";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $sql = "INSERT INTO booking(FullName, Email, Address, City, State, Zip, TrainerName, MyClass, NameonCard, CardNumber, ExpMonth, ExpYear, Cvv)
        VALUES ('".$_POST['full_name']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zip']."', '".$_POST['trainer_name']."', '".$_POST['classes']."', '".$_POST['name_on_card']."', '".$_POST['card_number']."', '".$_POST['exp_month']."', '".$_POST['exp_year']."', '".$_POST['cvv']."')";

            // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        $conn->close();    
    }
?>

<!-----Remarks
Username: S. M Himaz H. Mowlana
Start Date: 14-09-2021
End Date: 19-12-2021----->