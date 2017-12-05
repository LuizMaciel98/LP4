<nav class="navbar fixed-top navbar-expand-lg navbar-light amber darken-2 scrolling-navbar">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul  class="navbar-nav mr-auto">
            <li class="nav-item">
                <a style="font-size: 35px;" class="nav-link" href="home_empresa.php">S<i class="fa fa-sun-o" aria-hidden="true"></i>LARI</a>
            </li>
            <li class="nav-item">
                <a style="padding-top: 20px;" class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a style="padding-top: 20px;" class="nav-link" href="home_empresa.php">ESTOQUE</a>
            </li>
            <li class="nav-item">
                <a style="padding-top: 20px;" class="nav-link" href="equipe.php">EQUIPE</a>
            </li>

            <li class="nav-item">
                <a data-toggle="modal" data-target="#contatoModal" style="padding-top: 20px;" class="nav-link" href="#">CONTATO</a>
            </li>
        </ul>
        
        <a href="home_empresa.php"><button style="border-radius: 10%;" type="button" class="btn-login btn btn-info btn-rounded waves-effect" ><i style="font-size: 25px; bottom: 3px; padding-right: 10px;" class="fa fa-home" aria-hidden="false"></i><span style="font-size: 20px"><?php echo $_SESSION['companyName'];?></span></button></a>

        <a href="PHPs/logoff.php"><button style="border-radius: 10%;" type="button" class="btn-login btn btn-danger btn-rounded waves-effect" ><i style="font-size: 25px; bottom: 3px; padding-right: 10px;" class="fa fa-power-off" aria-hidden="false" ></i><span style="font-size: 20px">SAIR</span></button></a>
    </div>
</nav>
