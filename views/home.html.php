<?php include view('parts/header.html'); ?>
<style>
.container .a-shoes-link{
    position: relative;
    width: 50%;
    height: 100%;
    background-image: url('<?php echo assets('img/shoes.jpg') ?>');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: flex;
    justify-content: flex-end;
}
.container .a-clothes-link{
    position: relative;
    width: 50%;
    height: 100%;
    background-image: url('<?php echo assets('img/clothes.jpg') ?>');
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




<?php include view('parts/footer.html'); ?>