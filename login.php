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
                <img src="frontend/img/logo9497.png" alt="logo">
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
    <div class="bg-color">
    <div class="bg-image" 
     style="background-image: url('frontend/img/Background.png');
            height: 100vh">
    <!-- Formulaire register -->
    <section id="section6" class="py-3">
        <div class="container">
            <div class="col-md-12">
                <form action="home.php" method="POST">
                    <!-- Email -->
                    <div class="label-center">
                        <label for="email">Email</label>
                    </div>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" tabindex="2" required autofocus placeholder="Votre email..">
                    <!-- Mot de passe -->
                    <div class="label-center">
                        <label for="inputPassword3">Mot de passe</label>
                    </div>
                    <input type="password" name="inputPassword3" tabindex="3" required autofocus placeholder="Votre mot de passe">
                    <div class="label-center">
                        <input type="submit" class="btn-send" value="SE CONNECTER">
                    </div>
                </form>
            </div>
        </div>
    </section>
    </div>
</div>
</body>
</html>