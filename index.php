<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap">
    <link rel="stylesheet" href="css/tingle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Go-Recipe</title>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/tingle.min.js"></script>
    <script src="js/gocip.js"></script>
</head>


<body>
<div class="page-container">
    
<!-- Running Session -->
    <?php 
        session_start();
        
        if (isset($_SESSION["login"])){
            echo '<script>isLogin = '.$_SESSION["login"].';</script>';
        } else {
            echo '<script>isLogin = 0;</script>';
        }
    ?>
<!-- End Running Session -->

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
                    <a href="?p=akun"><i class="fas fa-user"></i>
                        <?php
                            if (isset($_SESSION["login"]) && ($_SESSION["login"] == true)) {
                                echo $_SESSION["user"];
                            } else {
                                echo "Masuk/Daftar";
                            }
                        ?>
                    </a>
                </div>
                <div id="logout" class="sub-menu" style="display:none;">
                    <a href="?p=logout"><i class="fas fa-sign-out-alt"></i>Keluar</a>
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
                <div class="language-selector">
                    <div class="sub-menu" style="padding-right:0px">
                        <a href="javascript:void(0);" id="language"><i class="fas fa-globe"></i>English (US)<i class="fas fa-angle-down" style="padding-left: 5px"></i></a>
                    </div>
                    <div class="list-language">
                        <a href="#">Deutsch</a>
                        <a href="#">Español</a>
                        <a href="#">Français</a>
                        <a href="#">हिंदी</a>
                        <a href="#">Bahasa Indonesia</a>
                        <a href="#">Italiano</a>
                        <a href="#">日本語</a>
                        <a href="#">한국어</a>
                        <a href="#">Nederlands</a>
                        <a href="#">Polski</a>
                        <a href="#">Português</a>
                        <a href="#">Português do Brasil</a>
                        <a href="#">Русский</a>
                        <a href="#">Türkçe</a>
                        <a href="#">简体中文</a>
                        <a href="#">中文 (香港)</a>
                        <a href="#">繁體中文</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-cont">
            <div class="bot-header">
                <div class="container">
                    <img src="img/brand_white.png" alt="Go-Recipe">
                    <ul class="right-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="?p=resep">Resep</a></li>
                        <li><a href="#">Artikel</a></li>
                        <li><a href="?p=tentang">Tentang</a></li>
                        <li><a href="?p=kontak">Kontak</a></li>
                        <li><a href="?p=bantuan">Bantuan</a></li>
                        <li><a href="javascript:void(0);" id="search"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
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
            // ----------- Switch Page ----------- //
            if (isset($_GET["p"])) {
                $page = $_GET["p"]; // get page name

                // redirect to index if page is home
                if ($page == "home") {
                    header("Location: index.php");
                }

                // get page title
                $page_title = ucwords($page); // uppercase first letter

                if (file_exists('page/'.$page.'.php')){
                    if (isset($_GET["r"]) && $page == 'detail_resep') {
                        // change page if page is detail_resep
                        
                        $recipe = $_GET["r"];
                        // check if recipe file exist
                        if (file_exists('page/recipe/'.$recipe.'.php')) {
                            // include detail_resep and recipe file
                            include 'page/recipe/'.$recipe.'.php';
                            include 'page/'.$page.'.php';
                            // change page title
                            echo '<script>document.title += " | '.$title.'"</script>';
                        } else {
                            echo "Resep tidak ditemukan"; 
                            // change page title
                            echo '<script>document.title += " | Tidak Ditemukan"</script>';
                        }
                    } else {
                        // change normal page
                        include 'page/'.$page.'.php';
                        // change page title
                        echo '<script>document.title += " | '.$page_title.'"</script>';
                    }
                } else {
                    echo 'Halaman tidak ditemukan';
                    // change page title
                    echo '<script>document.title += " | Tidak Ditemukan"</script>';
                }
            } else {
                // default page
                include 'page/home.php';
                // change page title
                echo '<script>document.title += " | Home"</script>';
            }
            // ----------- End Switch Page ----------- //
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
            <p>Copyright &copy; 2019 &ndash; <a href="#">Go-Recipe</a> All Right Reserved</p>
            <ul style="float:right">
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
<!-- End Footer -->

</div>
</body>
</html>
<?php ob_end_flush();?>