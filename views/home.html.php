<?php include Functions::view('parts/header.html'); ?>
<style>
.container .a-shoes-link{
    position: relative;
    width: 50%;
    height: 100%;
    background-image: url('<?php echo Functions::assets('img/shoes.jpg') ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: flex;
    justify-content: flex-end;
}
.container .a-clothes-link{
    position: relative;
    width: 50%;
    height: 100%;
    background-image: url('<?php echo Functions::assets('img/clothes.jpg') ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: flex;
    justify-content: flex-start;
}
</style>
<div class="a-title-screen-ct">
    <div class="container">
        <div class="a-shoes-link">
            <a href="#">Boutique Chaussures</a>
        </div>
        <div class="a-clothes-link">
            <a href="#">Boutique Vêtements</a>
        </div>
    </div>
    <div class="title-container">
        <h1 class="a-title">La mode aux meilleurs prix</h1>
        <h3>+ nouvelle collection de veste à découvrir</h3>
    </div>
</div>
<section id="homeAdd">
    <div class="homePurchase">
        <div>
            <i class="fa-solid fa-percent"></i>
            <h3>10% de réduction sur une commande</h3>
            <p>10% de réduction sur une commande pour une souscription à la newsletter</p>
        </div>
        <div>
            <i class="fa-solid fa-globe"></i>
            <h3>Livraison sans frais </h3>
            <p>Les livraisons sont offertes pour tout envoi dans le monde pour toutes commandes supérieures à 70€</p>
        </div>
        <div>
            <i class="fa-regular fa-money-bill-1"></i>
            <h3>Achetez maintenant payer plus tard</h3>
            <p>Paiement en 3 versements ou Paiement en 30 jours sur les commandes en Europe</p>
        </div>
    </div>
</section>




<?php include Functions::view('parts/footer.html'); ?>