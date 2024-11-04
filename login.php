<!-- 2ª Digitação (Aqui) -->
<?php
 
?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
 </head>
 <body>
    <div class="container" style="width: 400px;">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <!-- Exibe a mensagem de erro, se houver. -->
            <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
    </div>
    
 </body>
 </html>