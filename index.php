<?php
$recipesJson = file_get_contents("data/recipes.json");
$recettes = json_decode($recipesJson, true);

// var_dump($recettes);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de Pâtisserie</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.min.css">
</head>


<body>
    <header class="home-header">
        <h1>Recettes de Pâtisserie</h1>
        <p>Découvrez nos délicieuses recettes de pâtisserie française et laissez-vous inspirer pour créer des desserts inoubliables.</p>
    </header>
    <main>
        <div class="recipes">
            <?php foreach ($recettes as $recette): ?>
                <div class="recipe">
                    <div class="thumbnail">
                        <span class="difficulty <?php echo $recette["difficulte"]; ?>"><?php echo $recette["difficulte"]; ?></span>
                        <a href="recette.php?id=<?php echo $recette["id"]; ?>">
                            <img src="assets/images/<?php echo $recette["image"]; ?>" alt="<?php echo $recette["nom"]; ?>">
                        </a>
                    </div>
                    <div class="content">
                        <a href="recette.php?id=<?php echo $recette["id"]; ?>">
                            <h2><?php echo $recette["nom"]; ?></h2>
                        </a>
                        <p><?php echo $recette["description"]; ?></p>
                        <div class="infos">
                            <div class="time"><i class="ri-time-line"></i> <?php echo $recette["temps_preparation"] + $recette["temps_cuisson"]; ?> min</div>
                            <div class="portions"><i class="ri-group-line"></i> <?php echo $recette["portions"]; ?> portions</div>
                            <div class="ingredients"><i class="ri-cake-3-line"></i> <?php echo count($recette["ingredients"]); ?> ingr.</div>
                        </div>
                        <div class="tags">
                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <span class="tag"><?php echo $recette["tags"][$i]; ?></span>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>