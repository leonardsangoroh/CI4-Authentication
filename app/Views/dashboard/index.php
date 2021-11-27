<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        DUNGA SMART
    </title>

    <!--linking fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="<?php echo base_url('public/assets/style.css')?>">
    

</head>

<body>


    <!--Top Navigation-->
    <div class = "nav">
        <div class = "menu-wrap">
            <a href="#Home">
                <div class = "logo">
                    DUNGA SMART
                </div>

                <div>
                <?php // echo "Welcome ".$_SESSION['User'];?>
                </div>
            </a>
            
            
            <div class = "menu">
                <!--the #home specifies which part of the page the link will lead to-->

                <a href="#Home">
                    <div class = "menu-item active">
                        Home
                    </div>
                </a>

                <a href="#About">
                    <div class = "menu-item">
                        About
                    </div>
                </a>

                <a href="order.php">
                    <div class = "menu-item">
                        Shop
                    </div>
                </a>

                <a href="#Contact">
                    <div class = "menu-item">
                        Contact Us
                    </div>
                </a>

                <a href="Login.php">
                    <div class = "menu-item">
                        Login
                    </div>
                </a>

                <a href="SignUp.php">
                    <div class = "menu-item">
                        Sign Up
                    </div>
                </a>

                <a href="<?= site_url('auth/logout') ?>">
                    <div class = "menu-item">
                        Logout
                    </div>
                </a>

                <a href="">
                    <div class = "menu-item">
                        <?= $userInfo['name']; ?>
                    </div>
                </a>

            </div>

            <div class = "right-menu">
                <a href="">
                <div class = "cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>

                </a>
                
                
            </div>
        </div>
    </div>
    <!--End of Top Navigation-->

    <!--Home Section-->

    <!--The section tag defines a section in a document-->
    <section id="Home" class="fullheight align-items-center bg-img bg-img-fixed"  >

    <img class="bg-img bg-img-fixed" src="<?php echo base_url('assets/photos/nstar.jpg') ?>" alt="">
    <div class="container">
        <div class="row">

            <div class="col-6 col-xs-12">

                <div class="slogan">

         
                    <h1>
                        DUNGA SMART!
                    </h1>
                    
                    <p>
                        Simple, Sharp...Elegant
                    </p>

                    <form action="categories.php">
                        <button>
                            Shop Now!
                        </button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--End of the Home Section-->

    <!--About Section-->

    <div class="fullheight align-items-center" id="About">
        <div class="container">
            <h3 class="aboutusheading">About Us</h3>
            <hr>
            <br>
            <div class="row">
                <div class = "col-7 h-xs">
                     <img src="<?php echo base_url('assets/photos/mbwakni.jpg') ?>" alt="">
                </div>

                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan">
                        <h3>
                            <span class="primary-color"> Always</span> there for 
                            
                            <span class="primary-color">you</span> 
                        </h3>
                        <p>
                            DUNGASMART.com is Africa's next biggest online apparel
                            and clothing store. With more than 500 different cultures and traditions,
                            Dunga Smart endevours to include all African cultures in its clothing line.
                            With us, you can never lack what you're looking for.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End of About Section-->


    
    <!--End of Product Section-->

    <!--Contact Us Section-->

    <div class="Contactus" id="Contact">
        <br>
        <br>
        <br>
        <br>
        <br>

       <h1> Talk to us through our socials or mail</h1>
       <hr>

       <div class="contactgrid">
        <button class="Instagram">
            <i class='bx bxl-instagram'></i>
            <span class="contacttext">Instagram</span>
        </button>
        
        
        <button class="Facebook"> 
            <i class='bx bxl-facebook' ></i>
            <span class="contacttext">Facebook</span>
        </button>
        <button class="Twitter">
            <i class='bx bxl-twitter' ></i>
            <span class="contacttext">Twitter</span>
        </button>
        <button class="WhatsApp">
            <i class='bx bxl-whatsapp' ></i>
            <span class="contacttext">WhatsApp</span>
        </button>

        <button class="Telegram">
            <i class='bx bxl-telegram' ></i>
            <span class="contacttext">Telegram</span>
        </button>

        <button class="Mail">
            <i class='bx bx-mail-send' ></i>
            <span class="contacttext">GMail</span>
        </button>
       </div>
       
    </div>

    <!--End of Contact Us Section-->
</body>
</html>