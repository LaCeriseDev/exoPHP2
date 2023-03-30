<?php 
    $navlist = array( 
        "Accueil",
        "Index",
        "Bien-être",
        "Boutique",
        "Réservations"
    );

    $day = "nuit";
?>

<header class="header">
    <nav class="header__nav">
        <ul class="header__list">
            <?php 
                foreach ($navlist as $nav) {
                    if ($nav == "Accueil") {
                        echo '<li class="header__list-item"><a href="/exoPHP2/">'. $nav. '</a></li>';
                    }
                    else {
                        echo "<li class='header__list-item'><a class='header__link' href='".strtolower($nav).".php'>{$nav}</a></li>";
                    }
                }
            ?>
        </ul>
    </nav>
    <div class="header__banner header__banner--<?php echo ($day == "Jour" ? "is-day" : "is-night"); ?>">
        <h1 class="header__title">Hotel California</h1>
    </div>
</header>