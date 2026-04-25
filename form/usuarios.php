<?php
$page_title = "Gestión de Usuarios";
ob_start(); 
?>
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lista de Usuarios</h3>
            </div>
            <div class="card-body">
                <p>Aquí puedes integrar tu tabla de base de datos o maquetación.</p>
                <button class="btn btn-success" onclick="saludar()">Prueba JS</button>
            </div>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean(); 
include('../config/layout.php'); 
?>
<script>
    function saludar() {
        alert('Botón funcionando en AdminLTE nativo');
    }
</script>