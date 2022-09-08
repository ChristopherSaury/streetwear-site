<?php include Functions::view('parts/header.html'); ?>
<style>
    #login .page-photo{
        width: 100%;
        height: 100%;
        background: url('<?= Functions::assets('img/login-page.jpg') ?>');
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>
<section id="login">
    <div class="login-form">
        <form action="#" method="POST">
            <h1>Connectez-vous sur Lassap.com</h1>
            <div class="input-container">
                <div class="login-email">
                    <label for="email_address">Email</label>
                    <input type="email" name="email_address" id="email_address" placeholder="Votre Email">
                </div>
                <div class="login-password">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password" id="password" placeholder="Votre Mot de Passe">
                </div>
                <div class="btn-wrapper">
                    <button type="submit">Connexion</button>
                    <a href="#">Mot de Passe oublié ?</a>
                </div>
            </div>
        </form>
    </div>
    <div class="page-photo"></div>
</section>






<?php include Functions::view('parts/footer.html'); ?>