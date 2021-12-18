<html>
<head>
<title>Project</title>
<link rel="short icon" type="image/png" href="../Images/favicon.png">
<meta name="viewport" content="width =device, initial-scale=1.0">
<link rel="stylesheet" href="../Css/Contact Us%20Style.css">
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
  background-image: url('Images/F7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<!-----Menu----->

<section class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="../index.html"><img src="../Images/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about.html">About</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="../service.html">Service</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="../gallery.html">Gallery</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="../clients.html">Clients</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>       
    </ul>
    
<!-----Icons----->
 
         <ul class="right-menu ml-auto">
		 <li class="nav-item">
            <a class="nav-link" href="../bmi.html" style="color: rgb(97, 73, 73);">Calculate My BMI</a>
          </li> 
         <li class="nav-item">
			<a class="nav-link" href="login.php" style="color: rgb(97, 73, 73);">Login</a>
         </li>
         <li><a class="fa fa-facebook" href="https://web.facebook.com/Ironparadisefl/?_rdc=1&_rdr" style="color: rgb(53, 50, 243); text-decoration: none;"></a></li>
      <li><a class="fa fa-instagram" href="https://www.instagram.com/ironparadisefl/?hl=en" style="color: rgb(228, 55, 150); text-decoration: none;"></a></li>
      <li><a class="fa fa-twitter" href="https://twitter.com/theironparadise" style="color: rgb(55, 144, 228); text-decoration: none;"></a></li>
      <li><a class="fa fa-youtube" href="https://www.youtube.com/channel/UC2BBmKcYxlwfTskpNkFAJ1A/videos" style="color: rgb(224, 66, 66); text-decoration: none;"></a></li>
             <li>
                 <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
            </div>
             </li>
         </ul>
  </div>
</nav>

<!-----Video----->

<video id="videoBG" poster="../Images/Screenshot%205.png" autoplay muted loop style="width:100%;">
    <source src="../Videos/Contact Us.mp4" type="video/mp4">
</video>

</section>

<!-----Contact Us----->

<div class="container">
  <form action="contact_us.php" method="post" onsubmit="return validateForm()" name="myContact" id="myContact">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      
      <option value="sri-lanka">Sri Lanka</option>
      <option value="australia">Australia</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
      <option value="pakistan">Pakistan</option>
      <option value="bangladesh">Bangladesh</option>
      <option value="nepal">Nepal</option>
      <option value="saudi-arabia">Saudi Arabia</option>
      <option value="china">China</option>
      <option value="africa">Africa</option>
      <option value="new-zealand">New Zealand</option>
      <option value="russia">Russia</option>
      <option value="japan">Japan</option>
      <option value="maldives">Maldives</option>
      <option value="west-indies">West Indies</option>
      <option value="south-africa">South Africa</option>
      <option value="malaysia">Malaysia</option>
      <option value="switzerland">Switzerland</option>
      <option value="canada">Canada</option>
      <option value="uk">UK</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Iron_Paradise";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "INSERT INTO contact_us (FirstName, LastName, Country, Subject)
        VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['country']."', '".$_POST['subject']."')";

        $conn->query($sql);
        
        $conn->close();
    }    
?>

<!-----Working Hours----->
<div class="work" style="display: flex;">
    <div class="works">
        <h2>Working Hours</h2>
        <p class="works">Monday: 05.00 am to 10.00 pm<br>
                             Tuesday: 05.00 am to 10.00 pm<br>
                             Wednesday: 05.00 am to 10.00 pm<br>
                             Thursday: 05.00 am to 10.00 pm<br>
                             Friday: 05.00 am to 10.00 pm<br>
                             Saturday: 05.00 am to 10.00 pm<br>
                             Sunday: 05.00 am to 10.00 pm<br>
        </p>
    </div>
    <div class="locate" style="margin: 0 300px">
        <h2>Our Address</h2>
        <p class="locate">08/15, Main Road, Colombo<br> Opposite to One Galle Face</p>
    </div>
    
    <div class="contact" style="margin: 0 -10px">
        <h2>Contact Details</h2>
        <p class="contact">Office: 0117495338<br> Personal: 0766048125<br> Fax: 0112301725<br> Email: ironparadiseinfo@gmail.com</p>
    </div>
</div>

<!-----Google Map----->
  <iframe src="https://www.google.com/maps/d/embed?mid=1nt5z4F35fcAjiJNW0ju1OiVlOZ3r_Bxi&hl=en" width="1519" height="600"></iframe>

<!--Start of Flow XO Script-->
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMyOWU2OWIiLCJ3ZWIiOnsiYm90SWQiOiI2MTk5ZTM5ZmQ2ODhkNTFhNmRlYzM1NzMiLCJ0aGVtZSI6IiMyOWU2OWIiLCJsYWJlbCI6Iklyb24gUGFyYWRpc2UgVmlydHVhbCBBc3Npc3RhbnQifSwid2VsY29tZVRleHQiOiJDaGF0IHdpdGggVXMg8J+RhyJ9" async defer></script>
<!--End of Flow XO Script-->

<!-----Design----->

    <p><div class="design" style="text-align: center">&copy; <em>2021</em> Iron Paradise (Fitness Website) Project | Designed by <strong>Himaz Mowlana</strong></div></p>

</body>
</html>

<!-----Remarks
Username: S. M Himaz H. Mowlana
Start Date: 14-09-2021
End Date: 19-12-2021----->