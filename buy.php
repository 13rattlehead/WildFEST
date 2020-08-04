<?php
    if (is_null($_GET["id"])) {
        http_response_code(400);
        echo 'Wrpong response';
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/concerts.css">
    <title>Document</title>
</head>
<body>
    <?php
        $server = "localhost:3306";
        $user = "root";
        $password = "123456";
        $scheme = "tickets";
        $id = $_GET["id"];

        $link = new mysqli($server, $user, $password, $scheme);
        $query = $link->query("SELECT * FROM concerts WHERE id = " . $_GET["id"])->fetch_object();

        $name = $query->name;
        $date = $query->date;
        $description = $query->description;

    ?>

    <header id='header' class="header">
        <img class="logo" src="logotype2.png" width="95" height="95" class="logo">

        <nav class="nav">
            <ul class="menu">
                <li>
                    <a class="first" href="index.php">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="concerts.php">concerts</a>
                </li>
            </ul>
        </nav>

        <div class="auth">
            <img src="">
            <a class="name" href="logout.php"><?php echo $_SESSION["username"]; ?></a>
        </div>

<section>
     <div class="box1">
           <h1 class="concert"><?php echo $name; ?></h1>
           <p class="description"><?php echo $description;?></p>
           <p class="date"><?php echo $date;?></p>

           <div class="side">
                <ul class="order">
                        <li class="menu_list"> <p>Sector</p>
                            <ul class="drop">
                            <?php
                                $query = $link->query("SELECT * FROM sector");
                                while ($row = $query->fetch_row()) {
                                    echo '<li class="menu_list"><p> '. $row[1] . '</p></li>';
                                }
                            ?>
                          </ul>

                        </li>
                        <li class="menu_list"> <p>Transport</p>
                            <ul class="drop">
                                <?php
                                    $query = $link->query("SELECT * FROM transport");
                                    while ($row = $query->fetch_row()) {
                                        echo '<li class="menu_list"><p>'. $row[1] . '</p></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                </ul>
           </div>
           <a href="#">
               <div class="basicBox1">
                       send a request
                    <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">     
                    <rect x='0' y='0' fill='none' width='130' height='65'/>
                    </svg>  
               </div>
             </a>  
        
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
            <a href="#"><img src="Иконки/vk.png"></a>
            <a href="#"><img src="Иконки/yt.png"></a>
        </div>

    </footer>
</body>
</html>
<?php         
mysqli_close($link);
?>