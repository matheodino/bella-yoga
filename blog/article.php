<!DOCTYPE html>
<html lang="fr">

<head>
    <? $posts = json_decode(file_get_contents("posts.json"))->posts; // List posts

    $query = parse_url($_SERVER['REQUEST_URI'])['query']; // Get the URI query 

    foreach ($posts as $post) { // Identify the post targetted by the query
        if ($post->slug === $query) {
            $the_post = $post;
            break;
        }
    }

    $page = "$post->title – Blog" ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <? include "../inc/header.php" ?>

    <!-- --- MAIN --- -->
    <main>
        <?
        ?>

        <section class="blog flex">
            <? if (isset($the_post)) { ?>
                <article class="the_post">
                    <header>
                        <h1><?= $post->title ?></h1>

                        <p class="meta"><?= "Le $post->date par $post->author" ?></p>

                        <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">
                    </header>

                    <?= implode($post->content) ?>
                </article>
            <? } else echo "Article non trouvé." ?>

            <aside class="posts flex col-3">
                <p>Articles récents</p>

                <?
                foreach ($posts as $post) {
                    if ($post !== $the_post) { ?>
                        <a href="article.php?<?= $post->slug ?>">
                            <article>
                                <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">

                                <div>
                                    <h3><?= $post->title ?></h3>

                                    <p class="meta"><?= "Le $post->date par $post->author" ?></p>
                                </div>
                            </article>
                        </a>
                <? }
                } ?>
            </aside>
        </section>

    </main>

    <!-- --- FOOTER --- -->
    <? include "../inc/footer.php" ?>
</body>

</html>