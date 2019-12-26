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
            <span>NEED ASSISTANCE? 80324609687</span>
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
                <li><a href="file:///C:/Users/hung.nguyen/Desktop/UkuleleShop/Login/index.html">Sign out</a></li>
                <li><i class="fas fa-shopping-cart" id="icon-cart" onclick="displayCart()"></i></li>
            </ul>
            <div class="search">
                <input type="text" id="search" placeholder="Search" title="search">
                <button class="btn-search" onclick="search()"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Image/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Image/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Image/slide3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="main">
        <div>
            <center>
                <p id="tittle">Check out the products</p>
            </center>
        </div>

        <div id="container-product" class="container">
        </div>
        <div id="container-cart" class="container">


        </div>
        <div id="order-container">
            <center><button id="btn-order" onclick="displayInfoCustomer()">Order</button></center>
            <div id="info-customer">
                <p><label>Your full name <span>(*)</span>:</label> <input id="name-cus" type="text"><br></p>
                <p><label>Your phone number<span>(*)</span>:</label> <input id="phone-cus" type="text"><br></p>
                <p><label>Your Address<span>(*)</span>:</label> <input id="address-cus" type="text"><br></p>
                <p><label>Description:</label> <input id="description-cus" type="text"><br></p>
                <p><label>Total:</label><label id="total-price">000</label><button id="btn-ship" onclick="shipping()">Ship</button> <br></p>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="footer-top">
            <div class="footer-top-item">
                <span>Shop Products</span> <br> Models Hawaiian Made <br> Custom Build <br> Accessories <br> Advanced Search
            </div>
            <div class="footer-top-item">
                <span>Helpful Links</span> <br>Support Center <br>Shipping & Turnaround <br>Customer Service <br>Return Policy <br>Our Setup Process <br> Ukulele Care
            </div>
            <div class="footer-top-item" id="footer-top-easy">
                <span>Easy Shopping</span> <br> We accept all major credit cards, PayPal, and now you can apply for PayPal credit and get 6 months with no interest! <br>
                <img src="Image/sponsor.png" alt="" style="margin: 30px auto;">
            </div>
            <div class="footer-top-item" id="footer-top-contact">
                <p><span>NEED ASSISTANCE?</span></p>
                <p>808.622.8000</p>
                <p>66-560 #4 Kamehameha Hwy.</p>
                <p>Haleiwa HI, 96712</p>
                Email:&nbsp;<a href="#">hung.nguyen@gmail.com</a>
            </div>
        </div>
        <center><img src="Image/logo3.jpg" alt="logo" style="margin: 30px;"></center>
    </div>
    <script src="js.js"></script>

</body>

</html>