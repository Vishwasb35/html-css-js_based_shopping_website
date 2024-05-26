<?php
$con=mysqli_connect('localhost','root','','myshop');
if(mysqli_connect_errno()){
  echo "fail";
}
  else{
    echo "connect success";
   }


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="shopping.css">
    <script src="https://kit.fontawesome.com/ebbbd7f70c.js" crossorigin="anonymous"></script>
<style>
    .header {
      background-color:  #1a1a1a;
      color: #fff;
      font-size:8px;
      height: 30px;
      padding: 1px;
      text-align: center;
    }
    .categories {
    background-color: #f1efef;
    padding: 10px;
    display: flex;
    justify-content: space-around;
  }

  .category {
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    background-color: #1a1818;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .category a {
      text-decoration: none; /* Remove underline from anchor tags within .category */
      color: inherit; /* Inherit the color from the parent .category */
    }

  .category:hover {
    background-color: #ccc;
  }

  .ad{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar1 {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        .admin-button {
            background-color: #0a0a0a;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-button i {
            margin-right: 8px;
        }

        .admin-button:hover {
            background-color: #181b19;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
        <div class="nav-menu">
            <div class="dropdown">
                <button class="dropbtn"><b>MEN</b></button>
                <div class="dropdown-content">
                  <a href="men.html"><B>SHIRTS</B></a>
                  <a href="men.html">T-SHIRTS</a>
                  <a href="men.html">JACKETS</a>
                  <a href="men.html">JEANS</a>
                  <a href="men.html">SHOES</a>
                </div>
              </div> 
              <div class="dropdown">
                <button class="dropbtn"><b>WOMEN</b></button>
                <div class="dropdown-content">
                  <a href="women.html">DRESSES</a>
                  <a href="women.html">TOPS</a>
                  <a href="women.html">SAREES</a>
                  <a href="women.html">JEANS</a>
                </div>
              </div> 
              <div class="dropdown">
                <button class="dropbtn"><B>KIDS</B></button>
                <div class="dropdown-content">
                  <a href="kid.html">SHIRTS</a>
                  <a href="kid.html">TROUSERS</a>
                  <a href="kid.html">SHORTS</a>
                </div>
              </div> 
        </div>
        <div class="nav-search">
            <select class="search-select">
                <option>ALL</option>
            </select>
            
            <input placeholder="Search Fashion Vault" class="search-input">
            
        </div>
        <div class="nav-user">
        <i class="fa-solid fa-user" style="color: #f2f2f2;"></i>
        <a class="link" style="color: #fafafa;" href="user.html">User</a>
        </div>  
        
        <div class="nav-cart">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
            Cart
            </div>   
        </div>
    </header><br>
    <div class="ad">
    <div class="navbar1">
        <button class="admin-button" onclick="goToAdminPage()">
            <i class="fas fa-user-shield"></i> Admin
        </button>
    </div>

    <!-- Your eCommerce content goes here -->

    <script>
        function goToAdminPage() {
            // Replace the following line with the actual URL of your admin page
            window.location.href = 'admin_login.php';
        }
    </script>
    </div><br>
        <div id="slider">
            <figure>
                <img src="ajio.jpg">
                <img src="ajio1.jpg">
                <img src="3.jpg">
                <img src="aj3.webp">
                <img src="ajio.jpg">
            </figure>
        </div>
        <br>
        <div class="header">
    <h1>CATEGORIES</h1>
  </div>
  
        <div class="categories">
        <?php
        $select_category=" Select * from `category`";
        $result_category=mysqli_query($con,$select_category);
       // $row_data=mysqli_fetch_assoc($result_brand);
        //echo $row_data['brandtitle'];
        while($row_data=mysqli_fetch_assoc($result_category)){
            $categorytitle=$row_data['categorytitle'];
            $categoryid=$row_data['categoryid'];
            echo "<div class='category'> <a href='shopping.php?category=$categoryid'>$categorytitle</a></div>";
        }


?>    
  </div><br>
  <br>
        <div class="header">
    <h1>BRANDS</h1>
  </div>
  <div class="categories">
        <?php
        $select_brand=" Select * from `brand`";
        $result_brand=mysqli_query($con,$select_brand);
       // $row_data=mysqli_fetch_assoc($result_brand);
        //echo $row_data['brandtitle'];
        while($row_data=mysqli_fetch_assoc($result_brand)){
            $brandtitle=$row_data['brandtitle'];
            $brandid=$row_data['brandid'];
            echo "<div class='category'> <a href='shopping.php?brand=$brandid'>$brandtitle</a></div>";
        }


?>
    
  </div><br>
  <br> 
        <h1>FASHION VAULT EXCLUSIVE'S</h1>
        <div class="shop-section">
            
            <div class="box1 box">
           
            <div class="box-image">
                <a href="men.html">
                    <img src="virat.jpg" height="350px" width="308px">
                    </a>
                    <h4>PUMA</h4>
            </div>
            </div>
            <div class="box2 box">
                <div class="box-image">
                    <a href="www.google.com">
                        <img src="kid.jpg" height="350px" width="308px">
                        </a>
                </div>
            </div>
            <div class="box3 box">
                <div class="box-image">
                    <a href="www.google.com">
                        <img src="shoes.jpg" height="350px" width="308px">
                        </a>
                </div>
            </div>
            <div class="box4 box">
                <div class="box-image">
                    <a href="men.html">
                        <img src="varun.jpg" height="350px" width="308px">
                        </a>
                </div>
            </div>
        </div>

    </div>
    <br><br><br>
    <h1>TOP PICKS</h1>
    <div class="shop-section">
        <div class="box1 box">
       
        <div class="box-image">
            <a href="men.html">
                <img src="top1.jpg" height="350px" width="308px">
                </a>
        </div>
        </div>
        <div class="box2 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="top2.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="top4.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="top3.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div> 
    </div>    <br>
    <h1>CRAZY DEALS</h1>
    <div class="shop-section">
        <div class="box1 box">
       
        <div class="box-image">
            <a href="www.google.com">
                <img src="1jul.jpg" height="350px" width="308px">
                </a>
        </div>
        </div>
        <div class="box2 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="1jul1.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="nike.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-image">
                <a href="www.google.com">
                    <img src="ray.jpg" height="350px" width="308px">
                    </a>
            </div>
        </div> 
    </div>    <br>     
<footer>
    
    <center><img src="logo.png" height="150px"></center>
    <br>
    <div class="footer1">
    <div class="exchange">
    <i class="fa-solid fa-arrows-rotate" style="color: #fafafa;"></i><pre>   Easy Exchange</pre>`
        </div>
        <div class="hand">
            <i class="fa-solid fa-hand-holding-heart" style="color: #ffffff;"></i><pre>   100% Hand Picked</pre>`
                </div>
                <div class="delivery">
                    <i class="fa-solid fa-truck" style="color: #ffffff;"></i>  <pre>  Quick Delivery</pre>`
                        </div>
    </div>   <br><br><br>         
</footer>                  
</body>
</html>