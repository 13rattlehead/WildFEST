<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main4.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800,900,900i&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="logotype2.png" width="95" height="95" class="logo">
            <ul class="menu">
                <li class="first">
                    <a href="index.php">home</a>
                </li>
                <li class="active">
                    <a href="#">about</a>
                </li>
                <li>
                    <a href="concerts.php">concerts</a>
                </li>
                <li>
                    <a href="concerts.php">pictures</a>
                </li>
            </ul>
            <div class="registr">
                <a href="auth.php">sign in</a>
            </div>
            <div class="auth">
            <img src="">
            <a class="name" href="auth.php"><?php echo $_SESSION["username"]; ?></a>
        </div>
        </nav>
    </header>

    <h1 class="h">Where words fail</h1>
    <h2 class="h2">musik speaks</h2>
    </div>
    <section class="sec">
        <div class="wrapper" class="box2">
            <input type="radio" name="point" id="slide1" checked>
            <input type="radio" name="point" id="slide2">
            <input type="radio" name="point" id="slide3">
            <input type="radio" name="point" id="slide4">
            <input type="radio" name="point" id="slide5">
            <div class="slider">
                <div class="slides slide1"></div>
                <div class="slides slide2"></div>
                <div class="slides slide3"></div>
                <div class="slides slide4"></div>
                <div class="slides slide5"></div>
            </div>
            <div class="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
                <label for="slide5"></label>
            </div>
        </div>
    </section>

    <section class="sec1">
        <div class="box1">
            <div class="flex">
                <div class="grid">
                    <div class="content-text">
                        <h1 class="h1">
                            About Us
                        </h1>
                    
                    <p class="text_about"> Our company has been working for 3 years now and it is engaged in organizing trips to festivals of various levels. During this time, we have been at 24 concerts abroad and visited about 50 festivals in our country. We have traveled
                        10 countries and more than 10,000 km to recharge you with the drive and the energy of music. We managed to attend such major events as Rock Am Ring 2017, Rock In Park 2018. We went to the Alpha Future People fashion festival three
                        times. We are one of the most reliable companies for transporting people both in the country and abroad. We recently went to Wacken Open Air, the world's largest heavy music festival, held annually o n the outskirts of Wacken,
                        in Northern Germany. In our list of music festivals, you will definitely find one according to your taste.</p>
                    <a href="concerts.php">
                        <div class="basicBox1">
                            see concerts
                            <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">     
                            <rect x='0' y='0' fill='none' width='130' height='65'/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div>
                    <img src="pictures/metc.jpg" width="500vw" height="320vh" class="pic1">
                </div>
            </div>
        </div>
    </section>

    <section class="sec2">
        <div class="box2">

            <div class="section">
                <div class="text_ab">
                    <p>
                        WILD fest is a National Ticket Operator that organizes trips to music festivals of various levels and offers the largest range of tickets for foreign events in Russia.
                    </p>
                </div>
                <div class="text_ab">
                    <p>We work with the one of the largest companies that transport people by bus. <br> Aslo our experts will help you quckly issue all documents. All you have to do is just enjoy of music. </p>
                </div>
            </div>

        </div>
    </section>

    <section class="sec3">
        <div class="box3">
            <div class="box_ab">
                <div class="card">
                    <img src="иконки/ic1.png">
                    <h3>Experts</h3>
                    <p>Our experts will help you registrate all documents</p>
                </div>

                <div class="card">
                    <img src="иконки/ic2.png">
                    <h3>All you wanna</h3>
                    <p>You can find festivalof music you love</p>
                </div>

                <div class="card">
                    <img src="иконки/ic3.png">
                    <h3>In within hours</h3>
                    <p>You can get to where you want with us. We travell by plane, bus and ...</p>
                </div>

                <div class="card">
                    <img src="иконки/ic4.png">
                    <h3>All around the world</h3>
                    <p>Europe, America or even AziaDistacne doesnt matter for us.</p>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <img src="logotype.png" class="logofooter">
        <div class="nav_footer">
            <a href="index.php">
                <div class="basicBox">
                    home
                    <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">     
                <rect x='0' y='0' fill='none' width='130' height='65'/>
                </svg>
                </div>
            </a>
            <a href="about.html">
                <div class="basicBox">
                    about
                    <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">     
                <rect x='0' y='0' fill='none' width='130' height='65'/>
                </svg>
                </div>
            </a>
            <a href="concerts.php">
                <div class="basicBox">
                    concerts
                    <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">     
                <rect x='0' y='0' fill='none' width='130' height='65'/>
                </svg>
                </div>
            </a>
        </div>

        <div class="pict">
            <a href="https://ru-ru.facebook.com/"><img src="Иконки/face.png"></a>
            <a href="https://www.instagram.com/"><img src="Иконки/insta.png"></a>
            <a href="https://vk.com/public192844298"><img src="Иконки/vk.png"></a>
            <a href="#"><img src="Иконки/yt.png"></a>
        </div>

    </footer>

    <button class="btn-top"></button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <script src="js/slider.js"></script>

</body>

</html>