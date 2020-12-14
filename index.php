<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Latihan Modul 13</title>
</head>
<body>
    <div class="header">
        <header>
            <h1>Web Programming 1</h1>
            <h3>Muhammad Riyan Andriyanto</h3>
        </header>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php?page=home"><span>HOME</span></a></li>
            <li><a href="index.php?page=upload"><span>UPLOAD</span></a></li>
            <li><a href="index.php?page=download"><span>DOWNLOAD</span></a></li>
            <li><a href="index.php?page=about"><span>ABOUT</span></a></li>
        </ul>
    </div>
    <div class="container">
        <?php
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "page/home.php";
                    break;
                case 'upload':
                    include "page/upload.php";
                    break;
                case 'download':
                    include "page/download.php";
                    break;
                case 'about':
                    include "page/about.php";
                    break;
                default:
                    echo "Halaman tidak ditemukan.";
                    break;
            }
        }else {
            include "page/home.php";
        }
        ?>
    <center>copyright &copy; 2020 <a style="text-decoration: none" href="http://www.github.com/ryanfoxee" target="_blank">github.com/ryanfoxee</a></center>
    <br>
    </div>
</body>
</html>