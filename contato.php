<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bruno Oliveira - Contato</title>
    <link rel="icon" href="imagens/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700">


    
    
<body>
    <main>
        <h1 class="titulo-principal">Contato</h1>
        <div class="container">
            <form action="enviar.php" method="post">
                <fieldset>
                    <legend>Seus dados</legend>
                    <!-- mensagem de envio -->
                    <h3>
                    <?php
                        if(!isset($_GET['msg'])){
                            $msg=null;
                        }
                        else {
                            $msg = $_GET['msg'];
                            print $msg;
                        }
                    ?>                    
                    </h3>
                    <!-- fim mensagem de envio -->
                    <label class="com-icone" for="nome">Nome completo</label>
                    <input id="nome" type="text" name="nome" required autofocus pattern="[A-Za-z ']{4,}" title="O nome precisa ter pelo menos 4 caracteres" maxlength="40">
                    <label class="com-icone" for="email">E-mail</label>
                    <input id="email" type="email" name="email" required placeholder="seu@email.com" maxlength="40">
                </fieldset>
               
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" cols="60" rows="10" placeholder="Digite aqui sua mensagem" maxlength="1000"></textarea>
                <button >Enviar mensagem</button>
            </form>
        </div>  
    </main>
    <img src="imagens/love.jpg" alt="Minha foto" class="minha-foto">
    <aside class="navegacao-site">
        <h1>Bruno Oliveira</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="bio.html">Sobre mim</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
        <ul class="icones-redes-sociais">
            <li>
                <a href="https://github.com/brunooliveiramac" class="github" data-tooltip="Veja meus projetos opensource">
                    Github
                </a>
            </li>
            <li>
                <a href="#" class="twitter" data-tooltip="Siga-me no Twitter">
                    Twitter
                </a>
            </li>
            <li>
                <a href="https://br.linkedin.com/pub/bruno-oliveira/b2/918/19b" class="linkedin" data-tooltip="Veja meu currículo">
                    LinkedIn
                </a>
            </li>
        </ul>
    </aside>
    <footer class="rodape-pagina">
        &copy; Bruno Oliveira 2015
    </footer>
</body>
</html>
