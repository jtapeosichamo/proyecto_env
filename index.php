<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: form/inicio.php");
    exit();
}
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // Credenciales hardcodeadas
    if ($user === "admin" && $pass === "123456") {
        $_SESSION['usuario'] = "administrador";
        header("Location: form/inicio.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1 class="h1"><b>Login</b>LTE</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión para acceder</p>

      <?php if($error): ?>
        <div class="alert alert-danger text-sm"><?php echo $error; ?></div>
      <?php endif; ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="user" class="form-control" placeholder="Usuario" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>