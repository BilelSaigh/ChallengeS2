<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= ucfirst($title)?></title>
    <meta name="description" content="Mon portfolio">
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
    <link rel="stylesheet" type="text/css" href="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
    body {
        font-family:<?= $front->getPolices() ?> ;
    }
    p {
        color: <?= $front->getTextColor() ?> ;
        text-size:  <?= $front->getTextSize() ?> ;
    }
    .btn-primary, .btn-primary:hover, .btn-primary:active  {
        background-color: <?= $front->getBtnColor() ?> ;
        border-color : <?= $front->getBtnColor() ?> ;
    }
</style>
<body>


    <header>
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">>
            <div class="container-fluid">
                <a class="navbar-brand" href="/home"><?= $front->getWebsiteName()?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php foreach ($pages as $page):
                                if ($page["menu"] == 1):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= $page["slug"]?>"><?= ucfirst($page["title"])?></a>
                        </li>
                       <?php endif;endforeach; ?>
                    </ul>
                    <?php

                    if (!empty($_SESSION["user"])){
                        echo '
                <div class="col-sm text-end my-2" >

                        <a class="btn btn-outline-light " href="admin/pages" role="button">Back to pages</a>
                </div>
             ';
                    }

                    ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">

            <?php include  $this->view?>
        </div>
    </main>
        <footer class="row bg-dark my-4 border-top" data-bs-theme="dark">
            <p class="col mb-0 text-center text-muted">&copy; 2023 ChallengeS2</p>

        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/jquery-1.11.3/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/bootstrap-3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/code-prettify/src/prettify.js"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify.js"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/plugins/custom/js-beautify-1.7.5/js/lib/beautify-html.js"></script>
    <script type="text/javascript" src="Views/Dash/theme/dist/assets/js/examples.js"></script>

</body>
</html>
