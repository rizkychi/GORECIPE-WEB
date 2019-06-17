<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap">
    <link rel="stylesheet" href="css/tingle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Go-Recipe</title>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/tingle.min.js"></script>
    <script src="js/gocip.js"></script>
</head>


<body>
<div class="page-container">
    
<!-- Login Session -->
    <?php 
        session_start();
        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];
        } else {
            $user = "Masuk/Daftar";
        }
    ?>
<!-- End Login Session -->

<!-- Navbar -->
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="sub-menu">
                    <a><i class="fas fa-phone"></i>+62 123 33554</a>
                </div>
                <div class="sub-menu">
                    <a href="mailto:gocip@gmail.com" title="gocip@gmail.com"><i class="far fa-envelope"></i>gocip@gmail.com</a>
                </div>
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-user"></i><?php echo $user ?></a>
                </div>
                <ul>
                    <a href="#" title="Facebook"><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href="#" title="Twitter"><li><i class="fab fa-twitter"></i></li></a>
                    <a href="#" title="Behance"><li><i class="fab fa-behance"></i></li></a>
                    <a href="#" title="GooglePlus"><li><i class="fab fa-google-plus-g"></i></li></a>
                    <a href="#" title="Youtube"><li><i class="fab fa-youtube"></i></li></a>
                    <a href="#" title="Instagram"><li><i class="fab fa-instagram"></i></li></a>
                    <a href="#" title="RSS"><li><i class="fas fa-rss"></i></li></a>
                </ul>
            </div>
        </div>
        <div class="bot-header">
            <div class="container">
                <img src="img/brand_white.png" alt="Go-Recipe">
                <ul class="right-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?p=resep">Resep</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="javascript:void(0);" id="search"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="search">
        <a href="javascript:void(0);" class="search-close"></a>
        <form>
            <input type="text" id="frmsearch" name="search" placeholder="Ketik dan tekan Enter" title="Ketik dan tekan Enter" autocomplete="off"/>
        </form>
    </div>
<!-- End Navbar -->
   
<!-- Content -->
    <div class="content">
        <?php
            // Switch Page
            if (isset($_GET["p"])) {
                $page = $_GET["p"]; // get page name

                // Get Page Title
                $title = ucwords($page); // uppercase first letter

                // ----- Breadcrumb ----- //
                $bread = '<span class="separator"></span><a href="index.php?p='.$page.'">'.$title.'</a>';

                echo '<div class="container">
                        <div class="breadcrumb">
                            <a href="index.php"><i class="fas fa-home"></i></a>
                            '.$bread.'
                        </div>
                    </div>';
                // ----- End Breadcrumb ----- //

                if (file_exists('page/'.$page.'.php')){
                    include 'page/'.$page.'.php';
                } else {
                    echo 'Halaman tidak ditemukan';
                }

            } else {
                include 'page/home.php';
                $title = 'Home';
            }

            // Change Page Title
            echo '<script>document.title += " | '.$title.'"</script>';
        ?>
    </div>
<!-- End Content -->

<!-- Footer -->
    <div style="padding-bottom: 165px"></div>
    <div class="footer">
        <div class="container">
            <img src="img/brand_white.png" alt="GoRecipe">
            <ul>
                <li><a href="#" title="Sitemap">Sitemap</a></li>
                <li><a href="#" title="Disclaimer">Disclaimer</a></li>
                <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                <li><a href="#" title="Terms of Service">Terms of Service</a></li>
            </ul>
            <hr>
            <ul style="float:left">
                <a href="#" title="Facebook"><li><i class="fab fa-facebook-f"></i></li></a>
                <a href="#" title="Twitter"><li><i class="fab fa-twitter"></i></li></a>
                <a href="#" title="Behance"><li><i class="fab fa-behance"></i></li></a>
                <a href="#" title="GooglePlus"><li><i class="fab fa-google-plus-g"></i></li></a>
                <a href="#" title="Youtube"><li><i class="fab fa-youtube"></i></li></a>
                <a href="#" title="Instagram"><li><i class="fab fa-instagram"></i></li></a>
                <a href="#" title="RSS"><li><i class="fas fa-rss"></i></li></a>
            </ul>
            <p>Copyright &copy; 2019 &ndash; <a href="#">Go-Recipe</a> All Right Reserved</p>
        </div>
    </div>
<!-- End Footer -->

</div>
</body>
</html>