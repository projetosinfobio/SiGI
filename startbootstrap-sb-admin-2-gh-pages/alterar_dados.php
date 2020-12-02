<?php require_once("conexao.php"); ?>
<?php
    //adicionar variaveis de sessao
    session_start();
	$Nro_USP = $_SESSION["Nro_USP"];
	if(isset($_POST["nome_us"])){
		$sql_update_usuario = "UPDATE Usuario SET nome_us='".$_POST["nome_us"]."', email='".$_POST["email"]."' WHERE Nro_USP = ".$Nro_USP.";";
		$sql_update_user_dados = "UPDATE User_dados SET rua='".$_POST["rua"]."', cidade='".$_POST["cidade"]."', CEP=".$_POST["CEP"].", nro_resid=".$_POST["nro_resid"].", complemento='".$_POST["complemento"]."', estado='".$_POST["state"]."', celular=".$_POST["celular"]." WHERE Nro_USP = ".$Nro_USP.";";
		$sql_update_user_redes_sociais = "UPDATE User_redes_sociais SET github='".$_POST["github"]."', linkedin='".$_POST["linkedin"]."', facebook='".$_POST["facebook"]."' WHERE Nro_USP = ".$Nro_USP.";";
		
		$update_usuario = mysqli_query($conexao, $sql_update_usuario);
		$update_user_dados = mysqli_query($conexao, $sql_update_user_dados);
		$update_user_redes_sociais = mysqli_query($conexao, $sql_update_user_redes_sociais);
        //echo $acesso;
        if(!$update_usuario){
            die("Falha na consulta ao banco");
        }
		else{
			echo "<script> alert ('Dados alterados com sucesso!'); </script>";
		}
	
	}
	
	
	$sql_usuario = "SELECT * FROM Usuario WHERE Nro_USP = ".$Nro_USP.";";
    $sql_user_dados = "SELECT * FROM User_dados WHERE Nro_USP = ".$Nro_USP.";";
	$sql_user_redes_sociais = "SELECT * FROM User_redes_sociais WHERE Nro_USP = ".$Nro_USP.";";
	$usuario = mysqli_query($conexao, $sql_usuario);
	$user_dados = mysqli_query($conexao, $sql_user_dados);
	$user_redes_sociais = mysqli_query($conexao, $sql_user_redes_sociais);
	//echo $acesso;
	if(!$usuario){
		die("Falha na consulta ao banco");
	}
	
	$informacao1 = mysqli_fetch_assoc($usuario);
	$informacao2 = mysqli_fetch_assoc($user_dados);
	$informacao3 = mysqli_fetch_assoc($user_redes_sociais);
	
	
	
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SiGi - Alterar Dados</title>
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
            <br><br>
            <div class="profile">
                <img src="img/os lindos.jpg" height="200px" width="190px" style="margin-left: 17px;">

            </div><br>
            <li class="nav-item" id="otoaqui">
                <a class="nav-link" href="index.html">
                    
                    <span id="otoaquidiferente">Alterar dados</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item" id="otoaqui">
                <a class="nav-link" href="index.html">
                    
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
                  

                    <!-------------------------------------------------------->
                    
                    <div id="formAlt">
                        <h4 class="m-0 font-weight-bold text-primary"> &nbsp;Dados pessoais&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4><br>
                        <form class="frmalteracao" method="post" action="alterar_dados.php">
                            &nbsp;&nbsp;Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="form-group-arredondado" name="nome_us" value="<?php echo $informacao1['nome_us']; ?>"><br><br>
                            &nbsp;&nbsp;Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" id="form-group-arredondado" name="email" value="<?php echo $informacao1['email']; ?>"><br><br>
                            &nbsp;&nbsp;Celular: &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="form-group-arredondado" name="celular" value="<?php echo $informacao2['celular']; ?>">
                            <br><br><br>
                        <h4 class="m-0 font-weight-bold text-primary">  &nbsp;Redes sociais</h4><br>
                        &nbsp;&nbsp;Facebook: <input type="text" id="form-group-arredondado" name="facebook" value="<?php echo $informacao3['facebook']; ?>"><br><br>
                        &nbsp;&nbsp;Linkedin:&nbsp;&nbsp; <input type="text" id="form-group-arredondado" name="linkedin" value="<?php echo $informacao3['linkedin']; ?>"><br><br>
                        &nbsp;&nbsp; GitHub:&nbsp;&nbsp;&nbsp; <input type="text" id="form-group-arredondado" name="github" value="<?php echo $informacao3['github']; ?>">
                            
                    <br><br>
                    </div>
                    <div id ="separator"></div>
                    <div id="formAlt2" style="width: 300px;">
                        <h4 class="m-0 font-weight-bold text-primary"> &nbsp;Endereço&nbsp;</h4><br>
                        
                            &nbsp;&nbsp;Rua:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="form-group-arredondado" name="rua" value="<?php echo $informacao2['rua']; ?>"><br><br>
                            &nbsp;&nbsp;Número:&nbsp;&nbsp;&nbsp; <input type="number" id="form-group-arredondado" name="nro_resid" value="<?php echo $informacao2['nro_resid']; ?>"><br><br>
                            &nbsp;&nbsp;Complemento:   &nbsp;&nbsp;&nbsp; <input type="text" id="form-group-arredondado" size="14px" name="complemento" value="<?php echo $informacao2['complemento']; ?>"><br><br>
                            &nbsp;&nbsp;CEP: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="form-group-arredondado" name="CEP" value="<?php echo $informacao2['CEP']; ?>"><br><br>
                            &nbsp;&nbsp;Cidade:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="form-group-arredondado" name="cidade" value="<?php echo $informacao2['cidade']; ?>"><br><br>
                            &nbsp;&nbsp;<label for="estados" value="<?php echo $informacao2['estado']; ?>">Estado: </label>

                            <select name="state" id="form-group-arredondado" id="state">
                              <option value="AC" <?php if($informacao2['estado'] == "AC"){?> selected <?php } ?>>AC</option>
                              <option value="AL" <?php if($informacao2['estado'] == "AL"){?> selected <?php } ?>>AL</option>
                              <option value="AP" <?php if($informacao2['estado'] == "AP"){?> selected <?php } ?>>AP</option>
                              <option value="AM" <?php if($informacao2['estado'] == "AM"){?> selected <?php } ?>>AM</option>
                              <option value="BA" <?php if($informacao2['estado'] == "BA"){?> selected <?php } ?>>BA</option>
                              <option value="CE" <?php if($informacao2['estado'] == "CE"){?> selected <?php } ?>>CE</option>
                              <option value="DF" <?php if($informacao2['estado'] == "DF"){?> selected <?php } ?>>DF</option>
                              <option value="ES" <?php if($informacao2['estado'] == "ES"){?> selected <?php } ?>>ES</option>
                              <option value="GO" <?php if($informacao2['estado'] == "GO"){?> selected <?php } ?>>GO</option>
                              <option value="MA" <?php if($informacao2['estado'] == "MA"){?> selected <?php } ?>>MA</option>
                              <option value="MT" <?php if($informacao2['estado'] == "MT"){?> selected <?php } ?>>MT</option>
                              <option value="MS" <?php if($informacao2['estado'] == "MS"){?> selected <?php } ?>>MS</option>
                              <option value="MG" <?php if($informacao2['estado'] == "MG"){?> selected <?php } ?>>MG</option>
                              <option value="PA" <?php if($informacao2['estado'] == "PA"){?> selected <?php } ?>>PA</option>
                              <option value="PB" <?php if($informacao2['estado'] == "PB"){?> selected <?php } ?>>PB</option>
                              <option value="PR" <?php if($informacao2['estado'] == "PR"){?> selected <?php } ?>>PR</option>
                              <option value="PE" <?php if($informacao2['estado'] == "PE"){?> selected <?php } ?>>PE</option>
                              <option value="PI" <?php if($informacao2['estado'] == "PI"){?> selected <?php } ?>>PI</option>
                              <option value="RJ" <?php if($informacao2['estado'] == "RJ"){?> selected <?php } ?>>RJ</option>
                              <option value="RN" <?php if($informacao2['estado'] == "RN"){?> selected <?php } ?>>RN</option>
                              <option value="RS" <?php if($informacao2['estado'] == "RS"){?> selected <?php } ?>>RS</option>
                              <option value="RO" <?php if($informacao2['estado'] == "RO"){?> selected <?php } ?>>RO</option>
                              <option value="RR" <?php if($informacao2['estado'] == "RR"){?> selected <?php } ?>>RR</option>
                              <option value="SC" <?php if($informacao2['estado'] == "SC"){?> selected <?php } ?>>SC</option>
                              <option value="SP" <?php if($informacao2['estado'] == "SP"){?> selected <?php } ?>>SP</option>
                              <option value="SE" <?php if($informacao2['estado'] == "SE"){?> selected <?php } ?>>SE</option>
                              <option value="TO" <?php if($informacao2['estado'] == "TO"){?> selected <?php } ?>>TO</option>                            

                            </select>
                            <br><br><br>
                            <a class="nav-link" href="index.html">
                    
                                <input type="submit" value="Alterar meus dados" id="form-group-arredondado" style="background-color: #009a00; padding:5px; color: white;"></a>
                                <br>
                    </form>
                    </div>



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