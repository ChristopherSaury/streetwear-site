<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christopher Saury">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= assets('css/nav-footer.css'); ?>">
    <?php if($title === 'accueil'){ ?>
        <link rel="stylesheet" href="<?= assets('css/home.css'); ?>">
    <?php }; ?>
</head>
<body>

<nav id="desktop">
    <div id="datetime">
        <div class="date-content">
            <div>
                <i class="fa-solid fa-square-phone"></i> +33(0) 1 00 00 00 00 |
            </div>
        <div>
            <i class="fa-solid fa-clock"></i> Lun - Sam : 7:00 - 20:00 |
        </div>
        <div>
        <i class="fa-solid fa-envelope"></i> lassap@yopmail.com
        </div>
        </div>

        <div class="social-media">
            <div class="social-container"><i class="fa-brands fa-twitter"></i></div>
            <div class="social-container"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="social-container"><i class="fa-brands fa-youtube"></i></div>
            <div class="social-container"><i class="fa-brands fa-instagram"></i></div>
        </div>
    </div>

    <div class="desk-nav">
        <div class="link-one">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Chaussures</a></li>
            </ul>
        </div>
        <div class="logo-container">
            <a href="#">
                <img id="logo-desktop" src="<?= assets('img/lasapp-logo.png') ?>" alt="lasapp logo">
            </a>
        </div>
        <div class="link-two">
        <ul>
                <li><a href="#">Vêtements</a></li>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>