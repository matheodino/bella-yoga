<!DOCTYPE html>
<html lang="fr">

<head>
    <? $page = "Blog" ?>
    <? include "../inc/head.php" ?>
</head>

<body>
    <!-- --- HEADER --- -->
    <? include "../inc/header.php"; ?>

    <!-- --- MAIN --- -->
    <main>
        <h1><?= $page ?></h1>

        <? 
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
    <? include "../inc/footer.php"; ?>
</body>

</html>