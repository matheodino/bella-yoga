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

        <?php 
        $query = parse_url($_SERVER['REQUEST_URI'])['query']; // Get url params
        $posts = json_decode(file_get_contents("posts.json"))->posts; // List posts
        $i = 0;
        foreach ($posts as $post) {
            if ($post->slug == $query) {
                $id = $i;
                break;
            } else {
                $id = "null";
            }
            $i++;
        }

        echo $posts[$id]->title;
        ?>

    </main>

    <!-- --- FOOTER --- -->
    <?php include "../inc/footer.php"; ?>
</body>

</html>