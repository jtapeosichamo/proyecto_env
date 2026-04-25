<?php
session_start();
// Protección de ruta: si no hay sesión, vuelve al login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

$page_title = "Panel de Control";

ob_start(); 
?>

<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Bienvenido</h3>
                <p><?php echo $_SESSION['usuario']; ?></p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Resumen del Sistema</h3>
    </div>
    <div class="card-body">
        <p>Has ingresado correctamente a la estructura de formularios.</p>
    </div>
</div>

<?php 
$content = ob_get_clean(); 

// Cargamos el layout desde la carpeta config
include('../config/layout.php'); 
?>