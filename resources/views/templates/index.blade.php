<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Game</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="jquery.mb.YTPlayer.min.js"></script>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre o Jogo</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/download">Donwload</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="/"><strong>Início</strong></a></li>
                  <li><a href="/sobre"><strong>Sobre o Jogo</strong></a></li>
                  <li><a href="/download"><strong>Download</strong></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="banner_taital" style="color:gray;">Call Of Duty</h1>
                     <p class="banner_text">Call of Duty: Black Ops III é um jogo eletrônico de tiro em primeira pessoa
                        produzido pela Treyarch e lançado no dia 6 de novembro de 2015 pela Activision para Microsoft Windows, PlayStation 4 e Xbox One</p>
                     <div class="read_bt"><a href="/sobre">Sobre o Jogo</a></div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="banner_taital" style="color:gray;">Black Ops III</h1>
                     <p class="banner_text">O Call of Duty®: Black Ops III combina três modos de jogo únicos: Campanha, Multijogador e Zumbis,
                        oferecendo aos fãs o Call of Duty mais profundo e ambicioso de todos.</p>
                     <div class="read_bt"><a href="/sobre">Sobre o Jogo</a></div>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
   </div>
   <!-- header section end -->

   @yield('contents')

   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2023 - Todos os Direitos Reservados. Desenvolvido <a href="#">Matheus Cardoso Baptista</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>