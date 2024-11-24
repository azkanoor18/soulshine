<!DOCTYPE html>
<html lang="en">

<!-- database name: studentdb
 username: root
 password: ""
 host: localhost
-->




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign/Login</title>

    <style>
        * {
            margin: 0;
        }

        html {
            font-size: 6px;
            scroll-behavior: smooth;
        }

        body {

            font-weight: 400;
            min-height: 100vh;
            display: grid;
            place-content: center;
            overflow: hidden;
            background-color: aquamarine;
        }

        * {
            box-sizing: border-box;
        }
        
        .back {
            float: right;
            margin-top: 5px;
            margin-right: 30px;
            margin-bottom: 10px;
            text-decoration-line: none;
            font-size: 15px;
            color: #000000;
            background-color: rgb(17, 179, 179);
            padding: 8px;
        }

        .wrapper {
            position: relative;
            width: 400px;
            height: 350px;
        }

        @media(min-width: 540px) {
            .wrapper {
                width: 400px;
                height: 500px;
            }

        }

        .wrapper .form-cont {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background-color: rgb(235, 153, 105);
            border-radius: 2px;

        }

        .wrapper .form-cont form h2 {
            font-size: 40px;
            text-align: center;
            text-transform: capitalize;
            color: black;
        }

        .form-group {
            position: relative;
            width: 250px;
            margin: 12px 0;  
        }

        .wrapper .form-cont form .form-group i,
        label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            text-transform: capitalize;
            pointer-events: none;
            padding: 0 6px;
            transition: all.5s ease;
        }

        .wrapper .form-cont form .form-group i {
            left: 6px;
        }

        .wrapper .form-cont form .form-group label {
            left: 25px;
        }

        .wrapper .form-cont form .form-group input {
            width: 100%;
            height: 40px;
            padding: 3px 3px;
            border-radius: .5rem;
            border: none;
            outline: none;
            border: 1px solid;
            font-size: 15px;
            background: transparent;
            margin-bottom: 0px;
        }

        form .form-group input:focus~label,
        form .form-group input:valid~label,
        form .form-group input:focus~i,
        form .form-group input:valid~i {
            top: 0 !important;
            font-size: 15px !important;
            background-color: rgb(235, 153, 105);
            font-weight: bolder;
        }

      
        .invalid {
            color: rgb(0, 0, 0);
        }

        .valid {
            color: rgb(39, 182, 3);
        }

        input:focus+#message {
            display: block;
        }


        .btn {
            background-color: darkcyan;
            text-transform: capitalize;
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
            width: 50%;
            margin-left: 50px;
            height: 35px;
            outline: none;
            border: none;
            cursor: pointer;
            align-content: center;
            margin-top: 10px;
        }

        form .link {
            text-align: center;
            font-size: 15px;
            color: black;
            margin: 10px 0;
        }

        form .link a {
            text-transform: capitalize;
            color: rgb(9, 110, 110);
            font-size: 20px;
            text-decoration: none;
            font-weight: bolder;
            transition: all .5s ease;
        }

        .wrapper .sign-in {
            transform: rotate(7deg);
            z-index: -1;

        }

        .wrapper.animated-signin .form-cont.sign-in {
            animation: signin-flip 1s ease-in-out forwards;
        }

        @keyframes signin-flip {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-50rem) scale(1.1);
            }

            100% {
                transform: translateX(0) rotate(7deg) scale(1);
            }
        }

        .wrapper.animated-signin .form-cont.sign-up {
            animation: rotatecard .7s ease-in-out forwards;
            animation-delay: .3s;
        }

        @keyframes rotatecard {
            0% {
                transform: rotate(7deg);
            }

            100% {
                transform: rotate(0);
                z-index: 1;
            }
        }

        .wrapper.animated-signup .form-cont.sign-up {
            animation: signup-flip 1s ease-in-out forwards;
        }

        @keyframes signup-flip {
            0% {
                transform: translateX(0);
                z-index: 1;
            }

            50% {
                transform: translateX(50rem) scale(1.1);
            }

            100% {
                transform: translateX(0) rotate(7deg) scale(1);
            }
        }

        .wrapper.animated-signup .form-cont.sign-in {
            transform: rotate(7deg);
            animation: rotatecard .7s ease-in-out forwards;
            animation-delay: .3s;
        }

        @keyframes rotatecard {
            0% {
                transform: rotate(7deg);
            }

            100% {
                transform: rotate(0);
                z-index: 1;
            }
        }
       
        ul{
           
            list-style: none;
            font-size: 12px;
            margin-bottom: 8px;
            
        }
       
    </style>
</head>

<body>
    <header>
        <a href="index.php" class="back">Back to home page</a>
    </header>


    <div class="wrapper">
        <!-- Signup form start-->
        <div class="form-cont sign-up">
            <form action="signupdb.php" method="post" id="passwordForm">
                <h2>Sign up</h2>
                <div class="form-group">
                    <input type="text" id="username" name="uname" required>
                    <i class='bx bxs-user'></i>
                    <label for="username">username</label>
                    <p id="usernameMessage" class="invalid" style="font-size: 11px;">Must use (0-9 . _ )</p>
                </div>
                <div class="form-group">
                    <input type="email" name="gmail" required>
                    <i class='bx bxl-gmail'></i>
                    <label for="">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" required>
                    <i class='bx bxs-lock'></i>
                    <label for="password">Password</label></div>
                    <ul id="message" class="inline"  >
                        <li id="letter" class="invalid" >(lowercase,</li>
                        <li id="capital" class="invalid">uppercase letter,</li>
                        <li id="special" class="invalid">special character &</li>
                        <li id="length" class="invalid">Minimum 8 characters)</li>
                    </ul> 

                
                  
                <button type="submit" name="submit" class="btn">Sign up</button>
                <div class="link">
                    <p>You already have an account? <a href="#" class="signin-link">Log in</a></p>
                </div>
            </form>
        </div>
        <!-- Signup ends-->


        <!-- login form start-->
        <div class="form-cont sign-in">
            <form action="logindb.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <input type="text" name="username" id="username" required>
                    <i class='bx bxs-user'></i>
                    <label for="username">username</label>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" required>
                    <i class='bx bxs-lock'></i>
                    <label for="password">password</label>
                </div>
                <div class="forget-pass"><a href="">Forget password</a></div>
                <button type="submit" name="submit" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account? <a href="" class="signup-link">Signup</a></p>
                </div>

            </form>
        </div>
        <!-- login ends here-->
    </div>
    <script>
        let wrapper = document.querySelector('.wrapper'),
            signUpLink = document.querySelector('.link .signup-link'),
            signInLink = document.querySelector('.link .signin-link');

        signUpLink.addEventListener('click', () => {
            wrapper.classList.add('animated-signin');
            wrapper.classList.remove('animated-signup');
        });

        signInLink.addEventListener('click', () => {
            wrapper.classList.add('animated-signup');
            wrapper.classList.remove('animated-signin');
        });


        //password validation starts from here
        const passwordInput = document.getElementById("password");
        const letter = document.getElementById("letter");
        const capital = document.getElementById("capital");
        const length = document.getElementById("length");
        const special = document.getElementById("special");

        passwordInput.onkeyup = function () {
            // Validate lowercase letters
            const lowerCaseLetters = /[a-z]/g;
            if (passwordInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            const upperCaseLetters = /[A-Z]/g;
            if (passwordInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }
            // Validate length
            if (passwordInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }

            // Validate special characters
            const specialChars = /[!@#$%^&*(),.?":{}|<>]/g;
            if (passwordInput.value.match(specialChars)) {
                special.classList.remove("invalid");
                special.classList.add("valid");
            } else {
                special.classList.remove("valid");
                special.classList.add("invalid");
            }
        };

        document.getElementById("passwordForm").onsubmit = function (e) {
            if (document.querySelectorAll(".invalid").length > 0) {
                alert("Please enter a valid password.");
                e.preventDefault();
            }
        };

        // password validation ends here

       /* //signup & login popup
        document.querySelector('.sign-up form').onsubmit = function (e) {
            e.preventDefault();
            alert("You have successfully signed up!");
            //  message for signup
          
        };
        document.querySelector('.sign-in form').onsubmit = function (e) {
            e.preventDefault();
            alert("You have successfully login!");
            //  message for signup
        };*/

        const usernameInput = document.getElementById("username");
        const usernameMessage = document.getElementById("usernameMessage");

        // Function to check for special characters
        function checkSpecialCharacter() {
            const specialChars = /[0-9._]/g; //  check for special characters
            if (usernameInput.value.match(specialChars)) {
                usernameMessage.classList.remove("invalid");
                usernameMessage.classList.add("valid");
            } else {
                usernameMessage.classList.remove("valid");
                usernameMessage.classList.add("invalid");
            }
        }

        // Validate on keyup
        usernameInput.onkeyup = function () {
            checkSpecialCharacter();
        };

        // Sign-up form submission check   jab tak username valid na ho signup nhi krna
        document.querySelector('.sign-up form').onsubmit = function (e) {
            if (!usernameInput.value.match(/[0-9_.]/)) {
                alert("Please enter a valid username with at least one special character.");
                e.preventDefault();
            } 
            else{
                alert("You are successfully Signup")
            }
        };

    </script>
</body>

</html>