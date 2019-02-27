<?php
$a = 5;
$b = 4;
$obdelnikobsah = $a * $b;

$strana = 6;
$uhel = 60;
$obsahTrojuhelnika = round($strana * $strana * sin(deg2rad($uhel)) / 2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starověká matematika</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Starověká matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Archimedes</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Euklides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Eratosthenes</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Zde napiš, co hledáš" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container">
    <div class="row">
        <div class="col-6">
            <h2>Obdelník</h2>
            <table class="table">
                <tbody>
                <tr>
                    <th>Délka strany A:</th>
                    <td class="text-right"><?=$a?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Délka strany B:</th>
                    <td class="text-right"><?=$b?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Obvod obdelníku:</th>
                    <td class="text-right"><?=(2*($a+$b))?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Obsah obdelníku:</th>
                    <td class="text-right"><?=$obdelnikobsah?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <h2>Rovnostranný trojúhelník</h2>
            <table class="table">
                <tbody>
                <tr>
                    <th>Délka strany:</th>
                    <td class="text-right"><?=$strana?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Úhel:</th>
                    <td class="text-right"><?=$uhel?></td>
                    <td>stupňů</td>
                </tr>
                <tr>
                    <th>Obvod trojúhelníku:</th>
                    <td class="text-right"><?=(3*$strana)?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th>Výška trojuhelníku:</th>
                    <td class="text-right"><?=($strana * sin(deg2rad($uhel)))?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                <tr>
                    <th>Obsah trojuhelníku:</th>
                    <td class="text-right"><?=$obsahTrojuhelnika?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <h2>Vzpomínka na pythagora</h2>
            <p>
                Pythagoras ze Samu byl legendární řecký filosof, matematik, astronom i kněz.
                Většina lidí jej zná z hodin matematiky a jeho slavné Pythagorovy věty "c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup>", která se však týká pouze pravoúhlých trojúhelníků.
                <strong>Spojovat ho s výše uvedenými výpočty je tedy přinejmenším zavádějící.</strong>
            </p>
        </div>

        <div class="col-8"><img class="img-fluid" src="https://greece.greekreporter.com/files/Pythagoras.jpg"></div>
    </div>

</main><!-- /.container -->

<footer class="fixed-bottom py-3 bg-light">
    <div class="container-fluid">
        &copy; Braincraft fandí starověkým matematikům
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

