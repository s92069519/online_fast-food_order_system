<?php
include 'connect.php';

if(isset($_POST["burger"])){
    
    $FNAME=$_POST["fname"];
    $PRICE=$_POST["price"];
    $PIC=$_POST["img"];
    

$query="INSERT INTO burgers
(fname,price,pic) 
values('$FNAME','$PRICE','$PIC')";

if(mysqli_query($con,$query)){
  header('location:admin-add.php');
}

else{
    echo 'error';
}

}
elseif (isset($_POST["pizza"])) {

    $FNAME=$_POST["fname"];
    $PRICE=$_POST["price"];
    $PIC=$_POST["img"];
    

$query="INSERT INTO pizza
(fname,price,pic) 
values('$FNAME','$PRICE','$PIC')";

if(mysqli_query($con,$query)){
  header('location:admin-add.php');
}



else{
    echo 'error';
}
}
elseif (isset($_POST["drumifts"])) {

        $FNAME=$_POST["fname"];
        $PRICE=$_POST["price"];
        $PIC=$_POST["img"];
        
    
    $query="INSERT INTO `drumifts`(`fname`, `price`, `pic`) VALUES ('$FNAME','$PRICE','$PIC')";
    
    if(mysqli_query($con,$query)){
      header('location:admin-add.php');

    }
    
    
    
    else{
        echo 'error';
    }
}
elseif (isset($_POST["beverge"])) {

    $FNAME=$_POST["fname"];
    $PRICE=$_POST["price"];
    $PIC=$_POST["img"];
    

$query="INSERT INTO snacks
(fname,price,pic) 
values('$FNAME','$PRICE','$PIC')";

if(mysqli_query($con,$query)){
  header('location:admin-add.php');
}



else{
    echo 'error';
}
}
elseif (isset($_POST["Chicken"])) {

    $FNAME=$_POST["fname"];
    $PRICE=$_POST["price"];
    $PIC=$_POST["img"];
    

$query="INSERT INTO Chicken
(fname,price,pic) 
values('$FNAME','$PRICE','$PIC')";

if(mysqli_query($con,$query)){
  header('location:admin-add.php');
}

else{
    echo 'error';
}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
</head>
<body>
   <div class="box">
    <div class="containor">
        <div class="side">

            <div class="logo">
                <h2 class="logoh">Green <span class="logo2">Star</span></h2>
            </div>

            <div class="navbar">
                <div class="bar">
                <ul>
                    <li><a href="Dashboard.php"><ion-icon name="home-outline"></ion-icon>Dashbord</a></li>
                    <li><a href="admin-add.php"><ion-icon name="add-circle-outline"></ion-icon> Add Items</a></li>
                    <li><a href="all_view.php"><ion-icon name="eye-outline"></ion-icon> View items</a></li>
                    <li><a href="#"><ion-icon name="cart-outline"></ion-icon> Order</a></li>
                    <li><a href="a-customer.php"><ion-icon name="people-outline"></ion-icon> Customers</a></li>
                    <li><a href="#"><ion-icon name="settings-outline"></ion-icon>Settings</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="view">
            <div class="accont_bar">
                <div class="page-name">
                    <h2 class="i_name">Add Items</h2>
                </div>
                <div class="bar_icon">
                <ion-icon name="notifications-outline" class="icon1"></ion-icon>
                <ion-icon name="person-circle-outline" class="icon1"></ion-icon>
                <ion-icon name="log-out-outline" class="icon1"></ion-icon>
                </div>
            </div>

            <div class="center-align">

           <div class="food_details">
            <div class="add_form" id="Chicken">
                <h2>Hot Crispy Chicken details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="Chicken">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>

            <div class="add_form" id="burger_form">
                <h2>Burger details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="burger">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>

            <div class="add_form" id="pizza_form">
                <h2>pizza details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="pizza">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>
            <div class="add_form" id="HOT-DRUMIFTS">
                <h2>Hot-Drumifts details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="drumifts">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>
            <div class="add_form" id="SNACKS">
                <h2>Snacks details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="snacks">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>
            <div class="add_form" id="SUBMARINE">
                <h2>Submarine details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="pizza">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>
            <div class="add_form" id="BEVERGE">
                <h2>Beverge details</h2>
                <form action="" method='POST'>
                    <div class="input-n"><p>Food name</p><input type="text" name="fname" required></div>
                    <div class="input-p"><p>Food Price</p><input type="number" name="price" required></div>
                    <div class="input-i"><p>Food Image</p><input type="file" name="img" required></div>
                    <div class="btn-add"><button type="submit" value="Add Food" id="btnadd" name="beverge">Add Food </button></div>
                    <div class="btn-veiw"><a href="all_view.php" class="btnview">View items</a></div>
                </form>
        
            </div>

        </div>

    </div>

          <div class="select_food">
                <h3 style="color: #252525;">Select the food items</h3>
                <a href="" class="SFbtn color-link">Hot Crispy Chicken</a>
                <a href="#burger_form" class="SFbtn">BURGER</a>
                <a href="#HOT-DRUMIFTS" class="SFbtn">HOT-DRUMIFTS</a>
                <a href="#SNACKS" class="SFbtn">SNACKS</a>
                <a href="#pizza_form" class="SFbtn">PIZZA</a>
                <a href="#SUBMARINE" class="SFbtn">SUBMARINE</a>
                <a href="#BEVERGE" class="SFbtn">BEVERGE</a>
            </div>
    <!-- 
        <div class="select_food">
            <h3 style="color: #252525;">Select the food items</h3>
            <button class="SFbtn" onclick="location.href='#Chicken'">Hot Crispy Chicken</button>
            <button class="SFbtn" onclick="location.href='#burger_form'">BURGER</button>
            <button class="SFbtn" onclick="location.href='#'">HOT-DRUMIFTS</button>
            <button class="SFbtn" onclick="location.href='#'">SNACKS</button>
            <button class="SFbtn" onclick="location.href='#'">PIZZA</button>
            <button class="SFbtn" onclick="location.href='#'">SUBMARINE</button>
            <button class="SFbtn" onclick="location.href='#'">BEVERGE</button>
        </div>
           -->
        </div>
    </div>
   </div>

</body>
</html>