<?php require_once("conexao.php"); ?>

<?php
    //adicionar variaveis de sessao
    session_start();

    if(isset($_POST["exampleInputEmail"])){
        $Email_Usuario = $_POST["exampleInputEmail"];
        $Senha_Usuario = $_POST["exampleInputPassword"];
  
        $login = "SELECT * FROM Usuario WHERE email = '".$Email_Usuario."' and senha = '".md5($Senha_Usuario)."' ;";
        
        $acesso = mysqli_query($conexao, $login);
        //echo $acesso;
        if(!$acesso){
            die("Falha na consulta ao banco");
        }
        
        $informacao = mysqli_fetch_assoc($acesso);
        
        if(empty($informacao)){
            $mensagem = "Login sem sucesso."; 
            
        } else{
            $_SESSION["Nro_USP"] = $informacao["Nro_USP"];
            $_SESSION["email"] = $informacao["email"];
            $_SESSION["nome"] = $informacao["nome_us"];
            header("location: blank.html");
            
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

  <title>SiGI - Login</title>
<link rel="icon" href="img/logo.png">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" >

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0"><br><br><br>
            <div class="img_infobio">
              <img src="img/logo_2.png" class="image_info">
            </div>
              <div class="row"><!-- style="background-image:url('img/logo.png'); background-repeat:no-repeat;">-->

                <div class="col-lg-6">

                <div class="p-5">

                  <div class="text-center2">
                    <h1 class="h4 text-gray-900 mb-4"><b>Bem vindo ao SiGi!</b></h1>
                  </div>
                  <form class="user" method="post" action="index.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email de usuário...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="exampleInputPassword" placeholder="Senha">
                    </div>
                    <div class="form-group">

                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                      

                  </form>
                  <br>
                  <div class="forgot_pw">
                    <a class="small" href="forgot-password.html">Esqueceu sua senha?</a>
                  </div>
                </div>


            </div>
          </div>

            </div>
          </div>
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
