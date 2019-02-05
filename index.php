<!DOCTYPE html>
<html>

<head>
    <?php 
          $_SESSION['user']="visiteur ?";  
            session_start($_SESSION);
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyGuide</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">9rayti </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    
                  <!--the right user  nav bar -->
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" id=""><?php echo $_SESSION['user']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                
                                <li role="presentation"><a href="create.html">Creer un compte</a></li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation"><a href="login.html" >Connecter vous</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--the right user  nav bar -->
                    
                    <!-- the left navigation  bar begins -->
                    <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="#">Acceuil </a></li>
                        <li role="presentation"><a href="parcourirs.html">Parcourir </a></li>
                        <li role="presentation"><a href="upload.html">Partager </a></li>
                    </ul>
                    <!-- the left navigation  bar ends -->
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Bienvenue </h1>
            <p class="lead text-uppercase text-center">ce site est creé pour les etudiants algeriens afin de leur faciliter l'echange des cours . </p>
            <p><a class="btn btn-success btn-lg" role="button" href="#">Trouver vous cours </a>
                <button class="btn btn-primary btn-lg" type="button">Aider votre camarade</button>
            </p>
        </div>
    </div>
    <div class="container">
        <h1>Les derniers cours partagé:</h1></div>
    <div class="container">
        <div>
            <table class="table table-hover">
                <thead>
                    <tr class="success">
                        <th>File name</th>
                        <th>Module</th>
                        <th>Specialite </th>
                        <th>utilisateur </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>File Name From Database (lien)</td>
                        <td>Algo 1</td>
                        <td>informatique </td>
                        <td> <a href="#">Admin </a></td>
                    </tr>
                    <tr>
                        <td>statistique resumé</td>
                        <td>stat1 </td>
                        <td>Medecine </td>
                        <td> Telecharger </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>