<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <a href="./index.php"  >
                <img src="./assets/Arrow-back.svg" alt="Cadastrar usuário" class="arrow-back">
            </a>       
            <form action="./route/redirect.php" method="POST">
                <h2>Faça seu cadastro</h2>
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="E-mail" required>
                <div class="input-pwd">
                    <input type="password" placeholder="Senha">
                    <span class="show-password eye-closed"></span>
                </div>
                <div class="buttons">
                    <button>
                        <img src="./assets/Plus.svg" alt="">
                    </button>
                </div>
            </form>
            <hr class="separador"/>
            <img class="main-logo" width="450px" height="500px" src="./assets/Cadastro.svg">
        </div>
        
    </div>

    <script src="./js/handleInput.js"></script>

</body>
</html>