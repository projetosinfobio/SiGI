<?php
    include "conexao.php";  
?>
<?php                          
                    //echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";     
                   if(isset($_POST['presida']) && isset($_POST['quali']) && isset($_POST['mark'])){

                    $presida = $_POST['presida'];
                    $quali = $_POST['quali'];
                    $mark = $_POST['mark'];
                    $proj=$_POST['proj'];

                    $rh=$_POST['rh'];
                    $finan= $_POST['fina'];
                    $sec = $_POST['sec'];
                    $cons = $_POST['cons'];
                    $presidacaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$presida."; ";//, dir_usuario.nro_usp, dir_usuario.id_dir --- dir_usuario, dir_usuario 
                    $qualicaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$quali."; ";
                    $markcaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$mark.";";
                    $projcaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$proj."; ";
                    $rhcaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$rh." ;";
                    $financaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$finan." ;";
                    $seccaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$sec." ;";
                    $conscaifora = "SELECT usuario.nome_us, usuario.nro_usp FROM usuario WHERE usuario.nro_usp = ".$cons.";  ";

                    $presidaFora = mysqli_query($conexao,$presidacaifora);
                    $qualiFora = mysqli_query($conexao,$qualicaifora);
                    $markFora = mysqli_query($conexao,$markcaifora);
                    $projFora = mysqli_query($conexao,$projcaifora);
                    $rhFora = mysqli_query($conexao,$rhcaifora);
                    $finanFora = mysqli_query($conexao,$financaifora);
                    $secFora = mysqli_query($conexao,$seccaifora);
                    $consFora = mysqli_query($conexao,$conscaifora);

                    $auxpres = mysqli_fetch_assoc($presidaFora);
                    $auxqual = mysqli_fetch_assoc($qualiFora);
                    $auxmark = mysqli_fetch_assoc($markFora);
                    $auxproj = mysqli_fetch_assoc($projFora);
                    $auxrh = mysqli_fetch_assoc($rhFora);
                    $auxfinan = mysqli_fetch_assoc($finanFora);
                    $auxsec = mysqli_fetch_assoc($secFora);
                    $auxcons = mysqli_fetch_assoc($consFora);
					
				   }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SiGI - Troca de Gestão</title>
    <link rel="icon" href="img/logo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/navs/_sidebar.scss">
    <link rel="stylesheet" href="scss/navs/_global.scss">
    <link rel="stylesheet" href="scss/navs/_topbar.scss">
</head>

<body id="page-top" <?php if(isset($_POST['presida'])){ ?> onload="carregapopup()" <?php ;} ?>>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!--Essa div deixa os elementos entortados-->
                </div>
                <div class="sidebar-brand-text mx-3">SiGi</div>
            </a>

            <!-- ----------------------------------------------------------------------------------------------------- -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <!-- Tirei o href as demais classes-->
                <a class="nav-link-pedro" >

                    <h6>Financeiro</h6></a>
            </li>
<!--
            <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
              </a>
              <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Login Screens:</h6>
                  <a class="collapse-item" href="login.html">Login</a>
                  <a class="collapse-item" href="register.html">BliBlo</a>
                  <a class="collapse-item" href="forgot-password.html">Ta maluco eh</a>
                  <div class="collapse-divider"></div>
                  <h6 class="collapse-header">Other Pages:</h6>
                  <a class="collapse-item" href="404.html">Ai vc quebra</a>
                  <a class="collapse-item active" href="blank.html">Branco</a>
                </div>
              </div>
            </li> 
          -->
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading 
      <div class="sidebar-heading">
        Interface
      </div>-->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>Fluxo Financeiro</span>
                </a>
                <!--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>-->
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

                    <span>Troca de Gestão</span>
                </a>
                <!--<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>-->
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading 
      <div class="sidebar-heading">
        Addons
      </div>-->

            <!-- Nav Item - Pages Collapse Menu
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <span>Relatórios</span></a>
            </li>

            <!-- Nav Item - Tables 
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>-->
            <!-- Divider -->
            <hr class="sidebar-divider">


           <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

                <span>Documentos</span>
            </a>      
           </li>
            <!-- Divider -->
            <hr class="sidebar-divider">    


           <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

                <span>Membros</span>
            </a>      
           </li>            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!--<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>-->

        </ul>
        <!-- End of Sidebar -->

        <!-- ----------------------------------------------------------------------------------------------------- -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) 
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Dropdown - Messages 
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diretorias
                                <!--<i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <!--<span class="badge badge-danger badge-counter">3+</span>-->
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Diretorias
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <!--<div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>-->
                                    </div>
                                    <div>
                                        <!--<div class="small text-gray-500">December 12, 2019</div>-->
                                        <span class="font-weight-bold">Projetos</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <!--<div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>-->
                                    </div>
                                    <div>
                                        <!--<div class="small text-gray-500">December 7, 2019</div>-->
                                        <span class="font-weight-bold">Recursos Humanos</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <!--<div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>-->
                                    </div>
                                    <div>
                                        <!--<div class="small text-gray-500">December 2, 2019</div>-->
                                        <span class="font-weight-bold">Qualidade</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <!--<div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>-->
                                    </div>
                                    <div>
                                        <!--<div class="small text-gray-500">December 2, 2019</div>-->
                                        <span class="font-weight-bold">Marketing</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <!--<div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>-->
                                    </div>
                                    <div>
                                        <!--<div class="small text-gray-500">December 2, 2019</div>-->
                                        <span class="font-weight-bold">Financeiro</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Esconder</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Avaliações
                                <!--<i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>-->
                            </a>
                            <!-- Dropdown - Messages -->
                            <!--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>-->
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos
                                <!--<i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>-->
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                              <h6 class="dropdown-header">
                                Eventos
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <!--<div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>-->
                                <div class="font-weight-bold">
                                    Reuniões
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <!--<div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>-->
                                <div class="font-weight-bold">
                                    Eventos
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <!--<div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>-->
                                <div class="font-weight-bold">
                                    Eventos
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <!--<div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>-->
                                <div class="font-weight-bold">
                                    Eventos
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Esconder</a>
                            </div>
                        </li>
                        
                         <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                <!--AQUI VIRÁ COMANDO PHP PRA TRAZER QUAL USUÁRIO ESTÁ LOGADO-->
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="margin: 0 auto 0 auto;">Usuário Logado</span>
                                <!------------------------------------------------------------------------------>


                                <img src="img/user.png" width="2%">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="margin: 0 0 0 auto;">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ver perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Alterar dados
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Alterar senha
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

               <!-- Begin Page Content -->
               <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Troca de Gestão</h1>
                <div class="card shadow mb-4">

                  <!--Pop up Adicionar Movimentação-->
                  <div id="popup-pedro2" style="margin-top: -100px; overflow: scroll;" class="d-none">
                    <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th style="text-align: left;">
									Nome: <?php echo $auxpres["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxpres["nro_usp"]; ?><br><br>
									Diretoria: Presidência<br>
                                </th>
                                <th style="text-align: left;">
                                    Nome: <?php echo $auxqual["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxqual["nro_usp"]; ?><br><br>
                                    Diretoria: Qualidade<br>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">
									Nome: <?php echo $auxmark["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxmark["nro_usp"]; ?><br><br>
									Diretoria: Marketing<br>
                                </th>
                                <th style="text-align: left;">
                                    Nome: <?php echo $auxproj["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxproj["nro_usp"]; ?><br><br>
                                    Diretoria: Projetos<br>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">
									Nome: <?php echo $auxrh["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxrh["nro_usp"]; ?><br><br>
									Diretoria: Recursos Humanos<br>
                                </th>
                                <th style="text-align: left;">
                                    Nome: <?php echo $auxfinan["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxfinan["nro_usp"]; ?><br><br>
                                    Diretoria: Financeiro<br>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">
									Nome: <?php echo $auxsec["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxsec["nro_usp"]; ?><br><br>
									Diretoria: Secretário<br>
                                </th>
                                <th style="text-align: left;">
                                    Nome: <?php echo $auxcons["nome_us"]; ?><br><br>
									N° USP: <?php echo $auxcons["nro_usp"]; ?><br><br>
                                    Diretoria: Conselheiro Fiscal<br>
                                </th>
                            </tr>
                          </table>
                        </div>    
                        <a href="Troca_de_GestaoF.php" class="btn btn-primary btn-icon-split btn-sm" >
                            <span class="text">Gerar Documento</span>
                          </a>

                          <a href="Troca_de_GestaoF.php" class="btn btn-primary btn-icon-split btn-sm teste-pedro" >
                            <span class="text">Cancelar</span>
                          </a>
                    </div>

                </div>      
            <!--Fim do Pop up de Adicionar Movimentação-->

                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">Insira o N° USP de cada membro</h5>
                    </div>
                 <div class="card-body">   
                  <div class="table-responsive"> 
				  <form action="" id="buscarInfos" method="post" class="frmalteracao-pedro-tg" style="color:black;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                        <tr>
                            <th>    
                                   &nbsp;&nbsp;Presidente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="presida" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;&nbsp;Qualidade: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="quali" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;&nbsp;Marketing:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="mark" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;&nbsp;Projetos: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="proj" class="form-group-arredondado-pedro" ><br><br>
                            </th>  
                            <th>
                                   &nbsp;Recursos Humanos:&nbsp;&nbsp;<input type="text" name="rh" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;Financeiro:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="fina" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;Secretário:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="sec" class="form-group-arredondado-pedro" ><br><br>
                                   &nbsp;Conselho Fiscal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cons" class="form-group-arredondado-pedro" ><br><br>
                            </th>    
                        </tr>      
                    </table>    
					<a href="#" class="btn btn-primary btn-icon-split btn-sm" onclick="popupAddReu()">
                        <span class="text">Buscar Informações</span>
                    </a>
                    </form>
                   </div>
                 </div>
                </div>
                    
                </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
         function popupAddReu() {
			document.getElementById('buscarInfos').submit();
            /*if (document.getElementById("popup-pedro2").classList.contains('d-none'))
                document.getElementById("popup-pedro2").classList.toggle('d-flex');
            else
                document.getElementById("popup-pedro2").classList.toggle('d-none');*/
			
        }
		function carregapopup() {
            document.getElementById("popup-pedro2").classList.toggle('d-flex');
			
        }
    </script>

    
</body>

</html>
<?php
    mysqli_close($conexao);
?>