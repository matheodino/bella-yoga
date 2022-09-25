<header>
    <img src="../images/logo-bella-yoga.png" alt="Logo Bella Yoga" class="logo">

    <nav>
        <ul>
            <li><a href="/" <?php if ($slug == 'index') echo $active; ?>>Accueil</a></li>
            <li><a href="/a-propos.php" <?php if ($slug == 'a-propos') echo $active; ?>>À propos</a></li>
            <li><a href="/cours.php" <?php if ($slug == 'cours') echo $active; ?>>Cours</a></li>
            <li><a href="/contact.php" <?php if ($slug == 'contact') echo $active; ?>>Contact</a></li>
            <li><a href="/blog.php" <?php if ($slug == 'blog') echo $active; ?>>Blog</a></li>
        </ul>
    </nav>
</header>