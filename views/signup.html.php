<?php include Functions::view('parts/header.html'); ?>
<style>
    #signup .page-photo{
        width: 100%;
        height: 100%;
        background: url('<?= Functions::assets('img/signup-page.jpg') ?>');
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
</style>

<section id="signup">
    <div class="page-photo"></div>
    <div class="signup-form">
        <form action="<?= Functions::url('inscription/handler') ?>" method="POST">
            <h2>Votre compte</h2>
            <h1>Créer un compte sur Lassap.fr</h1>

            <div class="first-row">
                <div class="mail-input">
                    <label for="email_address">Email*</label>
                    <input type="email" id="email_address" name="email_address" placeholder="Votre Email">
                </div>
            </div>

            <div class="second-row">
                <div class="password-input">
                    <label for="password">Mot de Passe*</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                </div>
                <div class="password2-input">
                    <label for="password2">Confirmer Mot de Passe*</label>
                    <input type="password" id="password2" name="password2" placeholder="Confirmer votre mot de passe">
                </div>
            </div>

            <div class="third-row">
                <div class="lastname-input">
                    <label for="lastname">Nom*</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Votre nom">
                </div>
                <div class="firstname-input">
                    <label for="firstname">Prénom*</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Votre prénom">
                </div>
            </div>

            <div class="fourth-row">
                <div class="country-input">
                    <label for="country">Pays*</label>
                    <select name="country" id="country">
                        <option value="">--Pays de résidence--</option>
                        <option class="continent-option" value="" disabled>Afrique</option>
                        <?php foreach($african_continent as $africa_country): ?>
                            <option value="<?php echo $africa_country->id ?>"><?php echo $africa_country->name ?></option>
                        <?php endforeach; ?>

                        <option class="continent-option" value="" disabled>Amérique</option>
                        <?php foreach($american_continent as $america_country): ?>
                            <option value="<?php echo $america_country->id ?>"><?php echo $america_country->name ?></option>
                        <?php endforeach; ?>

                        <option class="continent-option" value="" disabled>Asie</option>
                        <?php foreach($asian_continent as $asia_country): ?>
                            <option value="<?php echo $asia_country->id ?>"><?php echo $asia_country->name ?></option>
                        <?php endforeach; ?>
                        
                        <option class="continent-option" value="" disabled>Europe</option>
                        <?php foreach($european_continent as $europe_country): ?>
                            <option value="<?php echo $europe_country->id ?>"><?php echo $europe_country->name ?></option>
                        <?php endforeach; ?>

                        <option class="continent-option" value="" disabled>Océanie</option>
                        <?php foreach($oceanian_continent as $oceania_country): ?>
                            <option value="<?php echo $oceania_country->id ?>"><?php echo $oceania_country->name ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                </div>
            </div>

            <div class="fifth-row">
                <div class="address-input">
                    <label for="address">Adresse*</label>
                    <input type="text" id="address" name="address" placeholder="Votre adresse">
                </div>
            </div>

            <div class="sixth-row">
                <div class="building-loor-input">
                    <label for="building_floor">Étage/Bâtiment</label>
                    <input type="text" id="building_floor" name="building_floor" placeholder="Votre Étage/Bâtiment">
                </div>
            </div>

            <div class="seventh-row">
                <div class="city-input">
                    <label for="city">Ville*</label>
                    <input type="text" id="city" name="city" placeholder="Ville">
                </div>
                <div class="postcode-input">
                    <label for="postcode">Code Postal*</label>
                    <input type="number" id="postcode" name="postcode" placeholder="Votre code postal">
                </div>
            </div>

            <div class="eighth-row">
                <div class="phone-input">
                    <label for="phone">Téléphone*</label>
                    <input type="number" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                </div>
                <div class="birth-input">
                <label for="birth_date">Date de naissance*</label>
                    <input type="date" id="birth_date" name="birth_date" placeholder="Votre date de naissance">
                </div>
            </div>
            <div class="btn-wrapper">
                <button type="submit">Terminer</button>
                <div class="use-terms-wrapper">
                    <input type="checkbox" name="" id="">
                    <label for="">J'ai lu et j'accepte les condition d'utilisation de mes données personnelles.</label>
                </div>
                <div class="login-link">
                  <p>Vous avez déja un compte ? <a href="#">Connectez-vous</a></p>
                </div>

            </div>
        </form>
    </div>
</section>







<?php include Functions::view('parts/footer.html'); ?>