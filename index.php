<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soulshine</title>
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
    </header> 

    <main>
        <section>
            <div class="scbuttons ">
                <input type="radio" name="radio-btn" id="radio1" class="button" onclick="changeSlide(0)" checked>
                <input type="radio" name="radio-btn" id="radio2" class="button" onclick="changeSlide(1)">
                <input type="radio" name="radio-btn" id="radio3" class="button" onclick="changeSlide(2)">
                <input type="radio" name="radio-btn" id="radio4" class="button" onclick="changeSlide(3)">
            </div>

            <img src="Images/shintro.jpg" alt="" class="slide scimg">
            <img src="Images/shsale.jpg" alt="" class="slide scimg">
            <img src="Images/collage.jpg" alt="" class="slide scimg">
            <img src="Images/shcontact.jpg" alt="" class="slide scimg">


        </section>
        <div class="scnav">
            <a class="side-button prev" onclick="goPrev()"><i class='bx bxs-left-arrow'></i></a>
            <a class="side-button next" onclick="goNext()"><i class='bx bxs-right-arrow'></i></a>
        </div>


        <div class="card">
            <div class="image">
            </div>
            <div class="image">
            </div>
            <div class="image">
            </div>
            <div class="image">
            </div>
        </div>
        <!-- Whatsaapp-->
        <div class="cont">
        <div class="nbox" id="box2"><a href="https://wa.me/923319512381"><i class='bx bxl-whatsapp-square' style='color:#31a80c'  ></i></a></div>

        <!-- Youtube Video-->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hitp-eRCKqo?si=r3HY3vlYINQBy8ke" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <!-- Products -->
       

    </main><br><br><br><br><br><br>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class='bx bxl-whatsapp smi ' style='color:#3e7137'></i>+92 3319512381</li>
                        <li><i class='bx bxl-youtube smi' style='color:#ea1d11'></i>Soulshine Cosmestics
                        </li>
                        <li><i class='bx bxl-instagram-alt  smi' style='color:#e311ea'></i> Soulshine_pk
                        </li>
                        <li><i class='bx bxl-facebook smi' style='color:#3446ea'></i>Soulshine</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <p>Feel free to follow us on Social Media . <br> All links are given below</p> <br>
                        <a href="https://www.instagram.com/soulshine_pk"><i class='bx bxl-instagram-alt  smi'
                                style='color:#e311ea'></i></a>
                        <a href="https://www.facebook.com/profile.php"><i class='bx bxl-facebook smi'
                                style='color:#3446ea'></i></a>
                        <a href="https://youtube.com/@soulshine_pk"><i class='bx bxl-youtube smi'
                                style='color:#ea1d11'></i></a>
                        <a href="#"><i class='bx bxl-whatsapp smi ' style='color:#3e7137'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="Script.js"></script>
    <script>
        let cart = [];
        let totalPrice = 0;

        function addToCart(id, name, price) {
            cart.push({ id, name, price });
            totalPrice += price;
            document.getElementById('cart-count').innerText = cart.length;
            alert(`${name} added to cart!`);
        }

        function toggleCart() {
            const cartSection = document.getElementById('cart');
            const catalogueSection = document.getElementById('catalogue');
            cartSection.style.display = cartSection.style.display === 'none' ? 'block' : 'none';
            catalogueSection.style.display = catalogueSection.style.display === 'none' ? 'block' : 'none';
            updateCart();
        }

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            cartItems.innerHTML = '';
            cart.forEach(item => {
                const li = document.createElement('li');
                li.textContent = `${item.name} - $${item.price}`;
                cartItems.appendChild(li);
            });
            document.getElementById('total-price').innerText = totalPrice;
        }

        function checkout() {
            const cartSection = document.getElementById('cart');
            const checkoutSection = document.getElementById('checkout');
            cartSection.style.display = 'none';
            checkoutSection.style.display = 'block';
        }

        document.getElementById('personal-details-form').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('number').value;
            const address = document.getElementById('address').value;
            alert(`Order placed!\nName: ${name}\nnumber: ${number}\nAddress: ${address}\nTotal: $${totalPrice}`);

            // Reset cart
            cart = [];
            totalPrice = 0;
            document.getElementById('cart-count').innerText = 0;

            // Reset form
            document.getElementById('personal-details-form').reset();

            // Show catalogue
            const catalogueSection = document.getElementById('catalogue');
            const checkoutSection = document.getElementById('checkout');
            checkoutSection.style.display = 'none';
            catalogueSection.style.display = 'block';
        });
        /////////////////////////
        const toggle = document.querySelector('.menu_toggle');
        const menu = document.querySelector('.menu');

        const show_menu = () => {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('active');
                menu.classList.toggle('active');
            })
        }

        show_menu();
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>