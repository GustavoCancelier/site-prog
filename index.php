<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <img class="main-logo" width="450px" height="500px" src="./assets/Login.svg">
            <hr class="separador"/>
            <form action="./route/redirect.php">
                <h2>Faça login na sua conta</h2>
                <input type="email" placeholder="E-mail" required>
                <div class="input-pwd">
                    <input type="password" placeholder="Senha">
                    <span class="show-password eye-closed"></span>
                </div>

                <div class="buttons">
                    <a href="./register.php" class="button-plus" >
                        <img src="./assets/Plus.svg" alt="Cadastrar usuário" class="button-plus-image">
                    </a>
                    <button>
                        <img src="./assets/Arrow.svg" alt="">
                    </button>
                </div>
            </form>
        </div>
        
    </div>

    <script src="./js/handleInput.js"></script>

</body>
</html>