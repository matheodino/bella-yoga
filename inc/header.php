<header>
    <a href="/" class="logo"><img src="../images/logo-bella-yoga.png" alt="Logo Bella Yoga"></a>

    <nav>
        <ul>
            <li><a href="/" <?php if ($slug == "") echo $active; ?>>Accueil</a></li>
            <li><a href="/a-propos/" <?php if ($slug == "a-propos") echo $active; ?>>À propos</a></li>
            <li>Cours</li>
            <li><a href="/contact/" <?php if ($slug == "contact") echo $active; ?>>Contact</a></li>
            <li><a href="/blog/" <?php if ($slug == "blog") echo $active; ?>>Blog</a></li>
        </ul>
    </nav>
</header>