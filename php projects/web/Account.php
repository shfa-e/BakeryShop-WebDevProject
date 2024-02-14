<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Account</title>

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

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        /* S E L E C T I N G   I T E M S */

        function change() {
            document.getElementById('demo').innerHTML = (form.select[form.select.selectedIndex].text);
        }

        function change2() {
            document.getElementById('demo2').innerHTML = (form2.select2[form2.select2.selectedIndex].text);
        }

        function change3() {
            document.getElementById('demo3').innerHTML = (form3.select3[form3.select3.selectedIndex].text);
        }

        function change4() {
            document.getElementById('demo4').innerHTML = (form4.select4[form4.select4.selectedIndex].text);
        }

        function change5() {
            document.getElementById('demo5').innerHTML = (form5.select5[form5.select5.selectedIndex].text);
        }

        function change6() {
            document.getElementById('demo6').innerHTML = (form6.select6[form6.select6.selectedIndex].text);
        }

        function change7() {
            document.getElementById('demo7').innerHTML = (form7.select7[form7.select7.selectedIndex].text);
        }

        function change8() {
            document.getElementById('demo8').innerHTML = (form8.select8[form8.select8.selectedIndex].text);
        }

        function change9() {
            document.getElementById('demo9').innerHTML = (form9.select9[form9.select9.selectedIndex].text);
        }

        function change10() {
            document.getElementById('demo10').innerHTML = (form10.select10[form10.select10.selectedIndex].text);
        }

        function change11() {
            document.getElementById('demo11').innerHTML = (form11.select11[form11.select11.selectedIndex].text);
        }

        function change12() {
            document.getElementById('demo12').innerHTML = (form12.select12[form12.select12.selectedIndex].text);
        }

        function change13() {
            document.getElementById('demo13').innerHTML = (form13.select13[form13.select13.selectedIndex].text);
        }

        function change14() {
            document.getElementById('demo14').innerHTML = (form14.select14[form14.select14.selectedIndex].text);
        }

        function change15() {
            document.getElementById('demo15').innerHTML = (form15.select15[form15.select15.selectedIndex].text);
        }

        function change16() {
            document.getElementById('demo16').innerHTML = (form16.select16[form16.select16.selectedIndex].text);
        }

        function change17() {
            document.getElementById('demo17').innerHTML = (form17.select17[form17.select17.selectedIndex].text);
        }

        function change18() {
            document.getElementById('demo18').innerHTML = (form18.select18[form18.select18.selectedIndex].text);
        }

        function change19() {
            document.getElementById('demo19').innerHTML = (form19.select19[form19.select19.selectedIndex].text);
        }

        function change20() {
            document.getElementById('demo20').innerHTML = (form20.select20[form20.select20.selectedIndex].text);
        }

        function change21() {
            document.getElementById('demo21').innerHTML = (form21.select21[form21.select21.selectedIndex].text);
        }

        function change22() {
            document.getElementById('demo22').innerHTML = (form22.select22[form22.select22.selectedIndex].text);
        }

        function change23() {
            document.getElementById('demo23').innerHTML = (form23.select23[form23.select23.selectedIndex].text);
        }

        function change24() {
            document.getElementById('demo24').innerHTML = (form24.select24[form24.select24.selectedIndex].text);
        }
    </script>

    <style>
        body {
            background-color: #EEBCBE;
            font-family: "Helvetica Neue", HelveticaNeue, Arial, sans-serif;
            margin: 0px;
        }

        /* N A V I G A T I O N */

        .navtop {
            overflow: hidden;
            background-color: #e5989b;
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
            background-color: #f4acb7;
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
            background-color: #f4acb7;
            color: white;
        }

        .drop-content a:hover {
            background-color: #e5989b;
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
            .dropdown .dropbtn {
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
            background: #EEBCBE;
            font-size: 17px;
            border: none;
        }



        /* M A I N - C O N T E N T */

        #main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 5%;
            background-color: rgba(255, 255, 255, 0.6);
        }

        #heading {
            background-color: rgba(255, 255, 255, 0.9);
            text-align: center;
            margin: 5% 5% 0% 5%;
            padding: 2%;
            height: auto;
            width: auto;
            overflow: hidden;
        }

        #heading h1 {
            font-family: 'Parisienne', cursive;
            font-size: 40px;
            text-shadow: 2px 2px #EEBCBE;
        }

        #heading h4 {
            font-style: italic;
            font-weight: lighter;
            color: grey;
        }

        .open-button {
            background-color: rgba(248, 248, 248, 0.6);
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 5%;
            left: 93%;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }


        /* I T E M   D E T A I L S */

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 3%;
            text-align: center;
            background-color: white;
            border: 1.5px solid black;
            transition: 1s ease-in-out;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            width: 100%;
            font-size: 18px;
            transition: 1s ease-in-out;
        }

        .card:hover {
            box-shadow: 10px 10px 25px white;
        }

        .card button:hover {
            opacity: 0.9;
            background-color: #370617;
        }

        .description {
            padding: 3%;
        }

        .item-img {
            height: 250px;
            width: 100%;
        }

        .item-price {
            text-decoration: none;
            color: brown;
            position: relative;
            top: -2%;
            margin: 0 0 0 2%;
            font-style: italic;
            font-weight: bold;
            font-size: 22px;

        }

        .price-dropdown {
            text-decoration: none;
            color: grey;
            position: relative;
            top: -5%;
            margin: 0 0 0 2%;
        }

        /* F O O T E R   +   S O C I A L   I C O N S */

        #footer {
            background-image: linear-gradient(to right, #e5989b, #f9d2d7);
            padding: 5%;
        }

        #social-container {
            display: flex;
            justify-content: space-evenly;
        }

        .social-icons li a i {
            padding: 10px;
            font-size: 1rem;
            border-radius: 50%;
            transition: 1.5s ease-in-out;
            color: black;
        }


        .social-icons li a i:hover {
            box-shadow: 0px 0px 6px 4px rgba(255, 255, 255, 0.3);
        }

        .footer__contact {
            font-size: 2rem;
        }

        .footer__mail {
            font-size: 2rem;
        }

        .horizontal-list {
            list-style: none;
            padding-left: 0px;
            margin: 0px;
        }

        .horizontal-list li {
            display: inline-block;
            margin: 0px 8px 8px 0px;
            font-weight: 100;
            font-size: 2.5rem;
        }

        .horizontal-list li a {
            text-decoration: none;
        }


        .social-icons li a i {
            padding: 10px;
            font-size: 2.5rem;
            border-radius: 50%;
        }

        .heading {
            font-size: 36px;
            color: #333;
            /* Dark gray color */
            text-align: center;
            letter-spacing: 1px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

    <!--  N A V I G A T I O N   B A R  -->

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
        <a href="pages.php" style="float: right;"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>


        <div class="search-container">
            <input type="text" placeholder="Search" name="search" pattern=[A-Za-z]>
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>

    </div>


    <!--  M A I N   C O N T E N T  -->

    <div id="heading">
        <h1>Account</h1>
    </div>

    <!--chat box--->
    <button class="open-button" onclick="openForm()"><i class="fas fa-envelope-open-text fa-4x"></i></button>


    <div class="chat-popup" id="myForm">
        <form action="#" class="form-container">
            <h1>Chat</h1>

            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>

            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <!--  I T E M   C A R D S  -->

    <div class="heading" id="userInfo">
        <?php

        // Retrieve data from session variables
        $userEmail = $_SESSION["email"];
        $mobileNo = $_SESSION["mobile"];
        $userName = $_SESSION["username"];

        // Display the data
        if(isset($_COOKIE['name']) && !empty($_COOKIE['name'])){ echo "Name: ", $_COOKIE["name"];}
        echo "<p>Email: $userEmail </p>";
        echo "<p>Mobile Number: $mobileNo </p>";
        echo "<p>Username: $userName </p>";
        ?>

        <!-- Log out button -->
        <form action="logout.php" method="post">
            <button type="submit" name="logout" style="background-color: #ff3a00;
                                                  border: none;
                                                  color: white;
                                                  padding: 10px 20px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  display: inline-block;
                                                  font-size: 16px;
                                                  margin: 4px 2px;
                                                  transition-duration: 0.4s;
                                                  cursor: pointer;
                                                  border-radius: 8px;">Log Out</button>
        </form>

        <form action="delete_account.php" method="post">
        <button type="submit" name="delete_account" style = "background-color: #ff3a00;
                                                  border: none;
                                                  color: white;
                                                  padding: 10px 20px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  display: inline-block;
                                                  font-size: 16px;
                                                  margin: 4px 2px;
                                                  transition-duration: 0.4s;
                                                  cursor: pointer;
                                                  border-radius: 8px;">Delete Account</button>
        </form>

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
                    <button type="button" class="btn btn-primary checkout-btn" onclick="Checkout()">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- F O O T E R   S O C I A L   I C O N S -->

    <div id="footer">

        <div id="social-container">

            <div class="footer__contact">
                <i> 0558663584</i>
            </div>

            <div class="footer__social">
                <ul class="horizontal-list text-center social-icons">
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest fa-4x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer__mail">
                <i>sweetretreat@gmail.com</i>
            </div>

        </div>

    </div>

</body>

</html>