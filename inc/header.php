<header class="flex">
    <a href="<?= $backward ?>" class="logo"><img src="<?= $backward ?>images/logo-bella-yoga.png" alt="Logo Bella Yoga"></a>

    <nav>
        <ul>
            <li><a href="<?= $backward ?>" <? if ($slug == "bella-yoga") echo $active ?>>Accueil</a></li>
            <li><a href="<?= $backward ?>a-propos/" <? if ($slug == "a-propos") echo $active ?>>À propos</a></li>
            <li>Cours</li>
            <li><a href="<?= $backward ?>contact/" <? if ($slug == "contact") echo $active ?>>Contact</a></li>
            <li><a href="<?= $backward ?>blog/" <? if ($slug == "blog") echo $active ?>>Blog</a></li>
        </ul>
    </nav>
</header>