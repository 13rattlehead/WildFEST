<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main3.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800,900,900i&display=swap" rel="stylesheet">
    <title>Wild Fest</title>
</head>
<?php 
/*
 $server = "localhost:8000";
 $user = "root";
 $password = "123456";
 $scheme = "tickets";

 $id = $_GET["id"];

 $link = new mysqli($server, $user, $password, $scheme);
 $query = $link->query("SELECT * FROM concerts WHERE id = " . $_GET["id"])->fetch_object();

 $name = $query->name;
 $date = $query->date;
 $description = $query->description;
 mysqli_close($link);
*/
 ?>
<body>
    <header id='header' class="header">
        <img class="logo" src="logotype2.png" width="95" height="95" class="logo">
        
        <nav class="nav">
            <ul class="menu">
                <li class="active">
                    <a class="first" href="#">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="concerts.php">concerts</a>
                </li>
                <li>
                    <a href="concerts.php">pictures</a>
               </li>
            </ul>
            <div class="auth">
            <img src="">
            <a class="name" href="auth.php"><?php echo $_SESSION["username"]; ?></a>
        </div>
        </nav>
</header>   
 <main>
 <div class="search-box">
        <input type="text" class="search-txt" placeholder="Поиск">
        <a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
        <script src="js/search.js"></script>
    </div>
        <h1 class="h">Where words fail</h1>
        <h2 class="h2">musik speaks</h2>

    <section class="sec1">

       <div class="box1">


            <h1 class="zogolovok">
                NEWS
            </h1>

<div class="grid">
        <div class="cont">
        <div class="card">
                <div class="face face1">
                    <div class="content">
                     <img src="pictures/corey.png" >
                     <h3 class="novost">New slipknot tour</h3>
                   </div>
                </div>
                 <div class="face face2">
                     <div class="content">
                     <p class="text_news"> Slipknot annouced new dates of
                         of american tour
                     </p>
                     <a href="#">see dates</a>
                  </div>
             </div>
      </div>

    

      <div class="card">
         <div class="face face1">
             <div class="content">
              <img src="pictures/bmth.png" >
              <h3 class="novost">BMTH in ParkLive 2019</h3>
            </div>
         </div>
          <div class="face face2">
              <div class="content">
              <p> Let's remember this wonderful corcert and watch pictures 
              </p>
              <a href="#">see pictures</a>
           </div>
      </div>
</div>



    <div class="card">
     <div class="face face1">
     <div class="content">
      <img src="pictures/metallica.png" >
      <h3 class="novost">First Metallica's concert 2020</h3>
        </div>
         </div>
      <div class="face face2">
      <div class="content">
      <p> Hurry up to buy tickets for the first  <br> Metallica's concert in 2020
      </p>
      <a href="buy.php?id=1">see dates</a>
       </div>
    </div>
    </div>
    </div>
</div>

<div class="grid2">
 <div class="cont">
   <div class="card">
    <div class="face face1">
        <div class="content">
         <img src="macya.png" >
         <h3 class="novost">MegaTour 2020</h3>
       </div>
    </div>
     <div class="face face2">
         <div class="content">
         <p> Hurry up to buy tickets for the Megadeth's concert
         </p>
         <a href="#">see dates</a>
      </div>
   </div>
   </div>

   <div class="card">
    <div class="face face1">
        <div class="content">
         <img src="iron.png" >
         <h3 class="novost">Iron Maiden Moscow 2020</h3>
       </div>
    </div>
     <div class="face face2">
         <div class="content">
         <p> Iron Maiden in Moscow 2020, let's buy tickets !
         </p>
         <a href="buy.php?id=2">see dates</a>
      </div>
   </div>
   </div>

   <div class="card">
    <div class="face face1">
        <div class="content">
         <img src="in2.png" >
         <h3 class="novost">In Flames 2020 Moscow</h3>
       </div>
    </div>
     <div class="face face2">
         <div class="content">
         <p> Swedish stars of deth-metal <br> in Moscow and Saint-Petersburg in 2020
         </p>
         <a href="#">see dates</a>
      </div>
   </div>
   </div>
  </div>
</div>
    </div>
    </section>
</main>
    <button class="btn-top"></button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>

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


</body>
</html>

