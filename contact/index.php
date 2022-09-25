<!DOCTYPE html>
<html lang="fr">

<head>
    <?php $page = "Contact" ?>
    <?php include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <?php include "../inc/header.php"; ?>

    <!-- --- MAIN --- -->
    <main>
        <h1><?php echo $page ?></h1>

        <section class="contact">
            <div class="info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi assumenda dolor dolores quia mollitia maiores repellendus.</p>

                <div>
                    <p>Studio <?php echo $site ?></p>
                    <p><?php echo $address ?></p>
                    <p>Tél. <?php echo $phone ?></p>
                    <p>Email : <?php echo $email ?></p>
                </div>

                <div>
                    <p>Nos horaires</p>
                    <p>Lundi à vendredi de 9h00 à 17h00</p>
                </div>
            </div>

            <form>
                <label for="name">Indiquez vos noms et prénoms*</label>
                <input type="text" name="name" id="name">

                <label for="email">Indiquez votre email*</label>
                <input type="email" name="email" id="email">

                <label for="reason">Pourquoi me contactez-vous ?*</label>
                <input type="text" name="reason" id="reason">

                <label for="message">Quel est votre message*</label>
                <textarea name="message" id="message" rows="12"></textarea>

                <input type="submit" value="Envoyer le message">
            </form>
        </section>
    </main>

    <!-- --- FOOTER --- -->
    <?php include "../inc/footer.php"; ?>
</body>

</html>