<?php 
$config = include(__DIR__ . '/config_menu.php'); 
$base_url = "../public/";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../public/img/logo1.png">
  <title><?php echo $page_title ?? 'Panel'; ?> | <?php echo $config['brand_name']; ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <style>
  /* .main-header { 
    background-color: #0847a0 !important; 
  } */
  /* .main-sidebar { 
        background-color: #0847a0 !important; 
  }
  
  .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
    background-color: rgba(182, 145, 145, 0.1) !important;
    color: #fff !important;
  }

  /* Ajuste para que el nombre del usuario arriba a la derecha se vea igual */
  .user-info-text {
    font-size: 0.8rem;
    line-height: 1.2;
    text-align: right;
  } */
</style>
  <?php echo $extra_css ?? ''; ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand <?php echo $config['theme_navbar']; ?>">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item"><span class="nav-link">Hola, Usuario</span></li>
    </ul>
  </nav>
<?php 
  $logo_class = ($config['brand_logo_style'] == "circle") ? "img-circle" : "img-rounded";
?>
  <aside class="main-sidebar <?php echo $config['theme_sidebar']; ?> elevation-4">
    <a href="inicio.php" class="brand-link">
  <?php if(!empty($config['brand_logo'])): ?>
    <img src="<?php echo $config['brand_logo']; ?>" 
         alt="Logo" 
         class="brand-image <?php echo $logo_class; ?> elevation-3" 
         style="opacity: .8; width: 40px; height: 40px; object-fit: cover;">
  <?php endif; ?>
  <span class="brand-text font-weight-light"><?php echo $config['brand_name']; ?></span>
</a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <?php foreach($config['menu'] as $item): ?>
            <?php if(isset($item['type']) && $item['type'] == 'header'): ?>
                <li class="nav-header"><?php echo $item['label']; ?></li>
            <?php else: ?>
                <li class="nav-item">
                  <a href="<?php echo $item['url']; ?>" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == $item['url']) ? 'active' : ''; ?>">
                    <i class="nav-icon <?php echo $item['icon']; ?>"></i>
                    <p><?php echo $item['label']; ?></p>
                  </a>
                </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1><?php echo $page_title; ?></h1></div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <?php echo $content; ?>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">V 1.0</div>
    <strong>&copy; <?php echo date('Y'); ?> <a href="#"><?php echo $config['brand_name']; ?></a>.</strong>
  </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<?php echo $extra_js ?? ''; ?>
</body>
</html>