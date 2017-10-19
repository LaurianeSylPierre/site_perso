<div class="col-xs-12">
    <form name="formulaire" action="" method="post">
        <div class="col-xs-12 col-lg-8">
            <div class="col-md-12 col-lg-6 no-padding">
                <label for="nom" class="col-xs-12 text-center">Nom & Prénom<span class="rouge">*</span></label>
                <input name="nom" type="text" class="col-xs-12" placeholder="Nom et prénom" value="<?= $nom ?>" required>
                <label for="mail" class="col-xs-12 text-center">Adresse mail<span class="rouge">*</span></label>
                <input name="mail" type="email" class="col-xs-12" placeholder="Adresse mail" value="<?= $mail ?>" required>
            </div>
            <div class="col-md-12 col-lg-6 no-padding">
                <label for="sujet" class="col-xs-12 text-center">Sujet<span class="rouge">*</span></label>
                <input name="sujet" type="text" class="col-xs-12" placeholder="Sujet" value="<?= $sujet ?>" required>
                <label for="tel" class="col-xs-12 text-center">Téléphone<span class="rouge">*</span></label>
                <input name="tel" type="tel" class="col-xs-12" placeholder="Numéro de téléphone" value="<?= $tel ?>" required>
            </div>
        </div>
        <div class="col-xs-12 col-lg-4">
            <label for="message" class="col-xs-12 text-center">Message<span class="rouge">*</span></label>
            <textarea name="message" class="col-xs-12" placeholder="Votre message" rows="7" value="<?= $message ?>" required></textarea>
        </div>
        <div class="col-xs-12">
            <input type="submit" class="col-xs-12" value="Envoyer">
        </div>
    </form>
</div>
