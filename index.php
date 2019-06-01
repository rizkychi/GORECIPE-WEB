<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Go-Recipe</title>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/gocip.js"></script>
</head>

<!-- Navbar -->
    <body>
    <div class="header">
        <div class="top-header">
            <div class="container">
                <img src="img/brand.png" alt="Go-Recipe">
            </div>
        </div>
        <div class="bot-header">
            <div class="container">
                <ul class="left-menu">
                    <img src="img/brand.png" alt="Go-Recipe">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?p=resep">Resep</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
                <ul class="right-menu">
                    <li class="slide-menu"><a href="#"><i class="fas fa-user" style="margin-right:6px"></i>aa</a></li>
                    <form>
                        <li><input type="text" id="frmsearch" name="search" placeholder="Cari Resep" title="Tekan enter untuk mencari"/></li>
                        <li><a href="javascript:{}" class="submit"><i class="fas fa-search"></i></a></li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
<!-- End Navbar -->
    
<!-- Content -->
<?php
    if (isset($_GET["p"])) {
        $page = $_GET["p"]; // get page name

        if (file_exists('page/'.$page.'.php')){
            include 'page/'.$page.'.php';
        } else {
            echo 'Halaman tidak ditemukan';
        }

    } else {
        include 'page/home.php';
        $title = 'Home';
    }

    // Get Page Title 
    if (isset($page)) {
        $title = ucwords($page); // uppercase first letter
    }

    // Change Page Title
    echo '<script>document.title += " | '.$title.'"</script>';
?>
<!-- End Content -->

<!-- Footer -->
<div class="footer">
    &copy;2019 Go-Recipe. All rights reserved.
</div>
<!-- End Footer -->

</body>
</html>