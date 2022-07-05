<!DOCTYPE html>
<html>

    <head>
        <title>Limpano</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    </head>

    <body>
    <div class="bg-image mh-100"
            style="background-image: url('imagemindex.jpg'); height: 800px;">
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Avatar Logo" style="width:40px;" class="w-50"> 
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  id="contato" href="contato.html" target="_blank">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="portifolio" href="portifolio.html" target="_blank">Portifólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="login" href="login.html" target="_blank">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

            <div class="container-md" >
                <div>
                    <h1>Serviços </h1>
                    <div class="mb-3 mt-3">
                        <form action="servicospost.php" method="post">
                            <label class="form-label" for="fname">Local: </label><br>
                            <input class="form-control" type="text" id="fname" name="fname"><br>
                            
                            <label class="form-label" for="lname">Endereço:</label><br>
                            <input class="form-control" type="text" id="lname" name="lname"><br>
                            
                            <label class="form-label" for="data">Data:</label><br>
                            <input class="form-control" type="date" id="data" name="data"><br>
                            
                            <label class="form-label" for="hora">Horario :</label><br>
                            <input class="form-control" type="text" id="hora" name="hora"><br>
                            
                            <label class="form-label" for="equi">Necessita alguma equipamento:</label><br>
                            <input class="form-control" type="text" id="equi" name="equi"><br>
                            <input type="submit">
                        </form>
                    </div>
                    <footer class="bg-light text-center text-lg-start fixed-bottom">
                        <!-- Copyright -->
                        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                            <p>© 2022 - Todos os direitos reservados.</p>
                            <p>LIMPANO - Agência de Limpeza.</p>
                        </div>
                        <!-- Copyright -->
                    </footer>
                </div>
            </div>
        </div>
    </body>

</html>