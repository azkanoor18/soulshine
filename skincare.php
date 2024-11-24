
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link rel="shortcut icon" type="image" href="Images/logo.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Style.css">
    <style>
        * {
            box-sizing: border-box;
        } 

        .menu_toggle {
            display: none;
        }

        .menu {
            width: 65%;
            
        }

        /*
        .menu_toggle {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            z-index: 100;
        }

        /* line box style
        .menu_toggle ion-icon {
            width: 35px;
            height: 35px;
            color: black;
            border: 2px solid black;
            border-radius: 5px;
        }

        /* line box on same position side by side
        .menu_toggle span ion-icon:nth-child(2) {
            display: none;
        }

        /* line box on same position up down
        .active.menu_toggle span ion-icon:nth-child(1) {
            display: none;
        }

        /* line box style to remain appear after open it for closeing
        .active.menu_toggle span ion-icon:nth-child(2) {
            display: block;
        }


        .active.menu {
            left: 0;
        }

        /*Menu toggle ends*/

        .hdul {
           
            list-style-type: none;
            margin: 0;
            margin-left: 120px;
            margin-right: 80px;
            padding: 6px;
            overflow: hidden;
            width: 80%;
            background-color: rgb(206, 115, 79);
        }

        .hdli {
            float: left;

        }

        .hdli a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: x-large;
        }

        .hdli a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(247, 92, 92);
        }

        .hdli.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            text-align: center;
            position: absolute;
            background-color: rgb(206, 115, 79);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: rgb(247, 92, 92);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .nbox{
            width: 150px;
            height: 150px;
            margin: 2px;
            display: inline-block;
            
        }
        #box2{
            position: fixed;
            bottom: 0px;
            right: 0px;
            width: 150px;
            height: 85px;
        }
        .nbox i{
            font-size: 50px;
            

        } 
        /* Media Queries*/
      

        
    </style>
</head>
<body>
    <header>
        <marquee behaviour="scroll"  dir="auto" scrollamount='20'  style="background-color: rgb(247, 92, 92);"> <h3>Beauty & Makeup Sale Live Now !!</h3> </marquee>
    
        <div class="header-container">
            <div class="logoimg">
                <img src="Images/fulllogo.png" alt="logo" width="300" height="100">
            </div>
            <div class="login">
                <a class="login" href="loginsignup.php"><i class='bx bx-user-circle'></i>Login</a>
    
            </div>
            <div class="menu">
                <ul class="hdul">
                <li class="hdli"><a href="index.php">Home</a></li>
                    <li class="hdli"><a href="#news">New In</a></li>
                    <li class="hdli"><a href="deals.html">Deals</a></li>
                    <li class="dropdown hdli">
                    <a href="#" class="dropbtn" onclick="return false;" style="pointer-events: none; ">Beauty</a>  
                        <div class="dropdown-content">
                        <a href="makeup.php">Makeup</a>
                     <a href="skincare.php">Skincare</a>
                   
                        </div>
                    </li>
                    <li class="hdli">  <a href="fragnances.php">Fragnance</a></li>
                    <li class="hdli"> <a href="accessories.php">Accessories</a></li>
                </ul>
    
            </div></div>
        </header> <hr>
</body>
</html>