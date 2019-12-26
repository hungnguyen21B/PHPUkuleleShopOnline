<?php 
require "../Model/iproduct.php";
require "../Model/product.php";
require "../Model/ukulele.php";
require "../Model/accessory.php";
require "../Add/database.php"; 
$sql ="select * from ukulele; ";
$products = $db->query($sql)->fetch_all();
var_dump($products);

for($i=0;$i<count($products);$i++){
    if ($products['type']=="ukulele"){
        $products = new Ukulele();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="bar-top">
        <div class="bar-top-left">
            <span>NEED ASSISTANCE? (+84) 342 609 687</span>
            <div>
                <img src="Image/logo2.jpg" alt="" title="Hung Shop">
            </div>
        </div>
        <div class="bar-top-center">
            <ul>
                <li><i class="fas fa-home" id="icon-home" onclick="displayPro()"></i></li>
                <li><a href="https://www.facebook.com/congtu.phongluu.12">Company Info</a></li>
                <li><a href="https://vimeo.com/369594701">Entertament</a></li>
                <li class="dropdown"><a href="#">Category</a>
                    <div class="dropdown-content">
                        <a href="#" onclick="catagories('Consert')">Consert</a>
                        <a href="#" onclick="catagories('Baritone')">Baritone</a>
                        <a href="#" onclick="catagories('Soprano')">Soprano</a>
                        <a href="#" onclick="catagories('Tenor')">Tenor</a>
                    </div>
                </li>
                <li><a href="../Login/index.php">Sign out</a></li>
                
            </ul>
            <div class="search">
                <input type="text" id="search" placeholder="Search" title="search">
                <button class="btn-search" onclick="search()"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="main">
        <div>
            <center>
                <p id="tittle">Check out the products</p>
            </center>
        </div>

        <div id="container-product" class="container">
        </div>
        <div id="order-container">
        </div>
    </div>
    <div id="footer">
        <center><img src="Image/logo3.jpg" alt="logo" style="margin: 30px;"></center>
    </div>
    <script src="js.js"></script>

</body>

</html>