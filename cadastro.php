<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/base.css">
    <title>Tech Ladies: Cadastre-se</title>
</head>

<header>
</header>

<body>
    <?php
        include("./estrutura/barra_direita.php");
    ?>

    <main class="o-main" style="text-align: center;">
        <div class="centro">
            <br>
            <h3 style="font-size: 33px;">CADASTRE-SE</h3>
            <p>É rápido e fácil.</p>
            <hr>
        </div>
        <form method="GET" action="./funcoes/gravar.php">
            <br>
            <input type="text" class="input2_css" name="nome" placeholder="Nome"> &ensp;
            <input type="text" class="input2_css" name="sobrenome" placeholder="Sobrenome">
            <br><br>
            <input type="email" class="input_css" name="email" placeholder="Email">
            <br><br>
            <input type="password" class="input_css" name="senha" placeholder="Senha">
            <br><br>
            <input type="password" class="input_css" name="confsenha" placeholder="Confirmar senha">
            <br><br>
            Data de nascimento: 
            <input type="date" class="input2_css" style="width:160px;" name="data">
            <br><br>
            <input type="submit" class="botao" value="Cadastre-se">
        </form>
        <br>
        <p>Já possui conta? <a href="login.php" style="color: #000"><u>Entre aqui</u></a></p>
        <hr>    
        Ao clicar em Cadastre-se, você aceita o <a href="contrato.html">Contrato do Usuário</a>,<br> a <a href="privacidade.html">Política de Privacidade</a> e a <a href="cookies.html">Política de Cookies</a> do TechLadies.
        <br><br><br>
    </main>
    <footer class="o-footer">
        <center>
            <a href="https://github.com/adudars/mulheresDeTI" target="_blank">
                <image src="./imagens/GitHub.png" alt="TechLadiesRepository"></image>
            </a>
        </center>
    </footer>
</body>
</html>