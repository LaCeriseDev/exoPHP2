<section class="offers-list">
    <span class="offers-list__title">Nos plus belles offres</span>
    <div class="card-list">
    <?php include "db.php"; 

        $query = $pdo->prepare("SELECT id, img, kind, short_description from room");
        $query->execute();
        while ($row = $query->fetch()) {
            echo 
            "
            <article class='card'>
                <a href='hotel-suite.php?id={$row['id']}' class='card__link'>
                    <img src='images/offers/{$row['img']}' alt='{$row['kind']}' class='card__image'>
                    <h2 class='card__title'>{$row['kind']}</h2>
                    <p class='card__description'>{$row['short_description']}</p>
                </a>
            </article>
            ";
        }
    ?>
    </div>
</section>
