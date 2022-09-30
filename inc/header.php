<header class="flex flex-col">
    <a href="<?= $backward ?>" class="logo"><img src="<?= $backward ?>images/logo-bella-yoga.png" width="330" height="57" alt="Logo Bella Yoga"></a>

    <nav>
        <ul>
            <li><a href="<?= $backward ?>" <? if ($page == "Accueil") echo $active ?>>Accueil</a></li>
            <li><a href="<?= $backward ?>a-propos/" <? if ($page == "À propos") echo $active ?>>À propos</a></li>
            <li>Cours</li>
            <li><a href="<?= $backward ?>contact/" <? if ($page == "Contact") echo $active ?>>Contact</a></li>
            <li><a href="<?= $backward ?>blog/" <? if (strpos($page, "Blog") !== false) echo $active ?>>Blog</a></li>
        </ul>
    </nav>
</header>