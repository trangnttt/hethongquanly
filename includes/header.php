<!DOCTYPE html>
<html lang="en">

<head>
  <title>BEANS HOUSE</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../../styles/css/main-layout.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="../../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="../../styles/js/sweetalert.min.js"></script>
  <!-- ckeditor -->
  <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="../../styles/css/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    
    <?php
      $current_file=  explode('/', $_SERVER['SCRIPT_NAME']);
      $current_file=  end($current_file);

      if($current_file!='phan-mem-ban-hang.php'){
       echo '<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>';
      } 
    ?>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="./../logout.php">Logout <i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  