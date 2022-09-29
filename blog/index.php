<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "Blog" // Document title ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- HEADER -->
    <? include "../inc/header.php" ?>

    <!-- MAIN -->
    <main>
        <h1><?= $page ?></h1>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas culpa possimus, officiis nostrum quaerat soluta, aperiam modi eos velit incidunt consectetur a assumenda illo sed nam maxime deserunt ea doloremque dolor qui.</p>

        <section class="posts flex flex-col">
            <? $posts = json_decode(file_get_contents("posts.json"))->posts; // Convert Json to PHP array
            
            foreach ($posts as $post) { ?>
                <a href="article.php?<?= $post->slug ?>">
                    <article>
                        <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">

                        <div>
                            <h2><?= $post->title ?></h2>

                            <p class="meta"><?= "Le $post->date par $post->author" ?></p>

                            <p>
                                <?= // Print an excerpt of the first 32 words
                                implode(" ", array_slice(str_word_count(strip_tags(implode(" ", $post->content)), 1), 0, 31)) . "..." ?>
                            </p>
                        </div>
                    </article>
                </a>
            <? } ?>
        </section>
    </main>

    <!-- FOOTER -->
    <? include "../inc/footer.php" ?>
</body>

</html>