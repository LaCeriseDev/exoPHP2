<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Hotel California</title>
    </head>
    <body>
        <div class="wrapper">
            <?php 
                include "header.php";
                include "db.php";

                if(isset($_GET['id']) AND !empty($_GET['id'])) {
                    $get_id = htmlspecialchars($_GET['id']);
                    $query = $pdo->prepare("SELECT * FROM room WHERE id = ?");
                    $query->execute(array($get_id));
                    $value = $query->fetch();
                    echo 
                        "
                        <article class='article'>
                            <img src='images/offers/{$value['img']}' alt='{$value['kind']}' class='article__image'>
                            <h2 class='article__title'>{$value['kind']}</h2>
                            <p class='article__description'>{$value['description']}</p>
                        </article>
                        ";
                } else {
                    die('Erreur');
                }
            ?>
        </div>
    </body>
</html>