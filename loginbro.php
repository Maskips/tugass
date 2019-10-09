<?php

session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    
    if ($a == "kipli" && $b == "123") {
        $_SESSION['login'] = $a;
        // echo "<h1>Anda berhasil LOGIN</h1>";
        // echo "<h2>Klik <a href='tugas_array.php'>Disini</a>
        //       untuk menuju ke Form Array";
    } else {
        die("Username Atau Password Anda Salah 
        Silahkan <a href=loginbro.php> Login </a> Kembali");
    }
} else {
    ?>

    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>HALAMAN LOG-IN</title>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand"><b>RAFLI SAPUTRA</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form1.php">Form 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Form 2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="loginbro.php">Log-in <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logoutbro.php">Log-out <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>

</nav>
<br>


<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">
            <form action="form1.php" method="POST">
            <div class="form-group">
                <label for=""><b><h1>LOG-IN HERE</h1></b></label><br><br>
                <label for=""><b>USERNAME : </b></label>
                <input type="text" name="user" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label for=""><b>PASSWORD : </b></label>
                <input type="password" name="pass" class="form-control" required><br>
            </div>
            <div class="form-group">
                <button type="submit" name="Login" class="btn btn-primary">L O G - I N</button>
                <button type="reset"  class="btn btn-warning">R E S E T</button>
            </div>
            </form>
        
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
<?php
}
?>