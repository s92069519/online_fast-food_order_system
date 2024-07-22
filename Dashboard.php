<?php
    include ('connect.php');
// Array of table names
$tables = array("beverge", "burgers", "chicken", "drumifts", "pizza","snacks","submarine");

// Variable to store total rows
$totalRows = 0;

// Loop through each table and add row count to total
foreach ($tables as $table) {
    $query = "SELECT COUNT(*) AS total_rows FROM " . $table;
    $result = $con->query($query);
    
    if ($result) {
        $row = $result->fetch_assoc();
        $totalRows += $row['total_rows'];
    } else {
        echo "Error executing query for " . $table . ": " . $conn->error . "<br>";
    }
}

// Display the total number of rows
?>
<?php
    include 'connect.php';
    $sql = "SELECT COUNT(*) as count FROM users";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

// Get the row count
$user = $row['count'];


?>
<?php
    include 'connect.php';
    $sql = "SELECT COUNT(*) as cound FROM coutactus ";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

// Get the row count
    $msg = $row['cound'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
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
                        <h2 class="i_name">Dashboard</h2>
                    </div>
                    <div class="bar_icon">
                    <ion-icon name="notifications-outline" class="icon1"></ion-icon>
                    <ion-icon name="person-circle-outline" class="icon1"></ion-icon>
                    <ion-icon name="log-out-outline" class="icon1"></ion-icon>
                    </div>
                </div>
                <div class="welcome_name">
                    <h4 style="color:#252525;">Wel come to Heysqa</h4>
                    <h5 style="color:gray;">Here whats happening in your Food Court</h5>
                </div>
                <div class="counter">
                    <div class="count_cart">
                        <div class="c-1">
                            <div class="c-icon">
                                <ion-icon name="pie-chart-outline" class="count-i"></ion-icon>
                            </div>
                            <div class="c-p">
                               <h2 class="menuTotal"><?php echo $totalRows; ?></h2>
                                <h5>Total items</h5>
                            </div>
                        </div>
                        <div class="c-1">
                            <div class="c-icon">
                                <ion-icon name="cart-outline" class="count-i"></ion-icon>
                            </div>
                            <div class="c-p">
                                <h2 class="menuTotal" id="order-c">0</h2>
                                <h5>Total order</h5>
                            </div>
                        </div>
                        <div class="c-1">
                            <div class="c-icon">
                                <ion-icon name="people-outline" class="count-i"></ion-icon>
                            </div>
                            <div class="c-p">
                                <h2 class="menuTotal" id="customer-c"><?php echo $user ?></h2>
                                <h5>Customer</h5>
                            </div>
                        </div>
                        <div class="c-1">
                            <div class="c-icon">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                            </div>
                            <div class="c-p">
                                <h2 class="menuTotal" id="customer-c"><?php echo $msg ?></h2>
                                <h5>Total mail</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-sv">
                    <h2>Order status</h2>
                    <div class="status-colum">
                        <div class="s-row">
                            <img src="image/users/photo-1633332755192-727a05c4013d.jpg" alt="" class="s-img">
                            <p>Vasil</p> 
                            <p>0754158741</p>
                            <p>cheese+burger -2,<br/>pizza-01</p>
                            <p> Rs.2500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>
                        <div class="s-row">
                            <img src="image/users/ki.jpg" alt="" class="s-img">
                            <p>Barath</p> 
                            <p>0774152147</p>
                            <p>cheese+burger -2,<br/>pizza-01</p>
                            <p> Rs.2500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>
                        <div class="s-row">
                            <img src="image/users/da.jpg" alt="" class="s-img">
                            <p>Rohith</p> 
                            <p>0754857410</p>
                            <p>cheese+burger -3,<br/>pizza-01</p>
                            <p> Rs.3500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>
                        <div class="s-row">
                            <img src="image/users/fe.png" alt="" class="s-img">
                            <p>Hanees</p> 
                            <p>0775486543</p>
                            <p>cheese+burger -3,<br/>pizza combo 02<br/>pizza-01</p>
                            <p> Rs.5500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>
                        <div class="s-row">
                            <img src="image/users/vd.jpg" alt="" class="s-img">
                            <p>Aakil</p> 
                            <p>0754475896</p>
                            <p>cheese+burger -3,<br/>pizza-01</p>
                            <p> Rs.3500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>

                        
                        <div class="s-row">
                            <img src="image/users/vd.jpg" alt="" class="s-img">
                            <p>Aakil</p> 
                            <p>0754475896</p>
                            <p>cheese+burger -3,<br/>pizza-01</p>
                            <p> Rs.3500.00</p>
                            <ion-icon name="create-outline" class="i-s" style="color: green;"></ion-icon>
                            <ion-icon name="trash-outline" class="i-s" style="color: rgb(220, 4, 4);"></ion-icon>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
   
  <script>
    var totalOrder = document.querySelectorAll('.s-row');
    var orderCount= document.getElementById("order-c").innerHTML=totalOrder.length;
  </script>

</body>
</html>



