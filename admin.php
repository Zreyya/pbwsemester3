<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Zreyya | Admin</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/> 
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>  
        html, body {
            height: 100%;
            margin: 0;
        }
        
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .login {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        footer {
            background-color: #305378;
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
        }
        
        footer p {
            margin: 0;
        }

        footer a i {
            color: white !important;
        }

         section#content {
            flex: 1;
        }

        body, .navbar, .card, footer, section, .form-control, .bg-white {
            transition: 0.4s ease, color 0.4s ease, 0.4s ease;
        }

        .navbar .nav-link {
            color: white;
        }

        .navbar .navbar-brand {
            color: white;
        }

        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        .dark-mode nav.navbar {
            background-color: #1f1f1f !important;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .dark-mode .card {
            background-color: #454545;
            color: #e0e0e0;
            border: 1px solid #444;
        }

        .dark-mode footer {
            background-color: #1f1f1f;
            color: #ddd;
        }

        .dark-mode .bg-danger-subtle {
            background-color: #343030 !important;
            color: #e0e0e0;
        }

        .dark-mode .form-control,
        .dark-mode .form-check-label {
            background-color: #2a2a2a;
            color: #e0e0e0;
            border: 1px solid #444;
        }

        .dark-mode a.nav-link,
        .dark-mode a.navbar-brand {
            color: #e0e0e0 !important;
        }

        .dark-mode .bg-white {
            background-color: #1e1e1e !important;
            color: #e0e0e0 !important;
        }

        .dark-mode .form-control::placeholder {
            color: #bbb !important;
        }

        .dark-mode footer a i {
            color: #e0e0e0 !important;
        }

        .hasil-alert {
        max-width: 250px;
        margin-left: auto;
        margin-right: auto;
        padding: 8px 15px;
        text-align: center;
        font-size: 0.9em;
    }
    </style>
</head>
<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm sticky-top" style="background-color: #305378">
    <div class="container">
        <a class="navbar-brand" target="_blank" href=".">Zreyya</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            </li>
            <li class="nav-item">
              <a id="dark" class="nav-link"><i class="bi bi-moon-fill"></i></a>
            </li>
            <li class="nav-item">
              <a id="light" class="nav-link"><i class="bi bi-brightness-high-fill"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
    <section id="content" class="p-5">
        <div class="container">
            <?php
            if(isset($_GET['page'])){
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
                <?php
                include("dashboard.php");
            }
            ?>
        </div>
    </section>
    <!-- content end -->
    <!-- footer begin -->
    <footer>
      <div>
        <a href="https://www.instagram.com/zreyya.rap/" target="_blank"><i class="bi bi-instagram h2 p-2"></i></a>
        <a href="https://twitter.com/udinusofficial" target="_blank"><i class="bi bi-twitter h2 p-2 h2 p-2"></i></a>
        <a href="https://wa.me/6287776182392" target="_blank"><i class="bi bi-whatsapp h2 p-2"></i></a>
      </div>
      <p>Copyright &copy; 2025 Haydar Rafa Satya Putra - All Rights Reserved.</p>
    </footer>
    <!-- footer end -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html> 