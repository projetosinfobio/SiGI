<?php require_once("conexao.php"); ?>
<?php
	session_start();
	$Nro_USP = $_SESSION["Nro_USP"];
	//echo "<script> alert ('entrou aquiqwwe!'); </script>";
	if(isset($_POST["Nro_USP"])){
		$sql_update_senha = "UPDATE Usuario SET senha='".md5($_POST["novasenha"])."' WHERE Nro_USP = ".$Nro_USP." AND senha='".md5($_POST["senha"])."';";
		//echo "<script> alert ('entrou aqui!'); </script>";
		$update_senha = mysqli_query($conexao, $sql_update_senha);
		//echo $acesso;
        if(!$update_senha){
            die("Falha na consulta ao banco");
        }
		else{
			echo "<script> alert ('Senha alterada com sucesso!'); </script>";
		}
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

    <title>SiGI - Alterar Senha</title>
    <link rel="icon" href="img/logo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2-renan.min.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/navs/_sidebar.scss">
    <link rel="stylesheet" href="scss/navs/_global.scss">
    <link rel="stylesheet" href="scss/navs/_topbar.scss">
</head>

<body id="page-top">

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
            <hr class="sidebar-divider d-none d-md-block">
            <div class="profile">
                <center><h5 style="color: white;"><b>Meu Perfil</b></h5></center>
                <img src="img/os lindos.jpg" height="200px" width="190px" style="margin-left: 17px;">
                <br><br>
                <center><b>
                    <p style="color: white;">Fulano Beltrano</p>
                    <p style="color: white;">Diretoria</p>
                </b></center>
            </div>
            <li class="nav-item" id="ntoaqui">
                <a class="nav-link" href="alterar_dados.html">
                    
                    <span id="otoaquidiferente">Alterar dados</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item" id="otoaqui">
                <a class="nav-link" href="#"  onclick="alert('Você já está aqui!')">
                    
                    <span id="otoaquidiferente">Alterar senha</span></a>
            </li>
            <!-- ----------------------------------------------------------------------------------------------------- -->


            <!-- Nav Item - Tables 
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
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
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diretorias
                                <!--<i class="fas fa-bell fa-fw"></i>-->
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
                                <!--<i class="fas fa-envelope fa-fw"></i>-->
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>-->
                            </a>
                  
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos
                                <!--<i class="fas fa-envelope fa-fw"></i>-->
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    

                    <!-- Page Heading -->
                  <br><br><br>
                    <!-------------------------------------------------------->
                    <center>
                    <div id="formAltPw">
                        
                           <!-- <center><h4 class="m-0 font-weight-bold text-primary">Alterar senha</h4><br></center>-->
                        <br><br>
                        
                        <!--form-->
                        
                        <form class="frmalteracao" method="post" action="alterar_senha.php">
                            <script type="text/javascript">
                                function valida() {
                                   
                                        var num = document.getElementById("nUsp").value;                                    
                                        var n = num.toString();
                                        if (n.length>9||n.length<=6)
                                            alert("Deu erro xampson");
                                        else
                                            alert("Validou");
                                   
                                }
                                function mostrapw(param)
                                {
                                    var field;
                                    param==='1'?field=document.getElementById("pw1"):field=document.getElementById("pw2");
                                    if(field.type==="password")                                    
                                        field.type="text";                                    
                                    else
                                        field.type="password";
                                }
                            </script>
                            
                            N° USP:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" id="nUsp" name="Nro_USP" class="form-group-arredondado"><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senha antiga: &nbsp;<input type="password" id="pw1" name="senha" class="form-group-arredondado">&nbsp;<img src="img/eye.png" width="20px" height="20px" onclick="mostrapw('1')"><BR><BR>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senha nova: &nbsp;&nbsp;&nbsp;<input type="password" id="pw2" name="novasenha" class="form-group-arredondado">&nbsp;<img src="img/eye.png" width="20px" height="20px" onclick="mostrapw('2')">
                            <br><br><br>
                            
                        
                        <!--form-->
                        
                        
                        <a class="nav-link" href="" >

                        		<input type="submit" value="Alterar minha senha" id="form-group-arredondado" style="background-color: #009a00; padding:5px; color: white;"></a>
                    
                                <br>
                    </form>
                
                    </div>
                </center>


                    <!-------------------------------------------------------->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <!--    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
        -->
            <!-- End of Footer -->

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

</body>

</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>
