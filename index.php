<?php include("connect.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="2nd pg.html" autocomplete="off" class="sign-in-form" method="POST">
                        <div class="logo">
                            <img src="./img/logo.png" alt="QwertyCoders" />
                            <h4>Qwerty Coders</h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                            <br>
                            <h6>For Govt officers</h6>
                            <a href="#" class="toggle"> Click here</a>
                        </div>
                        
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="name" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="pass" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" name="s_in" />

                            <p class="text">
                                <!-- Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in -->
                                <br> By Govt of India
                            </p>
                        </div>
                    </form>

                    <form action="2nd pg.html" autocomplete="off" class="sign-up-form" method="POST">
                        <div class="logo">
                            <img src="#" alt="QwertyCoders" />
                            <h4>Qwerty Coders</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="name" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="pass" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>
                            <a href="2nd pg.html">
                                <input type="submit" value="Sign Up" class="sign-btn" name="submit" />
                            </a>
                            <p class="text">
                                By Govt of India
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/image1.png" class="image img-1 show" alt="" />
                        <img src="./img/image2.png" class="image img-2" alt="" />
                        <img src="./img/image3.png" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </main>

    <!-- Javascript file -->

    <script src="index.js"></script>
</body>

</html>


<?php
    if($_POST["s_in"]){
        $name = $_POST["name"];
        $pass = $_POST["pass"];

        $query = "INSERT INTO first_form VALUES('$name', '$pass')";
        $data = mysqli_query($conn,$query);


        if($data)
            {
            echo "Data Inserted into Database";
            }
            else
            {
            echo "Failed";
            }
    } 


    if($_POST["submit"])
    {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        $query = "INSERT INTO first_form VALUES('$name' , '$pass', '$email')";
        $data = mysqli_query($conn,$query);

        if($data)
            {
            echo "Data Inserted into Database";
            }
            else
            {
            echo "Failed";
            }
    } 

    
?>