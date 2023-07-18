<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-container input[type="text"],
        .form-container input[type="password"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .message {
            margin-top: 20px;
            text-align: center;
            color: #666666;
        }
        .mensagem-erro {
         background-color: #f8d7da;
         border: 1px solid #f5c6cb;
         color: #721c24;
         padding: 10px;
         margin-bottom: 30px;
}
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulário de Cadastro</h2>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
            ?>
        <div id="erro" class="mensagem-erro">
            <p>Erro: Usuario ou senha invalido</p>
        <div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <form method="POST" action="login.php" >
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
