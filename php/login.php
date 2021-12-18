<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Iron_Paradise";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT username, password FROM sign_up";

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if(($_POST['username'] == $row['username']) && ($_POST['password'] == $row['password'])){
                header("Location: ../supplements.html");
                echo "Login Success";
            }else{
                echo  "Login Failed";
            }
        }
    }
    
?>
<!DOCTYPE php>
<php>
<head>
    <title>Login</title>
    <link rel="short icon" type="image/png" href="../Images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../login style.css">
</head>
<body>
   
<!-----Background Image----->
<style>
body {
  background-image: url('../Images/D2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
   
    <div id="login-box">
        <div class="left-box">
            <h1>Login</h1>
            <form action="login.php" method="post" onsubmit="return validateForm()" name="mySignup" id="mySignup">   
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="submit" name="login-button" value="Login"/>
            </form>
            <div class="form-group">
                  <p>Forgot your password ? <a href="#">click here</a></p>
                </div>
				<a href="../sign%20up.html">
                    <button>Sign Up</button></a>
            <a href="../index.html">
                    <button>Home</button></a>
            </div>
            <div class="right-box">
                <span class="signinwith">Sign in with<br/>Social Network
                </span>
                <button class="Social Facebook">Login in with Facebook</button>
                <button class="Social Twitter">Login in with Twitter</button>
                <button class="Social Google">Login in with Google+</button>
            </div>
            <div class="or">OR</div>        
        </div>      
            
<!-----JavaScript----->
<php>
<body>
<script>
function validateForm() {
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var  username = document.forms["mySignup"]["username"].value;
        if (username == "") {            
            alert("Username Required");
            return false;
        }

        var  password = document.forms["mySignup"]["password"].value;
        if (password == "") {
            alert("Password Required");
            return false;
        }

     }

    </script>
        
</body>
</php>

<!-----Remarks
Username: S. M Himaz H. Mowlana
Start Date: 14-09-2021
End Date: 19-12-2021----->