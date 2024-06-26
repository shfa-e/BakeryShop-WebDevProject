<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Location: signup page.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://kit.fontawesome.com/815d5311a8.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="mycart.js"></script>
        <script src="myscript.js"></script>
    </head>

    <script>
        function myFunction() {
            var x = document.getElementById("mynavTop");
            if (x.className === "navtop") {
                x.className += " responsive";
            } else {
                x.className = "navtop";
            }
        }
    </script>

    <style>
        body {
            background-color: #64dfdf;
            font-family: "Helvetica Neue", HelveticaNeue, Arial, sans-serif;
            margin: 0px;
        }

        /* N A V I G A T I O N */

        .navtop {
            overflow: hidden;
            background-color: #5390d9;
        }

        .navtop a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .navtop .icon {
            display: none;
        }

        .drop_down {
            float: left;
            overflow: hidden;
        }

        .drop_down .dropdown_btn {
            font-size: 17px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .drop-content {
            display: none;
            position: absolute;
            background-color: #5390d9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .drop-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .navtop a:hover,
        .drop_down:hover .dropdown_btn,
        .search-container button:hover {
            background-color: #5e60ce;
            color: white;
        }

        .drop-content a:hover {
            background-color: #5e60ce;
            color: white;
        }

        .drop_down:hover .drop-content {
            display: block;
        }

        @media screen and (max-width: 920px) {
            .navtop input[type=text] {
                display: none;
            }
        }

        @media screen and (max-width: 698px) {

            .navtop a:not(:first-child),
            .drop_down .dropdown_btn {
                display: none;
            }

            .navtop a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 698px) {
            .navtop.responsive {
                position: relative;
            }

            .navtop.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .navtop.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .navtop.responsive .drop_down {
                float: none;
            }

            .navtop.responsive .drop-content {
                position: relative;
            }

            .navtop.responsive .drop_down .dropdown_btn {
                display: block;
                width: 100%;
                text-align: left;
            }

            .navtop input[type=text] {
                display: inline;
                padding: 6px;
                margin-top: 8px;
                font-size: 17px;
                border: none;
            }

        }

        @media screen and (max-width: 488px) {
            .navtop input[type=text] {
                display: none;
            }
        }

        .search-container {
            float: right;
        }

        .navtop input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #64dfdf;
            font-size: 17px;
            border: none;
        }
    </style>
</head>

<body>
    <!--  N A V I G A T I O N   B A R  -->

    <div class="topnav" id="myTopnav">

        <div class="navtop" id="mynavTop">

            <a href="Homepage.html">Home</a>
            <div class="drop_down">
                <button class="dropdown_btn">Items
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="drop-content">
                    <a href="Cakes.html">Cakes</a>
                    <a href="Pastries.html">Pastries</a>
                    <a href="Cupcakes.html">Cupcakes</a>
                    <a href="BiscuitsAndCookies.html">Cookies</a>
                    <a href="Donut.html">Donuts</a>
                    <a href="Waffles.html">Waffles</a>
                    <a href="Breads.html">Breads</a>
                    <a href="Others.html">Others</a>
                </div>
            </div>
            <a href="KitchenPage.html">Our Kitchen</a>
            <a href="PartyProps.html">Props</a>
            <a href="Gallery.html">Gallery</a>
            <a href="FAQ.html">FAQ</a>
            <a href="" style="float: right;" data-toggle="modal" data-target="#cart"><i class="fas fa-shopping-cart"></i><span class="cart-items">( 0 )</span></a>
            <a href="Pages.php" style="float: right;"><i class="fas fa-user"></i></a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>


            <div class="search-container">
                <input type="text" placeholder="Search" name="search" pattern=[A-Za-z]>
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>

        </div>


        <!--main content-->
        <div class="container">
            <div class="row" style="margin-top:5%;">
                <div class="col-md-6">
                    <!---card-->
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="margin-bottom:5%;"><u>Your Selected Items</u></h1>
                            <div class="cart-body">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!---form details-->
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="margin-bottom:5%;"><u>Your Details For Order</u></h1>
                            <form action="#">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Email address: </label>
                                    <?php
                                    echo $_SESSION["email"]; ?>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label"><?php if (isset($_COOKIE['name']) && !empty($_COOKIE['name'])) {
                                                                                echo "Name: ", $_COOKIE["name"];
                                                                            } ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Phone number: </label>
                                    <?php
                                    echo $_SESSION["mobile"]; ?>
                                </div>
                                <div class="form-group">
                                    <label for="address">Your Shipping Address</label>
                                    <textarea class="form-control" placeholder="Enter your address...." id="address" rows="3" required></textarea>
                                </div>

                                <div class="container">
                                    <button class="btn btn-success" style="color:white" onclick="orderNow()">Order Now</button>
                                    <a class="btn btn-primary" href="homepage.html" style="color:white">Continue Shopping</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Your Cart</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="cart-body">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary checkout-btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>