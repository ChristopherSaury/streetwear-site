<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christopher Saury">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= Functions::assets('css/nav-footer.css'); ?>">
    <!-- css file if condition -->
    <?php if(!isset($_GET['route'])){ ?>
    <link rel="stylesheet" href="<?= Functions::assets('css/home.css'); ?>">
    <?php }elseif($_GET['route'] === 'accueil' ){ ?>
        <link rel="stylesheet" href="<?= Functions::assets('css/home.css'); ?>">
    <?php }elseif($_GET['route'] === 'inscription') { ?>
        <link rel="stylesheet" href="<?= Functions::assets('css/signup.css'); ?>">
    <?php }elseif($_GET['route'] === 'connexion'){ ?>
        <link rel="stylesheet" href="<?= Functions::assets('css/login.css'); ?>">
    <?php }else{ ?>
        <link rel="stylesheet" href="<?= Functions::assets('css/home.css'); ?>">
    <?php } ?>
    
        
   
    
    
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
        <?php if(isset($_SESSION['firstname'])):?>
        <div class="menu">
            <div><i class="fa-solid fa-ellipsis-vertical"></i></div>
        </div>
        <?php endif; ?>
    </div>

    <div class="desk-nav">
        <div class="link-one">
            <ul>
                <li><a href="<?= Functions::url('accueil') ?>">Accueil</a></li>
                <li><a onmouseover="optLinkShoes()">Chaussures</a></li>
                <li><a onmouseover="optLinkClothes()">V??tements</a></li>
            </ul>
        </div>
        <div class="logo-container">
            <a href="<?= Functions::url('accueil') ?>">
                <img id="logo-desktop" src="<?= Functions::assets('img/lasapp-logo.png') ?>" alt="lasapp logo">
            </a>
        </div>
        <div class="link-two">
        <ul>
                <li><a href="#">A propos</a></li>
                <li><a href="<?= Functions::url('inscription') ?>">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="clothes-shop-link" onmouseover="optLinkClothes()" onmouseout="closeOptLinkClothes()">
        <div class="additionnals-links">

            <div class="standard-options">
                <ul>
                    <li><a href="#">Femmes</a></li>
                    <li><a href="#">Hommes</a></li>
                    <li><a href="#">Nouveaut??</a></li>
                </ul>
            </div>
            <div class="categories">
                <h4>Cat??gories</h4>
                <ul>
                    <li><a href="#">Casquette</a></li>
                    <li><a href="#">T-shirt</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Sweatshirt</a></li>
                </ul>
            </div>
            <div class="collections">
                <h4>Collections</h4>
                <ul>
                    <li><a href="#">Automne 2022</a></li>
                    <li><a href="#">Printemps / ??t?? 2022</a></li>
                    <li><a href="#">Hivers 2022</a></li>
                </ul>
            </div>
        </div>

        <div class="collections-links">
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/spring-2022.jpg") ?>" alt="">
                    <h5>Printemps 2022</h5>
                </a>
            </div>
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/summer-2022.jpg") ?>" alt="">
                    <h5>??t?? 2022</h5>
                </a>
            </div>
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/winter-2022.jpg") ?>" alt="">
                    <h5>Hivers 2022</h5>
                </a>
            </div>
        </div>
    </div>

    <div class="shoes-shop-link" onmouseover="optLinkShoes()" onmouseout="closeOptLinkShoes()">
        <div class="additionnals-links">

            <div class="standard-options">
                <ul>
                    <li><a href="#">Femmes</a></li>
                    <li><a href="#">Hommes</a></li>
                    <li><a href="#">Nouveaut??</a></li>
                </ul>
            </div>
            <div class="men-categories">
                <h4>Hommes</h4>
                <ul>
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Chaussures de sport</a></li>
                    <li><a href="#">Boots & Bottines</a></li>
                    <li><a href="#">Chaussures de ville</a></li>
                </ul>
            </div>
            <div class="women-categories">
                <h4>Femmes</h4>
                <ul>
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Chaussures de sport</a></li>
                    <li><a href="#">Bottines</a></li>
                    <li><a href="#">Escarpins</a></li>
                </ul>
            </div>
        </div>

        <div class="collections-links">
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/men-shoes.jpg") ?>" alt="">
                    <h5>Chaussures de ville</h5>
                </a>
            </div>
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/slingbacks.jpg") ?>" alt="">
                    <h5>Escarpins</h5>
                </a>
            </div>
            <div class="img-content">
                <a href="#">
                    <img src="<?= Functions::assets("img/boots.jpg") ?>" alt="">
                    <h5>Bottines</h5>
                </a>
            </div>
        </div>
    </div>
</nav>