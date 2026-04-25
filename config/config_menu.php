<?php
return [
    'brand_name' => "Pollo Asado S.A",
    'brand_logo' => "../public/img/logo1.png",
    'brand_logo_style' => "circle",
    // PERSONALIZACIÓN DE COLORES
    // Sidebar: sidebar-dark-primary, sidebar-dark-success, sidebar-light-primary, etc.
    'theme_sidebar' => "sidebar-dark-primary", 
    // Navbar: navbar-white, navbar-primary, navbar-dark, navbar-success, etc.
    'theme_navbar'  => "navbar-white navbar-light",
    'menu' => [
        ['type' => 'header', 'label' => 'MANTENIMIENTO'],
        ['label' => 'Inicio', 'url' => 'inicio.php', 'icon' => 'fas fa-tachometer-alt'],
        ['label' => 'Usuarios', 'url' => 'usuarios.php', 'icon' => 'fas fa-users'],
        ['type' => 'header', 'label' => 'CONFIGURACIÓN'],
        ['label' => 'Ajustes', 'url' => 'settings.php', 'icon' => 'fas fa-cogs'],
        ['type' => 'header', 'label' => 'SESIÓN'],
        ['label' => 'Cerrar Sesión', 'url' => 'logout.php', 'icon' => 'fas fa-sign-out-alt text-danger'],
        ]
];