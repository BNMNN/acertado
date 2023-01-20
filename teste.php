<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--<link href="estilo3.css" rel="stylesheet">-->
    <title>Home</title>
</head>

<style>
    article {
        padding: 2%;
        display: flex;
        /*<background-color: red;*/
    }

    section {
        padding: 50px;
        border: 1px solid #000;
        border-radius: 50px;
        background-color: #eee;
        margin-bottom: 50px;
        /*  background-color: purple;*/
        /*color: yellow;*/

    }

    * {
        margin: 0 auto;
        padding: 0;
        box-sizing: border-box;
    }

    #menu-h {
        list-style: none;
        padding: 0;
        padding-top: 5px;
        background-color: #99BCBD;
        text-align: center;
        height: 80px;
        font-family: arial, sans-serif;
        border-bottom: solid 4px #4E9094;
    }

    #titulo {
        margin-left: 10px;
        text-align: left;
        font-weight: bold;
    }

    #menu-h li {
        display: inline;
        background-color: #326950;
        justify-content: center;
        margin: 90px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 4px;
    }

    #menu-h li a {

        color: #FFF;
        padding: 10px;
        display: inline-block;
        text-decoration: none;
        display: inline;
    }
</style>






<body>
    <header>
        <nav>
            <ul id="menu-h">
                <h1 id="titulo">Cabeçalho do Site</h1>
                <li><a href="index.php"> HOME </a></li>
                <li><a href="famosos.php"> RELATOS </a></li>
                <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
                <li><a href="empresas.php"> EMPRESAS </a></li>
                <li><a href="cadastroLogin/cadastro.php"> Cadastro </a></li>
                <li><a href="cadastroLogin/login.php"> Login </a></li>
            </ul>

        </nav>
    </header>
    <main>
        <article>

            <h1>Cadastrar</h1>

            <section>
                <div class="conteudo">
                    <form id="form1" method="post">

                        <h2>Entre em Contato</h2>
                        <br>
                        <div>
                            <label for="nome">Nome:</label>
                            <br>
                            <input type="texto" id="nome" name="nome_usuario">
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <br>
                            <input type="email" id="email" name="email_usuario">
                        </div>
                        <div>
                            <label for="texto">Texto:</label>
                            <br>
                            <textarea id="texto" name="texto_usuario"></textarea>
                        </div>

                        <br>
                        <div class="button">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
            </section>
            <section>

                <h1>Cadastre-se<h1>
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <form method="POST" action="cadastroLogin/config.php" target="_blank">
                            <label>Nome: </label>
                            <input type="text" name="nome">
                            <br><br>
                            <label>E-mail: </label>
                            <input type="email" name="email">
                            <br><br>
                            <label>Senha: </label>
                            <input type="password" name="senha">
                            <br><br>
                            <input type="submit" value="Cadastrar">
                        </form>
                        </form>
                        </div>



                        </form>
                        </div>
            </section>
        </article>
    </main>
</body>
<!--https://www.alura.com.br/artigos/css-guia-do-flexbox-->

</html>