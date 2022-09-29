<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "Contact" ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <? include "../inc/header.php" ?>

    <!-- --- MAIN --- -->
    <main>
        <h1><?= $page ?></h1>

        <section class="contact flex">
            <div class="info flex col-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi assumenda dolor dolores quia mollitia maiores repellendus.</p>

                <div>
                    <h2>Studio <?= $site ?></h2>
                    <p><?= $address ?></p>
                    <p><?= $phone ?></p>
                    <p><?= $email ?></p>
                </div>

                <div>
                    <h2>Nos horaires</h2>
                    <p>Lundi à vendredi de 9 h 00 à 17 h 00</p>
                </div>
            </div>

            <div class="form">
                <h2>Envoyer un message</h2>
    
                <form>
                    <label for="name">Indiquez vos noms et prénoms*</label>
                    <input type="text" name="name" id="name">
    
                    <label for="email">Indiquez votre email*</label>
                    <input type="email" name="email" id="email">
    
                    <label for="reason">Pourquoi me contactez-vous ?*</label>
                    <input type="text" name="reason" id="reason">
    
                    <label for="message">Quel est votre message*</label>
                    <textarea name="message" id="message" rows="12"></textarea>
    
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </section>
    </main>

    <!-- --- FOOTER --- -->
    <? include "../inc/footer.php" ?>
</body>

</html>