<?php
require_once "Bdd.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="frontend/img/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/root.css">
    <title>Meetic</title>
</head>
<body>
    <header class="header_">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a href="index.php">
                    <div class="logo">
                        <img src="frontend/img/logo9497.png" alt="logo">
                    </div>
                </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit" formaction="login.php">Connection</button>
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit" formaction="register.php">Inscription</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="bg-image" 
     style="background-image: url('frontend/img/Background.png');
            height: 100vh">
            <div class="jumbotron-index">
                <div class="logo-index">
                    <img src="frontend/img/logo9497.png" id="navbarTogglerDemo01">
                </div>
                <h1 class="display-4">Faites de nouvelles rencontres</h1>
                <p class="lead">Trouvez des gens près de chez vous et commencez à discuter.</p>
            </div>
        </div>
</body>
</html>