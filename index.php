<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'inc/head.php' ?>
    <?php $page = "Accueil" ?>
    <!-- Page title -->
    <title><?php echo $page . " – " . $site ?></title>
</head>

<body>
    <!-- --- HEADER --- -->
    <?php include 'inc/header.php'; ?>

    <!-- --- MAIN --- -->
    <main>
        <section class="welcome">
            <div>
                <h1 class="large">Bienvenue sur <?php echo $site ?></h1>
                <hr>
                <h2>Santé et flexibilité</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, debitis libero magni ea autem fugit consequuntur, ducimus commodi aut quisquam, quas ex similique ipsum consectetur tenetur suscipit nisi placeat perspiciatis? Officiis, reprehenderit! Impedit dicta ipsa est voluptatum officia quos temporibus, facere culpa laborum eum numquam, consequatur recusandae nihil soluta error dolore rem minus.</p>
                <a href="a-propos" class="button">Découvrir mon parcours</a>
            </div>

            <img src="images/prof-yoga-pose.png" alt="Pose d'une professeur de yoga">
        </section>
    </main>

    <!-- --- FOOTER --- -->
    <?php include 'inc/footer.php'; ?>
</body>

</html>