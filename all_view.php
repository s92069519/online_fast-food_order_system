<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/admin.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script src="js/script.js"></script>
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
                        <li><a href="admin-add.php"><ion-icon name="add-circle-outline"></ion-icon> Add Item</a></li>
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
                        <h2 class="i_name">View items</h2>
                    </div>
                    <div class="bar_icon">
                    <ion-icon name="notifications-outline" class="icon1"></ion-icon>
                    <ion-icon name="person-circle-outline" class="icon1"></ion-icon>
                    <ion-icon name="log-out-outline" class="icon1"></ion-icon>
                    </div>
                </div>
               
                <div class="select_food">
                    <h3 style="color: #252525;">Select the food items</h3>
                    <a href="#Chicken" class="SFbtn">Hot Crispy Chicken</a>
                    <a href="#burger_form" class="SFbtn">BURGER</a>
                    <a href="#HOT-DRUMIFTS" class="SFbtn">HOT-DRUMIFTS</a>
                    <a href="#SNACKS" class="SFbtn">SNACKS</a>
                    <a href="#pizza_form" class="SFbtn">PIZZA</a>
                    <a href="#SUBMARINE" class="SFbtn">SUBMARINE</a>
                    <a href="#BEVERGE" class="SFbtn">BEVERGE</a>
                </div>


                <div class="all_view_table">
                <div class="view_table" id="Chicken">
                    <h2>Hot Crispy Chicken items</h2>
                    <div class="row">
                <?php
                     $sql="select * from chicken";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/chicken/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'.00</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?id='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>

                <div class="view_table" id="burger_form">
                    <h2>Burger items</h2>
                    <div class="row">
                <?php
                     $sql="select * from burgers";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/BURGERS/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?bu='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>

                <div class="view_table" id="HOT-DRUMIFTS">
                    <h2>HOT-DRUMIFTS items</h2>
                    <div class="row">
                <?php
                     $sql="SELECT * FROM `drumifts`";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/HOT_DRUMLETS/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?hot='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                    
                </div>

                <div class="view_table" id="SNACKS">
                    <h2>Burger items</h2>
                    <div class="row">
                <?php
                     $sql="select * from snacks";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/SNACKS/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?sn='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>

                <div class="view_table" id="pizza_form">
                    <h2>Burger items</h2>
                    <div class="row">
                <?php
                     $sql="select * from pizza";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/PIZZA/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?pi='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>


                <div class="view_table" id="SUBMARINE">
                    <h2>Burger items</h2>
                    <div class="row">
                <?php
                     $sql="select * from submarine";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/Submarine/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?su='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>


                <div class="view_table" id="BEVERGE">
                    <h2>Burger items</h2>
                    <div class="row">
                <?php
                     $sql="select * from beverge";
                     $res=$con->query($sql);
                        if($res->num_rows>0){
                            while($row=$res->fetch_assoc()){
                                echo
                                '<div class="item-v">
                                <div class="food-img">
                                    <img src="image/BEVERAGE/'.$row['pic'].'" class="row-img" alt="">
                                </div>
                                <div class="food-name">
                                    <p>'.$row['fname'].'</p>
                                </div>
                                <div class="li food-price">
                                    <p>Rs.'.$row['price'].'</p>
                                </div>
                                <div class="li">
                                <a href="delete.php?be='.$row['Id'].'" class="Deletebtn" onclick="return check()">Delete</a>
                                </div>
                            </div>';
                            }
                        }                       
                    ?>
                    </div>
                </div>



             </div>
            </div>
        </div>
       </div>
       <script>
        function check() {
            return confirm('Are you sure you want to Delete this Record');
        }
        </script>
</body>
</html>
