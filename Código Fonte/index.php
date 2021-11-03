<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Verificador de CPF</title>
</head>
<body>
    <div class="login">
        <form action="verificar.php" method="POST">
            <h2>Login</h2>
            <label>Digite seu CPF:</label>
            <input type="text" name="cpf" required>
            <br><br>
            <input type="submit" value="Verificar">
        </form>
    </div>
</body>
</html>