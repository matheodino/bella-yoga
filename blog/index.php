<!DOCTYPE html>
<html lang="fr">

<head>
    <?php $page = "Blog" ?>
    <?php include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <?php include "../inc/header.php"; ?>

    <!-- --- MAIN --- -->
    <main>
        <h1><?php echo $page ?></h1>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas culpa possimus, officiis nostrum quaerat soluta, aperiam modi eos velit incidunt consectetur a assumenda illo sed nam maxime deserunt ea doloremque dolor qui.</p>

        <section class="posts">
            <?php $posts = json_decode(file_get_contents("posts.json"))->posts;
            $i = 0;
            foreach ($posts as $post) { ?>
                <a href="article.php?article='<?php echo $post->slug ?>'">
                    <article>
                        <img src="../images/<?php echo $post->image[0]->slug ?>.png" alt="<?php echo $post->image[0]->alt ?>">
    
                        <div>
                            <h2><?php echo $post->title ?></h2>
    
                            <p><?php echo "Le $post->date par $post->author" ?></p>
    
                            <p><?php echo strip_tags($post->content); ?></p>
                        </div>
                    </article>
                </a>
            <?php $i++;
            } ?>
        </section>
    </main>

    <!-- --- FOOTER --- -->
    <?php include "../inc/footer.php"; ?>
</body>

</html>