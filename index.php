<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "Accueil" ?>
    <? include "inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <? include "inc/header.php" ?>

    <!-- --- MAIN --- -->
    <main>
        <section class="welcome flex image">
            <div>
                <h1>Bienvenue sur <?= $site ?></h1>

                <hr>

                <h2>Santé et flexibilité</h2>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, debitis libero magni ea autem fugit consequuntur, ducimus commodi aut quisquam, quas ex similique ipsum consectetur tenetur suscipit nisi placeat perspiciatis? Officiis, reprehenderit! Impedit dicta ipsa est voluptatum officia quos temporibus, facere culpa laborum eum numquam, consequatur recusandae nihil soluta error dolore rem minus.</p>

                <a href="a-propos" class="button">Découvrir mon parcours</a>
            </div>

            <img src="images/prof-yoga-pose.png" alt="Pose d'une professeur de yoga">
        </section>
    </main>

    <!-- --- FOOTER --- -->
    <? include "inc/footer.php" ?>
</body>

</html>