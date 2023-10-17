<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.8.10, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.10, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <meta name="description" content="">


  <title>Sing Business</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>

  <section data-bs-version="5.1" class="menu menu1 cid-tPL4HWDFTp" once="menu" id="menu1-0">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{ route('accueil') }}">
                        <img src="assets/images/logo.png" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-7" href="{{ route('accueil') }}">SING BUSINESS</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
		        <li class="nav-item"><a class="nav-link link text-secondary text-primary display-4" href="{{ route('accueil') }}">Accueil</a></li>
		        <li class="nav-item"><a class="nav-link link text-secondary display-4" href="{{ route('commandes.create') }}">Commande</a></li>
		        <li class="nav-item"><a class="nav-link link text-secondary text-primary display-4" href="{{ route('opérateurs.create') }}">Transactions</a></li>

				<li class="nav-item"><a class="nav-link link text-secondary text-primary display-4" href="{{ route('service') }}">Services</a></li>
				<li class="nav-item"><a class="nav-link link text-secondary text-primary display-4" href="{{ route('produit') }}">Produits</a></li>
				<li class="nav-item"><a class="nav-link link text-secondary text-primary display-4" href="/dashboard">Dashboard</a></li>

                    </ul>


            </div>
        </div>
    </nav>
</section>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>