<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title><?php echo $title; ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo WEBROOT . 'css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo WEBROOT . 'css/app.css'; ?> " rel="stylesheet">
    <link href="<?php echo WEBROOT . 'css/dashboard.css'; ?> " rel="stylesheet">
</head>

<body>
    <header>
        <?php if ($p != 'login'): ?>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="?p=home">CNSS</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?p=home">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo PRODUIT; ?>">Produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ADHERANT; ?>">Adherant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Facture</a>
                    </li>
                    <?php if (isset($_SESSION['log'])): ?>
                         <li class="nav-item">
                            <a class="nav-link" href="?p=logout">se deconnecter</a>
                        </li>
                    <?php endif;?>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <?php if ($p === 'home'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Statistique <span class="sr-only">(current)</span></a>
                        </li>
                    <?php elseif ($p === 'produit'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Gestion des Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=produit.csb">CSB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="">CHRD</a>
                        </li>
                    <?php elseif ($p === 'adherant'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Gestion des Adhérants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Liste | Modification</a>
                        </li>
                    <?php elseif ($p === 'produit.csb'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="?p=pathologies.csb">Pathologies</a>
                        </li>

                    <?php endif;?>

                </ul>
            </nav>
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Dashboard</h1>
            <?php else: ?>

                <?php echo $content_for_layout; ?>

            </main>
        <?php endif;?>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>