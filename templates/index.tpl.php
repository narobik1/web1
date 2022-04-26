<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div id="navcont" class="container ">
                <a class="navbar-brand me-5" href="./">
                    <img class="me-2" src="<?= "./images/" . $header['imgsrc'] ?>" alt="logo" height="60"> <?= $title ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        <?php foreach ($pages as $url => $page){  if($url!="message"){ ?>
                            <li <?= (($page == $keres) ? 'class="nav-item active"' : 'class="nav-item "') ?>>
                                <a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>" class="nav-link">
                                    <?= $page['szoveg'] ?>
                                </a>
                            </li>
                        <?php }} ?>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <div id="content">
        <?php include("./templates/{$keres['fajl']}.tpl.php"); ?>
    </div>

    <footer class="">
        <div class="container-fluid lab d-flex justify-content-evenly align-items-center flex-row py-4">
            <div class="labcim">
                <a href="./">Foundation for the Budapest Zoo</a><br>
                <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?> &nbsp;
            </div>             
            <div class="navigaciok my-2 d-flex justify-content-center align-items-center flex-column">
                <ul>
                    <?php foreach ($pages as $url => $page) { if($url!="message"){?>
                        <li <?= (($page == $keres) ? 'class="nav-item active"' : 'class="nav-item "') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>" class="nav-link">
                                <?= $page['szoveg'] ?>
                            </a>
                        </li>
                    <?php } }?>
                </ul>
            </div>
            
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>