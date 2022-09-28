<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "Blog" ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <? include "../inc/header.php" ?>

    <!-- --- MAIN --- -->
    <main>
        <? $posts = json_decode(file_get_contents("posts.json"))->posts; // List posts

        $query = parse_url($_SERVER['REQUEST_URI'])['query']; // Get the URI query

        foreach ($posts as $post) { // Identify the post targetted by the query
            if ($post->slug === $query) {
                $the_post = $post;
                break;
            }
        }
        ?>

        <section class="flex">
            <? if (isset($the_post)) { ?>
                <article>
                    <h1><?= $post->title ?></h1>
    
                    <p><?= "Le $post->date par $post->author" ?></p>
    
                    <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">
    
                    <?= implode($post->content) ?>
                </article>
            <? } else echo "Article non trouvé." ?>
    
            <aside class="col-3">
                <p>Articles récents</p>
    
                <?
                foreach ($posts as $post) {
                    if ($post !== $the_post) { ?>
                        <a href="article.php?<?= $post->slug ?>">
                            <article>
                                <img src="../images/<?= $post->image[0]->slug ?>.png" alt="<?= $post->image[0]->alt ?>">
    
                                <div>
                                    <h2><?= $post->title ?></h2>
    
                                    <p><?= "Le $post->date par $post->author" ?></p>
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