<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Alterar Senha</title>
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
                        <p class="text-center">ALTERAR SENHA</p>
                        <form id="login-form" action=" " method="POST">
                            <div class="form-group">
                                <label for="username">Senha atual</label>
                                <input type="password" class="form-control underlined" name="senha_atual" id="senha_atual" placeholder="Senha Atual" required> </div>
                            <div class="form-group">
                                <label for="password">Nova senha</label>
                                <input type="password" class="form-control underlined" name="nova_senha" id="nova_senha" placeholder="Nova Senha" required> </div>
                                <div class="form-group">
                                <label for="password">Confirmar senha</label>
                                <input type="password" class="form-control underlined" name="confirma_senha" id="confirma_senha" placeholder="Confirmar Senha" required> </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Confirmar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <?php session_start();
                
                include $_SERVER['DOCUMENT_ROOT']."/dist/includes/banco.php";
                $admin = $_SESSION['admin'];

                $_SESSION['altera_senha'] = 'alterado';

                if(isset($_POST['senha_atual'])){
                
                    $senha_atual = $_POST['senha_atual'];
                    $nova_senha = $_POST['nova_senha'];
                    $confirma_senha = $_POST['confirma_senha'];
                    $query_verifica = mysqli_query($link,"SELECT COUNT(cd_adm) FROM tb_admin WHERE cd_senha = '$senha_atual'");
                    $query_teste = mysqli_query($link,"SELECT cd_senha FROM tb_admin WHERE cd_senha = '$senha_atual'");
                    $conta_teste = mysqli_num_rows($query_teste);
                    if($conta_teste == 1){
                        
                        if($nova_senha == $confirma_senha){
                        mysqli_query($link,"UPDATE tb_admin set cd_senha = '$nova_senha' WHERE nm_adm = '$admin'");
                        header("Location:index.php");
                        }else{
                            echo "<script>alert('Senhas incompatíves! Por favor tente novamente!');</script>";
                        }
                        
                    }else if($conta_teste != 1){
                        echo "<script>alert('Senha Incorreta! Por favor tente novamente!');</script>";

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