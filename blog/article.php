<!DOCTYPE html>
<html lang="fr">

<head>
    <? $posts = array_reverse(json_decode(file_get_contents("posts.json"))->posts); // Convert Json to PHP reverse array (newest articles first)

    if (isset(parse_url($_SERVER['REQUEST_URI'])['query'])) {
        $query = parse_url($_SERVER['REQUEST_URI'])['query']; // Get the query from URI

        foreach ($posts as $post) { // Identify the post targetted by the query
            if ($post->slug === $query) {
                $the_post = $post;
                break;
            }
        }

        $page = "$post->title – Blog"; // Document title
    }

    $page = "Blog"; // Document title

    include "../inc/head.php" ?>
</head>

<body>
    <!-- HEADER -->
    <? include "../inc/header.php" ?>

    <!-- MAIN -->
    <main>
        <section class="flex sidebar">
            <!-- Targetted post -->
            <article class="the_post">
                <? if (isset($the_post)) { ?>
                    <header class="flex flex-col">
                        <h1><?= $post->title ?></h1>

                        <p class="meta"><?= "Le $post->date par $post->author" ?></p>

                        <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">
                    </header>

                    <?= implode($post->content) ?>
                <? } else { ?>
                    <p>Article non trouvé.</p>
                <? } ?>
            </article>

            <!-- Sidebar -->
            <aside class="posts flex flex-col">
                <p>Articles récents</p>

                <? foreach ($posts as $post) {
                    if (isset($the_post) && $post !== $the_post || !isset($the_post)) { ?>
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

    <!-- FOOTER -->
    <? include "../inc/footer.php" ?>
</body>

</html>