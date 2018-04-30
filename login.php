<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> Império do Açaí </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">FAÇA LOGIN PARA CONTINUAR</p>
                        <form id="login-form" action=" " method="POST">
                            <div class="form-group">
                                <label for="username">Login</label>
                                <input type="text" class="form-control underlined" name="login" id="login" placeholder="Seu Nome" required> </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control underlined" name="senha" id="senha" placeholder="Sua Senha" required> </div>
                            <div class="form-group">
                                
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Lembrar-me</span>
                                </label>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <?php session_start();
                
                include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";

                if(isset($_POST['login'])){
                    $usuario = $_POST['login'];
                    $senha = $_POST['senha'];

                    $_SESSION['admin'] = $usuario;

                    $query = mysqli_query($link,"SELECT * FROM tb_admin WHERE nm_adm = '$usuario' AND cd_senha = '$senha'");

                    $verifica_login = mysqli_num_rows($query);

                    if($verifica_login == 1){

                        header("Location:index.php");

                    }else{
                        echo "<script>alert('Usuario ou Senha incorretos!')</script>";
                    }
                }

                ?>
                <div class="text-center">
                    <a href="logout.php" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Voltar para o Sistema </a>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>