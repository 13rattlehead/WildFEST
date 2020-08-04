<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/concerts1.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800,900,900i&display=swap" rel="stylesheet">
    <title>Wild Fest</title>
</head>

<body>
<?php
        $server = "localhost:3306";
        $user = "root";
        $password = "123456";
        $scheme = "tickets";
        $id = $_GET["id"];

        $link = new mysqli($server, $user, $password, $scheme);
        
        $name = $query->name;
        $date = $query->date;
        $description = $query->description;

    ?>

    <header id='header' class="header">
        <img class="logo" src="logotype2.png" width="95" height="95" class="logo">

        <nav class="nav">
            <ul class="menu">
                <li >
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li class="active">
                    <a href="#">concerts</a>
                </li>
                <li>
                    <a href="#part2">pictures</a>
                </li>
            </ul>
            <div class="auth">
            <img src="">
            <a class="name" href="auth.php"><?php echo $_SESSION["username"]; ?></a>
        </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="box1">
                <ul class="list">
                    <li class="line">
                            <p class="date"> 22.06.2020</p>
                            <h3 class="concert"> Metallica Hardwired Tour</h3>
                            <a href="buy.php?id=1" class="link">buy tickets</a>
                    </li>
                    <li class="line">
                            <p class="date"> 14.08.2020</p>
                            <h3 class="concert"> Iron Maiden. Legasy of the Beast Tour</h3>
                            <a href="buy.php?id=2" class="link">buy tickets</a>
                    </li>
                    <li class="line">
                            <p class="date"> 11.27.2021</p>
                            <h3 class="concert"> KnotFest Roadshow</h3>
                            <a href="buy.php?id=3" class="link">buy tickets</a>
                    </li>
                    <li class="line">
                            <p class="date"> 08.12.2020</p>
                            <h3 class="concert"> Bring Me the Horizon Moscow 2020</h3>
                            <a href="buy.php?id=4" class="link">buy tickets</a>
                    </li>
                    <li class="line">
                            <p class="date"> 30.05.2020</p>
                            <h3 class="concert"> Korn. The Nothing 2020</h3>
                            <a href="buy.php?id=5" class="link">buy tickets</a>
                    </li>   
                </ul>
            </div>
        </section>

        <section id="part2" class="sec2">
            <div class="box2">
                <div class="img1">
                    <img src="bmth.png" width="30%" height="60%" class="first_pic">
                    <img src="pictures/2.jpg">
                    <img src="pictures/3.jpg">
                </div>
                <div class="img2">
                    <img src="pictures/34.jpeg" class="pic1">
                    <img src="pictures/4.jpg" class="pic2">
                </div>
                     <div class="img3">
                        <img src="pictures/6.jpg" alt="" class="picture"> 
                        <img src="pictures/7.jpg" alt="">
                        <img src="pictures/8.jpg" alt="">
                    </div> 
            </div>
        </section>

    </main>
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
</body>

</html>