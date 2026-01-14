<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Zreyya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" href="asset/Raiden-Shogun-PNG-Clipart.png">
    <script src="script.js"></script>
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
    <nav class="navbar navbar-dark navbar-expand-lg sticky-top" style="background-color: #305378">
        <div class="container">
            <a class="navbar-brand" href="index.php">Zreyya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a id="dark" class="nav-link"><i class="bi bi-moon-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a id="light" class="nav-link"><i class="bi bi-brightness-high-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="login bg-danger-subtle">
        <div class="container"> 
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 m-auto">
                    <div class="card border-0 shadow rounded-5">
                        <div class="card-body p-5"> 
                            <div class="text-center mb-3">
                                <i class="bi bi-person-circle h1 display-4"></i>
                                <p>Login</p>
                                <hr/>
                            </div>
                            <form action="" method="post">
                                <input type="text"name="user" class="form-control my-4 py-2 rounded-4" placeholder="Username"/>
                                <input type="password" name="pass" class="form-control my-4 py-2 rounded-4" placeholder="Password"/>
                                <div class="text-center my-3 d-grid">
                                    <button class="btn btn-danger rounded-4">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div>
            <a href="https://www.instagram.com/zreyya.rap/" target="_blank"><i class="bi bi-instagram h2 p-2"></i></a>
            <a href="https://wa.me/6287776182392" target="_blank"><i class="bi bi-whatsapp h2 p-2"></i></a>
        </div>
        <p>Copyright &copy; 2026 Haydar Rafa Satya Putra - All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
</html>
<?php
}
?>