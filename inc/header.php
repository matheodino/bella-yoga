<header>
    <a href="/" class="logo"><img src="../images/logo-bella-yoga.png" alt="Logo Bella Yoga"></a>

    <nav>
        <ul>
            <li><a href="/" <? if ($slug == "") echo $active ?>>Accueil</a></li>
            <li><a href="/a-propos/" <? if ($slug == "a-propos") echo $active ?>>À propos</a></li>
            <li>Cours</li>
            <li><a href="/contact/" <? if ($slug == "contact") echo $active ?>>Contact</a></li>
            <li><a href="/blog/" <? if ($slug == "blog") echo $active ?>>Blog</a></li>
        </ul>
    </nav>
</header>