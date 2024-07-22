<?php
  include 'connect.php';

  if(isset($_POST["sigup"])){
      
      $NAME=$_POST["name"];
      $ADDRESS=$_POST["address"];
      $EMAIL=$_POST["email"];
      $PASSWORD=$_POST["password"];
      $PHONE=$_POST["phone"];
   
  $query="INSERT INTO users
  (uname,uemail,uaddress,upassword,uphone) 
  values('$NAME','$EMAIL','$ADDRESS','$PASSWORD','$PHONE')";
  
  if(mysqli_query($con,$query)){
    echo"<script>alert('user created..');</script>";
  }
  
  else{
    echo "error";
  
  }   
  
}
?>      

<?php
  if(isset($_POST["login"])){

$name=$_POST["email"];
$pass=$_POST["password"];

if($name!="" && $pass!=""){
    $sql="SELECT  upassword ,uemail FROM users WHERE  upassword ='$pass' AND uemail='$name'"; //sql select query
    $result= $con->query($sql);
    if ($result->num_rows >=1){
        header("location:cart.php"); //open the next html file
    }
    else{
        echo "<p>Invalid user name password</p>";
    }
}
else{
    echo "<p>Please Fill the Details";
}
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="./css/login.css">
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
<div class="Account">
 <a href="./index.php" style="text-decoration: none; color:white;" ><i class="fa fa-close" id="close-cart" style="font-size: 25px; color: white;"></i></a>
<div class="container" id="container">
    <div class="form-container sing-up-container">
      <div class="form">
      <h1>Create Account</h1>
      <div class="social-container">
        <ion-icon name="logo-facebook"></ion-icon>
        <ion-icon name="logo-google"></ion-icon>
      </div>
            <form action="" method="POST">
            <span class="intext">or use your email for registration</span>
              <input type="text" name="name" placeholder="User name" required>
              <input type="email" name="email" placeholder="your email" required>
              <input type="text" name="phone" placeholder="your phone number" required> 
              <input type="text" name="address" placeholder="your Address" required>
              <input type="password" name="password" placeholder="your password" required>
              <button class="btnS" id="register" name="sigup">Register</button>
            </form>
    </div>

  </div>
  
  <div class="form-container sing-in-container">
      <div class="form">
      <h1>Sign in</h1>
      <div class="social-container">
        <ion-icon name="logo-facebook"></ion-icon>
        <ion-icon name="logo-google"></ion-icon>
      </div>
      <span class="intext">use your account</span>
    <form action="" method="post">
      <input type="email" placeholder="Email" id="l-email" name="email">
      <input type="password" placeholder="Password" name="password" id="l-password">
      <button class="btnS" id="login" name="login">Login</button>
  </form>
    </div> 
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h6><span class="tage">Good</span> Food</h6>
        <h6>Great<span class="tage"> Life</span></h6>
        <p>Best Food Best Choice</p>
        <img class="left-img" src="./image/left-img.png" alt="left-image">
        <button class="press btnS sigin " onclick="classRemove()">Sign In <i class='fa fa-arrow-right' style="padding: 0;"></i></button>
      </div>
      <div class="overlay-panel overlay-right">
        <h6><span class="tage">Good</span> Food</h6>
        <h6>Great<span class="tage"> Life</span></h6>
        <p>Best Food Best Choice</p>
        <img class="left-img" src="./image/right-img.png" alt="left-image">
        <button class="press btnS sigup"  onclick="classAdd()"><i class='fa fa-arrow-left' style="padding: 0;"></i>&nbsp New user</button>
      </div>
  </div>
</div>
</div>
</div>

<footer>

  <div class="f-logo">
  <h2 class="logo">Green <span class="logo2">Star</span></h2>
  </div>

  <div class="social-media">
            <div class="ic"><i class="fa fa-facebook " aria-hidden="true"></i></div>
            <div class="ic"><i class="fa fa-twitter " aria-hidden="true"></i></div>
            <div class="ic"><i class="fa fa-whatsapp " aria-hidden="true"></i></div>
            <div class="ic-1"><i class="fa fa-instagram " aria-hidden="true"></i></div>
  </div>
  <div class="footer-section">
  <div class="f-content">

  <div class="f-Contact">
    <h4>Contact Info</h4>
    <p>36/1 B,Ampara Road,Sammanthurai, Ampara, Sri lanka.</p>
    <br>
    <p> greenstar@gmail.lk</p>
    <p> +94(075) 109-9222</p>
  </div>

  <div class="nav-menu">
    <ul>
      <h4>MENU</h4>
      <li><a href="index.html">Home</a></li>
      <li><a href="#About-us">About</a></li>
      <li><a href="#service">Service</a></li>
      <li><a href="#contact-us">Contact-us</a></li>
      <li><a href="cart.html">Order</a></li>

    </ul>
  </div>

  <div class="f-service">
    <h4>service</h4>
    <p>fast delivery</p>
    <p>best Quality</p>
    <p>free delivery</p>
    <p>100% fresh</p>
  </div>

  <div class="f-open-hours">
    <h4>opening hours</h4>
    <p>Monday-Friday: 08:00-22:00</p>
    <p>Friday 4PM:Till Mid Night</p>
  </div>
  </div>
  </div>
  <br>
  <hr>
  <p style="text-align: center; font-size: 18px; margin-top: 5px; ">Copyrigt &copy; 2022 Designed with By Hanees </p>

</footer>
  
   <script>
    
    const container =document.getElementById("container");
    
  
    function classAdd() {
    var element = document.getElementById("container");
    element.classList.add("right-panel-active");
    }
    function classRemove(){
      var moment =document.getElementById("container");
      moment.classList.remove("right-panel-active");
    }
 </script>

</body>

<!--

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";
  import { getDatabase, set, ref,update } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-database.js";
  import { getAuth, createUserWithEmailAndPassword,signInWithEmailAndPassword,onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyDgN92vDR7G1Xd586PqXBn7DJZJ_g9b6m8",
    authDomain: "food-login-94055.firebaseapp.com",
    databaseURL: "https://food-login-94055-default-rtdb.firebaseio.com",
    projectId: "food-login-94055",
    storageBucket: "food-login-94055.appspot.com",
    messagingSenderId: "1076174941155",
    appId: "1:1076174941155:web:c999f22e0dcdb20345ced6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const auth = getAuth();

  const register = document.querySelector('#register');
  register.addEventListener('click',()=>{
    var username = document.getElementById('u-name').value;
    var address  = document.getElementById('u-address').value;
    var email = document.getElementById('u-email').value;
    var password = document.getElementById('u-password').value;


    createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential)=>{
      const user = userCredential.user;

      set(ref(database, 'users/' + user.uid),{
        username: username,
        address: address,
        email: email,
        password: password
      })

            alert('user Created!');
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;

    alert(errorMessage);
    // ..
  });
  })

 
  const Login = document.querySelector('#login');
  Login.addEventListener('click',(e)=>{
    var email = document.getElementById('l-email').value;
    var password = document.getElementById('l-password').value;

    signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    const dt = new Date();
    update(ref(database, 'users/' + user.uid),{
        last_login:dt,
      })

      alert('user loged in!');
      window.location.replace('cart.html');
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;

    alert(errorMessage);
  })
});

</script>
-->

</html>