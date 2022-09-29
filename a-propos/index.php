<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "À propos" // Document title ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- HEADER -->
    <? include "../inc/header.php" ?>

    <!-- MAIN -->
    <main>
        <section class="flex image">
            <div>
                <h1><?= $page ?></h1>

                <h2>Professeurs de yoga certifiée</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo possimus, fugit molestiae ab placeat culpa perspiciatis repellat at, accusamus eius corporis dolor pariatur amet, iste itaque labore mollitia eligendi perferendis iure dolorum voluptates odit illum deleniti! Pariatur quod voluptas ducimus iste dolorum asperiores fuga quam ab rem ut est temporibus consequuntur, modi, cumque fugit deleniti numquam debitis labore atque recusandae, officiis nesciunt. Aliquam, cumque.</p>

                <h3>Accompagnement individuel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolore provident iure libero odit cumque beatae suscipit quo nemo sed dolorem ipsum ad minima quasi animi tempora illum necessitatibus dolorum, vitae ab?</p>

                <h3>Se former à l'enseignement du yoga</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam dolore provident iure libero odit cumque beatae suscipit quo nemo sed dolorem ipsum ad minima quasi animi tempora illum necessitatibus dolorum, vitae ab?</p>

                <h2>Contactez-moi</h2>
                <p>Vous souhaitez avoir des renseignements sur mon accompagnement individuel ?</p>

                <a href="../contact/" class="button">Envoyer un message</a>
            </div>

            <img src="../images/prof-yoga-pose.png" width="160.75" height="384" alt="Pose d'une professeur de yoga">
        </section>
    </main>

    <!-- FOOTER -->
    <? include "../inc/footer.php" ?>
</body>

</html>