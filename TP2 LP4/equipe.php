<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>

<?php
    session_start();

    include('includes/navbar.php');
    include 'includes/modal_contato.php';
    include 'includes/modal_login.php';
    include 'includes/modal_recuperar_senha.php';

?>

<section class="content equipe">
    <div class="container-fluid" id="equipe">
        <h2 id="equipe-logo">EQUIPE DESENVOLVEDORA</h2>

        <div class="row">
            <div class="col-md-3 col-sm-6" id="primeiro-membro" class="membro">
                <div id="foto">
                    <img class="rounded-circle" src="res/img/vinicius.png" width="225" height="225">
                </div>
                <div id="descricao">
                    <h3>Vinícius Lima</h3>
                    <h4><i>Desenvolvedor Front-end</i></h4>
                    <div class="social">
                        <a class="fa fa-facebook " href="https://www.facebook.com/vinicius.lima.1671" target="_blank" href="#"></a>
                        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/vin%C3%ADcius-lima-5b5b9a138/" target="_blank" href="#"></a>
                        <a class="fa fa-github" href="https://github.com/ViniciusLima5" target="_blank" href="#"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" id="segundo-membro" class="membro">
                <div id="foto">
                    <img class="rounded-circle" src="res/img/henrique.png" width="225" height="225">
                </div>
                <div id="descricao">
                    <h3>Henrique Melo</h3>
                    <h4><i>Desenvolvedor Back-end</i></h4>
                    <div class="social">
                        <a class="fa fa-facebook " href="https://www.facebook.com/henrique.melo.3705" target="_blank" href="#"></a>
                        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/henrique-m-ab1545128/" target="_blank" href="#"></a>
                        <a class="fa fa-github" href="https://github.com/riquemelo" target="_blank" href="#"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" id="terceiro-membro" class="membro">
                <div id="foto">
                    <img class="rounded-circle" src="res/img/adalberto.jpg" width="225" height="225">
                </div>
                <div id="descricao">
                    <h3>Adalberto Jr.</h3>
                    <h4><i>Desenvolvedor Back-end</i></h4>

                    <div class="social">
                        <a class="fa fa-facebook " href="https://www.facebook.com/adalberto.rodriguesteixeirajunior" target="_blank" href="#"></a>
                        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/adalberto-j-597249114/"  target="_blank" href="#"></a>
                        <a class="fa fa-github" href="https://github.com/Gabriela87" target="_blank" href="#"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" id="quarto-membro" class="membro">
                <div id="foto">
                    <img class="rounded-circle" src="res/img/maciel.png" width="225" height="225">
                </div>
                <div id="descricao">
                    <h3>Luiz Maciel</h3>
                    <h4><i>Desenvolvedor Back-end</i></h4>
                    <div class="social">
                        <a class="fa fa-facebook " href="https://www.facebook.com/LuizM98" target="_blank" href="#"></a>
                        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/luiz-maciel-segura-dos-santos-a0911b128/" target="_blank" href="#"></a>
                        <a class="fa fa-github" href="https://github.com/LuizMaciel98" target="_blank" href="#"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
    include 'includes/footer2.php';

?>
</body>
</html>
