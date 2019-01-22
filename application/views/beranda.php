<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/style.css">
    <script src="main.js"></script>
</head>
<body style="background: black; linear-gradiant(135deg, #325adf 0%, #e7530 100%);">
<header style="background:red ">
    <div class="atas">
    <div id="logo"><img style="width: 127px/margin-left: 40px;float: left;"
    src="<?= base_url()?>assets/ngkrun.png" alt=""></div>
            <nav>
                <ul>
                    <li> <a href="<?= base_url()?>index.php/Welcome/utama"> Home </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/event"> Event </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/gallery"> Gallery </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/contact"> Contact </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/MyProfil"> MyProfil </a></li>
                </ul>
            </nav>
            </div>
</header>
<h1 align="center" style="color:skyblue;text-align: left;font-size: 10.3mm;margin-top:
97px;margin-left: 12px;font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?>
<br> Berperilakulah seperti <?= $jenis_kelamin?></h1>
<p style="font-size: 18px;margin-left: 56px;margin-top: 39px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, delectus corrupti dolores similique reiciendis laboriosam numquam ullam illo minima sequi aliquid nisi quos voluptatum neque minus autem explicabo, necessitatibus odio?</p>
<img style="width: 823px;margin-left: 518px;margin_top: -312px;)" src="<?= base_url()?>assets/back.png" alt="">
</body>
</html> -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <style>
      html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}

header {
      width: 100%;
      height: 100vh;
      background-color : red;
      background-size: cover;
}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
      background: #000;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}

      </style>
   </head>
   <body>
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  LOGO
               </div>
               <div class="menu">
                  <ul>
                  <li> <a href="<?= base_url()?>index.php/Welcome/utama"> Home </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/event"> Event </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/gallery"> Gallery </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/contact"> Contact </a></li>
                    <li> <a href="<?= base_url()?>index.php/Welcome/MyProfil"> MyProfil </a></li>
                  </ul>
               </div>
            </nav>
         </header>
         <div class="content">
            <p>
            Haloooo
            </p>
            <p>
            lorem ipsumm
            </p>
         </div>
      </div>
      <script>
       $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
   </body>
</html>