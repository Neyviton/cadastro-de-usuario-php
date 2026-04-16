<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
    <body>
    <h1>Cadastro de Usuário</h1>

        <form action="salvar.php" method="post" autocomplete="on">
            <div class="login">
                <p>
                    <label for="idnome">Nome</label>
                    <input type="text" name="nome" id="idnome" required minlength="4" maxlength="50" autocomplete="username">
                </p>
                    <p>
                        <label for="idemail">E-mail</label>
                        <input type="email" name="email" id="idemail" required autocomplete="email">
                    </p>

                    <button onclick="validar()">Enviar</button>
                    <input type="reset" value="Limpar">
            </div>

        </form>

    <script src="../JavaScript/validacao.js"></script>
    </body>
</html>
