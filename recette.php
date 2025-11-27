<?php

$recipesJson = file_get_contents("data/recipes.json");
$recettes = json_decode($recipesJson, true);
foreach ($recettes as $recette) {
    if ($recette["id"] ==  $_GET["id"]) {
        // $r correspond à la recette isolée
        $r = $recette;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $r["nom"]; ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.min.css">
</head>

<body>
    <header class="details">
        <a href="/index.php"><i class="ri-arrow-left-fill"></i> Retour aux recettes</a>
    </header>
    <main>
        <div class="recipe-details">
            <div class="thumbnail">
                <div class="text">
                    <h1><?php

                        echo ucfirst(strtolower($r["nom"]));

                        ?></h1>
                    <p>Pâte à choux garnie de crème patissière au chocolat et glacée au fondant</p>
                </div>
                <img src="./assets/images/<?php echo $r["image"]; ?>" alt="<?php echo $r["nom"]; ?>">
            </div>
            <div class="content">
                <div class="infos">
                    <div class="time">
                        <div>
                            <i class="ri-time-line"></i>
                        </div>
                        <div>
                            <p>Temps total</p>
                            <p><?php echo $r["temps_preparation"] + $r["temps_cuisson"]; ?> Min</p>
                        </div>
                    </div>
                    <div class="portions">
                        <div>
                            <i class="ri-group-line"></i>
                        </div>
                        <div>
                            <p>Portions</p>
                            <p><?php echo $r["portions"]; ?> Personnes</p>
                        </div>
                    </div>
                    <div class="difficulty">
                        <div>
                            <i class="ri-cake-3-line"></i>
                        </div>
                        <div>
                            <p>Difficulté</p>
                            <p class="difficile"><?php echo $r["difficulte"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="advice">
                    <div>
                        <i class="ri-lightbulb-ai-line"></i>
                    </div>
                    <div>
                        <p>Conseils du chef</p>
                        <p><?php echo $r["conseils"]; ?></p>
                    </div>
                </div>
                <div class="steps">
                    <div class="ingredients">
                        <h2>Ingrédients</h2>
                        <ul>
                            <?php foreach ($r["ingredients"] as $ingredient): ?>
                                <li><span><?php echo $ingredient["quantite"]; ?> <?php echo $ingredient["unite"]; ?></span> <?php echo $ingredient["nom"]; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="preparation">
                        <h2>Préparation</h2>
                        <ol>
                            <?php foreach ($r["etapes"] as $key => $etape): ?>
                                <li>
                                    <p><?php echo $key + 1; ?></p>
                                    <p><?php echo $etape; ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
                <div class="ustensiles">
                    <h2>Ustensiles nécessaires</h2>
                    <div class="list">
                        <?php foreach ($r["ustensiles"] as $ust): ?>
                            <span><?php echo $ust; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tags">
                    <h2>Tags</h2>
                    <div class="list">
                        <?php foreach ($r["tags"] as $tag): ?>
                            <a href="index.php?tag=<?php echo $tag; ?>" class="tag"><?php echo $tag; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>